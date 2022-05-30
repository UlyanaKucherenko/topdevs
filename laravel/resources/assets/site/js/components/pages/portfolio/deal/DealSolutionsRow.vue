<template>
  <div 
    class="deal-solutions-row"
    :class="{'deal-solutions-row--reversed': reversed}"
  >
    <div 
      class="deal-solutions-row__title portfolio-desc deal-desc deal-underlay"
      :class="{
        'deal-underlay--reversed': windowWidth > 575 ? !reversed : true,
        'deal-solutions-row__title--reversed': windowWidth > 575 ? reversed : false
      }"
    >
      {{ rowTitle }}
    </div>

    <div class="deal-solutions-row__content">
      <div class="deal-solutions-row__list">
        <PortfolioBlockBase
          class="deal-solutions-row__item deal-block-marked"
          v-for="(item, index) in listItems" :key="index"
          v-bind="item"
          titleColor="var(--case-color-primary)"
        />
      </div>

      <img 
        class="deal-solutions-row__mockup"
        :src="windowWidth > 575 ? mockupURL : mockupURL.slice(0,-4) + '-575.png'" alt="" 
      >
    </div>
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioBlockBase},

  props: {
    rowTitle: String,
    mockupURL: String,
    listItems: Array,
    reversed: Boolean
  }
}
</script>

<style lang="scss">
  .deal-solutions-row {
    &--reversed {
      @media (min-width: 992px) {
        .deal-solutions-row {
          &__content {
            flex-direction: row-reverse;
          }

          &__list {
            width: calc(50% - 7.5rem);

            @media (max-width: 1400px) {
              width: calc(50% - 2.6rem);
            }
          }
        }
      }
    }

    &__title {
      width: 50%;
      padding: 1.5rem 0;
      margin-bottom: 5.5rem;
      min-width: 28.5rem;
      text-transform: uppercase;

      @media (max-width: 991px) {
        margin-bottom: 4.5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 1.5rem;
      }

      &--reversed {
        margin-left: auto;
        padding-left: 7.5rem;

        @media (max-width: 1400px) {
          padding-left: 2.6rem;
        }

        @media (max-width: 1199px) {
          padding-left: 2rem;
        }

        @media (max-width: 991px) {
          padding-left: 1.5rem;
        }
      }
    }

    &__content {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;

      @media (max-width: 991px) {
        flex-direction: column-reverse;
      }
    }

    &__list {
      width: 44%;
      display: grid;
      grid-template-columns: 1fr;
      row-gap: 3.5rem;
      flex-shrink: 0;

      @media (max-width: 1400px) {
        width: 47%;
      }

      @media (max-width: 991px) {
        width: 100%;
        grid-template-columns: 1fr 1fr;
        column-gap: 4rem;
        row-gap: 2.5rem;
      }

      @media (max-width: 575px) {
        grid-template-columns: 1fr;
        row-gap: 1.5rem;
      }
    }

    &__item {
    }

    &__mockup {
      width: 47.8%;
      z-index: -2;
    
      @media (max-width: 1400px) {
        width: 64.8%;
      }

      @media (max-width: 991px) {
        margin: 0 auto;
        width: 85%;
        max-width: 60rem;
      }

      @media (max-width: 575px) {
        transform: unset;
        max-width: unset;
        width: 100%;
        margin-bottom: -3%;
        margin-top: -9%;
      }
    }
  }
</style>