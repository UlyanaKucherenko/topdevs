<template>
  <div class="pet-solutions" v-scroll-reveal>
    <div class="container">
      <PetHeader
        class="pet-solutions__header"
        titleText="Solutions"
        :descText="[
          'The application redesign has resulted in the need to add, remove, or modify particular screens and functionality.',
          'With the increase of features, some of them were recognized as the ones suitable for sale. So specific subscription plans were developed. If people want to get access to the whole range of features, they need to buy the premium subscription plan. Otherwise, some functionality will be hidden.'
        ]"
        :headerColumnBreakpoint="1400"
      />

      <div class="pet-solutions__list">
        <div 
          class="pet-solutions__item"
          :class="{'pet-solutions__item--reverse': index % 2}"
          v-for="(item, index) in items" :key="index"
          v-scroll-reveal
        >
          <img 
            class="pet-solutions__item-img"
            :src="item.imgURL" alt=""
          >

          <div :class="`pet-solutions__item-info pet-solutions__item-info-${index+1}`">
            <PortfolioBlockBase
              class="pet-solutions__item-info-inner"
              :titleText="item.titleText"
              :descText="item.descText"
              titleColor="var(--case-color-secondary)"
              descColor="var(--case-color-primary )"
            />

            <img 
              :class="`pet-solutions__item-info-bg pet-solutions__item-info-bg-${index+1}`"
              :src="`/images/site/portfolio/pet/solutions/mockup-${index+1}-fig.svg`" alt="" 
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PetHeader from './global/PetHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PetHeader, PortfolioBlockBase},

  data() {
    return {
      items: [
        {
          titleText: 'Analytics Systems',
          descText: 'The app owner can analyze users’ actions to get insights into what features are the most popular and which ones are easily removable.',
          imgURL: '/images/site/portfolio/pet/solutions/mockup-1.png'
        },
        {
          titleText: 'Subscription Plans',
          descText: 'Users can enjoy certain feature collections by purchasing the most suitable plans for a week, month, year or so. ',
          imgURL: '/images/site/portfolio/pet/solutions/mockup-2.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .pet-solutions {
    --item-margin: 13.5%;
    background: linear-gradient(0deg, #F6F6F6, #F6F6F6);
    padding-bottom: 15rem;

    @media (max-width: 1199px) {
      padding-bottom: 10rem;
    }

    @media (max-width: 991px) {
      --item-margin: 7.5%;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__header {
      padding-top: 17%;
      position: relative;
      margin-bottom: calc(var(--space-unit) * 7.4); 

      @media (max-width: 1400px) {
        max-width: 88rem;
      }

      @media (max-width: 1199px) {
        padding-top: 29%;
      }

      @media (max-width: 991px) {
        padding-top: 19%;
      }
    }

    &__item {
      position: relative;
      z-index: 0;
      display: flex;
      align-items: center;
      margin-top: -2.5%;

      &:first-child {
        margin-top: 0;
      }

      @media (max-width: 575px) {
        flex-direction: column;
        margin-top: 0;
        max-width: 40rem;
        margin: 0 auto;
        margin-bottom: 5rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
      
      &-img {
        left: 0;
        top: 50%;
        width: 39%;
        z-index: -1;
        min-width: 35rem;

        @media (max-width: 991px) {
          margin-left: -2rem;
        }

        @media (max-width: 700px) {
          min-width: 27.5rem;
        }

        @media (max-width: 575px) {
          position: static;
          transform: none;
          width: 100%;
          margin-bottom: 1rem;
          margin-left: 0;
        }
      }

      &--reverse {
        @media (min-width: 576px) {
          flex-direction: row-reverse;
          .pet-solutions__item {
            &-info {
              margin-left: 0;
              margin-right: var(--item-margin);
            }

            &-img {
              margin-left: 0;
              margin-right: 3%;

              @media (max-width: 991px) {
                margin-right: 0;
              }
            }
          }
        }
      }

      &-info {
        position: relative;
        margin-left: var(--item-margin);

        @media (max-width: 575px) {
          margin-left: 0;
        }

        &-bg {
          &-1, &-2 {
            @media (max-width: 991px) {
              max-width: 10rem;
            }

            @media (max-width: 575px) {
              display: none;
            }
          }

          &-1 {
            position: absolute;
            left: 0;
            top: 0;
            transform: translate(-45%, -15%);
            z-index: -1;
            width: 41%;

          }

          &-2 {
            position: absolute;
            right: 0;
            bottom: 0;
            transform: translate(0, 28%);
            z-index: -1;
            width: 35%;

            @media (max-width: 991px) {
              max-width: 10rem;
            }
          }
        }

        &-1 {
          @media (min-width: 576px) {
            max-width: 40rem;
          }

          @media (max-width: 575px) {
            transform: translateX(3%);
          }
        }

        &-2 {
          @media (min-width: 576px) {
            max-width: 42.7rem;
          }
        }
      }
    }
  }
</style>