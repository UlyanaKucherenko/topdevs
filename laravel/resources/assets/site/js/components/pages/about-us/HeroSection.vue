<template>
  <HeroSection
    title="We Are TopDevs"
    :desc="['Topdevs Inc. is a digital transformation company and credible', 'technology partner specialized in UX/UI, web and mobile app', 'development. ', '', 'We help early-stage startups and established brands to architect', 'and re-imagine their businesses by delivering powerful digital', 'solutions that make a change on the market.']"
    btnText="Let's Talk"
  >
    <template v-slot:img>
      <img src="/images/site/about-us/hero-bg.svg" alt="" v-cursor-follow="{multiplier: .2}">
    </template>

    <template v-slot:bg>
      <img class="hero-section__bg-left-lines bg-absolute" src="/images/site/about-us/hero/lines-left.svg" alt="">
      <img class="hero-section__bg-right-lines bg-absolute" src="/images/site/about-us/hero/lines-right.svg" alt="">
    </template>

    <template #info>
      <img 
        class="hero-section__dots"
        src="/images/site/about-us/hero/bg-dots.svg" alt="" 
      >
    </template>
  </HeroSection>
</template>

<script>
import HeroSection from '@/js/components/pages/services/HeroSection'

export default {
  components: {HeroSection}
}
</script>

<style lang="scss">
  .about-us {
    .hero-section {
      max-height: 111rem;

      @media (min-width: 992px) {
        &__info {
          width: max-content;
        }

        &__desc {
          width: max-content;
        }

        &__img {
          width: 30%;
          right: 5%;
        }

        &__title {
          text-transform: uppercase;
        }
      }

      @media (max-width: 991px) {
        display: flex;
        align-items: center;
        
        &__info {
          margin-bottom: 0;
        }

        &__img {
          display: none;
        }
      }

      &__dots {
        position: absolute;
        top: calc(100% + 5rem);
        left: 2.5rem;

        @media (max-width: 991px) {
          display: none;
          // top: calc(100% + 2rem);
          // left: 50%;
          // transform: translateX(-50%);
        }
      }

      &__img {
        @media (max-width: 991px) {
          display: none;
        }
      }

      &__bg {
        &-left-lines, &-right-lines {
          @media (max-width: 991px) {
            display: none;
          }
        }

        &-left-lines {
          left: 0;
          top: 0;
          opacity: .75;
        }

        &-right-lines {
          right: 0;
          bottom: -5vh;
          opacity: .75;
        }
      }
    }
  }
</style>