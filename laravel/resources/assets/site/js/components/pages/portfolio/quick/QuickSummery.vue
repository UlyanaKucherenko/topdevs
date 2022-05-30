<template>
  <div class="quick-summery">
    <div class="container quick-summery__container">
      <div class="quick-summery__content">
        <div class="quick-summery__content-holder">
          <QuickHeader
            class="quick-summery__header"
            titleTextColor="var(--case-color-primary)"
            :isCentered="false"
            titleStyles="display: none"
            :baseOptions="{
            titleText: 'Project Summary',
            descText: 'The TopDevs development team has been responsible for the frontend and backend development of a web app. We have taken into account the needs of each party and allocated the most crucial functionality that everyone can benefit from. Some of the features are of shared use with certain limitations, the others are developed specifically for the needs of each particular group.'
          }"/>

          <div class="quick-summery__list">
            <div v-for="item in list" :key="`item-${item.title}`" class="quick-summery__item-list">
              <div class="quick-summery__item-title">{{ item.title }}</div>
              <div class="quick-summery__item-text">{{ item.text }}</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="quick-summery__content-description">
      <QuickArchitectureTypes></QuickArchitectureTypes>
      <div class="quick-summery__content-description-container container">
        <AutowidthSlider
            sliderNavIcon="/images/site/portfolio/quick/summary/nav-arrow.svg"
            sliderNavMargin="10"
            :sliderBreakpoint="1200"
            :fullWidth="windowWidth <=991"
            :sliderOptions="{
              spaceBetween: 0,
              slidesOffsetAfter: 0,
              breakpoints: {
                320: {spaceBetween: 36},
                768: {spaceBetween: 84},
                992: {spaceBetween: 0},
                1200: {spaceBetween: 0}
              }
            }"
        >
          <PortfolioBlockBullet
              v-for="(item, index) in items" :key="index"
              class="quick-summery__item"
              titleColor="var(--case-color-white)"
              :titleText="item.title"
              listItemColor="var(--case-color-white)"
              listPreColor="#B4CAE2"
              :items="item.items"
              caseName="dancebug"
              cardBgColor="var(--case-color-blue)"
              preIconIsDisabled
          />
        </AutowidthSlider>
      </div>
    </div>
  </div>
</template>

<script>
import QuickHeader from "@/js/components/pages/portfolio/quick/global/QuickHeader";
import AutowidthSlider from '@/js/components/global/sliders/AutowidthSlider';
import PortfolioBlockBullet from '../global/PortfolioBlockBullet';
import QuickArchitectureTypes from "./QuickArchitectureTypes";

export default {
  name: "QuickSummery",
  components: {QuickArchitectureTypes, QuickHeader, AutowidthSlider, PortfolioBlockBullet},
  data() {
    return {
      list: [
        {
          title: 'Country:',
          text: 'USA'
        },
        {
          title: 'Industry:',
          text: 'Retail & E‑Commerce'
        },
        {
          title: 'Duration:',
          text: '2020 - Present'
        },
      ],
       items: [
        {
          title: 'Team',
          items: ['2 Backend Developers'],
        },
        {
          title: 'Tech Stack',
          items: ['PHP (Laravel)','MySQL', 'Docker', 'Amazon', 'Firebase', 'React Native'],
        },
        {
          title: 'Services',
          items: ['Mobile App Architecture Development', 'Mobile App Backend Development', 'Staff Augmentation'],
        },
        {
          title: 'Target Audience',
          items: ['Fashion Retailers', 'Online Stores', 'Marketplaces', 'Clothes Buyers','Retail Vendors'],
        }
      ]
    }
  }

}
</script>

<style lang="scss">
.autowidth-slider {
  &--static {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 280px));
    grid-column-gap: 20px;
  }
}

.autowidth-slider--full-width {
  @media (max-width: 991px) {
    width: calc(100% + var(--container-padding) * 2 + 18px);
    transform: translateX(-18px);
  }

  @media (max-width: 575px) {
    width: calc(100% + var(--container-padding) * 2 + 34px);
    transform: translateX(-34px);
  }
}

