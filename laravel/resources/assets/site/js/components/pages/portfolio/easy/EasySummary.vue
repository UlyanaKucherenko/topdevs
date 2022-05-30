<template>
  <div class="easy-summary">
    <div class="container">
      <EasyHeader
          class="easy-summary__header"
          isCentered
          :baseOptions="{
          titleText: 'Project Summary',
          titleTextColor: '#3E69EA',
          descText: 'EasyPhone is a launcher and Android mobile application that provides easy-to-use navigation for elderly people. The EasyPhone app makes the life of older people easier by removing barriers between them and technologies. It particularly makes ordinary activities for young people, like making a call or notifying about the important events, equally accessible for the elderly people.',
          asideDescColor: '#000000',
          maxWidth: '122rem'
        }"
          :breakpoints="{
          360: {isCentered: false}
        }"
      />
      <div class="easy-summary__content">
        <AutowidthSlider
            class="easy-summary__slider"
            sliderNavIcon="/images/site/portfolio/easy/summary/nav-arrow.svg"
            sliderNavMargin="10"
            :sliderBreakpoint="1400"
            shapeColor='#E5E5E5'
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
              class="easy-summary__item"
              listPreType="circle"
              titleColor="#FFFFFF"
              :titleText="item.title"
              listItemColor="#FFFFFF"
              :items="item.items"
              caseName="easy"
              cardBgColor="rgba(92, 132, 253, 1)"
              :cardBgImage="item.imgURL"
          />
        </AutowidthSlider>
      </div>
    </div>
  </div>
</template>

<script>
import EasyHeader from '@/js/components/pages/portfolio/easy/global/EasyHeader'
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider'

export default {
  name: "EasySummary",
  components: {EasyHeader, AutowidthSlider, PortfolioBlockBullet},
  data() {
    return {
      items: [
        {
          title: 'Team',
          items: ['2 Android Developers', ' 1 Designer', ' 1 Project Manager', ' 1 QA Engineer'],
          imgURL: '/images/site/portfolio/easy/summary/fig-1.png'
        },
        {
          title: 'Tech Stack',
          items: ['Media & Entertainment'],
          imgURL: '/images/site/portfolio/easy/summary/fig-2.png'
        },
        {
          title: 'Services',
          items: ['UI/UX Design', 'Android App Development', 'Mobile App Testing', 'App Store Deployment', 'Post-Launch Support'],
        },
        {
          title: 'Target Audience',
          items: ['Elderly People', 'Caring Children'],
          imgURL: '/images/site/portfolio/easy/summary/fig-4.png'
        },
      ]
    }
  }
}
</script>

<style lang="scss">
.easy-summary {
  position: relative;
  padding: calc(var(--space-section) * 2) 0 calc(var(--space-section) * 1.5);

  @media (max-width: 1450px) {
    padding: 15rem 0 10rem;
  }

  @media (max-width: 1199px) {
    padding-bottom: 10rem;
  }

  @media (max-width: 991px) {
    padding-bottom: 5rem;
  }

  &__header {
    font-weight: 600;

    @media (min-width: 1401px) {
      margin-bottom: 8rem;
    }
  }

  &__item {
    filter: drop-shadow(30px 30px 30px rgba(123, 135, 147, .1));
    width: 30rem;

    @media (max-width: 1400px) {
      width: 30rem;
    }

    @media (max-width: 1199px) {
      width: 30rem;
    }

    @media (max-width: 991px) {
      width: 30rem;
    }

    @media (max-width: 767px) {
      width: 23rem;
    }
  }

  .swiper-container {
    padding: 8rem 0 10rem;

    @media (max-width: 991px) {
      padding: 4rem 0 10rem;
    }
  }

  .autowidth-slider__nav {
    position: absolute;
    z-index: 1;
    right: 0;
    bottom: 4rem;
  }
}
</style>