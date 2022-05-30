<template>
  <div class="event-header">
    <PortfolioHeader
      class="event-header__base-header"
      titleTextColor="white"
      :isCentered="__props.isCentered"
      :asideDescColor="asideDescColor || 'var(--case-color-secondary)'"
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
    asideDescColor: String
  },

  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    }
  },
}
</script>

<style lang="scss">
  .event-header {
    display: flex;
    flex-direction: column;
    align-items: center;
  }
</style>
