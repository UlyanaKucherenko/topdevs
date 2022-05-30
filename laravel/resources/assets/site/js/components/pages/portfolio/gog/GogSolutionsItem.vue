<template>
  <div class="gog-solutions-item">
    <img 
      class="gog-solutions-item__bg-line"
      :class="{'gog-solutions-item__bg-line--reversed': lineIsReversed}"
      :src="lineURL" alt="" 
    >

    <PortfolioBlockBase
      class="gog-solutions-item__inner"
      titleColor="var(--case-color-black-bold)"
      :icon="icon"
      :titleText="title"
      :descText="desc"
      :breakpoints="{
        991: {
          isColumn: true
        }
      }"
    />
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioBlockBase},

  props: {
    icon: String,
    title: String,
    desc: String,
    lineURL: String,
    lineIsReversed: Boolean
  }
}
</script>

<style lang="scss">
  .gog-solutions-item {
    position: relative;
    padding: 5rem;
    background: white;
    border-radius: 20px;

    @media (max-width: 1552px) {
      padding: 4.5rem;
    }

    @media (max-width: 1400px) {
      padding: 3rem;
    }

    @media (max-width: 1199px) {
      padding: 2.5rem;
    }

    @media (max-width: 767px) {
      padding: 2rem;
    }

    @media (max-width: 575px) {
      padding: 1.7rem;
    }

    &__inner {
      --icon-width: 12.2rem;
      --icon-margin: 3rem;

      @media (max-width: 1552px) {
        --icon-width: 11rem;
        --icon-margin: 2.5rem;
      }

      @media (max-width: 1400px) {
        --icon-width: 9.4rem;
        --icon-margin: 1.5rem;
      }

      @media (max-width: 1199px) {
        --icon-width: 8.9rem;
      }

      @media (max-width: 991px) {
        --icon-margin: 1.2rem;
      }

      @media (max-width: 575px) {
        --icon-width: 8rem; 
      }
    }

    &__bg-line {
      position: absolute;
      height: 100%;
      right: 50%;
      top: 0;
      z-index: -1;

      &--reversed {
        right: auto;
        left: 50%;
      }

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>