<template>
  <div class="artv-results">
    <div class="artv-results__bg-fig"></div>

    <div class="container">
      <PortfolioHeader
        class="artv-results__header"
        titleTextColor="white"
        titleText="Results"
        titleUppercase
        asideDescColor="white"
        :descText="descText"
        headerColumnBreakpoint
        :maxWidth="971"
      />

      <div class="artv-results__list">
        <ArtvResultsCard
          class="artv-results__item" 
          v-bind="items[0]"
        >
          <template v-if="windowWidth < 576">
            <div class="artv-results-square"/>
            <div class="artv-results-square"/>
          </template>
        </ArtvResultsCard>

        <ArtvResultsCard
          class="artv-results__item" 
          v-bind="items[1]"
        >
          <template v-if="windowWidth > 991 || windowWidth < 576">
            <div class="artv-results-square"></div>
            <div class="artv-results-square">
              <img 
                class="artv-results__polygon"
                src="/images/site/portfolio/artv/results/polygon.svg" alt="" 
              >
            </div>
          </template>
        </ArtvResultsCard>
      
        <div class="artv-results-square">
          <img 
            class="artv-results__polygon"
            src="/images/site/portfolio/artv/results/polygon.svg" alt="" 
          >

          <div class="artv-results-square">
            <div class="artv-results-square"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import ArtvResultsCard from './ArtvResultsCard'

export default {
  components: {PortfolioHeader, ArtvResultsCard},

  data() {
    return {
      descText: [
        `We've started the app development with the identification of the app structure. Once a final decision was made up, we've first developed the main menu containing the lists of new, recommended, favorite, and already viewed video materials and posts. Our desire to make an app familiar to a random user so we've kept an eye on the popular Youtube app and at the same time implemented unique features. One of such is the possibility to play only music from a video clip by clicking the "Video Off" button.`, 
        `Probably, the most important advantage of the ArTv app over other similar solutions is the integration with TvOS. Thus users receive an exceptional video streaming quality on various Apple devices.`,
        `Along the way, other specific features were implemented such as miniature display, keyword search, detailed posts description, content sorting, full-screen mode under device rotation, likes, favorite playlists, and offline mode.`
      ],

      items: [
        {
          title: 'TvOS Expertise',
          desc: 'Our client has received the support of our iOS development team while implementing a solution for TvOS. '
        },
        {
          title: 'Multiple Devices',
          desc: 'Users get instant access to audio and video content on various Apple devices – from TV to wireless headphones.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .artv-results {
    position: relative;
    background: #232729;
    padding: 18rem 0 20rem;

    @media (max-width: 1400px) {
      padding: 12rem 0 18rem;
    }

    @media (max-width: 1199px) {
      padding: 10rem 0 14.5rem;
    }

    @media (max-width: 991px) {
      padding: 7.5rem 0 14rem;
    }

    @media (max-width: 575px) {
      padding: 6rem 0 8rem;
    }

    &__bg-fig {
      position: absolute;
      right: 0;
      top: 0;
      width: 7.8125%;
      height: 32.8125vw;
      transform: translateY(-35%);
      background: var(--case-color-yellow);

      @media (max-width: 670px) {
        height: 25vw;
        width: 6%;
      }
    }

    &__header {
      margin-bottom: 11rem;
      
      .portfolio-header__title {
        font-weight: bold;
        letter-spacing: 0.04em;
      }
    
      @media (max-width: 1400px) {
        margin-bottom: 9rem;
        max-width: 81.5rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 7.5rem;
        max-width: 71rem;
      }

      @media (max-width: 991px) {
        margin-bottom: 6.5rem;
        max-width: 53.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 4.5rem;
      }
    }

    &__list {
      display: grid;
      column-gap: 8.3%;
      grid-template-columns: 1fr 1fr;
      max-width: 112rem;

      & > .artv-results-square:last-child {
        display: none;

        @media (max-width: 991px) and (min-width: 576px) {
          display: block;
          position: absolute;
          right: 0;
          transform: translateY(-3rem);

          & > .artv-results-square {
            bottom: calc(100% + .5rem);

            & > .artv-results-square {
              right: calc(100% + .5rem);
            }
          }
        }
      }

      @media (max-width: 991px) {
        grid-template-columns: 1fr;
        row-gap: 6.8rem;
        max-width: 57rem;
      }
    }

    &__item {
      &:first-child {
        .artv-results-square {
          .artv-results-square {
            &:first-child {
              bottom: calc(100% + .5rem);
            }

            &:last-child {
              bottom: calc(100% + .5rem);
              left: calc(100% + .5rem);
            }
          }
        }
      }

      &:nth-child(2) {
        .artv-results-square {
          .artv-results-square {
            position: absolute;
            width: 100%;
            height: 100%;

            &:first-child {
              left: calc(100% + .5rem);
              bottom: calc(100% + .5rem);
            
              @media (max-width: 575px) {
                display: none;
              }
            }
            
            &:last-child {
              left: calc(200% + 1rem);
              bottom: calc(100% + .5rem);

              @media (max-width: 575px) {
                top: calc(100% + .5rem);
                left: calc(100% + .5rem);
              }
            }
          }
        }
      }
    }

    &__polygon {
      position: absolute;
      left: 50%;
      top: 30%;

      @media (max-width: 1585px) {
        display: none;
      }

      @media (max-width: 991px) {
        display: block;
        width: 18.2rem;
        position: absolute;
        top: 100%;
        right: 0;
        left: auto;
        transform: translate(50%, -30%) rotate(90deg);
      }

      @media (max-width: 700px) {
        display: none;
      }

      @media (max-width: 575px) {
        display: block;
        position: absolute;
        top: 0;
        left: 100%;
        transform: translate(-27%, 1%) rotate(180deg)
      }
    }

    &-square {
      --size: 23rem;
      position: absolute;
      width: var(--size);
      height: var(--size);
      background: rgba(255, 255, 255, 0.05);
    
      @media (max-width: 1199px) {
        --size: 18.9rem;
      }

      @media (max-width: 991px) {
        --size: 13.6rem;
      }
    }
  }
</style>