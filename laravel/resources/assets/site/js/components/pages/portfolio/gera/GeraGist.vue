<template>
  <section class="gera-gist" v-scroll-reveal>
     <div class="container">
      <div class="gera-gist__list">
        <PortfolioBlockGist
          class="gera-gist__item"
          v-for="(item, index) in items" :key="index"
          :info="item"
          :hasWidthBreakpoint="767"
        />
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  data() {
    return {
      items: [
        {
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'Europe',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS, Android',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: 'Since 2019',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Sports & Fitness, <nobr>Retail & E-Commerce</nobr>',
              iconDefault: 'case'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .gera-gist {
    padding-bottom: 20rem;

    @media (max-width: 1400px) {
      padding-bottom: 10rem;
    }

    &__list {
      display: flex;

      @media (max-width: 991px) {
        flex-direction: column;
      }
    }

    &__item {
      margin-right: 8rem;

      &:last-child {
        margin-right: 0;
      }

      @media (max-width: 991px) {
        margin-bottom: 1rem;
        margin-right: 0;

        &:last-child {
          margin-bottom: 0;
        }
      }

      .portfolio-block-gist__text {
        @media (max-width: 335px) {
          font-size: 1.7rem;
        }
      }
    }
  }
</style>