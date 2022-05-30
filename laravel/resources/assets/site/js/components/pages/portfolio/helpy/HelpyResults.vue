<template>
  <div class="helpy-results">
    <img 
      class="helpy-results__bg-fig-outline"
      src="/images/site/portfolio/helpy/results/bg-fig-outline.svg" alt="" 
    >

    <img 
      class="helpy-results__bg-fig-circles"
      src="/images/site/portfolio/helpy/results/bg-fig-circles.svg" alt="" 
    >

    <div class="helpy-results__content container">
      <HelpyHeader
        class="helpy-results__header"
        :headerPropsBase="{
          titleText: 'results',
          descText: `The TopDevs team has helped to build a mobile application for everyday use by therapists, clinicians, and all healthcare workers. It releases the tension of keeping the complex things in mind, find the most fitting treatment, and continue to save patients’ lives efficiently.`,
          headerColumnBreakpoint: true,
          isCentered: true
        }"
      />

      <div class="helpy-results__text-accent helpy-text-accent text-center portfolio-desc">
        Our devoted work not only contributed to the healthcare industry but served our client by boosting online presence, extending the customer audience, and increasing the app popularity on the App Store.
      </div>

      <div class="helpy-results__benefits-list">
        <PortfolioBlockBase 
          class="helpy-results__benefits-item"
          titleColor="var(--case-color-orange)"
          v-bind="items[0]"
        />

        <div class="helpy-results__benefits-divider"/>
      
        <PortfolioBlockBase
          class="helpy-results__benefits-item"
          titleColor="var(--case-color-orange)"
          v-bind="items[1]"
        />
      </div>
    </div>
  </div>
</template>

<script>
import HelpyHeader from './global/HelpyHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {HelpyHeader, PortfolioBlockBase},

  data() {
    return {
      items: [
        {
          icon: '/images/site/portfolio/helpy/results/icon-1.svg',
          titleText: '22,000+ Active Listings',
          descText: 'The Helpy app is capable to search fast over 22,000 existing listings using the key terms.'
        },
        {
          icon: '/images/site/portfolio/helpy/results/icon-2.svg',
          titleText: '30% Time Saved',
          descText: 'The overall time for making a diagnosis and finding the perfect treatment has decreased by 30%.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .helpy-results {
    position: relative;
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

    
    &__content {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    &__header {
      width: 53%;
      margin-bottom: var(--offset-header-to-text-accent);
    
      @media (max-width: 1400px) {
        width: 70%;
      }

      @media (max-width: 991px) {
        width: 100%;
        max-width: 51.3rem;
      }
    }

    &__text-accent {
      width: 64%;
      margin-bottom: 6.5rem;
    
      @media (max-width: 1400px) {
        width: 94%;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 991px) {
        width: 100%;
        max-width: 59.7rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 4rem;
      }
    }

    &__bg-fig {
      &-circles {
        width: 19vw;
        position: absolute;
        right: 0;
        top: 0;
        transform: translateY(-60%);
        z-index: -2;
      
        @media (max-width: 915px) {
          transform: translateY(-90%);
        }
      }

      &-outline {
        width: 20vw;
        position: absolute;
        left: 0;
        top: 0;
        transform: translate(-10%, 0);
        z-index: -1;

        @media (max-width: 1199px) {
          transform: translate(-10%, -30%);
        }
      }
    }

    &__benefits {
      &-list {
        display: flex;
        width: 85%;
        padding: 0 5rem;
        background: linear-gradient(128.04deg, #F7F7F7 0%, #F5F5F5 98.91%);
        box-shadow: inset -6px -6px 20px rgba(255, 255, 255, 0.8), inset 6px 6px 20px rgba(0, 0, 0, 0.04);
        border-radius: 10px;

        @media (max-width: 1400px) {
          padding: 0 4rem;
        }

        @media (max-width: 1199px) {
          width: 100%;
          padding: 0 3.5rem;
        }

        @media (max-width: 991px) {
          flex-direction: column;
        }

        @media (max-width: 575px) {
          padding: 0 2rem;
        }
      }

      &-item {
        --icon-width: 2.5rem;
        margin: 5rem 0;
        width: 100%;

        @media (max-width: 1400px) {
          margin: 4rem 0;
        }

        @media (max-width: 1199px) {
          margin: 3.5rem 0;
        }

        @media (max-width: 575px) {
          margin: 2rem 0;
        }
      }

      &-divider {
        width: .5rem;
        margin: 2.5rem 5rem;
        background: #F7F7F7;
        box-shadow: -3px -3px 5px rgba(255, 255, 255, 0.8), 3px 3px 6px rgba(0, 0, 0, 0.05);
        border-radius: 10px;

        @media (max-width: 1400px) {
          margin: 2.5rem 4rem;
        }

        @media (max-width: 1199px) {
          margin: 1.2rem 3.5rem;
        }

        @media (max-width: 991px) {
          width: 100%;
          height: .5rem;
          margin: 0;
        }
      }
    }
  }
</style>