<template>
  <section class="calibre-summary">
    <div class="container">
      <PortfolioHeader
        class="calibre-summary-header calibre-header"
        titleText="Project Summary"
        titleTextColor="var(--case-color-primary)"
        descText="Calibre is an application for tracking the history of luxury watches. It helps watch owners make sure their device is authentic and all repair works are provided properly by the authorized service centers."
        :headerColumnBreakpoint="1550"
        asideClass="calibre-summary-header__aside"
      >
        <div 
          class="calibre-header__line"
          slot="titleImg"
        />
      </PortfolioHeader>

      <AutowidthSlider 
        shapeColor="#F9F9F9"
        sliderNavIcon="/images/site/portfolio/calibre/summary/nav-arrow.svg"
        sliderNavMargin="10"
        :sliderBreakpoint="1400"
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
          class="calibre-summary__item"
          titleColor="var(--case-color-primary)"
          :titleText="item.title"
          listItemColor="#414040"
          listPreType="circle"
          :items="item.items"
          caseName="calibre"
          :cardBgColor="item.color"
          :cardBgImage="item.imgURL"
        />
      </AutowidthSlider>
    </div>
  </section>
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
          title: 'Tech Stack',
          items: ['Swift', 'Vue.JS', 'Node.JS'],
        },
        {
          title: 'Target Audience',
          items: ['Watchmakers', 'Watch Owners', 'Watch Repair Service Providers']
        },
        {
          title: 'Team',
          items: ['1 iOS Developer', '1 Frontend Developer', '1 Backend Developer', '1 Designer'],
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Website Development', 'UX/UI Design'],
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .calibre {
    .calibre-summary {
      position: relative;
      padding: 20rem 0 23rem;

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

      &-header {
        padding-bottom: calc(var(--space-unit) * 7.4);

        &__aside {
          @media (min-width: 992px) {
            max-width: 56.4rem;
            
            @media (max-width: 1500px) {
              width: 71%;
              max-width: unset;
            }
          }
        }
      }

      &__item {
        width: 28.3rem;

        @media (max-width: 1350px) {
          width: 27.3rem;
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
  }
</style>