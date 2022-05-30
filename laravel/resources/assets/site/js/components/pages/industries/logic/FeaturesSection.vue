<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['We enhance your transportation system with', 'the most accurate software for logistics and', 'extensive feature set. ']"
        icon="/images/site/icons/abstract/header-5.svg"
      />

      <div class="features-section__content relative">
        <img 
          class="features-section__bg-circles bg-absolute"
          src="/images/site/industries/logic/features/bg-circles.svg" alt="" 
        >
        <img 
          class="features-section__bg-triangles bg-absolute"
          src="/images/site/industries/logic/features/bg-triangles.svg" alt="" 
        >
        
        <ListCard 
          class="features-section__left-card"
          mode="filled"
          :items="leftCardItems"
        />

        <ListCard 
          class="features-section__right-card"
          mode="filled"
          :items="rightCardItems"
        />
      </div>

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/logic/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/logic/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/3.svg" alt="" v-scroll-reveal="{scale: 0, delay: 250}">
    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/4.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
  </div>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ListCard from '@/js/components/global/cards/ListCard'

export default {
  components: {SectionHeader, ListCard},

  data() {
    return {
      leftCardItems: [
        {title: 'Asset Tracking'},
        {title: 'Order Management '},
        {title: 'Interactive Scheduling Calendar'},
        {title: 'Fleet & Staff Management'},
        {title: 'Audit Accounting'},
        {title: 'Reviews and Recommendations'}
      ],
      rightCardItems: [
        {title: 'Geolocation'},
        {title: 'In-App Purchases'},
        {title: 'API Integration'},
        {title: 'Comprehensive Reporting'},
        {title: 'Push Notifications'},
        {title: 'Social Media Integration'}
      ]
    }
  },
}
</script>

<style lang="scss">
  .logic {
    .features-section {
      position: relative;
      padding-bottom: var(--section-pd-y-small);

      &__content {
        padding: calc(var(--space-unit) * 10) 0;
        display: flex;
        justify-content: flex-end;
        align-items: flex-start;

        @media (max-width: 1099px) {
          justify-content: center;
          align-items: stretch;
        }

        @media (max-width: 550px) {
          flex-direction: column;
          align-items: center;
        }
      }

      &__left-card, &__right-card {
        width: 28%;

        @media (max-width: 1099px) {
          width: 28rem;
        }

        @media (max-width: 550px) {
          width: 90%;
          max-width: 30rem;
        }
      }

      &__left-card {
        margin-right: calc(var(--space-unit) * 8);

        @media (max-width: 550px) {
          margin-right: 0;
        }
      }

      &__right-card {
        margin-top: calc(var(--space-unit) * 8);

        @media (max-width: 1099px) {
          margin-top: 0;
        }

        @media (max-width: 550px) {
          margin-left: 0;
          margin-top: 2.5rem;
        }
      }

      &__bg {
        &-circles {
          right: 30%;
          bottom: -4%;

          @media (max-width: 1400px) {
            display: none;
          }
        }

        &-triangles {
          bottom: -5%;
          left: 8%;
          z-index: 2;

          @media (max-width: 1400px) {
            display: none;
          }
        }

        &-left-spot, &-right-spot {
          transform: translateY(-50%);
          width: 30%;

          @media (max-width: 991px) {
            display: none;
          }
        }

        &-left-spot {
          top: 55%;
          left: 5%;
        }

        &-right-spot {
          top: 55%;
          right: 5%;
        }
      }

      &__left-photo, &__right-photo {
        position: absolute;
        width: 18.5%;

        @media (max-width: 1099px) {
          display: none;
        }
      }

      &__left-photo {
        left: 17.5%;
        top: 35.5%;
      }

      &__right-photo {
        left: 8.5%;
        top: 68%;
      }
    }
  }
</style>