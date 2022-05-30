<template>
  <div class="dancebug-summery" v-scroll-reveal>
    <div class="container">
      <DancebugHeader
        class="dancebug-challenges__header"
        :isCentered="true"
        :baseOptions="{
          titleText: 'Project Summary',
          descText: 'DanceBug app is a special dance competition judging software with various features distributed across the main user roles: dancers (including their parents, in case of a kids contest), dance studio owners, and competition management staff.'
        }"/>

      <AutowidthSlider
        sliderNavIcon="/images/site/portfolio/dancebug/summary/nav-arrow.svg"
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
          class="dancebug-challenges__item"
          titleColor="var(--case-color-white)"
          :titleText="item.title"
          listItemColor="var(--case-color-white)"
          listPreColor="#B4CAE2"
          :items="item.items"
          caseName="dancebug"
          :cardBgImage="item.imgURL"
          cardBgColor="var(--case-color-violet-light)"
          preIconIsDisabled
        />
      </AutowidthSlider>
    </div>
  </div>
</template>

<script>
import DancebugHeader from '@/js/components/pages/portfolio/dancebug/global/DancebugHeader'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'


export default {
  name: "DancebugSummery",
  components: {DancebugHeader, PortfolioHeader, AutowidthSlider, PortfolioBlockBullet},
  data() {
    return {
      scrollbarWidth: null,
      items: [
        {
          title: 'Team',
          items: ['1. Full Stack Developer'],
          imgURL: '/images/site/portfolio/dancebug/summary/fig-1.png'
        },
        {
          title: 'Tech Stack',
          items: ['1. PHP 5.4', '2. MySQL', '3. Flight PHP for REST API', '4. MariaDB 5.5', '5. jQuery', '6. Bootstrap'],
        },
        {
          title: 'Services',
          items: ['1. Bacckend Developer', '2. Frontend Developer', '3. Post-Launch Support', '4. Staff Augmentation'],
          imgURL: '/images/site/portfolio/dancebug/summary/fig-3.png'
        },
        {
          title: 'Target Audience',
          items: ['1. Dancers', '2. Studio Owners', '3. Competition Directors', '4. Contest Judges'],
          imgURL: '/images/site/portfolio/dancebug/summary/fig-4.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.dancebug-summery {
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