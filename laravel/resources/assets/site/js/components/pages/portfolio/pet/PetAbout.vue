<template>
  <div class="pet-about">
    <div class="container">
      <div class="pet-about__hero">
        <div class="pet-about__hero-inner">
          <div class="pet-about__info">
            <div class="pet-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
              pet monitoring system
            </div>
            <h1 class="pet-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
              Boosting a Pet Monitoring App to Capture Charming Moments
            </h1>
            <div class="pet-about__info-desc portfolio-desc">
              How TopDevs helped to build a pet camera app for iOS for monitoring and interacting with your cute puppies and kittens.
            </div>
          </div>

          <img 
            class="pet-about__hero-img"
            src="/images/site/portfolio/pet/about/mockup.png" alt="" 
          >
        </div>
      </div>
    </div>

    <div class="pet-about__gist-list">
      <div class="container">
        <div class="pet-about__gist-list-inner">
          <PortfolioBlockGist
            class="pet-about__gist-item"
            v-for="(item, index) in gistItems" :key="index"
            :info="item"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  data() {
    return {
      gistItems: [
        {
          iconsColor: 'var(--case-color-blue)',
          titleColor: 'var(--case-color-blue)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: 'var(--case-color-blue)',
          titleColor: 'var(--case-color-blue)',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Media & Entertainment',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: '1 year',
              iconDefault: 'clock'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .pet-about {
    position: relative;
    z-index: 0;
    // height: 100vh;
    // min-height: 80rem;
    // max-height: 108rem;
    padding-top: var(--header-height);
    padding-bottom: 15rem;

    @media (max-width: 1400px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 6rem;
    }

    &__hero {
      position: relative;
      padding-top: 10%;

      @media (max-width: 991px) {
        margin-bottom: 4rem;
      }

      &-inner {
        position: relative;

        @media (max-width: 991px) {
          display: flex;
          flex-direction: column;
          align-items: center;
        }
      }

      &-img {
        position: absolute;
        right: 0;
        top: 0;
        width: 57%;
        transform: translate(19%, -13%);

        @media (max-width: 1700px) {
          transform: translate(12%, -13%)
        }

        @media (max-width: 1400px) {
          top: 50%;
          transform: translate(14%, -50%);
        }

        @media (max-width: 1100px) {
          transform: translate(12%, -50%)
        }

        @media (max-width: 991px) {
          position: static;
          transform: none;
          width: 100%;
          max-width: 60.6rem;
        }

        source, img {
          width: 100%;
        }
      }
    }

    &__info {
      width: 41%;
      margin-bottom: 8rem;

      @media (max-width: 1400px) {
        margin-bottom: 13rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 12.5rem;
      }

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        text-align: center;
        margin-bottom: 4.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 2.5rem;
      }

      &-title {
        color: var(--case-color-primary);
        font-weight: 800;

        @media (min-width: 1401px) {
          font-size: 6rem;
        }

        @media (max-width: 1400px) and (min-width: 992px) {
          width: 6em;
        }
      }

      &-subtitle {
        max-width: 18em;
        color: var(--case-color-secondary);

        @media (max-width: 991px) {
          max-width: 51.1rem;
        }
      }

      &-desc {
        max-width: 25em;

        @media (max-width: 991px) {
          margin-bottom: 0;
          max-width: 51.1rem;
        }
      }
    }

    &__gist {
      &-list {
        background: linear-gradient(0deg, #F6F6F6, #F6F6F6);
        padding: 6.5rem 0;

        @media (max-width: 1400px) {
          padding: 4rem 0;
        }

        @media (max-width: 575px) {
          padding: 3.5rem 0;
        }
      }

      &-list-inner {
        display: flex;

        @media (max-width: 640px) {
          flex-direction: column;
        }
      }

      &-item {
        margin-right: 8rem;

        &:last-child {
          margin-right: 0;
          margin-bottom: 0;
        }

        @media (max-width: 640px) {
          margin-bottom: 2.5rem;
        }
      }
    }
  }
</style>