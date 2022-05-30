<template>
  <div class="meld-solutions-card">
    <div class="meld-solutions-card__number">
      {{ number }}
    </div>
    <PortfolioBlockBase
      :titleText="titleText"
      :descText="descText"
    />
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioBlockBase},

  props: {
    number: String,
    titleText: String,
    descText: String
  }
}
</script>

<style lang="scss">
  .meld-solutions-card {
    &__number {
      font-family: var(--Muli);
      font-weight: 800;
      font-size: 15rem;
      color: #FE524D;
      opacity: .09;
      line-height: 120%;
      margin-bottom: .5rem;
    
      @media (max-width: 1400px) {
        font-size: 12rem;;
      }

      @media (max-width: 1199px) {
        font-size: 10rem;
      }

      @media (max-width: 991px) {
        font-size: 8rem;
      }

      @media (max-width: 575px) {
        font-size: 6rem;
      }
    }
  }
</style>