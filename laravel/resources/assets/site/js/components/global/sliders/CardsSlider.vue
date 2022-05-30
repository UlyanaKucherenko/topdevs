<template>
  <div
    class="cards-slider" v-scroll-reveal
    :style="{'--gap': gap}"
  >
    <div class="cards-slider-control">
      <img
        v-if="!_sliderOptions.loop"
        class="cards-slider-control__arrow cards-slider-control__arrow--back"
        :class="{'cards-slider-control__arrow--disabled': reachedBorder === 'start'}"
        src="/images/site/icons/arrows/2.svg"
        @click="prevSlide"
      >
      <img
        class="cards-slider-control__arrow"
        :class="{'cards-slider-control__arrow--disabled': !_sliderOptions.loop && reachedBorder === 'end'}"
        src="/images/site/icons/arrows/2.svg"
        @click="nextSlide"
      >
    </div>
    <div class="cards-slider__inner"
         v-if="sliderIsVisible"
    >
      <TinySlider
        @indexChanged="updateReachedBorder"
        v-bind="_sliderOptions"
      >
        <div class="cards-slider__item-wrapper"
             v-for="(item, index) in items" :key="index"
        >
          <component
            v-if="cardComponent"
            :is="cardComponent"
            class="cards-slider__item"
            v-bind="item"
          />

          <FilledCard
            v-else-if="cardOptions.mode === 'filled'"
            v-bind="item"
            class="cards-slider__item"
          />

          <ImgTitleCard
            v-else-if="cardType === 'img-title'"
            v-bind="item"
            class="cards-slider__item"
          />

          <RowFullCard
            v-else-if="cardType === 'row-full'"
            v-bind="item"
            class="cards-slider__item"
          />

          <div
            v-else-if="$scopedSlots.default"
            class="cards-slider__item cards-slider__item--slot"
          >
            <slot :item="{...item, idx: index}"/>
          </div>

          <ImgOutCard
            v-else
            v-bind="item"
            class="cards-slider__item"
            :number="cardOptions.number ? index + 1 : null"
          />
        </div>
      </TinySlider>
    </div>
  </div>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js'
import ImgOutCard from '@/js/components/global/cards/ImgOutCard'
import FilledCard from '@/js/components/global/cards/FilledCard'
import ImgTitleCard from '@/js/components/global/cards/ImgTitleCard'
import RowFullCard from '@/js/components/global/cards/RowFullCard'

export default {
  components: {
    'TinySlider': VueTinySlider,
    ImgOutCard,
    FilledCard,
    ImgTitleCard,
    RowFullCard
  },


  props: {
    items: Array,
    cardComponent: Object,
    cardType: String,
    cardOptions: {
      type: Object,
      default: () => ({})
    },
    sliderOptions: Object,
    slidesCount: {
      type: Object,
      default: () => ({
        992: 2,
        650: 1,
        default: 3
      })
    },
    gap: String
  },


  data() {
    return {
      sliderIsVisible: true,
      reachedBorder: 'start' // 'none' | 'end'
    }
  },


  computed: {
    _slidesCount() {
      if (typeof this.slidesCount == 'number') return this.slidesCount
      let keys = Object.keys(this.slidesCount).sort((a, b) => a - b)
      for (let i = 0; i < keys.length; i++) {
        if (this.windowWidth <= keys[i]) return this.slidesCount[keys[i]]
      }
      return this.slidesCount.default
    },

    _sliderOptions() {
      let options = {
        ref: "tinySlider",
        mouseDrag: true,
        autoHeight: false,
        loop: true,
        controls: false,
        nav: false,
        speed: 1250,
        items: this._slidesCount,
        slideBy: this._slidesCount,
        preventActionWhenRunning: true
      }

      options = {...options, ...this.sliderOptions}
      return options
    }
  },


  watch: {
    async _slidesCount() {
      this.sliderIsVisible = false
      await this.$nextTick()
      this.sliderIsVisible = true
    }
  },


  methods: {
    updateReachedBorder({index, items, slideCount}) {
      if (index === 0) this.reachedBorder = 'start'
      else if (index + items === slideCount) this.reachedBorder = 'end'
      else this.reachedBorder = 'none'
    },

    nextSlide() {
      this.$refs.tinySlider.slider.goTo('next')
    },

    prevSlide() {
      this.$refs.tinySlider.slider.goTo('prev')
    }
  }
}
</script>

<style lang="scss">
@import 'tiny-slider/src/tiny-slider';

.cards-slider {
  &__inner {
    position: relative;
  }

  &__item-wrapper {
    padding-top: calc(var(--space-unit) * 4);
    padding-bottom: 4rem;
  }

  &-control {
    display: flex;
    justify-content: flex-end;
    //@include arrow-hover;

    &__arrow {
      cursor: pointer;

      &--back {
        margin-right: 10px;
        transform: rotate(180deg);
      }

      &--disabled {
        opacity: .3;
        cursor: unset;
      }
    }
  }

  &__item {
    margin: 0 var(--gap, 2.5rem);

    &--slot {
      height: 100%;
    }
  }

  &__overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
  }
}

.tns-slider {
  display: flex;
}
</style>
