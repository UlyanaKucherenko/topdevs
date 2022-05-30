<template>
  <section class="real-summary">
    <div class="container">
      <PortfolioHeader
        class="real-summary__header"
        titleText="Project Summary"
        titleTextColor="#002445"
        descText="RealPage is a perfect property management tool for property managers and maintenance technicians willing to increase the tenants' satisfaction rate. It allows generating 3D floor plans, high-resolution photo galleries, real-time pricing presentation, optimized tours for residents. It all leads to an increase in consultants’ productivity and acceleration of the property transformation."
        :headerColumnBreakpoint="1400"
      >
        <img 
          class="real-header-img"
          src="/images/site/portfolio/real/summary/header-fig-pre.svg" alt=""
          slot="titleImg"
        >
      </PortfolioHeader>

      <AutowidthSlider 
        shapeColor="#F9F9F9"
        sliderNavIcon="/images/site/portfolio/real/summary/nav-arrow.svg"
        :sliderBreakpoint="1400"
        :sliderOptions="{
          spaceBetween: 25,
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
          class="real-summary__item"
          titleColor="var(--case-color-secondary)"
          :titleText="item.title"
          listItemColor="#414040"
          listPreType="circle"
          :items="item.items"
          caseName="real"
          :cardBgColor="item.color"
          :cardBgImage="item.imgURL"
        />
      </AutowidthSlider>
    </div>

    <img 
      class="real-summary__header-fig-after"
      src="/images/site/portfolio/real/summary/header-fig-after.svg" alt=""
    >
  </section>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'

export default {
  components: {PortfolioHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider, 'TinySlider': VueTinySlider,},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Tech Stack',
          items: ['Objective-C', 'Swift', 'Automatic Layout', 'Custom UI', 'Map Kit', 'Google Map', 'Core Data', 'AFNetworking'],
          imgURL: '/images/site/portfolio/real/summary/fig-1.png',
          color: '#F1F4F9'   
        },
        {
          title: 'Target Audience',
          items: ['Real Estate Agents', 'Property Inspectors', 'Real Estate Owners', 'Architects', 'Real Estate Buyers'],
          imgURL: '/images/site/portfolio/real/summary/fig-2.png',
          color: '#F4F4F4'
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Staff Augmentation'],
          imgURL: '/images/site/portfolio/real/summary/fig-3.png',
          color: '#F9F3EB'
        },
        {
          title: 'Team',
          items: ['1 iOS Developer', '1 Designer'],
          imgURL: '/images/site/portfolio/real/summary/fig-4.png',
          color: '#F4F4F4'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .real-summary {
    position: relative;
    padding-top: calc(var(--space-unit) * 16.8);
    padding-bottom: calc(var(--space-unit) * 28);

    @media (max-width: 1600px) {
      padding-bottom: 18vw;
    }

    @media (max-width: 1400px) {
      padding-top: 12rem;
      padding-bottom: 12vw;
    }

    @media (max-width: 1199px) {
      padding-top: 10rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 5rem;
    }

    @media (max-width: 767px) {
      padding-top: 7rem;
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);

      @media (max-width: 1400px) {
        max-width: 71rem;
      }

      &-fig-after {
        position: absolute;
        top: 0;
        right: 0;

        @media (min-width: 1401px) {
          display: none;
        }

        @media (max-width: 1100px) {
          transform: translateY(-35%);
        }

        @media (max-width: 991px) {
          display: none;
        }
      }
    }

    &__item {
      width: 28.3rem;

      @media (max-width: 1199px) {
        width: 27.8rem;
      }

      @media (max-width: 991px) {
        width: 24.7rem;
      }

      @media (max-width: 767px) {
        width: 25rem;
      }
    }
  }
</style>