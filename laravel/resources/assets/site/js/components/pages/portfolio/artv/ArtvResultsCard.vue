<template>
  <div class="artv-results-card">
      <ArtvBlockBase
        class="artv-results__item"
        :title="title"
        :desc="desc"
        color="white"
      />

      <div class="artv-results-card__square artv-results-square">
        <slot/>
      </div>
  </div>
</template>

<script>
import ArtvBlockBase from './global/ArtvBlockBase'

export default {
  components: {ArtvBlockBase},

  props: {
    title: String,
    desc: String
  }
}
</script>

<style lang="scss">
  .artv-results-card {
    position: relative;
    padding-left: 9rem;

    @media (max-width: 1199px) {
      padding-left: 7.5rem;
    }

    &__square {
      left: 0;
      top: -2.5rem;

      @media (max-width: 1199px) {
        top: -1.8rem;
      }
    }

    &:after {
      content: '';
      position: absolute;
      --size: 3rem;
      width: var(--size);
      height: var(--size);
      border-radius: 50%;
      background: var(--case-color-yellow);
      left: 3.5rem;
      top: .5rem;

      @media (max-width: 1400px) {
        top: .4rem;
      }

      @media (max-width: 1199px) {
        --size: 2.5rem;
        left: 2.75rem;
      }
    }
  }
</style>