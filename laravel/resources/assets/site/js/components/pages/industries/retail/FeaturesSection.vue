<template>
  <div class="features-section">
    <div class="container relative">
      <SectionHeader
        title="Core Features"
        :desc="['We create e-commerce solutions that allow shoppers to', 'search, order, and track product delivery while vendors', 'can manage and promote business efficiently.']"
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

      <img class="features-section__left-photo img-shadow" src="/images/site/industries/retail/features/1.jpg" alt="" v-scroll-reveal>
      <img class="features-section__right-photo img-shadow" src="/images/site/industries/retail/features/2.jpg" alt="" v-scroll-reveal>
    </div>

    <img class="features-section__bg-left-spot bg-absolute" src="/images/site/icons/spots/7.svg" alt="" v-scroll-reveal="{scale: 0}">
    <img class="features-section__bg-right-spot bg-absolute" src="/images/site/icons/spots/8.svg" alt="" v-scroll-reveal="{scale: 0}">
    <img class="features-section__bg-square bg-absolute" src="/images/site/icons/abstract/fig-30.svg" alt="" v-cursor-follow="{multiplier: .3}">
    <img class="features-section__bg-triangle bg-absolute" src="/images/site/icons/abstract/1.svg" alt="" v-cursor-follow="{mutitplier: .4}">
    <img class="features-section__bg-dots bg-absolute" src="/images/site/icons/abstract/2.svg" alt="" v-cursor-follow="{multiplier: .5}">
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
        {title: 'In-Store Navigation'},
        {title: 'Order Management'},
        {title: 'Payments Processing'},
        {title: 'Loyalty Programs'},
        {title: 'Social Sharing'},
        {title: 'Supply Chain Management'},
      ],
      rightCardItems: [
        {title: 'In-Store Advertising'},
        {title: 'Inventory Management'},
        {title: 'Recipe Shopping'},
        {title: 'Push Notifications'},
        {title: 'Geolocation'},
        {title: 'Analytics & Reporting'},
      ]
    }
  },
}
</script>

<style lang="scss">
  .retail {
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

          @media (max-width: 991px) {
            display: none;
          }
        }

        &-left-spot {
          top: 52%;
          left: 7%;
          width: 26.5%;
        }

        &-right-spot {
          top: 53%;
          right: 16%;
          width: 19.5%;
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

        &-triangle, &-square, &-dots {
          @media (max-width: 1099px) {
            display: none;
          }
        }
      }

      &__left-photo, &__right-photo {
        position: absolute;
        width: 16%;

        @media (max-width: 1099px) {
          display: none;
        }
      }

      &__left-photo {
        left: 5%;
        top: 65%;
      }

      &__right-photo {
        right: 18%;
        top: 22%;
      }
    }
  }
</style>