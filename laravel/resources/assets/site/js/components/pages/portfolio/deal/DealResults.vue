<template>
  <section class="deal-results" v-scroll-reveal>
    <!-- <img  -->
      <!-- class="deal-results__bg-circle" -->
      <!-- src="/images/site/portfolio/deal/results/bg-circle.svg" alt=""  -->
    <!-- > -->

    <picture class="deal-results__bg-circle">
      <source media="(max-width: 715px)" srcset="/images/site/portfolio/deal/results/bg-circle-575.svg">
      <img src="/images/site/portfolio/deal/results/bg-circle.svg" alt="">
    </picture>

    <img 
      class="deal-results__bg-lines"
      src="/images/site/portfolio/deal/bg-lines-grey.svg" alt="" 
    >

    <div class="container">
      <DealHeader
        class="deal-results__header"
        :baseOptions="{
          titleText: 'Results',
          titleTextColor: 'var(--case-color-primary)',
          maxWidth: 626,
          headerColumnBreakpoint: 1500,
          breakpoints: {
            1500: {maxWidth: 812}
          }
        }"
      />
      
      <div class="deal-results__header-list deal-block-marked">
        <div 
          class="deal-results__header-item portfolio-desc"
          v-for="(item, index) in items" :key="index"
        >
          {{ item }}
        </div>  
      </div>

      <div class="deal-results__stats-wrapper">
        <div class="deal-results__stats-list">
          <PortfolioBlockBase
            class="deal-results__stats-item"
            v-for="(item, index) in statsItems" :key="index"
            v-bind="item"
            titleColor="var(--case-color-primary)"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import DealHeader from '@/js/components/pages/portfolio/deal/global/DealHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {DealHeader, PortfolioBlockBase},

  data() {
    return {
      items: [
        `The TopDevs team has heavily invested in mobile app development starting from the architecture design to the app development and continued support after deployment.`, 
        `All users get an all-in-one solution that guarantees secure and easy-to-use implementation of their desires. Thanks to the app, transporters get rid of the paperwork, incorrect damage claims, and extra headaches required for each order negotiation and management. Car buyers can choose the best deals, see the uncovered truth about each vehicle, and keep track of their car delivery. Car dealers, on their side, get a chance to choose reliable logistics partners and provide more trusted services for car buyers.`
      ],

      statsItems: [
        {
          titleText: 'App Popularity',
          descText: 'The app was downloaded 10,000+ times and received 300+ positive feedback with an excellent rating on the App Store.'
        },
        {
          titleText: 'Transported Cars',
          descText: 'There are 25,000+ transported cars already and each day around 150 delivered cars add to this number.'
        },
        {
          titleText: 'Car Transporters',
          descText: 'Already 1,900+ registered car transporters enjoy faster and more convenient business dealings.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .deal-results {
    position: relative;
    padding-bottom: 18rem;

    @media (max-width: 1400px) {
      padding-bottom: 12rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 8rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 6rem;
    }

    &__bg-circle {
      position: absolute;
      right: 0;
      top: 0;
      width: 13%;

      img, source {
        width: 100%;
      }

      @media (max-width: 1400px) {
        top: 50%;
        width: 24%;
      }

      @media (max-width: 715px) {
        top: auto;
        right: 0;
        bottom: 0;
        width: 35%;
        // min-width: 17.5rem;
      }
    }


    &__bg-lines {
      position: absolute;
      left: 8.9rem;
      top: 27%;
      width: 10rem;

      @media (max-width: 1640px) {
        left: -1rem;
      }

      @media (max-width: 767px) {
        left: -4rem;
      }

      @media (max-width: 575px) {
        display: none;
      }
    }

    &__header {
      margin-bottom: 7.5rem;
    
      @media (max-width: 1400px) {
        margin-bottom: 6.5rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }
    }

    &__header {
      &-list {
        width: 77.5%;
        margin: 0 auto;
        margin-bottom: 8rem;

        @media (max-width: 1400px) {
          width: 92%;
          margin-bottom: 7rem;
        }

        @media (max-width: 1199px) {
          margin-bottom: 5.5rem;
        }

        @media (max-width: 575px) {
          width: 100%;
          margin-bottom: 4rem;
        }
      }

      &-item {
        line-height: 180%;
        margin-bottom: 1em;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__stats {
      &-wrapper {
        @media (max-width: 1400px) {
          padding-left: 4.4rem;
          max-width: 92%;
          margin: 0 auto;
        }

        @media (max-width: 1199px) {
          padding-left: 3.9rem;
        }

        @media (max-width: 991px) {
          padding-left: 3.4rem;
        }

        @media (max-width: 575px) {
          max-width: unset;
          padding-left: 0;
        }      
      }

      &-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 7.25%;

        @media (max-width: 1550px) {
          column-gap: 3.5%;
        }

        @media (max-width: 1400px) {
          max-width: 65rem;
          grid-template-columns: 1fr;
        }

        @media (max-width: 1199px) {
          max-width:  52rem;
        }

        @media (max-width: 991px) {
          max-width: 80%;
        }

        @media (max-width: 715px) {
          max-width: unset;
        }
      }

      &-item {
        position: relative;
        padding: 4.3rem 0 4.3rem 5.5rem;

        @media (max-width: 1400px) {
          margin-bottom: 2rem;
        }

        @media (max-width: 1199px) {
          padding: 3.3rem 0 3.3rem 4.5rem;
        }

        @media (max-width: 715px) {
          margin-bottom: 1.5rem;
        }

        @media (max-width: 575px) {
          padding: 2.5rem 0 2.5rem 3.4rem;
        }

        @media (max-width: 428px) {
          padding-bottom: 0;
        }

        &:before {
          --size: 20.8rem;
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          width: var(--size);
          height: var(--size);
          background: white;
          border-radius: 50%;
          z-index: -1;

          @media (max-width: 1400px) {
            --size: 18.2rem;
          }

          @media (max-width: 1199px) {
            --size: 14.4rem;
          }

          @media (max-width: 575px) {
            --size: 11.6rem;
          }
        }
      }
    }
  }
</style>