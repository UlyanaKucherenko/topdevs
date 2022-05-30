<template>
  <a 
    class="portfolio-card"
    href=""
    @click.prevent="$modal.show('coding')"
  >
    <div class="portfolio-card__img">
      <img :src="item.imgURL" alt="">
    </div>

    <div class="portfolio-card__first-line">
      <div class="portfolio-card__title">
        {{ item.title }}
      </div>
    </div>

    <div class="portfolio-card__second-line">
      <div class="portfolio-card__desc">
        {{ item.desc }}
      </div>
      <div class="portfolio-card__arrow">
        <img src="/images/site/arrow-right.svg" alt="">
      </div>
    </div>
  </a>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      default: () => ({})
    }
  },

  mounted() {
  },
}
</script>

<style lang="scss">
  .portfolio-card {
    cursor: pointer;
    margin-top: 50%;
    height: 20rem;
    padding: 10rem 4rem 0 4rem;
    display: flex;
    flex-direction: column;
    background: lightblue;
    position: relative;
    font-family: var(--ProximaNova);
    background: linear-gradient(128.82deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
    box-shadow: 0.9rem 0.9rem 2.5rem rgba(124, 124, 124, 0.4), -1.5rem -1.5rem 4rem #FFFFFF, -1.5rem -1.5rem 4rem #FFFFFF;
    border-radius: 3rem;

    &:hover {
      .portfolio-card__arrow {
        @include arrow-hover;
      }
    }

    &__img {
      position: absolute;
      left: -5%;
      width: 110%;
      bottom: 9.2rem;

      img {
        width: 100%;
      }
    }

    &__title {
      font-weight: 600;
      font-size: 2.4rem;
      color: var(--black-dark);
      margin-bottom: 1.5rem;
    }

    &__second-line {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
    }

    &__desc {
      font-weight: 400;
      color: var(--black-main);
      width: 70%;
    }

    &__arrow {
      transition: .3s;
      width: 3rem;
      will-change: transform;

      img {
        width: 100%;
      }
    }
  }
</style>