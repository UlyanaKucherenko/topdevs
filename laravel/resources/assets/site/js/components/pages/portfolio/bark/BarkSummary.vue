<template>
  <section class="bark-summary" v-scroll-reveal>
    <div class="container">
      <PortfolioHeader
        class="bark-summary__header"
        titleText="Project Summary"
        titleTextColor="var(--case-color-primary)"
        descText="BabelBark is a comprehensive and fully integrated software solution tailored to the individual needs of each dog. It includes mobile applications, intelligent cloud analytics and marketing tools to brings owners, their dogs, veterinarians, and suppliers together. BabelBark helps owners take care of their pets, vets treat their patients, and pet care providers manage and grow their businesses."
        headerColumnBreakpoint
        titleUppercase
      />

      <div class="bark-summary-slider">
        <AutowidthSlider
          shapeColor="white"
          sliderNavMargin="10"
          sliderNavIcon="/images/site/portfolio/bark/summary/nav-arrow.svg"
          :sliderBreakpoint="1470"
          :sliderOptions="{
            spaceBetween: 35,
            slidesOffsetAfter: 50,
            breakpoints: {
              768: {spaceBetween: 40},
              992: {spaceBetween: 45},
              1470: {spaceBetween: 75}
            }
          }"
        >
          <div 
            class="bark-summary__item-wrapper"
            v-for="(item, index) in items" :key="index"
          >
            <PortfolioBlockBullet
              class="bark-summary__item"
              titleColor="var(--case-color-black)"
              :titleText="item.title"
              listItemColor="var(--case-color-black)"
              listPreType="circle"
              :items="item.items"
              caseName="bark"
              cardBgColor="#FFEDE4"
            />

            <img 
              v-if="item.img"
              class="bark-summary__item-img"
              :src="item.img" alt=""
            >
          </div>
          
        </AutowidthSlider>
      </div>
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
          items: ['Objective-C', 'Swift', 'Misfit SDK'],
          color: '#F6EAFF'   ,
          img: '/images/site/portfolio/bark/summary/card-icon-2.svg'
        },
        {
          title: 'Target Audience',
          items: ['Pet owners', 'Veterinary Clinics', 'Animal Shelters', 'Pet Food Vendors', 'Pet Businesses'],
          color: '#F6EAFF'   
        },
        {
          title: 'Services',
          items: ['iOS App Development', 'UX/UI Design'],
          color: '#FDF0F0',
          img: '/images/site/portfolio/bark/summary/card-icon-1.svg'
        },
        {
          title: 'Team',
          items: ['4 iOS Developers', '1 UX/UI Designer'],
          color: '#F6EDFD'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .bark-summary {
    margin-bottom: 18rem;

    @media (max-width: 1470px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    .swiper-container {
      overflow: visible;
    }

    .autowidth-slider__inner {
      overflow: hidden;
    }

    .swiper-slide {
      &:nth-child(1) {
        .bark-summary__item-img {
          height: 7.5rem;
          position: absolute;
          right: 0;
          bottom: 0;
          transform: translate(25%, 25%);

          @media (max-width: 991px) {
            transform: translate(-25%, 27%);
          }
        }
      }

      &:nth-child(3) {
        .bark-summary__item-img {
          height: 7.5rem;
          position: absolute;
          left: 0;
          bottom: 0;
          transform: translate(-25%, 25%);

          @media (max-width: 991px) {
            transform: translate(-25%, 27%);
          }
        }
      }
    }

    &__header {
      margin-bottom: 7.5rem;
      max-width: 96.6rem;

      @media (max-width: 1470px) {
        margin-bottom: 5.5rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 440px) {
        .portfolio-header__title {
          width: min-content;
        }

        .deal-header__circle {
          top: 74%;
        }
      }
    }

    &__item {
      width: 28.8rem;
      height: 100%;

      @media (max-width: 1470px) {
        width: 27.8rem;
      }

      @media (max-width: 1199px) {
        width: 25.5rem;
      }

      @media (max-width: 991px) {
        width: 24.5rem;
      }

      @media (max-width: 575px) {
        width: 23.5rem;
      }

      &-wrapper {
        position: relative;

        @media (min-width: 1471px) {
          &:nth-child(1) {
            .bark-summary__item-img {
              position: absolute;
              right: 0;
              bottom: 0;
              transform: translate(25%, 25%);
            }
          }

          &:nth-child(3) {
            .bark-summary__item-img {
              position: absolute;
              left: 0;
              bottom: 0;
              transform: translate(-25%, 25%);
            }
          }
        }
      }

      &-img {
        width: 7vw;

        @media (max-width: 1470px) {
          width: 7.5rem;
        }
      }
    }
    

    &-slider {
      position: relative;
      // overflow: hidden;

      &__nav-circle {
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: var(--case-color-primary);
        margin: 0 .5rem;
      }
    }
  }
</style>