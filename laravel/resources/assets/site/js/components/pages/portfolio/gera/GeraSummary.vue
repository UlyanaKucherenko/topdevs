<template>
  <section class="gera-summary" v-scroll-reveal>
    <div class="container">
      <PortfolioHeader
        class="gera-summary__header"
        titleText="Project Summary"
        titleTextColor="var(--case-color-primary)"
        descText="Gerasyanov is a comprehensive digital service for wellness practices. Users can benefit from a huge knowledge base, screen the upcoming events in a calendar, choose the best timing and place for workouts, sign up for specific wellness activities and pay for participation in a convenient way."
        :headerColumnBreakpoint="1400"
        asideClass="gera-summary__header-aside"
      />

      <AutowidthSlider 
        shapeColor="#F9F9F9"
        sliderNavMargin="10"
        sliderNavIcon="/images/site/portfolio/gera/summary/nav-arrow.svg"
        :sliderBreakpoint="1500"
        :sliderOptions="{
          spaceBetween: 35,
          slidesOffsetAfter: 50,
          breakpoints: {
            768: {spaceBetween: 40},
            992: {spaceBetween: 45},
            1200: {spaceBetween: 55}
          }
        }"
      >
        <PortfolioBlockBullet
          v-for="(item, index) in items" :key="index"
          class="gera-summary__item"
          titleColor="var(--case-color-secondary)"
          :titleText="item.title"
          listItemColor="var(--case-color-black)"
          listPreType="circle"
          :items="item.items"
          caseName="gera"
          :cardBgColor="item.color"
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
          items: ['Swift', 'Kotlin', 'Vue.JS', 'Laravel'],
          color: '#F6EAFF'   
        },
        {
          title: 'Team',
          items: ['2 iOS Developers', '2 Android Developers', '1 Backend Developer', '1 Designer'],
          color: '#ECECFF'
        },
        {
          title: 'Target Audience',
          items: ['Sports Enthusiasts', 'Fitness Addicts', 'Yoga Practitioner'],
          color: '#FDF0F0'
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Android App Development', 'UX/UI Design'],
          color: '#F6EDFD'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .gera-summary {
    position: relative;
    padding-bottom: 25rem;

    @media (max-width: 1500px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 6rem;
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 7.4);

      &-aside {
        @media (min-width: 1401px) {
          width: 52%;
        }
      }
    }

    &__item {
      width: 31rem;

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