<template>
  <section class="bark-about" v-scroll-reveal="{distance: 0}">
    <div class="bark-about__bg-circle ratio"/>
    <div class="container">
      <div class="bark-about__content">
        <!-- <div class="bark-about__bg-circle ratio"/> -->

        <div class="bark-about__info">
          <div class="bark-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
            Babelbark
          </div>
          <h1 class="bark-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
            Enriching a Health Monitor App for Tracking Your Pet  
          </h1>
          <div class="bark-about__info-desc portfolio-desc">
            How TopDevs reinforced a pet management app for the iOS system to connect pet parents with service providers in the pet care industry.
          </div>
        </div>

        <div class="bark-gist-list">
          <BarkBlockPreBullet class="bark-about__gist-list">
            <PortfolioBlockGist
              class="bark-about__gist-item"
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />

            <div class="bark-about__gist-circle"/>
          </BarkBlockPreBullet>
        </div>

         <div class="bark-about__img">
          <img
            v-if="windowWidth > 991"
            class="bark-about__bg-circles"
            src="/images/site/portfolio/bark/about/bg-circles-2.svg" alt="" 
          >

          <img
            v-else
            class="bark-about__bg-circles"
            src="/images/site/portfolio/bark/about/bg-circles-3.svg" alt="" 
          >

          <picture class="bark-about__img-inner">
            <source media="(max-width: 991px)" srcset="/images/site/portfolio/bark/about/mockup-991.png">
            <img src="/images/site/portfolio/bark/about/mockup.png" alt="">
          </picture> 
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'
import BarkBlockPreBullet from './global/BarkBlockPreBullet'

export default {
  components: {PortfolioBlockGist, BarkBlockPreBullet},

  props: {
    gistItems: Array
  }
}
</script>

<style lang="scss">
  @mixin adaptHeight($maxWidth, $minWidth, $height) {
    @media (max-width: #{$maxWidth}px) and (min-width: #{$minWidth+1}px) and (min-height: #{$height}px) {
      max-height: unset;
      min-height: unset;
      height: unset;
      padding-top: calc(var(--header-height) + 10vw);
      --bark-about-circle-mg: var(--bark-about-mg-bt);
      --bark-about-circle-tr-y: 0%;
      --bark-about-mg-bt: 14rem;

      @media (max-width: 1250px) {
        --bark-about-mg-bt: 7rem;
      }
    }
  }

  .bark-about {
    --bark-about-mg-bt: 4rem;
    --bark-about-circle-mg: 0px;
    --bark-about-circle-tr-y: 50%;
    position: relative;
    padding-top: var(--header-height);
    height: 100vh;
    min-height: 90rem;
    max-height: 108rem;
    margin-bottom: var(--bark-about-mg-bt);

    @media (max-width: 1500px) {
      max-height: 100rem;
      min-height: 75rem;
    }

    @include adaptHeight(1500, 1350, 1000);

    @media (max-width: 1350px) {
      max-height: 80rem;
      min-height: 67rem;
    }

    @include adaptHeight(1350, 1200, 800);
    
    @media (max-width: 1200px) {
      max-height: 72rem;
    }

    @include adaptHeight(1200, 991, 720);

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
      --bark-about-mg-bt: 3.5rem;
    }

    &__bg-circle {
      position: absolute;
      width: 12vw;
      bottom: 0;
      left: 0;
      transform: translate(-50%, calc(40% + 4rem));
      background: #E1D3EF;
      border-radius: 50%;

      @media (max-width: 1750px) {
        transform: translate(-50%, 4rem);
      }

      @media (max-width: 1500px) {
        width: 10.5vw;
        bottom: calc(var(--bark-about-circle-mg) * -1);
        transform: translate(-50%, var(--bark-about-circle-tr-y));
      }

      @media (max-width: 1199px) {
        width: 8vw;
      }

      @media (max-width: 1099px) {
        width: 6vw;
      }

      @media (max-width: 991px) {
        width: 13vw;
        top: calc(var(--header-height) + 7rem);
        bottom: auto;
        transform: translateX(-50%);
      }

      @media (max-width: 575px) {
        display: none;
      }
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
        max-width: 40rem;

        @media (max-width: 1400px) {
          max-width: 15em;
        }
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
      width: 46.8%;
      right: 0;
      top: 50%;
      transform: translateY(-50%);

      img, source {
        width: 100%;
      }

      @media (max-width: 991px) {
        width: 100%;
        // max-width: 768px;
        position: static;
        width: calc(100% + var(--container-padding));
        transform: translateX(calc(var(--container-padding) * .5));
      }
    }

    &__bg-circles {
      position: absolute;
      left: -36%;
      bottom: -10%;
      z-index: -1;

      @media (min-width: 992px) {
        width: 228% !important;
      }

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>