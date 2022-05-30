<template>
  <div
    class="target-solutions-row"
    :class="{'target-solutions-row--reversed': reversed}"
  >
    <div
      class="target-solutions-row__title portfolio-desc target-desc target-underlay"
      :class="{
        'target-underlay--reversed': windowWidth > 575 ? !reversed : true,
        'target-solutions-row__title--reversed': windowWidth > 575 ? reversed : false
      }"
    >
      {{ rowTitle }}
    </div>

    <div class="target-solutions-row__content">
      <div class="target-solutions-row__list">
        <PortfolioBlockBase
          class="target-solutions-row__item target-block-marked"
          v-for="(item, index) in listItems" :key="index"
          v-bind="item"
          titleColor="var(--case-color-primary)"
        />
      </div>

<!--      <img-->
<!--        class="target-solutions-row__mockup"-->
<!--        :src="windowWidth > 575 ? mockupURL : mockupURL.slice(0,-4) + '-575.png'" alt=""-->
<!--      >-->
      <img
        class="target-solutions-row__mockup"
        :src="mockupURL" alt=""
      >
    </div>
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  name: "TargetSolutionsRow",
  components: {PortfolioBlockBase},
  props: {
    rowTitle: String,
    mockupURL: String,
    listItems: Array,
    reversed: Boolean
  },

}
</script>

<style lang="scss">
.target-solutions-row {
  &--reversed {
    @media (min-width: 992px) {
      .target-solutions-row {
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
    margin-bottom: 2.5rem;
    min-width: 28.5rem;
    text-transform: uppercase;
    color: var(--case-color-violet);

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
      flex-direction: column;
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
      margin-bottom: 4rem;
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
    filter: drop-shadow(0px 0px 9px rgba(0, 0, 0, 0.18));

    @media (max-width: 991px) {
      margin: 0 auto;
      width: 85%;
      max-width: 60rem;
    }

    //@media (max-width: 575px) {
    //  transform: unset;
    //  max-width: unset;
    //  width: 100%;
    //  margin-bottom: -3%;
    //  margin-top: -9%;
    //}
  }
}

</style>
