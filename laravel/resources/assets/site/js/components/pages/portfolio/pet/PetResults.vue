<template>
  <div class="pet-results" v-scroll-reveal>
    <div class="container">
      <PetHeader
        class="pet-results__header"
        titleText="Results"
      /> 
      
      <div 
        class="pet-results__content"
        v-scroll-reveal
      >
        <div class="pet-results__benefits-list">
          <PortfolioBlockBase
            class="pet-results__benefits-item"
            v-for="(item, index) in benefitsItems" :key="index"
            v-bind="item"
            titleColor="var(--case-color-primary)"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PetHeader from './global/PetHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PetHeader, PortfolioBlockBase},
  
  data() {
    return {
      descItems: [
        'The TopDevs team has helped our client to prepare the idea for pitching to investors. An MVP was developed to showcase the future product value for the luxury watches industry. An application connects watchmakers, watch owners, and watch repairs with a goal to control the continued quality of expensive devices.', 
        'Our dedicated team has contributed to the initial product development stage laying the foundations for future startup growth.'
      ],
      benefitsItems: [
        {
          icon: '/images/site/portfolio/pet/results/icon-benefit-1.svg',
          descText: 'The application redesign has resulted in the need to add, remove, or modify particular screens and functionality.'
        },
        {
          icon: '/images/site/portfolio/pet/results/icon-benefit-2.svg',
          descText: 'With the increase of features, some of them were recognized as the ones suitable for sale. So specific subscription plans were developed. If people want to get access to the whole range of features, they need to buy the premium subscription plan. Otherwise, some functionality will be hidden.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .pet-results {
    position: relative;
    padding: 15rem 0 20rem;

    @media (max-width: 1400px) {
      padding: 10rem 0 15rem;
    }

    @media (max-width: 991px) {
      padding: 10rem 0;
    }

    @media (max-width: 575px) {
      padding: 7rem 0;
    }

    &__header {
      margin-bottom: calc(var(--portfolio-header__title-margin));
    }

    &__content {
      display: flex;
      justify-content: space-between;

      @media (max-width: 960px) {
        flex-direction: column;
      }
    }

    &__desc {
      &-list {
        width: 51.9%;
        line-height: 160%;
        letter-spacing: 0.03em;
      
        @media (max-width: 960px) {
          width: 100%;
          margin-bottom: calc(var(--space-unit) * 11.5);
        }
      }

      &-item {
        margin-bottom: calc(var(--space-unit) * 3.5);

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__benefits {
      &-item {
        --icon-width: 8.9rem;
        --icon-margin: 3rem;
        align-items: center;
        margin-bottom: 4rem;

        @media (max-width: 1400px) {
          --icon-margin: 2.5rem;
        }

        @media (max-width: 1199px) {
          --icon-margin: 2rem;
          --icon-width: 7rem;
          margin-bottom: 3.5rem;
        }

        @media (max-width: 991px) {
          --icon-width: 5.2rem;
          margin-bottom: 3rem;
        }

        @media (max-width: 767px) {
          margin-bottom: 2.5rem;
        }

        @media (max-width: 575px) {
          margin-bottom: 2rem;
        }

        &:last-child {
          margin-bottom: 0;
        }

        &:first-child {
          @media (max-width: 528px) {
            align-items: flex-start;
          }
        }

        &:nth-child(2) {
          @media (max-width: 991px) {
            align-items: flex-start;
          }
        }
      }

      &-title {
        font-weight: 600;

        span {
          line-height: 100%;
          font-weight: 700;
          font-family: var(--ProximaNova);
          color: var(--case-color-secondary);

          @media (max-width: 960px) and (min-width: 701px) {
            display: block;
          }

          @media (max-width: 500px) {
            display: block;
          }
        }

        @media (max-width: 960px) {
          margin-bottom: calc(var(--space-unit) * 1.5);          
        }
      }
    }
  }
</style>
