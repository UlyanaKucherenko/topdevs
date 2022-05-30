<template>
  <PortfolioHeader
    v-bind="$attrs"
    titleTextColor="var(--case-color-primary)"
  >
    <div 
      class="pet-header__line"
      :style="{color: lineColor}"
      slot="titleImg"
    />
    <slot/>
  </PortfolioHeader>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  inheritAttrs: false,
  components: {PortfolioHeader},

  props: {
    lineColor: String
  }
}
</script>

<style lang="scss">
  .pet-header {
    &__line {
      width: 2.4em;
      height: .3704em;
      position: absolute;
      right: -.34em;
      bottom: 0;
      z-index: -1;
      background: var(--case-color-beige);
    }
  }
</style>