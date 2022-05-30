<template>
  <section class="meld-challenges" v-scroll-reveal>
    <div class="container meld-challenges__content">
      <div class="meld-challenges__square">
        <h2 class="meld-challenges__title-big">challenges</h2>
        <img 
          class="meld-challenges__line"
          src="/images/site/portfolio/meld/challenges/line.svg" alt="" 
        >
        <div class="meld-challenges__title-small text-lg portfolio-text-lg">challenges</div>
      </div>

      <div class="meld-challenges__list">
        <PortfolioBlockBase
          class="meld-challenges__item"
          v-for="(item, index) in challengesItems" :key="index"
          v-bind="item"
        />
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioBlockBase},

  data() {
    return {
      challengesItems: [
        {
          icon: '/images/site/portfolio/meld/challenges/icon-1.svg',
          descText: 'App founders had got statistics proving that black professionals have the lowest response rate on the ordinary dating platforms.'
        },
        {
          icon: '/images/site/portfolio/meld/challenges/icon-2.svg',
          descText: 'They have decided to create a specific application which will give more opportunities for finding serious relationships for this group of people.'
        },
        {
          icon: '/images/site/portfolio/meld/challenges/icon-3.svg',
          descText: 'Our goal was to design a great looking app that will give familiar experience with advanced features for more efficient connections.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .meld-challenges {
    padding-bottom: 20rem;

    @media (max-width: 1400px) {
      padding-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 767px) {
      padding-bottom: 7rem;
    }

    &__content {
      display: grid;
      grid-template-columns: 1fr 1fr;

      @media (max-width: 767px) {
        grid-auto-rows: 1fr;
        grid-template-columns: 1fr;
      }

      @media (max-width: 596px) {
        grid-auto-rows: auto;
      }
    }

    &__square {
      position: relative;
      background: var(--case-color-orange);

      @media (max-width: 596px) {
        height: 33rem;
      }
    }

    &__title {
      &-big {
        position: absolute;
        left: 0;
        top: 6rem;
        transform: translateX(-19%);
        font-family: var(--Muli);
        font-size: 11rem;
        text-transform: uppercase;
        font-weight: 900;
        letter-spacing: .07em;
        color: transparent;
        -webkit-text-stroke: 1px var(--case-color-primary);
        width: 6em;
        word-break: break-all;

        @media (max-width: 1670px) {
          transform: translateX(-13.5%);
        }

        @media (max-width: 1400px) {
          font-size: 9rem;
        }

        @media (max-width: 1199px) {
          font-size: 6.5rem;
          transform: translateX(-6%);
        }

        @media (max-width: 991px) {
          font-size: 6rem;
        }

        @media (max-width: 767px) {
          transform: none;
          left: 3rem;
          width: 6em;
          top: -.6em;
          max-width: calc(100% - 6rem);
        }

        @media (max-width: 425px) {
          font-size: 5rem;
        }

        @media (max-width: 370px) {
          font-size: 4rem;
        }
      }

      &-small {
        position: absolute;
        right: 10%;
        bottom: 20%;
        font-family: var(--Muli);
        font-weight: 900;
        text-transform: uppercase;
        color: var(--case-color-primary);
        letter-spacing: 0.07em;
      }  
    }

    &__line {
      position: absolute;
      right: 40%;
      bottom: 35%;
    }

    &__list {
      padding: 9rem;
      background: #F3F3F3;

      @media (max-width: 1400px) {
        padding: 5rem;
      }

      @media (max-width: 1199px) {
        padding: 4rem;
      }

      @media (max-width: 767px) {
        padding: 3rem;
      }
    }

    &__item {
      --icon-width: 3.5rem;
      --icon-margin: 2.5rem;

      margin-bottom: 4rem;

      &:last-child {
        margin-bottom: 0;
      }

      @media (max-width: 767px) {
        --icon-width: 2.5rem;
        --icon-margin: 1.5rem;
      }
    }
  }
</style>