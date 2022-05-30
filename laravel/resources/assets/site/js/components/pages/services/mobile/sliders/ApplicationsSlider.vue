<template>
  <div
    class="applications-slider" v-scroll-reveal
    :style="{'--gap': gap}"
  >
    <div class="applications-slider__inner"
         v-if="sliderIsVisible"
    >
      <TinySlider
        @indexChanged="updateReachedBorder"
        v-bind="_sliderOptions"
      >
        <div class="applications-slider__item-wrapper"
             v-for="(item, index) in items" :key="index"
        >

          <ImgTitleCard
              v-bind="item"
              class="applications-slider__item"
          />
        </div>
      </TinySlider>
    </div>
    <div class="applications-slider-control">
      <img
          v-if="!_sliderOptions.loop"
          class="applications-slider-control__arrow applications-slider-control__arrow--back"
          :class="{'applications-slider-control__arrow--disabled': reachedBorder === 'start'}"
          src="/images/site/icons/arrows/2.svg"
          @click="prevSlide"
      >
      <img
          class="applications-slider-control__arrow"
          :class="{'applications-slider-control__arrow--disabled': !_sliderOptions.loop && reachedBorder === 'end'}"
          src="/images/site/icons/arrows/2.svg"
          @click="nextSlide"
      >
    </div>
  </div>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js'
import ImgTitleCard from '@/js/components/global/cards/ImgTitleCard'

export default {
  name:'ApplicationsSlider',
  components: {
    'TinySlider': VueTinySlider,
    ImgTitleCard,
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

.applications-slider {
  margin-left: var(--section-pd-y-small);
  padding-left: var(--container-padding);
  &__inner {
    position: relative;
  }

  &__item-wrapper {
    padding-top: calc(var(--space-unit) * 4);
    padding-bottom: 4rem;
  }

  &-control {
    display: flex;
    justify-content: flex-start;

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
    margin: 0 var(--gap, 0.5rem);

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
