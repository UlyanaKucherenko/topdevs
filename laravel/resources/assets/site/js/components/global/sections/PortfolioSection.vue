<template>
  <section class="portfolio-section">
    <div class="container">
      <div class="portfolio-section__content">
        <SectionHeader
          class="portfolio-section__header"
          :title="headerTitle"
          :desc="headerDesc"
          :mode="windowWidth >= 1150 ? 'left' : 'center'"
        />

        <PortfolioSlider
          class="portfolio-section__slider"
          :mobileQuery="1150"
          v-scroll-reveal
          v-bind="sliderProps"
        />
      </div>

      <slot name="bottom-content"/>
      <slot name="cursor-follow"/>
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import PortfolioSlider from '@/js/components/global/sliders/PortfolioSlider'

export default {
  components: {SectionHeader, PortfolioSlider},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    slidesIds: [Array, String],
    sliderProps: Object
  },

  data() {
    return {
      items: [
        {
          title: 'Audience Expansion',
          desc: 'Enlarge your user base and form a loyal clientele with a mobile dating app for iOS and Android devices.',
          imgURL: '/images/site/industries/dating/benefits/1.svg'
        },
        {
          title: 'Secure Communication',
          desc: 'Ensure delightful communication within your dating software for the audience that keeps all their secrets in a safe place.',
          imgURL: '/images/site/industries/dating/benefits/2.svg'
        },
        {
          title: 'Unrivaled Profits',
          desc: 'Benefit from the well-known money-making business by simply creating a charming dating application.',
          imgURL: '/images/site/industries/dating/benefits/3.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .portfolio-section {
    padding-bottom: var(--section-pd-y-big);
    position: relative;

    &__content {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    &__header {
      width: 45%;

      @media (min-width: 1151px) {
        margin-bottom: 0;
      }
    }

    &__slider {
      width: 45%;
      // overflow: hidden; TODO (remove overflow and everything must be fine, if no - return it)
    }

    @media (max-width: 1150px) {
      &__content {
        flex-direction: column;
      }

      &__header {
        width: 100%;
        max-width: 60rem;
      }

      &__slider {
        width: 100%;
        max-width: 60rem;
      }
    }
  }
</style>
