<template>
  <section class="timeline-section">
    <div class="container relative">
      <SectionHeader
        title="Timeline"
        :desc="['We\'ve started our thousand-mile journey with', 'a single step in 2009 and continue supporting', 'businesses on the way to digital transformation.']"
        icon="/images/site/icons/abstract/header-9.svg"
      />
      <div class="timeline-section__content" v-scroll-reveal>
        <TlSlider class="timeline-section__slider"/>
        <img 
          class="timeline-section__img"
          src="/images/site/about-us/timeline/figure.svg" alt=""
          v-cursor-follow="{multiplier: .3, transform: {y: -50}}"
        >
      </div>

    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import TlSlider from '@/js/components/global/sliders/TlSlider'

export default {
  components: {SectionHeader, TlSlider}
}
</script>

<style lang="scss">
  .about-us {
    .timeline-section {
      padding-bottom: var(--section-pd-y-small);

      &__content {
        position: relative;
      }

      &__slider {
        width: 54%;

        @media (max-width: 991px) {
          width: 100%;
          max-width: 60rem;
        }
      }

      &__img {
        position: absolute;
        width: 31%;
        left: 56%;
        top: 50%;
        transform: translateY(-50%);

        @media (max-width: 991px) {
          display: none;
        }
      }
    }
  }
</style>