<template>
  <PortfolioSection
    class="home-portfolio-section"
    :headerTitle="headerTitle"
    :headerDesc="headerDesc"
  >
    <template #bottom-content>
      <a href="/portfolio" class="btn-default btn-default--home-page home-portfolio-section__btn">explore our portfolio</a>
      <img class="home-portfolio-section__triangles" v-cursor-follow="{multiplier: .2}" src="/images/site/icons/abstract/1.svg">
      <img class="home-portfolio-section__dots" v-cursor-follow="{multiplier: .5}" src="/images/site/icons/abstract/2.svg">
      <img class="home-portfolio-section__arc" v-cursor-follow="{multiplier: .4}" src="/images/site/icons/abstract/3.svg">
    </template>
  </PortfolioSection>
</template>

<script>
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'

export default {
  components: {PortfolioSection},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    items: Array
  },
}
</script>

<style lang="scss">
  .home-portfolio-section {
    padding-bottom: var(--section-pd-y-big);
    padding-top: var(--section-pd-y-big);
    position: relative;

    &__btn {
      margin-top: calc(var(--space-unit) * 8);
    }

    &__items {
      margin-bottom: calc(var(--space-unit) * 12);
    }

    &__triangles {
      position: absolute;
      right: 12%;
      bottom: calc(var(--space-unit) * 15);
      z-index: 1;
    }

    &__dots {
      position: absolute;
      right: 13.5%;
      bottom: calc(var(--space-unit) * 7);
      z-index: 1;
    }

    &__arc {
      position: absolute;
      right: 9.5%;
      bottom: calc(var(--space-unit) * 5);
    }

    @media (max-width: 767px) {
      .home-portfolio-section__triangles, .home-portfolio-section__dots, .home-portfolio-section__arc {
        display: none;
      }
    }
  }
</style>
