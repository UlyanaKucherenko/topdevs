<template>
  <div class="meld-results" v-scroll-reveal>
    <div class="container">
      <MeldHeader
        class="meld-solutions__header"
        titleText="results"
        titleColor="var(--case-color-orange)"
        titleImg="/images/site/portfolio/meld/results/fig-header.svg"
      />
      
      <div 
        class="meld-results__content"
        v-scroll-reveal
      >
        <div class="meld-results__desc-list portfolio-desc">
          <div 
            class="meld-results__desc-item"
            v-for="(text, index) in descItems" :key="index"
          >
            {{ text }}
          </div>
        </div>
        
        <div class="meld-results__benefits-list">
          <PortfolioBlockBase
            class="meld-results__benefits-item"
            v-for="(item, index) in benefitsItems" :key="index"
            v-bind="item"
            titleColor="var(--case-color-red)"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import MeldHeader from '@/js/components/pages/portfolio/meld/global/MeldHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {MeldHeader, PortfolioBlockBase},
  
  data() {
    return {
      descItems: [
        'Our team was driven by the idea to present a unique dating solution for a specific audience with intelligent goals. We\'ve covered the UX/UI design along with the actual mobile app development process.',
        'The Meld application helps black professionals to connect with like-minded people easily and safely. It has already built numerous happy matches and there\'s more to come.'
      ],
      benefitsItems: [
        {
          icon: '/images/site/portfolio/meld/results/icon-benefit-1.svg',
          titleText: 'Meaningful Connections',
          descText: 'The app helps to meet people with similar interests aiming at serious relationships.'
        },
        {
          icon: '/images/site/portfolio/meld/results/icon-benefit-2.svg',
          titleText: 'Uniqueness',
          descText: 'Users feel special and celebrate their belonging to a certain social group.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .meld-results {
    position: relative;
    padding-bottom: 20rem;

    @media (max-width: 1400px) {
      padding-bottom: 15rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__header {
      margin-bottom: calc(var(--portfolio-header__title-margin));
    }

    &__content {
      display: flex;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 960px) {
        flex-direction: column;
      }
    }

    &__desc {
      &-list {
        width: 40%;
        line-height: 160%;
        letter-spacing: 0.03em;
      
        @media (max-width: 960px) {
          width: 100%;
          margin-bottom: 4rem;  
        }

        @media (max-width: 700px) {
          margin-bottom: 3.5rem;
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
      &-list {
        position: relative;
        width: 50%;
        padding: 7rem;
        padding-right: 6vw;

        &:before {
          content: '';
          position: absolute;
          width: 50vw;
          height: 100%;
          left: 0;
          top: 0;
          background: #000;
          background: linear-gradient(0deg, #F3F3F3, #F3F3F3);
          z-index: -1;

          @media (max-width: 960px) {
            display: none;
          }
        }

        @media (max-width: 1199px) {
          padding: 5.5rem;
          padding-right: 0;
        }

        @media (max-width: 960px) {
          width: 100%;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          column-gap: 5%;
          padding: 0;
        }

        @media (max-width: 700px) {
          grid-template-columns: 100%;
        }
      }

      &-item {
        --icon-width: 3.8rem;
        --icon-margin: 2.5rem;
        
        margin-bottom: calc(var(--space-unit) * 6);

        &:last-child {
          margin-bottom: 0;
        }

        @media (max-width: 1199px) {
          --icon-width: 2.8rem;
          --icon-margin: 1.5rem;
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
