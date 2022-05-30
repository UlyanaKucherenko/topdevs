<template>
  <div 
    class="pet-challenges"
    v-scroll-reveal
  >
    <div class="container">
      <div 
        class="pet-challenges__content"
        v-scroll-reveal
      >
        <PetHeader
          class="pet-challenges__header"
          titleText="Challenges"
          descText="The client needed extra hands to redesign the existing app and transform certain functionality. Due to occurring changes in subscription plans, it was crucial to hide some features so users could use only the feature set they paid for."
          headerColumnBreakpoint
        /> 

        <picture 
          class="pet-challenges__mockup"
        >
          <!-- <source media="(max-width: 575px)" srcset="/images/site/portfolio/calibre/challenges/mockup-575.png"> -->
          <!-- <source media="(max-width: 991px)" srcset="/images/site/portfolio/calibre/challenges/mockup-991.png"> -->
          <!-- <source media="(max-width: 1600px)" srcset="/images/site/portfolio/calibre/challenges/mockup-1600.png"> -->
          <img src="/images/site/portfolio/pet/challenges/mockup.png" alt="">
        </picture> 
      </div>
    </div>
	</div>
</template>

<script>
import PetHeader from './global/PetHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'

export default {
  components: {PetHeader, PortfolioAside},
}

</script>

<style lang="scss">
  .pet-challenges {
    position: relative;
    z-index: 1;
    // padding-bottom: 22rem;

    @media (max-width: 1400px) {
      // padding-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      // padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      // padding-bottom: 7rem;
    }

    &__header {
      width: 41%;
      margin-left: auto;

      @media (max-width: 991px) {
        width: auto;
        margin-bottom: 3rem;
      }
    }

    &__content {
      position: relative;
      padding-bottom: 10%;

      @media (max-width: 991px) {
        padding-bottom: 0;
      }
    }

    &__mockup {
      img, source {
        position: absolute;
        width: 48%;
        left: 0;
        bottom: 0;
        transform: translateY(16%);

        @media (max-width: 1400px) {
          max-width: 58rem;
          width: 57%;
          left: calc(var(--container-padding) * -.5);
        }

        @media (max-width: 1199px) {
          bottom: auto;
          top: 0;
          transform: none;
          width: 59%;
          left: calc(var(--container-padding) * -1);
        }

        @media (max-width: 991px) {
          margin: 0 auto;
          position: static;
          width: 100%;
          margin-bottom: -10%;
        }
      }
    }

    &__figures {
      position: absolute;
      left: 24%;
      bottom: calc(var(--space-unit) * -24);
      width: 20%;

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>
