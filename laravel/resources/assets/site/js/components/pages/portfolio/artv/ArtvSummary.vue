<template>
  <section class="artv-summary">
    <div class="artv-summary__bg-line"/>

    <div class="container">
      <PortfolioHeader
        class="artv-summary__header"
        titleUppercase
        titleText="Project Summary"
        descText="ArTv is a video streaming application with a vertical “endless” feed similar to the one on Instagram. It consists of new and recommended video clips and posts presenting information with photos, announcements of future clips, and news in the music industry."
        :headerColumnBreakpoint="1550"
      />

      <AutowidthSlider 
        fullWidth
        shapeColor="rgba(0,0,0,0)"
        sliderNavIcon="/images/site/portfolio/artv/summary/nav-arrow.svg"
        :sliderBreakpoint="1500"
        :sliderOptions="{
          spaceBetween: 35,
          slidesOffsetAfter: 15,
          slidesOffsetBefore: 15,
          breakpoints: {
            576: {
              slidesOffsetAfter: 30,
              slidesOffsetBefore: 30
            },
            768: 
              {
                spaceBetween: 40,
                slidesOffsetAfter: 60,
                slidesOffsetBefore: 60
              },
            992: {spaceBetween: 45},
            1100: {
              slidesOffsetAfter: 100,
              slidesOffsetBefore: 100
            },
            1200: {
              spaceBetween: 60,
              slidesOffsetAfter: 100,
              slidesOffsetBefore: 100
            }
          }
        }"
      >
        <PortfolioBlockBullet
          v-for="(item, index) in items" :key="index"
          class="artv-summary__item"
          titleColor="var(--case-color-primary)"
          :titleText="item.title"
          listItemColor="#414040"
          listPreType="circle"
          :items="item.items"
          caseName="artv"
          cardBgColor="white"
          :cardBgImage="item.imgURL"
        />
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

export default {
  components: {PortfolioHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider, 'TinySlider': VueTinySlider,},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Tech Stack',
          items: ['TvOS', 'Focus Engine', 'Swift', 'React Programming (RxSwift, RxAlamofire)', 'MVVM', 'Core Media', 'AVFoundation', 'Cocoa Touch'],
          imgURL: '/images/site/portfolio/artv/summary/card-1.png'
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'TvOS Development', 'Staff Augmentation'],
          imgURL: '/images/site/portfolio/artv/summary/card-2.png'
        },
        {
          title: 'Target Audience',
          items: ['Media Holdings', 'Video Streaming Providers', 'Video and Music Fans'],
          imgURL: '/images/site/portfolio/artv/summary/card-3.png'
        },
        {
          title: 'Team',
          items: ['2 iOS Developers'],
          imgURL: '/images/site/portfolio/artv/summary/card-4.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .artv-summary {
    position: relative;
    margin-bottom: 23rem;

    @media (max-width: 1450px) {
      padding: 0;
      margin-bottom: 11rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 5rem;
    }

    &__bg-line {
      position: absolute;
      height: 28rem;
      width: 200vw;
      left: -50vw;
      top: 30rem;
      pointer-events: none;
      transform: rotate(-153deg);
      z-index: -1;
      background: var(--case-color-yellow);

      @media (max-width: 1199px) {
        top: 24rem;
      }

      @media (max-width: 991px) {
        top: 18rem;
      }
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);
      
      .portfolio-header__title {
        font-weight: bold;
        letter-spacing: 0.04em;
      }

      @media (max-width: 1550px) {
        max-width: 100rem;
      }
    }

    &__item {
      width: 30.4rem;

      @media (max-width: 1400px) {
        width: 29.4rem;
      }

      @media (max-width: 1199px) {
        width: 27rem;
      }

      @media (max-width: 991px) {
        width: 26rem;
      }

      @media (max-width: 767px) {
        width: 25rem;
      }
    }
  }
</style>