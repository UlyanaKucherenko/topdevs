<template>
  <div class="real-solutions" v-scroll-reveal>
    <div class="container">
      <PortfolioHeader
        class="real-solutions__header"
        titleText="Solutions"
        titleTextColor="var(--white-clear)"
        asideDescColor="#FEFEFE"
        :descText="[
          'Initially our team has helped the client to improve the existing functionality and make sure the app is of the highest possible quality through bug fixing techniques.',
          'Though in the third version of the application it was agreed to make a complete app redesign. We\'ve added a new color theme reflecting various colors for the main app color palette. The RealPage application was developed solely for tablets.'
        ]"
        :headerColumnBreakpoint="1400"
      >
        <img 
          class="real-header-img"
          src="/images/site/portfolio/real/solutions/header-fig-pre.svg" alt=""
          slot="titleImg"
        >
      </PortfolioHeader>

      <div class="real-solutions__list">
        <div 
          class="real-solutions__item"
          :class="{'real-solutions__item--reverse': index % 2}"
          v-for="(item, index) in items" :key="index"
          v-scroll-reveal
        >
          <img 
            class="real-solutions__item-img"
            :src="item.imgURL" alt="" 
          >
          <div class="real-solutions__item-info">
            <div class="real-solutions__item-number">{{ item.number }}</div>
            <h3 class="real-solutions__item-title portfolio-title">{{ item.title }}</h3>
            <div class="real-solutions__item-subtitle portfolio-desc portfolio-desc--sm">{{ item.subtitle }}</div>
          </div>
        </div>
      </div>
    </div>

    <img 
      class="real-solutions__fig-bg-left"
      src="/images/site/portfolio/real/solutions/fig-bg-left.svg" alt="" 
    >
    <img 
      class="real-solutions__fig-bg-right"
      src="/images/site/portfolio/real/solutions/fig-bg-right.svg" alt="" 
    >
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  data() {
    return {
      items: [
        {
          number: '1',
          title: 'App Statistics',
          subtitle: 'Users can gather and review statistics within the app to get insights on how to improve performed services.',
          imgURL: '/images/site/portfolio/real/solutions/mockup-1.png'
        },
        {
          number: '2',
          title: 'AR Ruler',
          subtitle: 'A new AR Ruler allows users to measure accurately the dimensions of the living space in the most convenient way.',
          imgURL: '/images/site/portfolio/real/solutions/mockup-2.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .real-solutions {
    position: relative;
    z-index: 0;
    padding: calc(var(--space-unit) * 14) 0;
    background: linear-gradient(180deg, rgba(103, 166, 241, 0.3) 0%, rgba(61, 131, 214, 0.3) 20.83%, rgba(36, 107, 191, 0.3) 52.6%, rgba(61, 131, 214, 0.3) 75.52%, rgba(103, 166, 241, 0.3) 100%), radial-gradient(61.69% 88.94% at 61.69% 73.9%, #67A6F1 0%, #3D84D6 59.45%, #246BBF 100%);

    @media (max-width: 991px) {
      padding: 10rem 0;
    }

    @media (max-width: 767px) {
      padding: 7rem 0;
    }

    &__header {
      position: relative;
      margin-bottom: calc(var(--space-unit) * 7.4); 

      @media (max-width: 1400px) {
        max-width: 71rem;
      }
    }

    &__item {
      display: flex;
      align-items: center;
      margin-bottom: 5rem;

      @media (max-width: 1500px) {
        padding: 0;
      }

      @media (max-width: 700px) {
        flex-direction: column;
        margin-top: 0;
        margin-bottom: 6rem;

        &:last-child {
          margin-bottom: 0;
        }
      }

      &:first-child {
        margin-top: 0;
      }

      &--reverse {
        @media (min-width: 701px) {
          flex-direction: row-reverse;
          justify-content: flex-start;

          .real-solutions__item {
            &-info {
              margin-left: auto;
            }

            &-img {
              margin-right: -2.5%;
              margin-left: 4vw;
            }
          }
        }
      }

      &-img {
        width: 52%;
        margin-right: 4vw;
        margin-left: -2.5%;

        @media (max-width: 700px) {
          margin: 0;
          width: 100%;
          max-width: 36rem;
        }
      }

      &-info {
        width: 50rem;
        position: relative;
        padding-left: 8rem;

        @media (max-width: 991px) {
          width: 47.5%;
          padding-left: 6rem;
        }

        @media (max-width: 700px) {
          margin-top: 2rem;
          width: 100%;
          max-width: 50rem;
        }
      }

      &-number {
        position: absolute;
        top: 0;
        left: 0;
        transform: translateY(-30%);
        z-index: -1;
        font-size: 25rem;
        font-weight: 900;
        font-family: var(--Muli);
        color: rgba(255, 255, 255, 0.15);
        letter-spacing: 1px;

        @media (max-width: 1199px) {
          font-size: 22.5rem;
        }

        @media (max-width: 991px) {
          font-size: 20.5rem;
        }

        @media (max-width: 700px) {
          font-size: 15.5rem;
          transform: translateY(-17%);
        }
      }

      &-title {
        color: var(--white-clear);
        margin-bottom: calc(var(--space-unit) * 1.5)
      }

      &-subtitle {
        color: #FEFEFE;
      }
    }

    &__fig-bg {
      &-left {
        position: absolute;
      }

      &-right {
        width: 9.5%;
        position: absolute;
        top: 42rem;
        right: 0;

        @media (max-width: 1400px) {
          top: 15rem;
        }

        @media (max-width: 991px) {
          display: none;
        }
      }

      &-left {
        width: 16%;
        position: absolute;
        bottom: 16rem;
        left: -1%;

        @media (max-width: 1600px) {
          display: none;
        }
      }
    }
  }
</style>