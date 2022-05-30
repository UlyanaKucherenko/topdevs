<template>
  <section class="artv-about" v-scroll-reveal="{distance: 0}">
    <div class="artv-about__container container">
      <div class="artv-about__content">
        <div class="artv-about__bg-block"></div>
        <div class="artv-about__info">
          <div class="artv-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
            ARTV
          </div>
          <div class="artv-about__info-divider"/>
          <h1 class="artv-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
            Developing a Video Streaming Service
          </h1>
          <div class="artv-about__info-desc portfolio-desc">
            How TopDevs helped to create a video streaming app for TvOS that provides amazing experiences with stunning picture quality and immersive sound.
          </div>
        </div>

        <picture class="artv-about__img">
          <img src="/images/site/portfolio/artv/about/mockup.png" alt="">
        </picture> 
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  data() {
    return {
      gistItems: [
        {
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
          rubricColor: 'white',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'Wordlwide',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS, SDK',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
          rubricColor: 'white',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2017 - Present',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Logistics & Tracking, Retail & E-Commerce',
              iconDefault: 'case'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .artv-about {
    height: 100vh;
    overflow: hidden;
    position: relative;
    min-height: 80rem;
    max-height: 108rem;

    @media (max-width: 1550px) {
      max-height: 90rem;
    }

    @media (max-width: 1350px) {
      max-height: 80rem;
      min-height: 67rem;
    }

    @media (max-width: 1200px) {
      max-height: 72rem;
    }

    @media (max-width: 1199px) {
      // margin-bottom: 6rem;
    }

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
      margin-bottom: 7rem;
    }

    @media (max-width: 575px) {
      padding-top: calc(var(--header-height) + 3rem);
      margin-bottom: 4rem;
    }

    &__container {
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    &__bg-block {
      position: absolute;
      background: var(--case-color-yellow);
      height: 100%;
      width: 1000%;
      left: 19.3rem;
      top: 5.6rem;
      z-index: -1;
      
      @media (max-width: 1400px) {
        left: 16.5rem;
        top: 4.8rem;
      }

      @media (max-width: 1199px) {
        left: 11.6rem;
        top: 3.5rem;
      }

      @media (max-width: 991px) {
        height: 90%;
        left: 50%;
        transform: translateX(-7rem);
      }

      @media (max-width: 575px) {
        top: 2.2rem;
        transform: translateX(-5.4rem);
      }
    }

    &__content {
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;

      @media (max-width: 991px) {
        flex-direction: column;
        align-items: center;
      }
    }

    &__info {
      width: 37%;

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 46rem;
        text-align: center;
        margin-bottom: 7rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 2.5rem;
      }

      &-title {
        font-size: 10rem;
        margin-bottom: 5.5rem;

        @media (max-width: 1400px) {
          font-size: 8.5rem;
          margin-bottom: 4.5rem;
        }

        @media (max-width: 1199px) {
          font-size: 6rem;
          margin-bottom: 4rem;
        }

        @media (max-width: 575px) {
          font-size: 4rem;
          margin-bottom: 2rem;
        }
      }

      &-divider {
        width: 10rem;
        height: 1rem;
        margin-bottom: 7.5rem;
        background: var(--case-color-primary);

        @media (max-width: 1400px) {
          width: 8.8rem;
          height: .9rem;
          margin-bottom: 6rem;
        }

        @media (max-width: 1199px) {
          width: 6.2rem;
          height: .7rem;
          margin-bottom: 5.5rem;
        }

        @media (max-width: 575px) {
          width: 5rem;
          height: .5rem;
          margin-bottom: 3rem;
        }
      }

      &-subtitle {
      }

      &-desc {
        @media (min-width: 992px) {
         max-width: 19em;
        }
      }
    }

    &__gist {
      &-list {
        position: relative;

        &-inner {
          @media (max-width: 1400px) {
            display: none;
          }
        }
      }

      &-item {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }

      &-divider {
        position: absolute;
        right: calc(100% + 4rem);
        top: 0;
        height: 100%;
      
        @media (max-width: 1400px) {
          position: static;
          width: 14rem;
        }
      }
    }

    &__img {
      position: absolute;
      width: 59%;
      right: 0;
      top: 60%;
      transform: translate(0, -50%);

      img, source {
        width: 100%;
      }

      @media (max-width: 991px) {
        position: static;
        transform: none;
        width: 100%;
        max-width: 51.4rem;
        pointer-events: none;
      }

      @media (max-width: 575px) {
        max-width: 42.4rem;
      }
    }
  }
</style>