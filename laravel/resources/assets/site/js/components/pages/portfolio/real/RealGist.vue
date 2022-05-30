<template>
  <section class="real-gist">
    <div class="container">
      <div class="real-gist__list">
        <PortfolioBlockGist
          class="real-gist__item"
          v-for="(item, index) in gistItems" :key="index"
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
      gistItems: [
        {
          bg: '/images/site/portfolio/real/about/gist-bg-1.svg',
          iconsColor: '#3D83D6',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          bg: '/images/site/portfolio/real/about/gist-bg-2.svg',
          iconsColor: '#3D83D6',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Real Estate',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: 'June 2018 – Present',
              iconDefault: 'clock'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .real-gist {
    padding-top: calc(var(--space-unit) * 10);

    @media (min-width: 1401px) {
      display: none;
    }

    &__list {
      display: flex;

      @media (max-width: 680px) {
        flex-direction: column;
      }
    }
    
    &__item {
      margin-right: 8rem;

      &:last-child {
        margin: 0;
      }

      @media (max-width: 680px) {
        margin-bottom: 2.5rem;
      }

      .portfolio-block-gist__list {
        @media (max-width: 355px) {
          font-size: 1.6rem;
        }

        @media (max-width: 327px) {
          font-size: 1.5rem;
        }
      }
    }
  }
</style>