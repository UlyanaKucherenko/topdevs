<template>
  <section class="gog-summary" v-scroll-reveal>
    <div class="container">
      <GogHeader
        class="gog-summary__header"
        innerMaxWidth="71.2rem"
        dividerColor="#DBE2E9"
        :baseOptions="{
          titleText: 'Project Summary',
          titleTextColor: 'var(--case-color-primary)',
          descText: 'GoG is a solution for any application that gathers data about end customers of various businesses: their habits, location, mobility, tastes. It helps to predict user behavior and buyer needs resulting in sales increase and higher customer loyalty.'
        }"
        :breakpoints="{
          1400: {innerMaxWidth: '78.8rem'},
          1199: {innerMaxWidth: '67.4rem'},
          991: {innerMaxWidth: '54rem'},
        }"
      />

      <AutowidthSlider 
        shapeColor="#F5FAFF"
        sliderNavMargin="0"
        sliderNavIcon="/images/site/portfolio/gog/summary/nav-arrow.svg"
        :sliderBreakpoint="9999"
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
          class="gog-summary__item"
          titleColor="var(--case-color-black-bold)"
          :titleText="item.title"
          listItemColor="var(--case-color-black)"
          listPreType="circle"
          :items="item.items"
          caseName="gog"
          cardBgColor="white"
        />

        <template #nav-between>
          <div class="gog-summary-slider__nav-circle"/>
        </template>
      </AutowidthSlider>
    </div>
  </section>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'
import GogHeader from '@/js/components/pages/portfolio/gog/global/GogHeader'

export default {
  components: {GogHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider, 'TinySlider': VueTinySlider,},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'App Tech Stack',
          items: ['Swift', 'CoreLocation', 'MapKit', 'Higly Custom UI', 'AWS SDK', 'XCode'],
          color: '#F6EAFF'   
        },
        {
          title: 'SDK Tech Stack',
          items: ['Pure Swift, Developed as a Framework', 'Google API', 'Foursquare API', 'Modular Architecture', 'FMDB'],
          color: '#F6EAFF'   
        },
        {
          title: 'Target Audience',
          items: ['Retailers', 'Client-Oriented Businesses'],
          color: '#FDF0F0'
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'SDK Development', 'Staff Augmentation'],
          color: '#F6EDFD'
        },
        {
          title: 'Team',
          items: ['2 iOS Developers'],
          color: '#ECECFF'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .gog-summary {
    --nav-height: 5.9rem;
    --bottom-pd-base: 20rem;
    --bottom-pd-sum: calc(var(--bottom-pd-base) + var(--nav-height));

    &__header {
    }

    &__item { 
      filter: drop-shadow(30px 30px 30px rgba(123, 135, 147, .1));
      width: 29rem;

      @media (max-width: 1400px) {
        filter: drop-shadow(25px 25px 27px rgba(35, 42, 48, 0.05));
        width: 28rem;
      }

      @media (max-width: 1199px) {
        filter: drop-shadow(20px 20px 25px rgba(35, 42, 48, 0.05));
        width: 25rem;
      }

      @media (max-width: 991px) {
        filter: drop-shadow(20px 20px 22px rgba(35, 42, 48, 0.05));
        width: 24rem;
      }

      @media (max-width: 575px) {
        filter: drop-shadow(15px 15px 18px rgba(35, 42, 48, 0.05));
        width: 23rem;
      }
    }

    &-slider__nav-circle {
      width: 1rem;
      height: 1rem;
      border-radius: 50%;
      background: var(--case-color-primary);
      margin: 0 1.1rem;
    }

    .swiper-container {
      padding: 8rem 0 var(--bottom-pd-sum);
    }

    .autowidth-slider__nav {
      position: absolute;
      z-index: 1;
      right: 0;
      bottom: calc(var(--bottom-pd-base));
    }

    @media (max-width: 1400px) {
      --bottom-pd-base: 15rem;
    }

    @media (max-width: 1199px) {
      --bottom-pd-base: 10rem;
    }

    @media (max-width: 575px) {
      --bottom-pd-base: 8rem;
    }
  }
</style>