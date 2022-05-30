<template>
  <section class="slider-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        mode="center"
        icon="/images/site/icons/abstract/header-5.svg"
      />

      <FeedbackSlider
        :items="reviews"
      />
    </div>

    <img src="/images/site/icons/abstract/fig-23.svg" alt="" class="slider-section__dots" v-cursor-follow="{multiplier: .4}">
    <img src="/images/site/icons/abstract/fig-24.svg" alt="" class="slider-section__lines" v-cursor-follow="{multiplier: .4}">
  </section>
</template>

<script>
import api from '@/js/api';

import SectionHeader from '@/js/components/global/SectionHeader'
import FeedbackSlider from '@/js/components/global/sliders/FeedbackSlider'

export default {
  components: {SectionHeader, FeedbackSlider},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
  },


  data() {
    return {
      reviews: []
    }
  },


  async created() {
    let reviews = await new Promise(resolve => api.reviews.getList().then(res => resolve(res.data.data.data)))
    this.reviews = reviews.map(review => ({
      link: review.link,
      title: review.customer_name,
      desc: review.customer_position,
      quote: review.text,
      country: review.country
    }))
  }
}
</script>

<style lang="scss">
  .slider-section {
    position: relative;
    padding: var(--section-pd-y-small) 0;
    background: var(--grey-main);
    box-shadow: 1px 20px 20px 0px #00000014;

    &__dots {
      position: absolute;
      left: 10%;
      top: 19%;
    }

    &__lines {
      position: absolute;
      right: 15%;
      top: 20rem;
    }

    @media (max-width: 1099px) {
      &__dots, &__lines {
        display: none;
      }
    }
  }
</style>