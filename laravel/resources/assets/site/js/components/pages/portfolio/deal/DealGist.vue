<template>
  <div class="deal-gist">
    <div class="container">
      <div class="deal-gist__list">
        <PortfolioBlockGist
          class="deal-gist__item"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
        />

        <div class="deal-gist__circle"/>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},
  
  props: {
    gistItems: Array
  }
}
</script>

<style lang="scss">
  .deal-gist {
    margin-bottom: 13rem;

    @media (min-width: 1401px) {
      display: none;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 7rem;
    }

    &__list {
      position: relative;
      display: flex;
      // justify-content: space-between;

      @media (max-width: 656px) {
        flex-direction: column;
      }
    }

    &__item {
      @media (min-width: 657px) {
        margin-right: 6rem;

        &:last-child {
          margin-right: 0;
        }
      }

      @media (max-width: 656px) {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__circle {
      --size: 25rem;
      position: absolute;
      left: 0;
      bottom: 0;
      transform: translate(-50%, 19%);
      z-index: -1;
      width: var(--size);
      height: var(--size);
      max-width: 290px;
      max-height: 290px;
      border-radius: 50%;
      background: rgba(252, 252, 252, .6);

      @media (max-width: 1199px) {
        --size: 22rem;
      }

      @media (max-width: 991px) {
        --size: 17rem;
      }
    }
  }
</style>