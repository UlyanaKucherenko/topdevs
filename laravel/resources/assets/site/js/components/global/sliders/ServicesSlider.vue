<template>
  <section class="services-slider">
    <div class="container">
      <div class="services-slider__additional-container">
        <div class="services-slider__control">
          <div class="services-slider__control-top">
            <span class="services-slider__control-letters text-lg">Next Industry</span>
            <img class="services-slider__control-arrow" src="/images/site/icons/arrows/3.svg" alt="" @click="prevSlide">
            <img class="services-slider__control-arrow" src="/images/site/icons/arrows/4.svg" alt="" @click="nextSlide">
          </div>
          <span class="services-slider__control-numbers text-xl">{{ currentSlideIndex }}/{{ items.length }}</span>
        </div>

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
          <div class="services-slider-item"
            v-for="(item, index) in items" :key="index"
          >
            <SectionHeader
              :title="item.title"
              :desc="item.desc"
              :icon="item.headerIconURL"
              ref="header"
              class="services-slider-item__header"
              mode="left"
              :revealIsDisabled="true"
            />

            <div 
              :class="{
                'services-slider-item__inner': true,
                'services-slider-item__inner--side--left': item.imgSide == 'left'
              }"
            >
              <ul class="services-slider-item__text text-lg">
                <li 
                  v-for="(title, index) in item.items" :key="index"
                  class="services-slider-item__title"
                >
                  <img :src="item.listIconURL" alt="">
                  {{ title }}
                </li>
              </ul>
              <div class="services-slider-item__img">
                <img :src="item.imgURL">
              </div>

            </div>
            
            <a 
              class="services-slider-item__btn btn-default"
              :href="item.link"
            >
              discover more
            </a>
          </div>
        </TinySlider>
      </div>
    </div>

    <img class="services-slider__bg-spot" src="/images/site/industries/index/section-slider/bg-spot.svg">
    <img class="services-slider__bg-dots" src="/images/site/icons/abstract/fig-26.svg" alt="" v-cursor-follow="{multiplier: .4}">
  </section>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js';
import SectionHeader from '@/js/components/global/SectionHeader'
import FeedbackSlider from '@/js/components/global/sliders/FeedbackSlider'
const sr = require('scrollreveal').default();

export default {
  components: {
    'TinySlider': VueTinySlider,
    SectionHeader, 
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

  .services-slider {
    z-index: 0;
    position: relative;
    overflow: hidden;
    padding-top: calc(var(--space-unit) * 6);
    padding-bottom: var(--section-pd-y-small);
    background: linear-gradient(126.63deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

    &__additional-container {
      position: relative;
    }

    &__control {
      position: absolute;
      right: 0;
      top: 0;
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

      &-letters {
        letter-spacing: 0.07em;
        margin-right: 2rem;
        color: var(--black-main);
        font-weight: 600;
      }

      &-numbers {
        color: var(--blue-main);
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
        max-width: 102rem;
        width: 100%;
        margin: 0 auto;
        justify-content: space-between;
        align-items: center;
        margin-bottom: calc(var(--space-unit) * 6);

        @media (max-width: 1280px) {
          width: 100%;
          padding: 0 3rem;
        }

        @media (max-width: 767px) {
          justify-content: center;
        }

        &--side {
          &--left {
            flex-direction: row-reverse;

            .services-slider-item__text {
              @media (min-width: 769px) {
                margin-right: 0;
                margin-left: 2.5rem;
              }
            }
          }
        }
      }

      &__text {
        flex-shrink: 0;
        margin-right: 2.5rem;

        @media (max-width: 767px) {
          margin-right: 0;
        }
      }
      
      &__title {
        display: flex;
        align-items: center;

        img {
          margin-right: calc(var(--space-unit) * 3);
        }
      }

      &__img {
        width: 49.2rem;
        box-shadow: 8px 8px 24px rgba(94, 94, 94, 0.25), -8px -8px 24px rgba(255, 255, 255, 0.25);

        @media (max-width: 991px) {
          width: 100%;
        }

        @media (max-width: 767px) {
          display: none;
        }

        img {
          width: 100%;
        }
      }

      &__btn {
        margin: 0 auto;
        margin-top: auto;
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