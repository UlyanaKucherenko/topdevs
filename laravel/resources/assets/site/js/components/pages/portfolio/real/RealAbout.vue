<template>
  <div class="real-about" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="real-about__content">
        <div class="real-about__hero portfolio-about-info">
          <div class="real-about__hero-title portfolio-about-info__title text-h1 portfolio-text-h1">real page</div>
          <h1 class="portfolio-title portfolio-about-info__subtitle text-white-clear">
            Providing a Property Management App to Inspect Real Estate Efficiently
          </h1>
          <div class="real-about__hero-desc portfolio-desc" >How TopDevs helped to create a rental property management app for iOS to conduct real estate property inspections and address service requests efficiently.</div>
          <div class="real-about__gist-blocks">
            <PortfolioBlockGist
              class="real-about__gist-block"
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />
          </div>
        </div>

        <picture 
          class="real-about__hero-img"
        >
          <source media="(max-width: 575px)" srcset="/images/site/portfolio/real/about/mockup-741.png">
          <source media="(max-width: 991px)" srcset="/images/site/portfolio/real/about/mockup-1245.png">
          <img src="/images/site/portfolio/real/about/mockup.png" alt="">
        </picture>
      </div>
    </div>
    <img class="real-about__fig-top" src="/images/site/portfolio/real/about/fig-top.svg" alt="">
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
          bg: '/images/site/portfolio/real/about/gist-bg-1.svg',
          iconsColor: '#FFDC23',
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
          bg: '/images/site/portfolio/real/about/gist-bg-2.svg',
          iconsColor: '#FFDC23',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Real Estate',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: 'June 2018 – Present',
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
  .real-about {
    position: relative;
    z-index: 0;
    padding: calc(var(--header-height) + calc(var(--space-unit) * 20)) 0 calc(var(--space-unit) * 20);
    background: linear-gradient(180deg, rgba(36, 107, 191, 0.3) 0%, rgba(61, 131, 214, 0.3) 41.15%, rgba(103, 166, 241, 0.3) 100%), radial-gradient(67.06% 106.21% at 67.06% 47.35%, #67A6F1 0%, #3D83D6 74.16%, #246BBF 100%);

    @media (max-width: 991px) {
      padding: calc(var(--header-height) + calc(var(--space-unit) * 20)) 0 calc(var(--space-unit) * 12);
    }

    &__content {
      position: relative;
      display: flex;
      align-items: center;
      height: 100%;

      @media (max-width: 991px) {
        flex-direction: column;
      }
    }

    &__hero {
      position: relative;
      width: 44%;

      @media (max-width: 991px) {
        flex-direction: column;
        width: 100%;
        max-width: 45rem;
        margin-bottom: calc(var(--space-unit) * 8);
        text-align: center;
      }

      &-title {
        color: var(--case-color-primary);
      }

      &-subtitle {
        color: var(--case-color-secondary);
      }

      &-desc {
        margin-bottom: 8rem;
        color: #FEFEFE;

        @media (max-width: 1400px) {
          margin-bottom: 0;
        }
      }

      &-img {
        position: absolute;
        right: 0;
        width: 60%;
        transform: translateX(17%);

        @media (max-width: 1720px) {
          width: 56%;
          transform: translateX(8%);
        }

        @media (max-width: 991px) {
          position: static;
          width: 100%;
          max-width: 65rem;
          transform: translateX(-2%);
        }

        @media (max-width: 575px) {
          transform: none;
        }

        source, img {
          width: 100%;
        }
      }
    }

    &__gist {
      &-blocks {
        // position: absolute;
        left: 0;
        // top: calc(100% + calc(var(--space-unit) * 8));
        width: max-content;
        display: flex;
        color: var(--white-clear);

        @media (max-width: 1400px) {
          display: none;
        }
      }

      &-block {
        margin-right: 8rem;

        &:last-child {
          margin-right: 0;

          @media (max-width: 450px) {
            margin-left: auto;
            margin-top: -3rem;
          }

          @media (max-width: 370px) {
            margin-top: 0;
          }
        }
      }
    }

    &__line {
      position: absolute;
      width: 16rem;

      @media (max-width: 1700px) {
        width: 14rem;
      }

      @media (max-width: 1400px) {
        width: 10rem;
      }

      @media (max-width: 700px) {
        width: 6rem;        
      }


      &--top {
        position: absolute;
        left: 0;
        bottom: calc(100% + 1rem);
        transform: translateX(-60%);

        @media (max-width: 1700px) {
          bottom: calc(100%);
          transform: translateX(-37%);
        }

        @media (max-width: 991px) {
          bottom: 92%;
          transform: rotate(-22deg);
        }

        @media (max-width: 700px) {
          left: 10%;
        }
      }

      &--bottom {
        position: absolute;
        bottom: 4%;
        left: 57%;

        @media (max-width: 1400px) {
          left: 69%;
        }

        @media (max-width: 991px) {
          left: 73%;
          bottom: -6%;
        }

        @media (max-width: 450px) {
          left: 73%;
          bottom: 15%;
        }
      }
    }

    &__fig-top {
      position: absolute;
      top: var(--header-height);
      left: 0;
      width: 8vw;

      @media (max-width: 1300px) {
        width: 9rem;
      }

      @media (max-width: 1199px) {
        width: 7.5rem;
      }

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>