<template>
  <div 
    class="summary-section"
		v-scroll-reveal
  >
    <div class="container">
      <PortfolioHeader
        class="summary-section__header"
        titleText="Project Summary"
        titleTextColor="var(--case-color-primary)"
        descText="Qliq is a powerful communication platform that bridges the gap between healthcare providers and patients. There is an extended set of features like secure texting, files exchange, on-call scheduling, virtual visits, visit path, and chatbot platform. It all contributes to efficient clinicians teamwork, enhanced patient engagement, and better health outcomes."
        :headerColumnBreakpoint="1350"
      >
        <div 
          class="qliq-header-line"
          slot="titleImg"
        />
      </PortfolioHeader>

      <AutowidthSlider 
        sliderNavIcon="/images/site/portfolio/qliq/summary/nav-arrow.svg"
        sliderNavMargin="10"
        :sliderBreakpoint="1450"
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
          class="summary-section__item"
          titleColor="#1B1B1B"
          :titleText="item.title"
          listItemColor="#414040"
          listPreType="circle"
          listPreColor="#B4CAE2"
          :items="item.items"
          caseName="qliq"
          :cardBgImage="item.imgURL"
        />
      </AutowidthSlider>
    </div>
  </div>
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
          items: ['Objective-C', 'Swift', 'Automatic Layout', 'Custom UI', 'Pure Sql', 'Push Notifications', 'SIP Framework', 'SqlCipher'],
          imgURL: '/images/site/portfolio/qliq/summary/fig-1.png'   
        },
        {
          title: 'Target Audience',
          items: ['Ambulatory Care Providers', 'Healthcare Providers', 'Hospital Staff', 'Druggists', 'Patients'],
          imgURL: '/images/site/portfolio/qliq/summary/fig-2.png'   
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'Post-Launch Support', 'Staff Augmentation'],
          imgURL: '/images/site/portfolio/qliq/summary/fig-3.png'   
        },
        {
          title: 'Team',
          items: ['2 iOS Developers'],
          imgURL: '/images/site/portfolio/qliq/summary/fig-4.png'   
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .qliq .summary-section {
    position: relative;
    padding-top: calc(var(--space-unit) * 16.8);
    padding-bottom: calc(var(--space-unit) * 16.8);

    &__header {
  		margin-bottom: var(--portfolio-header__title-margin);
    }

    &__item {
      width: 30.6rem;

      @media (max-width: 1199px) {
        width: 27.1rem;
      }

      @media (max-width: 991px) {
        width: 26.1rem;
      }

      @media (max-width: 767px) {
        width: 25.1rem;
      }
    }
  }
</style>