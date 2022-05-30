<template>
  <div class="artv-solutions">
    <picture class="artv-solutions__bg-canvas">
      <source media="(max-width: 575px)" srcset="/images/site/portfolio/artv/solutions/bg-575.png">
      <source media="(max-width: 767px)" srcset="/images/site/portfolio/artv/solutions/bg-767.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/artv/solutions/bg-991.png">
      <source media="(max-width: 1199px)" srcset="/images/site/portfolio/artv/solutions/bg-1199.png">
      <source media="(max-width: 1400px)" srcset="/images/site/portfolio/artv/solutions/bg-1400.png">
      <img src="/images/site/portfolio/artv/solutions/bg.png" alt="">
    </picture>

    <img 
      class="artv-solutions__icon-circle"
      src="/images/site/portfolio/artv/solutions/icon-circle.svg" alt="" 
    >

    <div class="container">
      <div class="artv-solutions__content">
        <div class="artv-solutions__bg-circle"/>
        <PortfolioHeader
          class="artv-solutions__header"
          titleUppercase
          titleTextColor="white"
          titleText="Solutions"
          asideDescColor="white"
          :descText="descText"
          :maxWidth="981"
          headerColumnBreakpoint
          isCentered
        />

        <div class="artv-solutions__list">
          <div 
            class="artv-solutions__item"
            :class="{'artv-solutions__item--reverse': index % 2}"
            v-for="(item, index) in items" :key="index"
          >
            <div 
              v-if="index === 0"
              class="artv-solutions__item-divider"
            />
            <img 
              class="artv-solutions__mockup"
              :src="handleImgSrc(index)" alt="" 
            >
            <ArtvSolutionsCard
              class="artv-solutions__card"
              v-bind="item"
              :number="index + 1"
              :squaresSideReverse="!!(index % 2)"
              :squaresTurnTo="index % 2 ? 'right' : 'left'"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- <ArtvSolutionsItem
      title="AirPlay to Multiple Device"
      desc="The app allows users to stream audio and video clips on to different devices (TV, Bluetooth speaker, wireless headphones, etc.) via AirPlay technology."
      :number="1"
    /> -->
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import ArtvSolutionsCard from './ArtvSolutionsCard'

export default {
  components: {PortfolioHeader, ArtvSolutionsCard},

  data() {
    return {
      descText: [
        `We've started the app development with the identification of the app structure. Once a final decision was made up, we've first developed the main menu containing the lists of new, recommended, favorite, and already viewed video materials and posts. Our desire to make an app familiar to a random user so we've kept an eye on the popular Youtube app and at the same time implemented unique features. One of such is the possibility to play only music from a video clip by clicking the "Video Off" button.`, 
        `Probably, the most important advantage of the ArTv app over other similar solutions is the integration with TvOS. Thus users receive an exceptional video streaming quality on various Apple devices.`,
        `Along the way, other specific features were implemented such as miniature display, keyword search, detailed posts description, content sorting, full-screen mode under device rotation, likes, favorite playlists, and offline mode.`
      ],

      items: [
        {
          title: 'AirPlay to Multiple Device',
          desc: 'The app allows users to stream audio and video clips on to different devices (TV, Bluetooth speaker, wireless headphones, etc.) via AirPlay technology.',
        },
        {
          title: 'Miniature Display',
          desc: 'During playback, users can minimize the video and it will continue to play in miniature while continuing scrolling down the media list.',
        },
        {
          title: 'Search Engine',
          desc: 'There is easy-to-use search functionality that accurately finds the required content by the specified keywords - track title or artist name.',
        },
        {
          title: 'Favorite Playlists',
          desc: 'The likes feature makes up personal playlists sorted into groups within the menu window that also shows the history of the clips viewed previously.',
          colorReverse: true,
        },
        {
          title: 'Offline Mode',
          desc: 'Previously viewed content gets cached and can be played without the Internet. Also, some content can be downloaded without viewing to play it offline over time.',
          colorReverse: true,
        }
      ]
    }
  },


  methods: {
    handleImgSrc(index) {
      if (index === 1 || index === 3) return this.windowWidth < 576 ? `/images/site/portfolio/artv/solutions/mockup-${index + 1}-575.png` : `/images/site/portfolio/artv/solutions/mockup-${index + 1}.png`
      else return `/images/site/portfolio/artv/solutions/mockup-${index + 1}.png`
    }
  },
}
</script>

