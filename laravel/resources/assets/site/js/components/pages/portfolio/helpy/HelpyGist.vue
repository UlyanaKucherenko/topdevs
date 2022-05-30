<template>
  <div class="helpy-gist">
    <img 
      class="helpy-gist__bg-spot"
      src="/images/site/portfolio/helpy/gist/spot.svg" alt="" 
    >

    <div class="container">
      <div class="helpy-gist__list">
        <PortfolioBlockGist
          class="helpy-gist__item"
          v-for="(item, index) in gistItems" :key="index"
          :info="item"
        />
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
  .helpy-gist {
    position: relative;
    margin-bottom: 12rem;

    @media (min-width: 1401px) {
      display: none;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    &__list {
      position: relative;
      display: flex;

      @media (max-width: 575px) {
        flex-direction: column;
      }
    }

    &__item {
      @media (min-width: 576px) {
        margin-right: 6rem;

        &:last-child {
          margin-right: 0;
        }
      }

      @media (max-width: 575px) {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__bg-spot {
      position: absolute;
      top: 0;
      right: 0;
      width: 18vw;
      transform: translateY(-30%);

      @media (max-width: 1199px) {
        right: 8vw;
        transform: translateY(-50%);
      }

      @media (max-width: 991px) {
        display: none;
      }
    }
  }
</style>