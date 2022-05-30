<template>
  <div class="summary-section">
    <div class="container">
      <PortfolioHeader
        class="summary-section__header"
        titleText="Project Summary"
        titleImg="/images/site/portfolio/solocator/summary/title-square.svg"
        titleBgColor="#FFDBCD"
        descText="Solocator app allows users to take and stamp photos with compass direction, GPS location, altitude, date, time, etc. Additional functionality is incorporated into the Industry Pack, such as capture editable notes, utilize custom exporting options, and track photos in map view. Using this app, users can easily navigate to the exact location where the photo was taken. "
        asideDividerColor="#FF8351"
        :headerColumnBreakpoint="1400"
      />

      <div class="summary-section__content">
      <AutowidthSlider 
        shapeColor="#F9F9F9"
        sliderNavIcon="/images/site/portfolio/solocator/summary/nav-arrow.svg"
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
          titleColor="var(--case-color-primary)"
          :titleText="item.title"
          listItemColor="#414040"
          listPreType="circle"
          :items="item.items"
          caseName="solocator"
          :cardBgColor="item.color"
          :cardBgImage="item.imgURL"
        />
      </AutowidthSlider>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'

export default {
  components: {PortfolioHeader, AutowidthSlider, PortfolioBlockBullet},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Target Audience',
          items: ['Field Workers', 'Location Scouts', 'Ecologists', 'Drivers', 'Builders', 'Architects', 'Property Inspectors']
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Android App Development', 'Website Development', 'Post-Launch Support']
        },
        {
          title: 'Platform',
          items: ['iOS', 'Android']
        },
        {
          title: 'Team',
          items: ['1 Android Developer', '1 iOS Developer', '1 Web Developer']
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .solocator .summary-section {
    position: relative;

    /* padding: 20rem 0 23rem; */
    padding-bottom: 15rem;

    @media (max-width: 1450px) {
      padding: 0;
      padding-bottom: 11rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 5rem;
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);
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
  }
</style>