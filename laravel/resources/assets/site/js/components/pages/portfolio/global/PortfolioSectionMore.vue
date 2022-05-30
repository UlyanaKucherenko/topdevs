<template>
  <PortfolioSection
    class="portfolio-more-section"
    headerTitle="See More Projects"
    headerDesc="Check out just some of the mobile and web solutions we’ve created for our numerous clients worldwide."
    :items="items"
  />
</template>

<script>
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'

export default {
  components: {PortfolioSection},

  data() {
    return {
      items: [
        {
          imgURL: '/images/site/services/outsourcing/portfolio/1.png',
          title: 'Slogger',
          desc: 'JavaScript, Jquery, PHP',
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/2.png',
          title: 'Helpy',
          desc: 'JavaScript, Jquery, PHP'
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/3.png',
          title: 'Tmm',
          desc: 'JavaScript, Jquery, PHP'
        }
      ],
    }
  },
}
</script>

<style lang="scss">
  .portfolio-more-section {
    padding: var(--section-pd-y-big) 0;
    z-index: 0;

    .section-header {
      &__icon {
        display: none;
      }

      &__desc {
        color: var(--grey-dark);
      }

      &__title, &__desc {
        padding-left: 0;
      }
    }
  }
</style>
