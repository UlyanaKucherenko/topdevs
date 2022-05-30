<template>
  <div class="dancebug-header">
    <PortfolioHeader
      class="dancebug-header__base-header"
      :titleTextColor="baseOptions.titleTextColor || 'var( --case-color-primary)'"
      :isCentered="__props.isCentered"
      :asideDescColor="asideDescColor || 'var( --case-color-primary)'"
      headerColumnBreakpoint
      v-bind="baseOptions"
    />
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  inheritAttrs: false,
  components: {PortfolioHeader},
  props: {
    baseOptions: Object,
    innerMaxWidth: String,
    dividerColor: String,
    breakpoints: Object,
    isCentered: Boolean,
    asideDescColor: String,

  },
  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    }
  },
}
</script>

<style lang="scss">
.dancebug-header {
  display: flex;
  flex-direction: column;
}
</style>
