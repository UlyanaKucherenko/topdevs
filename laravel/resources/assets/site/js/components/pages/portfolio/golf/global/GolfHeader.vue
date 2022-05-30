<template>
  <div class="golf-header">
    <PortfolioHeader
        class="golf-header__base-header"
        :titleTextColor="baseOptions.titleTextColor || 'white'"
        :isCentered="__props.isCentered"
        :asideDescColor="baseOptions.asideDescColor || 'white'"
        :asideStyles="baseOptions.asideStyles"
        headerColumnBreakpoint
        v-bind="baseOptions"
    />
  </div>
</template>

<script>
import PortfolioHeader from "../../global/PortfolioHeader";

export default {
  name: "GolfHeader",
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
<style lang="scss" scoped>
.golf-header {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
</style>