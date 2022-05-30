<template>
  <div class="gera-results" v-scroll-reveal>
    <picture class="gera-results__bg">
      <source media="(max-width: 767px)" srcset="/images/site/portfolio/gera/results/bg-767.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/results/bg-991.png">
      <img src="/images/site/portfolio/gera/results/bg.png" alt="">
    </picture> 

    <div class="container">
      <PortfolioHeader
        class="gera-results__header"
        titleText="Results"
        titleTextColor="var(--case-color-primary)"
      />
    
      <div 
        class="gera-results__content"
        v-scroll-reveal
      >
        <div class="gera-results__desc-list portfolio-desc">
          <div 
            class="gera-results__desc-item"
            v-for="(text, index) in descItems" :key="index"
          >
            {{ text }}
          </div>
        </div>
        
        <div class="gera-results__benefits-list">
          <PortfolioBlockBase
            class="gera-results__benefits-item"
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
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioHeader, PortfolioBlockBase},

  data() {
    return {
      descItems: [
        'We have performed a full cycle of the wellness platform development starting from the new features establishment and finalizing with mobile application development.', 
        'The platform connects people inspired by the idea to rejuvenate and revitalize themselves with unique authorial wellness practices.'
      ],
      benefitsItems: [
        {
          icon: '/images/site/portfolio/gera/results/icon-benefit-1.svg',
          titleText: 'Support Load Decrease',
          descText: 'The application helps to reduce the load on the support team, as customers may find relevant offers, subscribe, and pay for the training of interest on their own.'
        },
        {
          icon: '/images/site/portfolio/gera/results/icon-benefit-2.svg',
          titleText: 'Wider Audience Reach',
          descText: 'The client has attracted a bigger audience to leverage business services with a perfected web solution and fresh new mobile apps.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .gera-results {
    position: relative;
    padding: 25rem 0 20rem;

    @media (max-width: 1400px) {
      padding: 20rem 0 15rem;
    }

    @media (max-width: 1199px) {
      padding: 15rem 0;
    }

    @media (max-width: 991px) {
      padding: 8rem 0;
    }

    @media (max-width: 575px) {
      // padding: 7rem 0;
    }

    &__bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;

      @media (max-width: 767px) {
        height: 90%;
      }

      img, source {
        width: 100%;
        height: 100%;
        object-fit: cover;

        @media (max-width: 991px) {
          object-fit: unset;
        }
      }

      // @media (max-width: )
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
        width: 45%;
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
      &-list {
        width: 47%;

        @media (max-width: 960px) {
          width: 100%;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          column-gap: 5%;
        }

        @media (max-width: 700px) {
          grid-template-columns: 100%;
        }
      }

      &-item {
        --icon-width: 2.9rem;
        margin-bottom: calc(var(--space-unit) * 6);

        @media (max-width: 1199px) {
          --icon-width: 2.4rem;
          --icon-margin: 1.5rem;
          --title-margin: 1rem;
        }

        @media (max-width: 575px) {
          --icon-width: 2.2rem;
        }

        &:last-child {
          margin-bottom: 0;
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
