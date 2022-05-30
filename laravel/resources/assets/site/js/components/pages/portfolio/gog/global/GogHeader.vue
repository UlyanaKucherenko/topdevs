<template>
  <div class="gog-header">
    <GogDivider
      class="gog-header__divider"
      :color="dividerColor"
      :lineWeight="2"
      :circleRadius="10"
      :circleMargin="75"
      :breakpoints="{
        1400: {circleMargin: 70},
        1199: {circleMargin: 60},
        991: {circleMargin: 45},
        575: {circleMargin: 20}
      }"
    />

    <PortfolioHeader
      class="gog-header__base-header"
      :style="{maxWidth: __props.innerMaxWidth}"
      v-bind="baseOptions"
      titleUppercase
      isCentered
      headerColumnBreakpoint
    />
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import GogDivider from '@/js/components/pages/portfolio/gog/global/GogDivider'

export default {
  inheritAttrs: false,
  components: {PortfolioHeader, GogDivider},

  props: {
    baseOptions: Object,
    innerMaxWidth: String,
    dividerColor: String,
    breakpoints: Object
  },

  
  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    }
  },
}
</script>

<style lang="scss">
  .gog-header {
    display: flex;
    flex-direction: column;
    align-items: center;

    &__divider {
      width: 100%;
      margin-bottom: 7rem;

      @media (max-width: 1199px) {
        margin-bottom: 5.5rem
      }

      @media (max-width: 991px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }
    }
  }
</style>