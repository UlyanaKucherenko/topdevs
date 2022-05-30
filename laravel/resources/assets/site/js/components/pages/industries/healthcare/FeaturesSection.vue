<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['We create healthcare software solutions that', 'are fully secure and easy to use by doctors,', 'care providers, and patients.']"
        icon="/images/site/icons/abstract/header-5.svg"
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

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/healthcare/core/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/healthcare/core/2.jpg" alt="" v-scroll-reveal>
    </div>

    <div class="features-section__bg-cursor-follow">
      <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/5.svg" alt="" v-scroll-reveal="{scale: 0, delay: 250}">
      <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/6.svg" alt="" v-scroll-reveal="{scale: 0, delay: 500}">
      <img class="features-section__bg-square bg-absolute" src="/images/site/icons/abstract/fig-30.svg" alt="" v-cursor-follow="{multiplier: .4}">
      <img class="features-section__bg-triangle bg-absolute" src="/images/site/icons/abstract/1.svg" alt="" v-cursor-follow="{multiplier: .4}">
      <img class="features-section__bg-dots bg-absolute" src="/images/site/icons/abstract/2.svg" alt="" v-cursor-follow="{multiplier: .4}">
    </div>
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
        {title: 'HIPAA Compliance'},
        {title: 'EMR & POC Modules'},
        {title: 'Appointments Scheduler'},
        {title: 'HL7 Support'},
        {title: 'Forms Engine'},
        {title: 'CMS Standards Support'}
      ],
      rightCardItems: [
        {title: 'Reports Builder'},
        {title: 'Patient Engagement'},
        {title: 'Telehealth Solutions'},
        {title: 'Push Notifications'},
        {title: 'Geolocation'},
        {title: 'Analytics & Reporting'}
      ]
    }
  },
}
</script>

<style lang="scss">
  .healthcare {
    .features-section {
      position: relative;
      padding-bottom: var(--section-pd-y-big);

      @media (max-width: 1199px) {
        padding-bottom: var(--section-pd-y-small);
      }

      &__content {
        padding-bottom: var(--section-pd-y-big);
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
        padding-top: calc(var(--space-unit) * 7);
        padding-bottom: calc(var(--space-unit) * 7);

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
          transform: translateY(-50%);

          @media (max-width: 1199px) {
            display: none;
          }
        }

        &-left-spot {
          top: 55%;
          left: 9%;
          width: 26%;
        }

        &-right-spot {
          top: 53%;
          right: 15%;
          width: 21%;
        }

        &-square {
          left: 23%;
          bottom: 16%;
        }

        &-dots {
          right: 15%;
          top: 50%;
        }

        &-triangle {
          left: 50%;
          bottom: 20%;
        }

        &-square, &-dots, &-triangle {
          @media (max-width: 1199px) {
            display: none;
          }
        }
      }

      &__left-photo, &__right-photo {
        position: absolute;
        width: 18.5%;

        @media (max-width: 1199px) {
          display: none;
        }
      }

      &__left-photo {
        left: 55%;
        top: 35.5%;
      }

      &__right-photo {
        left: 65%;
        top: 68%;
      }
    }
  }
</style>