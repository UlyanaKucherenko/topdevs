<template>
  <div class="easy-header">
    <PortfolioHeader
        class="event-header__base-header"
        :titleTextColor="baseOptions.titleTextColor || 'white'"
        :isCentered="__props.isCentered"
        :asideDescColor="baseOptions.asideDescColor || 'white'"
        headerColumnBreakpoint
        v-bind="baseOptions"
    />
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  name: "EasyHeader",
  components: {PortfolioHeader},
  props: {
    baseOptions: Object,
    innerMaxWidth: String,
    dividerColor: String,
    breakpoints: Object,
    isCentered: Boolean,
  },

  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    }
  },
}
</script>

<style lang="scss">
.easy-header {
  display: flex;
  flex-direction: column;
  align-items: center;
}

</style>