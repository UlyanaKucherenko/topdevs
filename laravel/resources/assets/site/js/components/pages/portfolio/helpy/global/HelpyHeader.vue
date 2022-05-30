<template>
  <PortfolioHeader
    class="helpy-header"
    titleTextColor="var(--case-color-black)"
    titleUppercase
    v-bind="headerPropsProcessed"
  />
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  props: {
    headerPropsBase: Object,
  },


  computed: {
    headerPropsProcessed() {
      const props = this.headerPropsBase
      props.titleClass = props.titleClass + ' helpy-header__title'
      return props
    }
  }
}
</script> 

<style lang="scss">
  .helpy-header__title {
    font-weight: bold;
  }
</style>