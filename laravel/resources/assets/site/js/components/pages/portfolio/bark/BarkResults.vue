<template>
  <div class="bark-results">
    <picture class="bark-results__bg-circles">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/bark/results/bg-circles-991.svg">
      <img src="/images/site/portfolio/bark/results/bg-circles.svg" alt="">
    </picture> 

    <div class="bark-results__content container">
      <PortfolioHeader
        class="bark-results__header"
        titleText="Results"
        titleTextColor="var(--case-color-primary)"
        descText="We've helped our client to make a dog watching app that unites all who cares about pet wellbeing. The all-in-one BabelBark application is a smart choice for pet lovers and those business owners who wish to extend their customer audience."
        headerColumnBreakpoint
        titleUppercase
      />

      <BarkBlockPreBullet
        class="bark-results__benefits-list-wrapper"
      >
        <div class="bark-results__benefits-list">
          <PortfolioBlockBase
            class="bark-results__benefits-item"
            v-for="(item, index) in benefitsItems" :key="index"
            v-bind="item"
            titleColor="var(--case-color-green)"
          />
        </div>
      </BarkBlockPreBullet>
    </div>
  </div>
</template>

<script>
import BarkBlockPreBullet from './global/BarkBlockPreBullet'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {BarkBlockPreBullet, PortfolioBlockBase, PortfolioHeader},

  data() {
    return {
      benefitsItems: [
        {
          titleText: '150,000+ Pets & 500+ Businesses',
          descText: 'The app\'s user base exceeds 150,000 pets connected with more than 500 pet businesses.'
        },
        {
          titleText: 'US$ 4.5 mln Investments',
          descText: 'BabelBark app has raised more than US$ 4.5 million in Series A Funding.'
        }
      ]

    }
  },
}
</script>

<style lang="scss">
  .bark-results {
    padding-bottom: 22rem;

    @media (max-width: 1400px) {
      padding-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 12rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 8rem;
    }

    &__bg-circles {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 28vw;

      img, source {
        width: 100%;
      }

      @media (max-width: 991px) {
        left: auto;
        right: 0;
      }

      @media (max-width: 575px) {
        width: 40vw;
      }
    }

    &__content {
      display: flex;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 991px) {
        flex-direction: column;
        align-items: flex-start;
      }
    }

    &__header {
      width: 38%;

      @media (max-width: 1400px) {
        width: 41%;
      }

      @media (max-width: 991px) {
        width: 100%;
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }
    }

    &__benefits-list {
      padding: 5rem;
      background: #ECFBF3;
      border-radius: 20px;

      @media (max-width: 1199px) {
        padding: 4rem;
      }

      @media (max-width: 575px) {
        padding: 2.5rem;
      }

      &-wrapper {
        width: 50%;

        @media (max-width: 991px) {
          width: 100%;
          max-width: 60rem;
        }
      }
    }

    &__benefits-item {
      margin-bottom: 3.5rem;

      &:last-child {
        margin-bottom: 0;
      }
    }
  }
</style>