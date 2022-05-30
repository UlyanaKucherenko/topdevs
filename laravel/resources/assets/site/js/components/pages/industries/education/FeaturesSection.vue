<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['Our EdTech solutions aim at transforming education', 'into a cost-effective tool serving specific objectives.']"
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

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/education/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/education/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/6.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
    <img class="features-section__bg-dots bg-absolute" src="/images/site/icons/abstract/fig-34.svg" alt="" v-cursor-follow="{multiplier: .4}">
    <img class="features-section__bg-triangle bg-absolute" src="/images/site/icons/abstract/1.svg" alt="" v-cursor-follow="{multiplier: .4}">
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
        {title: 'Certification'},
        {title: 'Payment Processing'},
        {title: 'Skills Measurement'},
        {title: 'Social Sharing'},
        {title: 'Virtual Classroom'},
      ],
      rightCardItems: [
        {title: 'API and Plugins'},
        {title: 'Self-Paced Courses'},
        {title: 'Push Notifications'},
        {title: 'Gamification'},
        {title: 'Analytics & Reporting'}
      ]
    }
  },
}
</script>

<style lang="scss">
  .education {
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
        &-right-spot {
          top: 0;
          right: 15%;
          width: 21%;
          transform: translateY(-15%);

          @media (max-width: 1199px) {
            display: none;
          }
        }

        &-dots {
          left: 23%;
          bottom: 16%;
        
          @media (max-width: 1530px) {
            bottom: 10%;
          }
        }

        &-triangle {
          right: 23%;
          top: -4%;

          @media (max-width: 1540px) {
            top: -6%;
          }
        }

        &-square, &-dots, &-triangle {
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