<template>
  <section class="services-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        icon="/images/site/icons/abstract/header-3.svg"
      />

      <CardsSlider
        class="services-section__cards-slider"
        :items="processedItems"
        :cardComponent="MoreCard"
        :sliderOptions="{loop: false, mouseDrag: false}"
      />

      <a
        class="btn-default btn-default--home-page"
        href="/services"
      >
        learn more
      </a>
    </div>

    <img
      class="services-section__triangles"
      src="/images/site/icons/abstract/1.svg" alt=""
      v-cursor-follow="{multiplier: .2}"
    >
    <img
      class="services-section__circles"
      src="/images/site/icons/abstract/4.svg" alt=""
      v-cursor-follow="{multiplier: .3}"
    >
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'
import MoreCard from '@/js/components/global/cards/MoreCard'
import CardsSlider from '@/js/components/global/sliders/CardsSlider'

export default {
  components: {SectionHeader, ItemsList, CardsSlider},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    items: Array
  },

  data() {
    return {
      MoreCard,
    }
  },

  computed: {
    processedItems() {
      return this.items.map(item => ({
        item,
        imgWidth: 'fit',
        cardFilled: true,
        newDesign: true
      }))
    }
  }
}
</script>

<style lang="scss">
.home {
  .services-section {
    padding-bottom: var(--section-pd-y-big);
    position: relative;

    .items-list {
      &__row {
        justify-content: center;
      }

      &__item {
        width: 25%;
        margin: 0 calc(var(--space-unit) * 3);

        &:first-child {
          margin-left: 0;
        }

        &:last-child {
          margin-right: 0;
        }

        @media (max-width: 1300px) {
          width: 28%;
        }

        @media (max-width: 991px) {
          width: 45%;
        }

        @media (max-width: 575px) {
          width: 90%;
        }
      }
    }

    &__items {
      margin-bottom: calc(var(--space-unit) * 8);
    }

    &__triangles {
      position: absolute;
      bottom: 6%;
      left: 20%;
    }

    &__circles {
      position: absolute;
      bottom: 7%;
      left: 18.5%;
    }

    @media (max-width: 767px) {
      .services-section__triangles, .services-section__circles {
        display: none;
      }
    }
  }
}
</style>
