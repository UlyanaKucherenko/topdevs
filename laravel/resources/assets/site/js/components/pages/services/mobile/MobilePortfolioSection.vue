<template>
  <section class="mobile-portfolio-section">
    <div class="container">
      <div class="mobile-portfolio-section__content">

        <ServicesSectionHeader
            class="mobile-portfolio-section__header"
            title="Portfolio"
            :desc="[`Explore the top`,` mobile application solutions`,` we've delivered by now to see the true value.`]"
            mode="left"
        />

<!--        SLIDER-->

      </div>
      <slot name="cursor-follow"/>
    </div>
  </section>
</template>

<script>

import ServicesSectionHeader from "./global/ServicesSectionHeader";

export default {
  name: 'MobilePortfolioSection',
  components: { ServicesSectionHeader},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    sliderProps: Object
  },

  data() {
    return {

    }
  },
}
</script>

<style lang="scss">
.mobile-portfolio-section {
  padding-bottom: var(--section-pd-y-big);
  position: relative;

  &__content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
  }

  &__header {
    //width: 45%;

    @media (min-width: 1151px) {
      margin-bottom: 0;
    }
  }

  &__slider {
    width: 45%;
  }

  @media (max-width: 1150px) {
    &__content {
      flex-direction: column;
    }

    &__header {
      width: 100%;
      max-width: 60rem;
    }

    &__slider {
      width: 100%;
      max-width: 60rem;
    }
  }
}
</style>
