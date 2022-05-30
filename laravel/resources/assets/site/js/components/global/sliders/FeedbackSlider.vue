<template>
<div class="feedback-slider" v-scroll-reveal>
  <div class="feedback-slider__inner">
    <TinySlider 
      v-if="items.length"
      ref="tinySlider" 
      :mouseDrag="false" 
      :loop="true" 
      :controls="false" 
      :nav="false" 
      :speed="1250"
      preventActionWhenRunning
    >
      <FeedbackCard
        class="feedback-slider__card"
        v-for="(item, index) in _items" 
        :key="index"
        :item="item"
      />
    </TinySlider>

    <div class="feedback-slider__control">
      <img @click="prevSlide" class="feedback-slider__control-left" src="/images/site/red-arrow-left.svg">
      <img @click="nextSlide" class="feedback-slider__control-right" src="/images/site/red-arrow-left.svg">
    </div>

    <img class="feedback-slider__overlay" src="/images/site/slider/slider-bg.png">
  </div>
</div>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js';
import FeedbackCard from '@/js/components/global/cards/FeedbackCard'

export default {
   components: {
    'TinySlider': VueTinySlider,
    FeedbackCard
  },

  props: {
    items: Array
  },


  computed: {
    _items() {
      return this.items.sort((a,b) => b.quote.length - a.quote.length)
    }
  },


  methods: {
    nextSlide() {
      this.$refs.tinySlider.slider.goTo('next')
    },

    prevSlide() {
      this.$refs.tinySlider.slider.goTo('prev')
    }
  },
}
</script>

<style lang="scss">
  @import 'tiny-slider/src/tiny-slider';

  .feedback-slider {
    width: 80%;
    margin: 0 auto;
    position: relative;

    @media (max-width: 1199px) {
      width: 90%;
    }

    @media (max-width: 991px) {
      width: 100%;
    }

    &__inner {
      width: 90%;
      margin: 0 auto;
    }

    &__overlay {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;

      @media (max-width: 500px) {
        display: none;
      }
    }

    &__control {
      cursor: pointer;

      @media (max-width: 500px) {
        &-left, &-right {
          width: 1rem;
        }
      }
    }

    &__control-left {
      position: absolute;
      left: 0;
      top: 50%;
      transform: translateY(-50%);
      z-index: 1;

      @media (max-width: 900px) {
        left: 5%;
      }
    }

    &__control-right {
      position: absolute;
      top: 50%;
      right: 0;
      z-index: 1;
      transform: translateY(-50%) rotate(180deg);
    
      @media (max-width: 900px) {
        right: 5%;
      }
    }
  }

</style>