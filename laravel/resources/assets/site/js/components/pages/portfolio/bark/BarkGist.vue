<template>
  <div class="bark-gist">
    <div class="container">
      <div class="bark-gist__list">
        <template v-if="windowWidth > 919">
          <BarkBlockPreBullet
            class="bark-gist__item"
            v-for="(item, index) in gistItems" :key="index"
          >
            <PortfolioBlockGist
              :info="item"
            />
          </BarkBlockPreBullet>
        </template> 

        <template v-else>
          <BarkBlockPreBullet
            class="bark-gist__item"
          >
            <PortfolioBlockGist
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />
          </BarkBlockPreBullet>
        </template>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'
import BarkBlockPreBullet from './global/BarkBlockPreBullet'

export default {
  components: {PortfolioBlockGist, BarkBlockPreBullet},
  
  props: {
    gistItems: Array
  }
}
</script>

<style lang="scss">
  .bark-gist {
    margin-bottom: 12rem;

    @media (min-width: 1401px) {
      display: none;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 920px) {
      .portfolio-block-gist {
         margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    @media (max-width: 610px) {
      .bark-block-pre-bullet__circles-list {
        max-height: 15.8rem;
      }
    }

    @media (max-width: 575px) {
      margin-bottom: 7rem;
    }

    @media (max-width: 510px) {
      .bark-block-pre-bullet__circles-list {
        max-height: 14.2rem;
      }
    }


    &__list {
      position: relative;
      display: flex;
      // justify-content: space-between;

      @media (max-width: 920px) {
        flex-direction: column;
      }
    }

    &__item {
      @media (min-width: 657px) {
        margin-right: 10%;

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
  }
</style>