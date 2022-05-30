<template>
  <div class="gog-gist">
    <div class="container">
      <div class="gog-gist__list">
        <PortfolioBlockGist
          class="gog-gist__item"
          v-for="(item, index) in items" :key="index"
          :info="item"
        />
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  data() {
    return {
      items: [
        {
          iconsColor: 'var(--case-color-black-bold)',
          titleColor: 'var(--case-color-black-bold)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'Wordlwide',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS, SDK',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: 'var(--case-color-black-bold)',
          titleColor: 'var(--case-color-black-bold)',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2017 - Present',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Logistics & Tracking, <nobr>Retail & E-Commerce</nobr>',
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
  .gog-gist {
    margin-bottom: 13rem;

    @media (min-width: 1401px) {
      display: none;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 7rem;
    }

    &__list {
      position: relative;
      display: flex;
      // justify-content: space-between;
      padding-left: 6rem;

      &::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 5px;
        height: 100%;
        background: var(--case-color-primary);
      
        @media (max-width: 640px) {
          display: none;
        }
      }

      @media (max-width: 991px) {
        flex-direction: column;
      }

      @media (max-width: 640px) {
        padding-left: 0;
      }
    }

    &__item {
      @media (min-width: 992px) {
        margin-right: 6rem;

        &:last-child {
          margin-right: 0;
        }
      }

      @media (max-width: 991px) {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }
  }
</style>