.swiper-wrapper {
  .swiper-slide {
    width: 33.33333%;
    @media (max-width: 991px) {
      width: fit-content;
    }
  }
}

.autowidth-slider__nav {
  margin-top: 4rem;
  margin-right: var(--container-padding);
}

.quick-summery {
  padding-top: calc(var(--space-unit) * 12.7);
  padding-bottom: calc(var(--space-unit) * 16.8);
  position: relative;
  z-index: 1;

  @media (max-width: 1640px) {
    padding-top: calc(var(--space-unit) * 12);
  }

  @media (max-width: 1400px) {
    padding-top: calc(var(--space-unit) * 10);
  }

  @media (max-width: 992px) {
    padding-top: calc(var(--space-unit) * 9);
  }

  @media (max-width: 1200px) {
    padding-top: 96px;
    padding-bottom: 0;
  }

  @media (max-width: 992px) {
    padding-top: 80px;
  }

  @media (max-width: 768px) {
    padding-top: 70px;
  }

  @media (max-width: 576px) {
    padding-top: 58px;
  }

  &__container {
    padding-bottom: calc(var(--space-unit) * 10);
    @media (max-width: 1200px) {
      padding-bottom: 100px;
    }

    @media (max-width: 992px) {
      padding-bottom: 135px;
    }

    @media (max-width: 768px) {
      padding-bottom: 75px;
    }

    @media (max-width: 576px) {
      padding-bottom: 56px;
    }

    @media (max-width: 360px) {
      padding-bottom: 27px;
    }
  }

  &__content {
    justify-content: flex-start;
    align-items: center;

    @media (max-width: 1201px) {
      padding: 0;
    }

    &-description-container {
      .autowidth-slider.autowidth-slider--dynamic {
        width: calc(100% + 5rem);
        margin-left: 0;
        transform: translateX(-50px);
        &:before {
          display: none;
        }
        &:after {
          display: none;
        }
      }
      .portfolio-bullet-block--case--dancebug {
        box-shadow: none;
      }
      .portfolio-bullet-block__item {
        display: list-item;
        list-style: disc;
        font-size: 1.6rem;
        margin-left: 20px;
      }
    }

    &-holder {
      display: flex;
      align-items: center;
      justify-content: space-between;
      column-gap: 90px;

      @media (max-width: 1400px) {
        flex-direction: column;
      }
    }

  }

  &__header {
    width: 45%;
    margin-bottom: var(--portfolio-header__title-margin);
    @media (max-width: 1400px) {
      width: 100%;
    }
  }

  &__list {
    display: grid;
    grid-template-columns: repeat(3, max-content);
    row-gap: 1rem;
    column-gap: 4.8rem;
    @media (max-width: 1400px) {
      width: 100%;
      margin-bottom: 0;
    }
    @media(max-width: 768px) {
      column-gap: 2.8rem;
    }
    @media(max-width: 420px) {
      column-gap: 1rem;
    }
    @media only screen and (max-width: 520px) {
      display: flex;
      flex-direction: column;
    }
  }

  &__item-list {
    font-size: 24px;
    text-align: left;
    @media (max-width: 1199px) {
      color: var(--case-color-black);
    }
    @media (max-width: 992px) {
      color: var(--case-color-white);
      font-size: 20px;
    }
    @media (max-width: 360px) {
      color: var(--case-color-white);
      font-size: 18px;
    }
  }

  &__item-title {
    margin-bottom: 1.2rem;
    color: #626262;
  }

  &__item-text {
    font-weight: 600;
    text-transform: uppercase;
    color: #000000;
  }


  &__item {
    @media (max-width: 1200px) {
      width: 80%;
    }

    @media (max-width: 991px) {
      width: 240px;
    }

    @media (max-width: 575px) {
      width: 220px;
    }
  }
}

.portfolio-header__content {
  .portfolio-header__title {
    @media (max-width: 768px) {
      font-size: 4rem;
    }
    @media (max-width: 576px) {
      font-size: 3.6rem;
    }
  }
}

</style>
