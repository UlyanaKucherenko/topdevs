<template>
  <section class="leader-section">
    <div class="container">
      <SectionHeader
        title="Leadership"
        :desc="['With passionate leaders at the front, we', 'build a company capable to astonish', 'clients with flawless services.']"
        icon="/images/site/icons/abstract/header-7.svg"
      />

      <div class="leader-section__content">
        <div class="leader-section__photo" v-scroll-reveal>
          <img 
            class="leader-section__photo-img"
            src="/images/site/about-us/leader/photo.png"
          >
          <img 
            class="leader-section__photo-bg"
            src="/images/site/about-us/leader/dots.svg" alt="" 
          >
        </div>
        <div class="leader-section__card" v-scroll-reveal>
          <div class="leader-section__card-title text-lg text-semibold">Evgeniy Soloviev</div>
          <div class="leader-section__card-desc text-md text-semibold text-red-light">Chief Executive Officer</div>
          <div class="leader-section__card-quote text-lg text-semibold">There is a certain code of conduct at the heart of TopDevs: to solve even the most complex challenges, be open and flexible, and use clean code in development. It was these three basic rules that I put in my team in 2009, and these principles have been driving us for 11 years.</div>
          <img 
            class="leader-section__card-quote-img bg-absolute"
            src="/images/site/icons/big-quote.svg" alt="" 
          >
        </div>

        <img 
          class="leader-section__bg-circle bg-absolute"
          src="/images/site/about-us/leader/circle.svg" alt="" 
          v-cursor-follow="{multiplier: .2}"
        >
      </div>
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'

export default {
  components: {SectionHeader}
}
</script>

<style lang="scss">
  .about-us {
    .leader-section {
      position: relative;
      z-index: 0;
      padding: calc(var(--space-unit) * 8) 0;
      background: linear-gradient(140.51deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
      box-shadow: 8px 8px 24px rgba(124, 124, 124, 0.3), -8px -8px 24px #FFFFFF;
      
      &__content {
        display: flex;
        align-items: center;
        width: 90%;
        margin: 0 auto;
        position: relative;

        @media (max-width: 991px) {
          flex-direction: column;
        }
      }

      &__card {
        width: 55%;
        position: relative;

        @media (max-width: 991px) {
          width: 75%;
        }

        @media (max-width: 767px) {
          width: 100%;
        }

        &-title {
          margin-bottom: calc(var(--space-unit) * 1.5);
        }

        &-desc {
          margin-bottom: calc(var(--space-unit) * 4);
        }

        &-quote {
          line-height: 140%;
          letter-spacing: 0.03em;

          &-img {
            position: absolute;
            left: -24%;
            top: 4%;
            width: 30%;

            @media (max-width: 767px) {
              display: none;
            }
          }
        }
      }

      &__photo {
        width: 30%;
        box-shadow: 0px 8px 24px rgba(182, 182, 182, 0.63), -8px -8px 24px #FFFFFF;
        margin-right: 15%;
        position: relative;

        @media (max-width: 991px) {
          margin-right: 0;
          margin-bottom: calc(var(--space-unit) * 10);
          width: 40%;
        }

        @media (max-width: 767px) {
          width: 100%;
          max-width: 30rem;
        }

        &-img {
          width: 100%;
        }

        &-bg {
          width: 55%;
          position: absolute;
          right: -10%;
          bottom: -10%;
          z-index: -1;

          @media (max-width: 575px) {
            display: none;
          }
        }
      }

      &__bg-circle {
        right: -2%;
        top: -5%;

        @media (max-width: 575px) {
          display: none;
        }
      }
    }
  }
</style>