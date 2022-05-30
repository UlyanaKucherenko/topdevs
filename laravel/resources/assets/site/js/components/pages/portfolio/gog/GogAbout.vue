<template>
  <section class="gog-about" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="gog-about__content">
        <div class="gog-about__bg-text">sdk</div>

        <div class="gog-about__info">
          <div class="gog-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
            GOG
          </div>
          <h1 class="gog-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
            Establishing a Solution with SDK for Worldwide Businesses
          </h1>
          <div class="gog-about__info-desc portfolio-desc">
            How TopDevs made a solution for businesses that helps to provide a personalized experience by tracking customer preferences and habits.
          </div>
        </div>

        <div class="gog-about__gist-list">
          <div class="gog-about__gist-list-inner">
             <PortfolioBlockGist
              class="gog-about__gist-item"
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />
          </div>

          <GogDivider
            class="gog-about__gist-divider"
            color="white"
            dividerColor="white"
            :lineWeight="1"
            :circleRadius="7"
            :circleMargin="15"
            modeVertical
            :breakpoints="{
              1400: {
                modeVertical: false
              }
            }"
          />
        </div>

        <div class="gog-about__img">
          <picture class="gog-about__img-inner">
            <!-- <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/mockup-991.png"> -->
            <img src="/images/site/portfolio/gog/about/mockup.png" alt="">
          </picture> 
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'
import GogDivider from './global/GogDivider'

export default {
  components: {PortfolioBlockGist, GogDivider},

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
  .gog-about {
    height: 100vh;
    overflow: hidden;
    position: relative;
    min-height: 80rem;
    max-height: 108rem;
    background: linear-gradient(180deg, #101034 0%, #2A2A64 100%);
    margin-bottom: 20rem;

    @media (max-width: 1550px) {
      max-height: 90rem;
    }

    @media (max-width: 1400px) {
      margin-bottom: 7rem;
    }

    @media (max-width: 1350px) {
      max-height: 80rem;
      min-height: 67rem;
    }

    @media (max-width: 1200px) {
      max-height: 72rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 6rem;
    }

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
    }

    @media (max-width: 575px) {
      margin-bottom: 3.5rem;
    }

    &__content {
      @media (min-width: 992px) {
        padding-top: var(--header-height);
      }

      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
      position: relative;

      @media (max-width: 991px) {
        flex-direction: column;
        align-items: center;
      }
    }

    &__bg-text {
      background: linear-gradient(179.85deg, #F1F5F9 0.13%, rgba(241, 245, 249, 0) 94.19%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      position: absolute;
      right: 42%;
      top: 46%;
      font-size: 25rem;
      font-family: var(--ProximaNova);
      font-weight: 800;
      letter-spacing: 0.05em;
      text-transform: uppercase;
      opacity: .06;

      @media (max-width: 1400px) {
        font-size: 20rem;
        right: 45%;
        top: 60%;
      }

      @media (max-width: 1199px) {
        font-size: 18rem;
      }

      @media (max-width: 991px) {
        font-size: 19vw;
        left: 65%;
        top: 21%;
        right: auto;
      }

      @media (max-width: 767px) {
        display: none;
      }
    }

    &__info {
      width: 40%;
      margin-bottom: 9rem;

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 45rem;
        text-align: center;
        margin-bottom: 4rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3rem;
      }

      &-title {
        color: var(--case-color-primary);
      }

      &-subtitle {
        color: white;
      }

      &-desc {
        color: var(--case-color-white);
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
      width: 46.5%;
      right: 0;
      top: 50%;
      transform: translate(5%, -50%);

      img, source {
        width: 100%;
      }

      @media (max-width: 1400px) {
        width: 50%;
      }

      @media (max-width: 991px) {
        position: static;
        transform: none;
        width: 100%;
        max-width: 47rem;
        margin: -20rem 0 -16rem;
        pointer-events: none;
      }
      
      @media (max-width: 500px) {
        margin: -40% 0 -30%;
      }
    }
  }
</style>