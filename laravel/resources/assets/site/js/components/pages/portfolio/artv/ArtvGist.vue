<template>
  <div class="artv-gist">
    <div class="container">
      <div class="artv-gist__content">
        <div class="artv-gist__list">
          <ArtvBlockBase
            class="artv-gist__item"
            v-for="(item, index) in items" :key="index"
            v-bind="item"
            color="var(--case-color-primary)"
          />
        </div>
      </div>
    </div>

    <img 
      class="artv-gist__bg-circle"
      src="/images/site/portfolio/artv/gist/circle.svg" alt="" 
    >
  </div>
</template>

<script>
import ArtvBlockBase from '@/js/components/pages/portfolio/artv/global/ArtvBlockBase'

export default {
  components: {
    ArtvBlockBase
  },

  data() {
    return {
      items: [
        {
          desc: 'Platform',
          title: 'IOS, TVOS'
        },
        {
          desc: 'Duration',
          title: '2018 – PRESENT'
        },
        {
          desc: 'Industry',
          title: 'MEDIA & ENTERTAINMENT'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .artv-gist {
    position: relative;
    margin-bottom: 20rem;

    @media (max-width: 1400px) {
      margin-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    &__list {
      display: flex;

      @media (max-width: 760px) {
        justify-content: space-between;
      }

      @media (max-width: 620px) {
        flex-direction: column;
      }
    }
    
    &__item {
      margin-right: 9rem;

      &:last-child {
        margin: 0;
      }

      @media (max-width: 1400px) {
        margin-right: 10.5rem;
      }

      @media (max-width: 1199px) {
        margin-right: 10rem;
      }

      @media (max-width: 991px) {
        margin-right: 7rem;
      }

      @media (max-width: 760px) {
        margin-right: 0;
      }

      @media (max-width: 620px) {
        margin-bottom: 2.4rem;

        &:nth-child(2) {
          order: 1;
          margin-bottom: 0;
        }

        &:last-child {
          margin-bottom: 2.4rem;
        }
      }
    }

    &__bg-circle {
      position: absolute;
      width: 20%;
      right: 10%;
      top: 50%;
      transform: translateY(-50%);

      @media (max-width: 1600px) {
        top: 136%;
      }

      @media (max-width: 1550px) {
        top: 163%;
      }

      @media (max-width: 875px) {
        top: 195%;
      }

      @media (max-width: 620px) {
        width: 26%;
        right: 14%;
        top: 90%;
        transform: translateY(-50%) rotate(230deg);
      }
    }
  }
</style>