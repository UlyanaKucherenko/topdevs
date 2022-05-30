<template>
  <section class="deal-about container" v-scroll-reveal="{distance: 0}">
    <div class="deal-about__content">
      <!-- <div class="deal-about__bg-circle ratio"/> -->

      <div class="deal-about__info">
        <div class="deal-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
          AUTODEAL
        </div>
        <h1 class="deal-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
          Maintaining a One-for-All Solution in Car Shipping Industry
        </h1>
        <div class="deal-about__info-desc portfolio-desc">
          How TopDevs helped to create a mobile app for car shipping that allows us to conduct car inspections and protect the best interests of both car transportation providers and customers.
        </div>
      </div>

      <div class="deal-about__gist-list">
        <PortfolioBlockGist
          class="deal-about__gist-item"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
        />

        <div class="deal-about__gist-circle"/>
      </div>

       <div class="deal-about__img">
        <picture class="deal-about__img-inner">
          <!-- <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/mockup-991.png"> -->
          <img src="/images/site/portfolio/deal/about/mockup.png" alt="">
        </picture> 
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  props: {
    gistItems: Array
  }
}
</script>

<style lang="scss">
  .deal-about {
    padding-top: var(--header-height);
    height: 100vh;
    min-height: 90rem;
    max-height: 108rem;
    margin-bottom: 10rem;

    @media (max-width: 1500px) {
      max-height: 90rem;
      min-height: 75rem;
    }

    @media (max-width: 1350px) {
      max-height: 80rem;
      min-height: 67rem;
    }

    @media (max-width: 1200px) {
      max-height: 72rem;
    }

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
      margin-bottom: 7rem;
    }

    &__bg-circle {
      --height-percentage: 100%;
      position: absolute;
      left: -8%;
      bottom: 2%;
      z-index: -1;
      width: 19%;
      max-width: 290px;
      max-height: 290px;
      border-radius: 50%;
      background: rgba(252, 252, 252, .6);
    }

    &__content {
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;

      @media (max-width: 991px) {
        align-items: center;
      }
    }

    &__info {
      max-width: 48.1rem;
      margin-bottom: 6rem;

      @media (max-width: 1400px) {
        width: 40%;
      }

      @media (max-width: 1199px) {
        margin-bottom: 0;
      }

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 46rem;
        text-align: center;
        margin-bottom: 3rem;
      }

      &-title {
        color: var(--case-color-primary);
      }

      &-subtitle {
        max-width: 18em;
      }
    }

    &__gist {
      &-circle {
        --size: 29rem;
        position: absolute;
        left: 0;
        bottom: 0;
        transform: translate(-40%, 49%);
        z-index: -1;
        width: var(--size);
        height: var(--size);
        max-width: 290px;
        max-height: 290px;
        border-radius: 50%;
        background: rgba(252, 252, 252, .6);
      }

      &-list {
        position: relative;

        @media (max-width: 1400px) {
          display: none;
        }
      }

      &-item {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__img {
      position: absolute;
      width: 68.8%;
      right: 0;
      top: 50%;
      transform: translate(16%, -50%);

      img, source {
        width: 100%;
      }

      @media (max-width: 1199px) {
        width: 77%;
        transform: translate(24%, -50%);
      }

      @media (max-width: 991px) {
        max-width: 768px;
        position: static;
        transform: none;
        width: calc(100% + var(--container-padding) * 2 + 10%);
        margin-left: 5%;
      }
    }
  }
</style>