<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['We offer outstanding features for mobile dating apps and', 'websites that are personalized, highly secure, and easy to use. ']"
        icon="/images/site/icons/abstract/header-5.svg"
        mode="left"
      />

      <div class="features-section__content">
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

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/dating/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/dating/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/1.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/2.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
    <img class="features-section__bg-cursor-follow bg-absolute" src="/images/site/industries/dating/features/bg.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
  </div>
</template>

<script>
import gsap from 'gsap'
import SectionHeader from '@/js/components/global/SectionHeader'
import ListCard from '@/js/components/global/cards/ListCard'

export default {
  components: {SectionHeader, ListCard},

  data() {
    return {
      leftCardItems: [
        {title: 'Matchmaking'},
        {title: 'Private Messages'},
        {title: 'Date Planner'},
        {title: 'Search Filters'},
        {title: 'Video Chat'},
        {title: 'Real Face Detection'}
      ],
      rightCardItems: [
        {title: 'Push Notifications'},
        {title: 'Social Sharing'},
        {title: 'Dating History'},
        {title: 'Virtual Gifts'},
        {title: 'Private Photo Albums'},
        {title: 'Favorite List'}
      ]
    }
  },
}
</script>

<style lang="scss">
  .dating {
    .features-section {
      position: relative;
      padding-bottom: var(--section-pd-y-big);

      @media (max-width: 1199px) {
        padding-bottom: var(--section-pd-y-small);
      }

      &__content {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;

        @media (max-width: 1199px) {
          justify-content: center;
          align-items: stretch;
          padding: var(--section-pd-y-small) 0;
        }

        @media (max-width: 550px) {
          flex-direction: column;
          align-items: center;
        }
      }

      &__left-card, &__right-card {
        width: 22.8%;

        @media (max-width: 1199px) {
          width: 28rem;
        }

        @media (max-width: 550px) {
          width: 90%;
          max-width: 30rem;
        }
      }

      &__left-card {
        margin-right: calc(var(--space-unit) * 8);
        margin-left: 5%;

        @media (max-width: 550px) {
          margin-right: 0;
        }
      }

      &__right-card {
        margin-top: calc(var(--space-unit) * 8);

        @media (max-width: 1199px) {
          margin-top: 0;
        }

        @media (max-width: 550px) {
          margin-left: 0;
          margin-top: 2.5rem;
        }
      }

      &__bg {
        &-left-spot, &-right-spot {
          width: 40%;

          @media (max-width: 1199px) {
            display: none;
          }
        }

        &-left-spot {
          top: 10%;
          left: -10%;
        }

        &-right-spot {
          top: -10%;
          right: 0;
        }

        &-cursor-follow {
          width: 60%;
          bottom: 16%;
          right: 15%;

          @media (max-width: 1199px) {
            display: none;
          }
        }
      }

      &__left-photo, &__right-photo {
        position: absolute;
        width: 18%;

        @media (max-width: 1199px) {
          display: none;
        }
      }

      &__left-photo {
        right: 20.5%;
        top: 7%;
      }

      &__right-photo {
        right: 5%;
        bottom: 10%;
      }
    }
  }
</style>