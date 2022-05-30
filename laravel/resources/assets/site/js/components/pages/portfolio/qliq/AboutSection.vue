<template>
  <div class="about-section" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="about-section__hero">
        <div class="about-section__hero-info">
          <div class="about-section__hero-title text-h1 portfolio-text-h1">qliq</div>
          <h1 class="about-section__hero-subtitle portfolio-about-info__subtitle portfolio-title">
            Bringing a Secure Texting App to Improve Healthcare Communication
          </h1>
          <div class="about-section__hero-desc portfolio-desc" >How TopDevs helped to create a healthcare messaging app to provide efficient collaboration between medical professionals.</div>
          <img class="about-section__line about-section__line--top" src="/images/site/portfolio/qliq/about/line-top.svg" alt="">
        </div>

        <img 
          class="about-section__hero-img"
          src="/images/site/portfolio/qliq/about/phones.png"
        >
      </div>

      <div class="about-section__gist-blocks">
        <PortfolioBlockGist
          class="about-section__gist-block"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
          :hasWidthBreakpoint="767"
        />
      </div>
    </div>

    <picture class="about-section__bg">
      <source media="(max-width: 450px)" srcset="/images/site/portfolio/qliq/about/bg-360.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/qliq/about/bg-768.png">
      <source media="(max-width: 1400px)" srcset="/images/site/portfolio/qliq/about/bg-1200.png">
      <img src="/images/site/portfolio/qliq/about/bg.png" alt="Chris standing up holding his daughter Elva">
    </picture>

    <img class="about-section__line about-section__line--bottom" src="/images/site/portfolio/qliq/about/line-bottom.svg" alt="">
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
          bg: '/images/site/portfolio/qliq/about/gist-bg-1.svg',
          iconsColor: '#3E3E3E',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
              iconDefault: 'gps'
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          bg: '/images/site/portfolio/qliq/about/gist-bg-2.svg',
          iconsColor: '#3E3E3E',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Healthcare',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: '7 months',
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
  .qliq .about-section {
    position: relative;
    padding-top: calc(var(--header-height) * 1.35);
    padding-bottom: calc(var(--space-unit) * 5);

    @media (max-width: 991px) {
      padding-top: calc(var(--header-height) + calc(var(--space-unit) * 20));
    }

    @media (max-width: 450px) {
      padding-bottom: 0;
    }

    &__hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: calc(var(--space-unit) * 8);

      @media (max-width: 991px) {
        flex-direction: column;
      }

      @media (max-width: 450px) {
        margin-bottom: 0;
      }

      &-info {
        width: 44%;
        position: relative;

        @media (max-width: 991px) {
          width: 100%;
          max-width: 45rem;
          margin-bottom: calc(var(--space-unit) * 4);
          text-align: center;
        }
      }

      &-title {
        text-transform: uppercase;
        font-weight: 800;
        color: var(--case-color-primary);
        margin-bottom: 4rem;

        @media (min-width: 1200px) {
          font-size: 10rem;
        }

        @media (max-width: 1199px) {
          margin-bottom: 3.5rem;
        }

        @media (max-width: 767px) {
          margin-bottom: 3rem;
        }
      }

      &-subtitle {
        color: var(--case-color-secondary);
        margin-bottom: 2rem;
        letter-spacing: 1px;
        text-transform: capitalize;
        
        @media (max-width: 767px) {
          margin-bottom: 1.5rem;
        }
      }

      &-desc {
      }

      &-img {
        @media (min-width: 992px) {
          width: 55%;
          transform: translateX(13%);
        }

        @media (max-width: 1099px) {
          transform: translateX(7%);
        }

        @media (max-width: 991px) {
          position: static;
          transform: none;
          width: 100%;
          max-width: 57.5rem;
        }
      }
    }

    &__bg {
      img, source {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 97%;
        z-index: -1;

        @media (max-width: 991px) {
          height: 85%;
        }

        @media (max-width: 450px) {
          height: 69%;
        }
      }
    }

    &__gist {
      &-blocks {
        display: flex;

        @media (max-width: 450px) {
          flex-direction: column;
        }
      }

      &-block {
        margin-right: calc(var(--space-unit) * 4.5);

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
  }
</style>