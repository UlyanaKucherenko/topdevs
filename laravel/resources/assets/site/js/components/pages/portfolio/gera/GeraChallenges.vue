<template>
  <section class="gera-challenges" v-scroll-reveal>
    <div class="container">
      <div class="gera-challenges__content">
        <PortfolioHeader
          class="gera-challenges__header "
          headerColumnBreakpoint
          titleText="Challenges"
          titleTextColor="var(--case-color-primary)"
          :descText="[
            'Our client is a well-known yoga trainer in CIS countries. He has turned to us for the whole system refinement. Initially it was a business card site so we had to automate the process of registration for online courses, add a blog, and make it possible to pay for services via an online platform. Though our main focus was on Android and iOS app development.',
            'It was supposed to increase customer loyalty and offer a personalized experience for each end user. So the decision to create mobile apps for iOS and Android platforms was the best bet.'
          ]"
        />

        <img 
          class="gera-challenges__mockup"
          src="/images/site/portfolio/gera/challenges/mockup.png" alt="" 
        >
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader}
}
</script>

<style lang="scss">
  .gera-challenges {
    padding-bottom: 25rem;

    @media (max-width: 1500px) {
      padding-bottom: 17.5%;
    }

    @media (max-width: 1199px) {
      padding-bottom: 17.5rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__content {
      position: relative;
    }

    &__header {
      width: 46%;
    
      @media (max-width: 991px) {
        width: 100%;
        margin-bottom: 3rem;
      }
    }

    &__mockup {
      width: 60%;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translate(21%, -50%);

      @media (max-width: 1500px) {
        width: 67%;
        top: 0;
        transform: translate(21%, 0);
      }

      @media (max-width: 991px) {
        position: static;
        transform: none;
        width: 100%;
        margin: 0 auto;
        max-width: 70rem;
      }

      @media (max-width: 500px) {
        width: 120%;
        margin-left: -7%;
      }
    }
  }
</style>