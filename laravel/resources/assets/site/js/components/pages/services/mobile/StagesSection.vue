<template>
  <div class="stages-section">
    <div class="container">
      <ServicesSectionHeader
          :title="['Mobile App Development Stages']"
          :desc="[`Our proven`,`mobile app development process`,`to ensure the project's time and cost-efficiency.`]"
          mode="left"
      />

      <ItemsList
          :items="items"
          :columns="{
          700: 1,
          default: 3
        }"
          cardType="first"
          :cardOptions="{imgWidth: 'fit', mode: 'left', cardType:'first', classes: {img: 'stages-section__card-img', title: 'stages-section__card-title'}}"
      />
    </div>
  </div>
</template>

<script>
import ItemsList from '@/js/components/global/ItemsList'

import ServicesSectionHeader from "./global/ServicesSectionHeader";

export default {
  components: {
    ServicesSectionHeader,
    ItemsList
  },

  data() {
    return {
      items: [
        {
          imgURL: '/images/site/services/mobile/stages/new/1.svg',
          title: 'Concept & Prototype',
          desc: 'Design elaboration and interactive prototype development to experience the mobile app before the actual development starts.'
        },
        {
          imgURL: '/images/site/services/mobile/stages/new/2.svg',
          title: 'MVP Development',
          desc: 'Market validation of a mobile app idea via a minimum viable product to examine the unknowns, test its potential and scale quickly.'
        },
        {
          imgURL: '/images/site/services/mobile/stages/new/3.svg',
          title: 'Final Product Delivery',
          desc: 'Comprehensive mobile app development, project finalization with an option for Play Market & App Store deployment and further support.'
        }
      ],
    }
  },
}
</script>

<style lang="scss">
.mobile {
  .stages-section {
    padding: var(--section-pd-y-small) 0;
    &__card-img {
      margin-right: auto;
    }

    &__card-title {
      text-transform: uppercase;
    }

    .items-list {
      &__row {
        @media (min-width: 1350px) {
          justify-content: space-around;
        }
      }

      &__item {
        width: 30%;
        max-width: 300px;

        @media (max-width: 700px) {
          width: 90%;
        }
      }
    }
  }
}
</style>
