<template>
  <section class="event-summary" v-scroll-reveal>
    <div class="container">
      <EventHeader
        class="event-summary__header"
        dividerColor="#DBE2E9"
        isCentered
        :baseOptions="{
          titleText: 'Project Summary',
          titleTextColor: 'var(--case-color-primary)',
          descText: 'EventApp is an application where a person can accept or dismiss an invitation, locate and schedule the occasion, buy tickets, and share it with friends. It is designed solely for US users to help them manage their social activities in one place.',
          maxWidth: '86rem',
        }"
        :breakpoints="{
          991: {isCentered: false}
        }"
      />

      <AutowidthSlider
        class="event-summary__slider"
        shapeColor="#222020"
        sliderNavMargin="10"
        sliderNavIcon="/images/site/portfolio/event/summary/nav-arrow.svg"
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
          class="event-summary__item"
          titleColor="var(--case-color-primary)"
          listItemColor="var(--case-color-secondary)"
          :titleText="item.title"
          :items="item.items"
          caseName="event"
          cardBgColor="rgba(41, 45, 51, 0.8)"
          preIconIsDisabled
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
import EventHeader from '@/js/components/pages/portfolio/event/global/EventHeader'

export default {
  components: {EventHeader, PortfolioAside, PortfolioBlockBullet, AutowidthSlider, 'TinySlider': VueTinySlider,},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Team',
          items: ['iOS Developer', 'Designer', 'Project manager'],
          color: '#F6EAFF'
        },
        {
          title: 'Tech Stack',
          items: ['Swift', 'Swift UI', 'Apollo', 'SwiftMessages'],
          color: '#F6EAFF'
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'MVP Development'],
          color: '#FDF0F0'
        },
        {
          title: 'Target Audience',
          items: ['Event organizers', 'Students organizations'],
          color: '#F6EDFD'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.event-summary {
  margin-bottom: 15%;

  &__header {
    margin-bottom: calc(var(--space-unit) * 7.4);
  }

  &__slider {
    &:before {
      background: linear-gradient(270deg, rgb(255 255 255 / 0%), var(--shape-color));
    }

    &:after {
      background: linear-gradient(270deg, var(--shape-color), rgb(0 0 0 / 0));
    }
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
  }
}
</style>