<style lang="scss">
  .artv-solutions {
    --pd-top: 18rem;
    position: relative;
    margin-bottom: 20rem;

    @media (max-width: 1400px) {
      --pd-top: 12rem;
      margin-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      --pd-top: 10rem;
      margin-bottom: 12rem;
    }

    @media (max-width: 991px) {
      --pd-top: 8rem;
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 8rem;
    }

    &__icon-circle {
      position: absolute;
      width: 17vw;
      left: 0;
      top: 25rem;
      transform: translateX(-50%);

      @media (max-width: 1400px) {
        top: 5rem;
      }

      @media (max-width: 991px) {
        top: 2rem;
        transform: translateX(-25%);
      }

      @media (max-width: 767px) {
        display: none;
      }
    }

    &__content {
      position: relative;
      padding-top: var(--pd-top);
    }

    &__bg-canvas {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 81%;
      z-index: -1;

      img, source {
        // object-fit: cover;
        width: 100%;
        height: 100%;
      }

      @media (max-width: 1400px) {
        height: 77%;
      }

      @media (max-width: 767px) {
        height: 79.7%;
      }

      @media (max-width: 575px) {
        height: 77%;
      }
    }

    &__bg-circle {
      --size: 10.3rem;
      width: var(--size);
      height: var(--size);
      border-radius: 50%;
      background: var(--case-color-yellow);
      position: absolute;
      top: 0;
      right: 0;
      transform: translateY(-50%);

      @media (max-width: 1400px) {
        --size: 8.2rem;
      }

      @media (max-width: 1199px) {
        --size: 7rem;
      }

      @media (max-width: 991px) {
        --size: 6rem;
      }

      @media (max-width: 575px) {
        --size: 4.6rem;
      }
    }

    &__header {
      margin: 0 auto;
      margin-bottom: 12rem;
      
      .portfolio-header__title {
        font-weight: bold;
        letter-spacing: 0.04em;
      }

      @media (max-width: 1400px) {
        margin-bottom: 10rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 9rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 7rem;
      }
    }

    &__item {
      position: relative;
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: 10rem;

      &:last-child {
        margin-bottom: 0;
      }

      &--reverse {
        flex-direction: row-reverse;
      }

      @media (max-width: 1400px) {
        margin-bottom: 9rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 8rem;
      }

      @media (max-width: 767px) {
        flex-direction: column;
        align-items: center;
        margin-bottom: 7.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 6rem;
      }

      &-divider {
        position: absolute;
        width: 14%;
        height: .5rem;
        right: -6.5rem;
        bottom: 10rem;
        background: white;
      
        @media (max-width: 1400px) {
          width: 10%;
          right: -2rem;
          bottom: 3rem;
        }

        @media (max-width: 1199px) {
          bottom: 0;
        }

        @media (max-width: 991px) {
          right: 0;
          transform: translateX(var(--container-padding));
        }

        @media (max-width: 767px) {
          display: none;
        }
      }
    }

    &__mockup {
      height: 100%; // fix for ipad

      @media (min-width: 768px) {
        width: 43%;
      }


      @media (max-width: 767px) {
        width: 100%;
        max-width: 36rem;
      }

      @media (max-width: 650px) {
        margin-bottom: 2rem;
      }

      @media (max-width: 440px) {
        max-width: 95%;
      }
    }

    &__card {
      width: 100%;

      @media (min-width: 768px) {
        width: 51.48%;
      }

      @media (max-width: 575px) {
        margin-top: -15rem;
      }

      @media (max-width: 370px) {
        margin-top: -38vw;
      }
    }
  }
</style>