<template>
  <div class="deal-header">
    <PortfolioHeader
      v-bind="baseOptions"
      titleUppercase
      :titleStyles="{fontWeight: '800'}"
      :asideStyles="{fontWeight: 600}"
    >
      <div 
        class="deal-header__circle"
        slot="titleImg"
      />
    </PortfolioHeader>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  props: {
    baseOptions: Object,
  }
}
</script>

<style lang="scss">
  .deal-header {
    &__circle {
      --size: 1.5rem;
      position: absolute;
      left: calc(100% + 2.5rem);
      top: 50%;
      width: var(--size);
      height: var(--size);
      transform: translateY(-50%);
      background: var(--case-color-primary);
      border-radius: 50%;

      @media (max-width: 1199px) {
        --size: 1.2rem;
        left: calc(100% + 2rem);
      }

      @media (max-width: 575px) {
        --size: .8rem;
        left: calc(100% + 1.5rem);
      }
    }
  }
</style>