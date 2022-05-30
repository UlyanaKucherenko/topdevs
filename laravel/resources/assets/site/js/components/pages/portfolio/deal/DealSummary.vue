<template>
  <section class="deal-summary" v-scroll-reveal>
    <div class="container">
      <DealHeader
        class="deal-summary__header"
        :baseOptions="{
          titleText: 'Project Summary',
          titleTextColor: 'var(--case-color-primary)',
          descText: 'AutoDeal is a simple yet convenient and secure mobile application able to organize business operations in the vehicle shipment business serving as a unified solution for all the parties involved: carriers, dealers, and buyers.',
          maxWidth: 626,
          headerColumnBreakpoint: 1500,
          breakpoints: {
            1500: {maxWidth: 812}
          }
        }"
      />

      <div class="deal-summary-slider">
        <AutowidthSlider 
          shapeColor="#F3F3F3"
          sliderNavMargin="0"
          sliderNavIcon="/images/site/portfolio/deal/summary/nav-arrow.svg"
          :sliderBreakpoint="1400"
          :sliderOptions="{
            spaceBetween: 35,
            slidesOffsetAfter: 50,
            breakpoints: {
              768: {spaceBetween: 40},
              992: {spaceBetween: 45},
              1400: {spaceBetween: 75}
            }
          }"
        >
          <PortfolioBlockBullet
            v-for="(item, index) in items" :key="index"
            class="deal-summary__item"
            titleColor="var(--case-color-black)"
            :titleText="item.title"
            listItemColor="var(--case-color-black)"
            listPreType="circle"
            :items="item.items"
            caseName="gog"
            cardBgColor="white"
          />

          <template #nav-between>
            <div class="deal-summary-slider__nav-circle"/>
          </template>
        </AutowidthSlider>

        <img 
          class="deal-summary-slider__bg-lines"
          src="/images/site/portfolio/deal/summary/bg-lines.svg" alt="" 
        >
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'
import DealHeader from '@/js/components/pages/portfolio/deal/global/DealHeader'

export default {
  components: {DealHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Tech Stack',
          items: ['Objective-C', 'Mix Swift', 'UIKit', 'MapKit', 'CoreLocation', 'CoreData', 'In-App Purchases', 'Firebase SDK'],
          color: '#F6EAFF'   
        },
        {
          title: 'Target Audience',
          items: ['Car Transporters', 'Car Haulers', 'Vehicle Carriers', 'Car Dealers', 'Car Buyers'],
          color: '#F6EAFF'   
        },
        {
          title: 'Services',
          items: ['App Architecture Design', 'iOS App Development', 'App Store Deployment', 'Post-Launch Support'],
          color: '#FDF0F0'
        },
        {
          title: 'Team',
          items: ['2 iOS Developers'],
          color: '#F6EDFD'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .deal-summary {
    --nav-height: 5.9rem;
    --bottom-pd-base: 20rem;
    --bottom-pd-sum: calc(var(--bottom-pd-base) + var(--nav-height));
    margin-bottom: 22.4rem;

    @media (max-width: 1400px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    &__header {
      margin-bottom: 7.5rem;

      @media (max-width: 1400px) {
        margin-bottom: 5.5rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 440px) {
        .portfolio-header__title {
          width: min-content;
        }

        .deal-header__circle {
          top: 74%;
        }
      }
    }

    &__item { 
      width: 28.8rem;
      border-radius: 0;

      @media (max-width: 1400px) {
        width: 27.8rem;
      }

      @media (max-width: 1199px) {
        width: 25.5rem;
      }

      @media (max-width: 991px) {
        width: 24.5rem;
      }

      @media (max-width: 575px) {
        width: 23.5rem;
      }
    }
    

    &-slider {
      position: relative;

      &__bg-lines {
        position: absolute;
        left: 46%;
        top: 95%;
        width: 17.5%;
        z-index: -1;

        @media (max-width: 1400px) {
          left: 59rem;
          top: 80%;
        }

        @media (max-width: 1199px) {
          display: none;
        }
      }

      &__nav-circle {
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: var(--case-color-primary);
        margin: 0 .5rem;
      }
    }

    &-slider__nav-circle {
    }
  }
</style>