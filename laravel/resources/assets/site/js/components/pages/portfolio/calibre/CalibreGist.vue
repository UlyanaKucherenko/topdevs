<template>
  <section class="calibre-gist">
    <div class="container">
      <div class="calibre-gist__list">
        <PortfolioBlockGist
          class="calibre-gist__item"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
          :hasWidthBreakpoint="767"
        />
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},
  props: {gistItems: Array},
}
</script>

<style lang="scss">
  .calibre-gist {
    padding-top: 5rem;
    padding-bottom: 10rem;

    @media (min-width: 1451px) {
      display: none;
    }

    @media (max-width: 1199px) {
      padding-top: 3.5rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 6rem;
    }

    &__list {
      display: flex;

      @media (max-width: 680px) {
        flex-direction: column;
      }
    }
    
    &__item {
      margin-right: 8rem;

      &:last-child {
        margin: 0;
      }

      @media (max-width: 680px) {
        margin-bottom: 2.5rem;
      }

      .portfolio-block-gist__list {
        @media (max-width: 355px) {
          font-size: 1.6rem;
        }
      }
    }
  }
</style>