<template>
  <div class="calibre-about" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="calibre-about__content">
        <div class="calibre-about__hero portfolio-about-info">
          <div class="calibre-about__hero-title portfolio-about-info__title text-h1 portfolio-text-h1">calibre</div>
          <h1 class="calibre-about__hero-subtitle portfolio-title portfolio-about-info__subtitle">
            Establishing an Electronic Passport for Luxury Watches 
          </h1>
          <div class="calibre-about__hero-desc portfolio-desc" >
            How TopDevs built a digital ecosystem for watch owners allowing them to track the history of expensive watches and protect them from fakes. 
          </div>
          <div class="calibre-about__divider"/>
          <div class="calibre-about__gist-blocks">
            <PortfolioBlockGist
              class="calibre-about__gist-block"
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />
          </div>
        </div>

        <picture 
          class="calibre-about__hero-img"
        >
          <source media="(max-width: 575px)" srcset="/images/site/portfolio/calibre/about/mockup-row-730.png">
          <source media="(max-width: 991px)" srcset="/images/site/portfolio/calibre/about/mockup-row-1536.png">
          <img src="/images/site/portfolio/calibre/about/mockup.png" alt="">
        </picture>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},
  props: {gistItems: Array},

  data() {
    return {
    }
  },
}
</script>

<style lang="scss">
  .calibre-about {
    position: relative;
    z-index: 0;
    height: 100vh;
    min-height: 80rem;
    max-height: 108rem;
    padding-top: var(--header-height);
    background: radial-gradient(30.34% 31.22% at 63.93% 66.84%, #FFF3EA 0%, #FFE9D9 100%, #FFE9D9 100%);

    @media (max-width: 1450px) {
      min-height: 70rem;
    }

    @media (max-width: 1199px) {
      max-height: 78rem;
      min-height: 65rem;
    }

    @media (max-width: 991px) {
      padding: calc(var(--header-height) + calc(var(--space-unit) * 20)) 0 calc(var(--space-unit) * 12);
      height: auto;
      min-width: none;
      max-height: none;
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
        font-weight: 900;
        text-shadow: -2px -2px 5px rgba(255, 255, 255, 0.6), 2px 2px 5px rgba(0, 0, 0, 0.2);

        @media (min-width: 1200px) {
          // font-size: 10rem;
        }
      }

      &-subtitle {
        max-width: 18em;
        color: var(--case-color-primary);

        @media (max-width: 991px) {
          max-width: none;
        }
      }

      &-desc {
        max-width: 25em;
        margin-bottom: 5.5rem;

        @media (max-width: 991px) {
          margin-bottom: 0;
          max-width: none;
        }
      }

      &-img {
        position: absolute;
        right: 0;
        top: 55%;
        width: 67.46%;
        transform: translate(22%, -50%);

        @media (max-width: 1450px) {
          top: 50%;
          transform: translate(22%, -45%);
        }

        @media (max-width: 991px) {
          position: static;
          width: calc(100% + calc(var(--container-padding) * 2));
          transform: none;
          max-width: 75rem;
        }

        source, img {
          width: 100%;
        }
      }
    }

    &__divider {
      width: 9.5rem;
      border: 2px solid #FFFFFF;
      border-radius: 20px;
      margin-bottom: 7.7rem;
    
      @media (max-width: 1450px) {
        margin-bottom: 0;
      }

      @media (max-width: 991px) {
        display: none;
      }
    }

    &__gist {
      &-blocks {
        width: max-content;
        display: flex;

        @media (max-width: 1450px) {
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

      @media (max-width: 1450px) {
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

        @media (max-width: 1450px) {
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