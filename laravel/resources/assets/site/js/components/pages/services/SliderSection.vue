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
        :items="items"
      />
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import FeedbackSlider from '@/js/components/global/sliders/FeedbackSlider'

export default {
  components: {SectionHeader, FeedbackSlider},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    items: Array
  },
}
</script>

<style lang="scss">
  .slider-section {
    padding: var(--section-pd-y-small) 0;
    background: var(--grey-main);
    box-shadow: 1px 20px 20px 0px #00000014;
    // box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);
  }
</style>