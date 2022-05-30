<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        class="splitted-header-section__header"
        title="Core Features"
        :desc="['We fuel your sports software and fitness mobile', 'apps with the functionality your customers get', 'habitual to.']"
        icon="/images/site/icons/abstract/header-5.svg"
        mode="left"
      />

      <div class="features-section__content">
        <img 
          class="features-section__bg"
          src="/images/site/industries/sports/features/bg.svg" alt="" 
        >
        <ListCard 
          class="features-section__left-card"
          mode="filled"
          icon="/images/site/icons/circle-grey.svg"
          :items="leftCardItems"
        />

        <ListCard 
          class="features-section__right-card"
          mode="filled"
          icon="/images/site/icons/circle-grey.svg"
          :items="rightCardItems"
        />
      </div>

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/sports/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/sports/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/1.svg" alt="" v-scroll-reveal="{scale: 0}">
    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/2.svg" alt="" v-scroll-reveal="{scale: 0}">
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
        {title: 'Activity Tracking'},
        {title: 'Workout Videos'},
        {title: 'Personalized Plans'},
        {title: 'Workout Calendars'},
        {title: 'Progress Visualization'},
        {title: 'Wearables Integration'},
        {title: 'Challenges & Goals'},
        {title: 'Social Media Integration'}
      ],
      rightCardItems: [
        {title: 'Instant Messaging'},
        {title: 'Nutrition'},
        {title: 'League & Team Management'},
        {title: 'Push Notifications'},
        {title: 'Geolocation'},
        {title: 'Analytics & Reporting'},
        {title: 'Events & Tickets Booking'},
      ]
    }
  },
}
</script>

<style lang="scss">
  .sports {
    .features-section {
      position: relative;
      padding-bottom: var(--section-pd-y-small);

      &__content {
        position: relative;
        padding: calc(var(--space-unit) * 15) 0 calc(var(--space-unit) * 10);
        display: flex;
        justify-content: center;
        align-items: flex-start;

        @media (max-width: 1199px) {
          padding-top: calc(var(--space-unit) * 10);
        }

        @media (max-width: 550px) {
          flex-direction: column;
          align-items: center;
        }
      }

      &__bg {
        position: absolute;
        width: 192rem;
        bottom: 0;
        z-index: -1;
        transform: translateY(5%);

        @media (max-width: 1400px) {
          width: 114vw;
        }

        @media (max-width: 1199px) {
          display: none;
        }
      }

      &__left-card, &__right-card {
        width: 26%;

        @media (max-width: 1099px) {
          width: 29rem;
        }

        @media (max-width: 550px) {
          width: 90%;
          max-width: 30rem;
        }
      }

      &__right-card {
        margin-left: calc(var(--space-unit) * 5);
        margin-top: calc(var(--space-unit) * 14);

        @media (max-width: 550px) {
          margin-left: 0;
          margin-top: 2.5rem;
        }
      }

      &__bg {
        &-left-spot, &-right-spot {
          transform: translateY(-50%);
          width: 45%;
          display: none;

          @media (max-width: 1199px) and (min-width: 992px) {
            display: block;
          }
        }

        &-left-spot {
          top: 55%;
          left: -5%;
        }

        &-right-spot {
          top: 50%;
          right: -5%;
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
        left: 5%;
        top: 45%;
      }

      &__right-photo {
        right: 18%;
        top: 22%;
      }
    }
  }
</style>