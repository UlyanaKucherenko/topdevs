<template>
  <section class="meld-summary" v-scroll-reveal>
    <div class="container">
      <MeldHeader
        class="meld-summary__header"
        titleText="project summary"
        titleColor="var(--case-color-primary)"
        titleImg="/images/site/portfolio/meld/summary/fig-header.svg"
        descText="Meld is a dating application for African Americans that allows them to screen the potential acquaintances for the career path and connect with people of similar interests. It works like a usual dating app where people get the ability to message each other after they prove to have a mutual sympathy."
      />

      <AutowidthSlider 
        shapeColor="#FAFAFA"
        sliderNavIcon="/images/site/portfolio/meld/summary/nav-arrow.svg"
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
          class="meld-summary__item"
          titleColor="var(--case-color-orange)"
          :titleText="item.title"
          listItemColor="#1B1B1B"
          listPreType="square"
          :items="item.items"
          caseName="meld"
        />
      </AutowidthSlider>
    </div>

    <img 
      class="meld-summary__fig-circles"
      src="/images/site/portfolio/meld/summary/fig-circles.svg" alt=""
    >
  </section>
</template>

<script>
import MeldHeader from '@/js/components/pages/portfolio/meld/global/MeldHeader'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'

export default {
  components: {MeldHeader, PortfolioBlockBullet, AutowidthSlider},

  data() {
    return {
      items: [
        {
          title: 'Tech Stack',
          items: ['FB SDK', 'In-App Purchase', 'Objective-C'],
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'UX/UI Design'],
        },
        {
          title: 'Team',
          items: ['1 iOS Developer', '1 Designer'],
        },
        {
          title: 'Target Audience',
          items: ['African American Professionals']
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .meld-summary {
    position: relative;
    padding-bottom: 20rem;

    @media (max-width: 1400px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 6rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 7rem;
    }

    @media (max-width: 767px) {
      padding-bottom: 10rem;
    }

    &__header {
      --desc-max-width: 81.7rem;
      margin-bottom: 6.5rem;
    }

    &__item {
      width: 28.7rem;

      @media (max-width: 1400px) {
        width: 27.7rem;
      }

      @media (max-width: 1199px) {
        width: 24.8rem;
      }

      @media (max-width: 991px) {
        width: 23.8rem;
      }

      @media (max-width: 767px) {
        width: 22.8rem;
      }
    }

    &__fig-circles {
      position: absolute;
      right: 13vw;
      top: 0;

      @media (max-width: 1400px) {
        width: 6rem;
        right: 8vw;
        top: -11rem;
      }

      @media (max-width: 1199px) {
        top: -5rem;
      }

      @media (max-width: 768px) {
        display: none;
      }
    }
  }
</style>