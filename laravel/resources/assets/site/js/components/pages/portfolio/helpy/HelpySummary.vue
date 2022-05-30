<template>
  <section class="helpy-summary">
    <img 
      class="helpy-summary__bg-line-from-begin"
      src="/images/site/portfolio/helpy/summary/bg-line.png" alt="" 
    >

    <div class="container">
      <HelpyHeader
        class="helpy-summary-header"
        :headerPropsBase="{
          titleText: 'project summary',
          titleClass: 'helpy-summary-header__title',
          descText: `Helpy is a medical guide application capable to remember the most complex terms for healthcare staff. It can allocate the necessary medical data for faster patient health evaluation thus releasing time for treatment and improving overall patient outcomes.`,
          asideClass: 'helpy-summary-header__desc',
          headerColumnBreakpoint: 1400
        }"
      />

      <AutowidthSlider 
        shapeColor="#F7F7F7"
        sliderNavIcon="/images/site/portfolio/helpy/summary/nav-arrow.svg"
        sliderNavMargin="10"
        :sliderBreakpoint="1450"
        navClassCustom="helpy-summary__nav"
        :sliderOptions="{
          spaceBetween: 35, 
          slidesOffsetAfter: 50,
          breakpoints: {
            768: {spaceBetween: 40},
            992: {spaceBetween: 45},
            1200: {spaceBetween: 60}
          }
        }"
      >
        <PortfolioBlockBullet
          v-for="(item, index) in items" :key="index"
          class="helpy-summary__item"
          titleColor="var(--case-color-orange)"
          :titleText="item.title"
          listPreType="circle"
          :items="item.items"
          caseName="helpy"
          cardBgColor="linear-gradient(128.04deg, #F5F5F5 0%, #F7F7F7 98.91%)"
        />
      </AutowidthSlider>
    </div>
  </section>
</template>

<script>
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'
import HelpyHeader from './global/HelpyHeader'

export default {
  components: {PortfolioAside, PortfolioBlockBullet, AutowidthSlider, HelpyHeader},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Tech Stack',
          items: ['Custom UI', 'MVVM', 'REST API', 'Swift'],
        },
        {
          title: 'Target Audience',
          items: ['Therapists', 'Clinicians'],
        },
        {
          title: 'Team',
          items: ['2 iOS Developers', '1 UX/UI Designer'],
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'UX/UI Design'],
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .helpy-summary {
    position: relative;
    margin-bottom: 20rem;

    @media (max-width: 1450px) {
      padding: 0;
      margin-bottom: 12rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 8.5rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    .swiper-container {
      padding: 6rem 0 7rem;

      @media (max-width: 1199px) {
        padding-top: 5rem;
      }

      @media (max-width: 575px) {
        padding-top: 4rem;
      }
    }

    .autowidth-slider__nav {
      position: absolute;
      z-index: 1;
      right: 0;
      bottom: 0;
    }

    &__bg-line {
      &-from-begin {
        pointer-events: none;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;

        @media (max-width: 1850px) {
          top: 25%;
        }

        @media (max-width: 1400px) {
          height: 100%;
          top: 45%;
        }

        @media (max-width: 1199px) {
          top: 38%;
          height: 90%;
        }

        @media (max-width: 991px) {
          top: 50%;
          height: 76%;
        }

        @media (max-width: 575px) {
          display: none;
        }
      }
    }

    &-slider {
      position: relative;
      
    }

    &__nav {
      padding: 8px 4px;
      background: #F7F7F7;
      box-shadow: -2px -2px 5px #FFFFFF, 2px 2px 5px rgba(0, 0, 0, 0.05);
      border-radius: 3px;

      &:active {
        background: #F5F5F5;
        box-shadow: inset -2px -2px 3px rgba(255, 255, 255, 0.8), inset 2px 2px 3px rgba(0, 0, 0, 0.05);
        border-radius: 3px;
      }
    }

    &-header {
      @media (min-width: 1451px) {
        margin-bottom: 8.5rem;
      }

      .portfolio-aside__desc {
        @include text-lg;
        font-weight: 600;
        color: #6E67A7;
      }

      &__title {
        @media (min-width: 1401px) {
          width: 8em;
        }
      }

      &__desc {
        max-width: 77.8rem;
        width: 100%;
      }
    }

    &__item {
      width: 28.3rem;

      @media (max-width: 1350px) {
        width: 28rem;
      }

      @media (max-width: 1199px) {
        width: 24.4rem;
      }

      @media (max-width: 991px) {
        width: 23.4rem;
      }

      @media (max-width: 767px) {
        width: 22.4rem;
      }
    }
  }
</style>