<template>
  <div class="portfolio-layout">
    <slot/>
    <PortfolioSectionConnect/>
    <PortfolioSectionMore/>
  </div>
</template>

<script>
import DefaultLayout from '@/js/layouts/DefaultLayout'
import PortfolioSectionConnect from '@/js/components/pages/portfolio/global/PortfolioSectionConnect'
import PortfolioSectionMore from '@/js/components/pages/portfolio/global/PortfolioSectionMore'

export default {
  components: {DefaultLayout, PortfolioSectionConnect, PortfolioSectionMore},
  props: {
  },

  computed: {
  },
}
</script>

<style lang="scss">

  .portfolio {
    &-text-h1 {
      @media (min-width: 1200px) {
        font-size: 7rem;
      }
    }

    &-text-h2 {
      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 5.4rem;
      }
    }

    &-text-h3 {
      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 2.4rem;
      }
    }

    &-text-h4 {
      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 2rem;
      }
    }

    &-text-lg {
      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 2.4rem;
      }
    }

    &-text-md {
      @media (max-width: 1400px) and (min-width: 1200px) {
        font-size: 2rem;
      }
    }

    &-text-p {
      letter-spacing: .03em;
    }
  }

  .portfolio-layout {

    @media (max-width: 1400px) and (min-width: 1200px) {
      --space-unit: 1rem;
      --section-header-padding: 5.4rem;
    }
  }
</style>