<template>
  <div class="helpy-solutions">
    <img 
      class="helpy-solutions__bg-fig-header"
      src="/images/site/portfolio/helpy/solutions/bg-fig-header.svg" alt="" 
    >

    <img 
      class="helpy-solutions__bg-wavy"
      src="/images/site/portfolio/helpy/results/bg-wavy.svg" alt="" 
    >

    <div class="container">
      <HelpyHeader
        class="helpy-solutions__header"
        :headerPropsBase="{
          titleText: 'solutions',
          descText: `We completely understood what's at stake here. So first we've thought through the design concept to make an app look good. Then we've made evaluations on how to ensure the fastest functionality bearing in mind the load that an app will experience while conducting such a challenging and delicate searching.`,
          headerColumnBreakpoint: true
        }"
      />

      <div class="helpy-solutions__text-accent helpy-text-accent portfolio-desc">
        After all, we've proceeded to the actual development phase and took care of an app that can work efficiently under high loads and provide accurate data.
      </div>

      <div class="helpy-solutions__row">
        <img 
          class="helpy-solutions__mockup"
          src="/images/site/portfolio/helpy/solutions/mockup.png" alt="" 
        >

        <div class="helpy-solutions__benefits-list">
          <PortfolioBlockBase 
            class="helpy-solutions__benefits-item"
            v-for="(item, index) in items" :key="index"
            v-bind="item"
            titleColor="var(--case-color-orange)"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'
import HelpyHeader from './global/HelpyHeader'

export default {
  components: {PortfolioBlockBase, HelpyHeader},

  data() {
    return {
      items: [
        {
          titleText: 'Quick Search',
          descText: 'Medical professionals may search through thousands of complex records with key terms to define the most accurate diagnosis and effective therapy.'
        },
        {
          titleText: 'Advanced Filters',
          descText: 'Therapists can adjust search results eliminating certain data based on location, therapy approaches, health insurance providers, allergies, etc.'
        }
      ]      
    }
  },
}
</script>

<style lang="scss">
  .helpy-solutions {
    position: relative;
    padding-bottom: 30rem;
    margin-bottom: 7.5rem;

    @media (max-width: 1400px) {
      padding-bottom: 22.2rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 20rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 10rem;
      margin-bottom: 6.5rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
      margin-bottom: 5.5rem;
    }

    &__header {
      max-width: 73.4rem;
      margin-bottom: var(--offset-header-to-text-accent);

      @media (max-width: 1199px) {
        max-width: 65rem;
      }
    }

    &__text-accent {
      max-width: 89rem;
      margin-bottom: 7.5rem;
    
      @media (max-width: 1400px) {
        margin-bottom: 7rem;
      }

      @media (max-width: 1199px) {
        max-width: 73.2rem;
        margin-bottom: 6rem;
      }

      @media (max-width: 991px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 4rem;
      }
    }

    &__row {
      display: flex;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 991px) {
        flex-direction: column-reverse;
      }
    }

    &__benefits {
      &-list {
        display: flex;
        flex-direction: column;
        width: 39.5%;

        @media (max-width: 1400px) {
          width: 43.5%;
        }

        @media (max-width: 1199px) {
          width: 44.5%;
        }

        @media (max-width: 991px) {
          width: 100%;
          max-width: 60rem;
          margin-bottom: 3rem;
        }

        @media (max-width: 575px) {
          margin-bottom: 2rem;
        }
      }

      &-item {
        padding: 5rem;
        margin-bottom: 5.5rem;
        background: linear-gradient(128.04deg, #F7F7F7 0%, #F5F5F5 98.91%);
        box-shadow: inset -6px -6px 20px rgba(255, 255, 255, 0.8), inset 6px 6px 20px rgba(0, 0, 0, 0.04);
        border-radius: 10px;

        &:last-child {
          margin-bottom: 0;
        }

        @media (max-width: 1400px) {
          padding: 4rem;
          margin-bottom: 4rem;
        }

        @media (max-width: 1199px) {
          padding: 3.5rem;
          margin-bottom: 2rem;
        }

        @media (max-width: 991px) and (min-width: 576px) {
          margin-bottom: 3rem;
        }

        @media (max-width: 575px) {
          padding: 2rem;
        }
      }
    }

    &__mockup {
      width: 56%;
      margin-left: -6.5%;

      @media (max-width: 1400px) {
        width: 61%;
        margin-left: -13.5%;
      }

      @media (max-width: 1199px) {
        width: 54%;
        margin-left: -6.5%;
      }

      @media (max-width: 991px) {
        width: 100%;
        max-width: 59rem;
        min-width: 39rem;
        margin-left: 0;
        transform: translateX(-7.5%);
      }
    }

    &__bg {
      &-wavy {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        z-index: -1;
      }

      &-fig-header {
        position: absolute;
        right: 0;
        top: 0;
        transform: translate(10%, -20%);
        width: 35vw;
      }
    }
  }
</style>