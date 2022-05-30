<template>
  <section class="helpy-about container" v-scroll-reveal="{distance: 0}">
    <div class="helpy-about__content">
      <div class="helpy-about__info">
        <div class="helpy-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
          helpy
          <div class="helpy-about__info-bg-circle"/>
        </div>
        <h1 class="helpy-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
          Tailoring a Medical Guide App to Improve Diagnosis in Healthcare
        </h1>
        <div class="helpy-about__info-desc portfolio-desc">
          How TopDevs delivered a mobile medical app for healthcare professionals to speed up medical check-ups and save time for patient treatment.
        </div>
      </div>

      <div class="helpy-about__gist-list">
        <PortfolioBlockGist
          class="helpy-about__gist-item"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
        />
      </div>

       <div class="helpy-about__img">
        <picture class="helpy-about__img-inner">
          <!-- <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/mockup-991.png"> -->
          <img src="/images/site/portfolio/helpy/about/mockup.png" alt="">
        </picture> 
      
        <img 
          class="helpy-about__bg-text"
          src="/images/site/portfolio/helpy/about/bg-text.svg" alt="" 
        >
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
  .helpy-about {
    padding-top: var(--header-height);
    height: 100vh;
    min-height: 90rem;
    max-height: 108rem;
    margin-bottom: calc(10rem + var(--about-text-offset));

    @media (max-width: 1500px) {
      max-height: 90rem;
      min-height: 75rem;
    }

    @media (max-width: 1400px) {
      margin-bottom: calc(4rem + var(--about-text-offset));
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

    &__bg-text {
      position: absolute;
      right: 100%;
      top: 100%;
      width: 55vw !important;
      transform: translate(21%, -25%);

      @media (max-width: 991px) {
        right: auto;
        left: 32%;
        width: 60% !important;
        transform: translateX(-50%);
      }

      @media (max-width: 575px) {
        width: 70% !important;
      }
    }

    &__info {
      width: 41.5%;
      margin-bottom: 6rem;

      @media (max-width: 1400px) {
        width: 46.5%;
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

      &-bg-circle {
        position: absolute;
        right: 0;
        top: 50%;
        transform: translate(10%, -60%);
        width: 12vw;
        height: 12vw;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        z-index: -1;

        @media (max-width: 1199px) {
          display: none;
        }
      }

      &-title {
        position: relative;
        width: fit-content;
        font-weight: 700;
        letter-spacing: .05em;
      
        @media (min-width: 1401px) {
          font-size: 9rem;
        }
      }

      &-subtitle {
        color: var(--case-color-orange);
        // max-width: 18em;
        text-transform: uppercase;
      }
    }

    &__gist {
      &-list {
        display: flex;

        @media (max-width: 1400px) {
          display: none;
        }
      }

      &-item {
        margin-right: 8rem;

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
      transform: translate(29%, -58%);

      img, source {
        width: 100%;
      }

      @media (max-width: 1199px) {
      }

      @media (max-width: 991px) {
        width: 145%;
        transform: translate(18%, -20%);
        max-width: 87rem;
        position: static;
        z-index: -1;
      }
    }
  }
</style>