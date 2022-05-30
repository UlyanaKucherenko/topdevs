<template>
  <section class="clients-slider">
    <div class="clients-slider__additional-container">
      <TinySlider
          class="tns-gallery-fix"
          ref="tinySlider"
          :loop="true"
          :controls="false"
          :nav="false"
          :speed="0"
          :touch="false"
          preventActionWhenRunning
      >
        <div class="clients-slider-item"
             v-for="(item, index) in items" :key="index"
        >

          <div
              :class="{
                'clients-slider-item__inner': true,
              }"
          >
            <div class="clients-slider-item__img">
              <img :src="item.imgURL">
            </div>
            <div class="clients-slider-item__text text-lg">
              <div class="clients-slider-item__title">{{ item.title }}</div>
              <div class="clients-slider-item__subtitle">{{ item.subtitle }}</div>
              <div class="clients-slider-item__desc">
                {{ item.desc }}
              </div>
            </div>
          </div>
        </div>
      </TinySlider>
      <div class="clients-slider__control">
        <div class="clients-slider__control-top">
          <img class="clients-slider__control-arrow" src="/images/site/icons/arrows/3.svg" alt="" @click="prevSlide">
          <img class="clients-slider__control-arrow" src="/images/site/icons/arrows/4.svg" alt="" @click="nextSlide">
        </div>
      </div>
    </div>

    <!--    <img class="clients-slider__bg-spot" src="/images/site/industries/index/section-slider/bg-spot.svg">-->
  </section>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js';
import FeedbackSlider from '@/js/components/global/sliders/FeedbackSlider'

const sr = require('scrollreveal').default();

export default {
  name: 'ClientsSlider',
  components: {
    'TinySlider': VueTinySlider,
    FeedbackSlider
  },


  props: {
    items: Array
  },


  data() {
    return {
      currentSlideIndex: 1
    }
  },


  methods: {
    nextSlide() {
      this.$refs.tinySlider.slider.goTo('next')
      this.updateCurrentSlideIndex()
    },

    prevSlide() {
      this.$refs.tinySlider.slider.goTo('prev')
      this.updateCurrentSlideIndex()
    },

    updateCurrentSlideIndex() {
      this.currentSlideIndex = this.$refs.tinySlider.slider.getInfo().displayIndex
    }
  },
}
</script>

<style lang="scss">
@import 'tiny-slider/src/tiny-slider';

.clients-slider {
  z-index: 0;
  position: relative;
  overflow: hidden;
  background: rgba(255, 255, 255, 0.05);

  &__additional-container {
    position: relative;
  }

  &__control {
    position: absolute;
    left: 34%;
    bottom: -2%;
    z-index: 1;

    @media (max-width: 991px) {
      position: static;
      margin-left: auto;
      width: fit-content;
      margin-bottom: calc(var(--space-unit) * 5.5);
    }

    @media (max-width: 450px) {
      margin-left: 0;
      margin-right: auto;
    }

    &-top {
      display: flex;
      align-items: center;
      margin-bottom: calc(var(--space-unit) * 2);
    }

    &-arrow {
      cursor: pointer;
      transform: .25s;

      &:hover {
        transform: scale(1.1);
      }
    }
  }


  &-item {
    display: flex !important;
    flex-direction: column;

    &__inner {
      display: flex;
      width: 100%;
      margin: 0 auto;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 1280px) {
        width: 100%;
        padding: 0 3rem;
      }

      @media (max-width: 767px) {
        justify-content: center;
      }
    }

    &__img {
      max-width: 400px;
      margin-right: calc(var(--space-unit) * 3);

      img {
        width: 100%;
      }
    }

    &__text {
      width: 70%;
      flex-shrink: 0;
      margin-right: 2.5rem;

      @media (max-width: 767px) {
        margin-right: 0;
      }
    }

    &__title {
     font-weight: 600;
      font-size: 30px;
      margin-bottom: var(--space-unit);
    }
    &__subtitle {
      font-weight: 600;
      font-size: 20px;
      font-style: italic;
      margin-bottom: var(--space-unit);
    }

    &__desc {
      font-size: 20px;
      letter-spacing: 0.01em;
      max-width: 650px;
      width: 100%;
    }

  }

  &__bg {
    &-spot, &-dots {
      position: absolute;

      @media (max-width: 991px) {
        display: none;
      }
    }

    &-spot {
      position: absolute;
      right: 0;
      bottom: 0;
      z-index: -1;
      opacity: .5;
    }

    &-dots {
      position: absolute;
      left: 10%;
      bottom: 7%;
    }
  }
}

.tns-gallery-fix {
  .tns-item {
    opacity: 0;
    transition: 2s opacity;
  }

  .tns-slide-active {
    opacity: 1;
  }
}


</style>