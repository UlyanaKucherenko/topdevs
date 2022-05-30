<template>
  <div
    class="portfolio-slider"
    :class="{'portfolio-slider--mobile': windowWidth <= mobileQuery}"
    v-scroll-reveal="{delay: 250}"
  >
    <PortfolioSliderItem
      v-if="slides.length"
      ref="item"
      :item="activeItem"
    />
    <div>
      <div class="portfolio-slider__height-settings">
        <PortfolioSliderItem
          v-for="item in slides" :key="item.id"
          :item="item"
          ref="heightItem"
        />
      </div>
      <div
        class="portfolio-slider__control"
        :style="{display: slides.length < 2 ? 'none' : ''}"
      >
        <img
          class="portfolio-slider__control-arrow portfolio-slider__control-arrow--rotated"
          :class="{'portfolio-slider__control-arrow--disabled': slides.length < 2}"
          @click="changeSlide('prev')"
          src="/images/site/icons/arrows/2.svg" alt=""
        >
        <img
          class="portfolio-slider__control-arrow"
          :class="{'portfolio-slider__control-arrow--disabled': slides.length < 2}"
          @click="changeSlide('next')"
          src="/images/site/icons/arrows/2.svg" alt=""
        >
      </div>
    </div>
  </div>
</template>

<script>
import gsap from 'gsap'
import api from '@/js/api'
import {debounce, loadImages} from '@/js/mixins/functions'
import PortfolioSliderItem from './PortfolioSliderItem'

export default {
  components: {PortfolioSliderItem},

  props: {
    ids: [String, Array],
    rubricType: String,
    rubricName: String,
    mobileQuery: Number
  },

  data() {
    return {
      slides: [],
      slidesLoaded: false,
      activeItemIndex: 0,
      isAnimating: false,
    }
  },


  computed: {
    activeItem() {
      return this.slides[this.activeItemIndex]
    },

    nextIsAvailable() {
      return this.activeItemIndex != this.slides.length - 1
    },

    prevIsAvailable() {
      return this.activeItemIndex != 0
    }
  },


  async created() {
    let res = null
    let getAll = !this.rubricName || !this.rubricType

    if (getAll) {
      res = await api.portfolio.getAll()
      this.slides = res.data
    } else {
      res = await api.portfolio.getList(`${this.rubricType}=${this.rubricName}`)
      this.slides = res.data.portfolio.data
    }

    this.slidesLoaded = true
    loadImages(this.slides.map(slide => `/storage/${slide.picture.path}`))
  },


  watch: {
    async slidesLoaded() {
      await this.$nextTick()
      this.setSliderHeight()
      window.addEventListener('resize', debounce(this.setSliderHeight, 100))
    }
  },


  methods: {
    setSliderHeight() {
      let sliderEl = this.$refs.item.$el

      const setMaxHeight = () => {
        let maxHeight = 0

        this.$refs.heightItem.forEach(item => {
          let el = item.$el
          if (el.clientHeight > maxHeight) maxHeight = el.clientHeight
        })

        sliderEl.style.height = maxHeight + 'px'
      }

      let sliderImages = this.$refs.heightItem.map(item => item.$refs.img)
      let img = sliderImages[this.activeItemIndex]

      if (img.complete) setMaxHeight()
      else img.onload = setMaxHeight
    },

    async changeSlide(direction) {
      if (this.isAnimating) return

      let nextElIndex = null

      if (direction === 'next') {
        if (this.activeItemIndex === this.slides.length - 1) nextElIndex = 0
        else nextElIndex = this.activeItemIndex + 1
      } else if (direction === 'prev') {
        if (this.activeItemIndex === 0) nextElIndex = this.slides.length - 1
        else nextElIndex = this.activeItemIndex - 1
      }

      if (nextElIndex === null) return

      this.isAnimating = true
      let itemRefs = this.$refs.item.$refs
      let items = [itemRefs.img, itemRefs.title, itemRefs.techs]
      await gsap.to(items, {
        x: direction == 'next' ? -80 : 80,
        autoAlpha: 0,
        ease: 'power3.inOut',
        stagger: .1,
        duration: 1
      })
      let oldHeight = this.$refs.item.$el.scrollHeight
      this.activeItemIndex = nextElIndex
      gsap.set(items, {clearProps: 'all'})
      await gsap.from(items, {
        x: direction == 'next' ? 80 : -80,
        autoAlpha: 0,
        ease: 'power3.inOut',
        stagger: .1,
        duration: 1
      })
      this.isAnimating = false
    }
  },
}
</script>

<style lang="scss">
.portfolio-slider {
  position: relative;
  width: fit-content;

  &__control {
    display: flex;
    justify-content: flex-start;
    max-width: 35rem;
    margin: 0 auto;

    &-arrow {
      width: 3rem;
      cursor: pointer;

      &--rotated {
        margin-right: 1.5rem;
        transform: rotate(180deg);
      }

      &--disabled {
        cursor: default;
        opacity: .3;
      }
    }
  }

  &--mobile {
    .portfolio-slider {
      &__text {
        text-align: center;
      }

      &__img {
        margin-bottom: 1rem;
      }
    }
  }

  &__height-settings {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
    left: 1000%;
    top: 0%;
  }
}
</style>
