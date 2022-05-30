<template>
  <section class="pet-summary">
    <div class="container">
      <PetHeader
        class="pet-summary__header"
        titleText="Project Summary"
        descText="Pet Monitoring System is a video streaming service that helps to observe the actions of your pets while you are away. A special camera broadcasts what happens at home and allows owners to interact with their pets via voice and laser pointer. For certain actions a pet can receive treats that are stored within a special box."
        :headerColumnBreakpoint="1550"
      />

      <AutowidthSlider 
        sliderNavIcon="/images/site/portfolio/pet/summary/nav-arrow.svg"
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
          class="pet-summary__item"
          titleColor="var(--case-color-secondary)"
          :titleText="item.title"
          listItemColor="var(--case-color-primary)"
          listPreType="circle"
          :items="item.items"
          caseName="pet"
          cardBgColor="linear-gradient(0deg, #F7F7F7, #F7F7F7)"
          :cardBgImage="item.imgURL"
        />
      </AutowidthSlider>
    </div>
  </section>
</template>

<script>
import PetHeader from './global/PetHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'


export default {
  components: {PortfolioAside, PortfolioBlockBullet, AutowidthSlider, PetHeader},

  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Tech Stack',
          items: ['Swift', 'Stripe', 'Facebook', 'Google Analytics', 'Mixpanel Analytics', 'Firebase'],
          imgURL: '/images/site/portfolio/pet/summary/fig-1.png',
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Staff Augmentation'],
          imgURL: '/images/site/portfolio/pet/summary/fig-2.png',   
        },
        {
          title: 'Target Audience',
          items: ['Pet Owners'],
          imgURL: '/images/site/portfolio/pet/summary/fig-3.png',   
        },
        {
          title: 'Team',
          items: ['1 iOS Developer', '1 Designer'],
          imgURL: '/images/site/portfolio/pet/summary/fig-4.png',   
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .pet-summary {
    position: relative;
    padding-bottom: 23rem;

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

      @media (max-width: 1550px) {
        max-width: 100rem;
      }
    }

    &__item {
      width: 28.3rem;

      @media (max-width: 1350px) {
        width: 28rem;
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
</style>