<template>
  <div class="summary-section">
    <div class="container">
      <PortfolioHeader
        class="summary-section__header"
        titleText="Project Summary"
        titleTextColor="#951865"
        descText="Beauty Streaming Service is a space where beauty fans can follow, donate, and learn from their favorite makeup artist, hairdresser, manicurist, or any other expert. Convenient subscription plans and training live sessions allow users to master new skills."
        :headerColumnBreakpoint="1400"
      />
      <div class="summary-section__content">
        <AutowidthSlider 
          shapeColor="white"
          sliderNavIcon="/images/site/portfolio/beauty/summary/nav-arrow.svg"
          sliderNavMargin="10"
          :sliderBreakpoint="1500"
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
            class="summary-section__item"
            titleColor="#4D4981"
            :titleText="item.title"
            listItemColor="#260018"
            listPreType="circle"
            :items="item.items"
            caseName="beauty"
            :cardBgColor="item.color"
            :cardBgImage="item.imgURL"
          />
        </AutowidthSlider>
      </div>
    </div>

    <img 
      class="summary-section__figures"
      src="/images/site/portfolio/beauty/challenges/figures.svg" alt="" 
    >

    <div class="summary-section__header-circle ratio"></div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'

export default {
  components: {PortfolioHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Target Audience',
          items: ['Makeup Artists', 'Hairdressers', 'Manicure', 'Beauty Experts', 'Cosmetologists', 'Beauty Fans']
        },
        {
          title: 'Tech Stack',
          items: ['Java', 'Swift', 'Vue.JS', 'PHP', 'WebRTC', 'CommerceGate']
        },
        {
          title: 'Team',
          items: ['1 iOS Developer', '1 Android Developer', '1 JavaScript Developer', '1 PHP Developer', '1 Designer']
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Android App Development', 'Website Development', 'UX/UI Design']
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .beauty .summary-section {
    position: relative;
    padding-bottom: calc(var(--space-unit) * 16.8);
    z-index: 2;

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);

      &-circle {
        position: absolute;
        width: 20%;
        border-radius: 50%;
        --height-percentage: 100%;
        background: rgba(255, 226, 237, 0.3);
        left: 32%;
        top: 0;
        transform: translateY(-18%);
        z-index: -1;

        @media (max-width: 1400px) {
          width: 25%;
          left: 34%;
          transform: translateY(-13%);
        }

        @media (max-width: 1000px) {
          display: none;
        }
      }
    }

    &__content {
      .swiper-container {
        overflow: visible;
      }

      .autowidth-slider__inner {
        overflow: hidden;

        @media (max-width: 1500px) {
          padding-top: 15px;
        }
      }
    }

    &__item {
      width: 30.3rem;

      @media (max-width: 1400px) {
        width: 29.3rem;
      }

      @media (max-width: 1199px) {
        width: 27.4rem;
      }

      @media (max-width: 991px) {
        width: 26.4rem;
      }

      @media (max-width: 767px) {
        width: 25.4rem;
      }
    }

    &__figures {
      position: absolute;
      z-index: 2;
      right: calc(var(--space-unit) * 25);
      bottom: calc(var(--space-unit) * -10);
      width: 20%;
      
      @media (min-width: 992px) {
        display: none;
      }

      @media (max-width: 550px) {
        display: none;
      }
    }
  }
</style>