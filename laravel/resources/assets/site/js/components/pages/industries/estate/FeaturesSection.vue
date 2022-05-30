<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['We offer numerous features for real estate app', 'development for builders, brokers, and buyers.']"
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

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/estate/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/estate/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/1.svg" alt="" v-scroll-reveal="{scale: 0}">
    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/2.svg" alt="" v-scroll-reveal="{scale: 0}">
    <img class="features-section__bg-circles bg-absolute" src="/images/site/industries/estate/features/bg.svg" alt="" v-cursor-follow="{multiplier: .4}">
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
        {title: 'Nearby Facilities'},
        {title: '3D Property View'},
        {title: 'Payments Processing'},
        {title: 'Search Filters'},
        {title: 'Listings & Photos'},
      ],
      rightCardItems: [
        {title: 'Maps & Navigation'},
        {title: 'Push Notifications'},
        {title: 'Live Chat'},
        {title: 'Analytics & Reporting'}
      ]
    }
  },
}
</script>

<style lang="scss">
  .estate {
    .features-section {
      position: relative;
      padding-bottom: var(--section-pd-y-small);

      &__content {
        padding: calc(var(--space-unit) * 10) 0;
        display: flex;
        justify-content: center;
        align-items: flex-start;

        @media (max-width: 550px) {
          flex-direction: column;
          align-items: center;
        }
      }


      &__left-card, &__right-card {
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
          width: 45%;

          @media (max-width: 1099px) {
            display: none;
          }
        }

        &-left-spot {
          top: 18%;
          left: -7%;
        }

        &-right-spot {
          top: 12%;
          right: 0%;
        }

        &-triangle {
          bottom: 32%;
          right: 21%;
        }

        &-square {
          top: 42%;
          left: 22%;
        }

        &-dots {
          top: 50%;
          right: 11%;
        }

        &-circles {
          width: 60%;
          left: 20%;
          bottom: 15%;

          @media (max-width: 1300px) {
            width: 80%;
            left: 10%;
          }

          @media (max-width: 1099px) {
            display: none;
          }
        }

        &-triangle, &-square, &-dots {
          @media (max-width: 1099px) {
            display: none;
          }
        }
      }

      &__left-photo, &__right-photo {
        position: absolute;
        width: 13%;

        @media (max-width: 1099px) {
          display: none;
        }
      }

      &__left-photo {
        left: 8%;
        top: 65%;
      }

      &__right-photo {
        right: 18%;
        top: 22%;
      }
    }
  }
</style>