<template>
  <div 
    class="calibre-challenges"
    v-scroll-reveal
  >
    <div class="container">
      <div 
        class="calibre-challenges__content"
        v-scroll-reveal
      >
        <PortfolioHeader
          class="calibre-challenges__header calibre-header"
          headerColumnBreakpoint
          titleText="Challenges"
          titleTextColor="var(--case-color-primary)"
          :descText="[
            'The client has applied to us with an app idea in mind and requested an MVP development that will be presented to investors. With a minimum viable product, it is possible to raise the first round of investments, further continue the development process and create a fully-fledged product.',
            'Our team has put strong beliefs in the app idea that serves the owners of expensive watches. The application is meant to protect watch lovers from fakes even during their repair. The goal is to get properly repaired devices without forged details.',
            'We\'ve realized the whole responsibility. So our major task was to ensure all the basic features work efficiently and clearly demonstrate the idea value to decision-makers.'
          ]"
        >
          <div 
            class="calibre-header__line calibre-header__line--right"
            slot="titleImg"
          />
        </PortfolioHeader>
        
        <picture 
          class="calibre-challenges__mockup"
        >
          <source media="(max-width: 575px)" srcset="/images/site/portfolio/calibre/challenges/mockup-575.png">
          <source media="(max-width: 991px)" srcset="/images/site/portfolio/calibre/challenges/mockup-991.png">
          <source media="(max-width: 1600px)" srcset="/images/site/portfolio/calibre/challenges/mockup-1600.png">
          <img src="/images/site/portfolio/calibre/challenges/mockup.png" alt="">
        </picture>  
      </div>
    </div>
	</div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'

export default {
  components: {PortfolioHeader, PortfolioAside},
}

</script>

<style lang="scss">
  .calibre-challenges {
    position: relative;
    z-index: 1;
    padding-bottom: 22rem;

    @media (max-width: 1400px) {
      padding-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__header {
      width: 41%;
      margin-left: auto;

      @media (max-width: 991px) {
        width: auto;
        margin-bottom: 3rem;
        margin-left: 0;
      }
    }

    &__content {
      position: relative;
    }

    &__mockup {
      img, source {
        position: absolute;
        width: 65%;
        max-height: 70rem;
        right: 41%;
        top: 50%;
        transform: translateY(-50%);
        object-fit: contain;

        @media (max-width: 1600px) {
          width: 70%;
          right: auto;
          left: 0;
          transform: translate(-2%, -50%);
        }

        @media (max-width: 991px) {
          width: 100%;
          transform: none;
          position: static;
          width: calc(100% + calc(var(--container-padding) * 2));
          transform: translateX(calc(var(--container-padding) * -1 + 2%));
        }

        @media (max-width: 575px) {
          transform: translateX(calc(var(--container-padding) * -1));
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
