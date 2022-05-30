<template>
  <div class="second-card">
    <div class="second-card__top">
      <img :src="imgURL" alt="" class="second-card__img">
      <h3 class="second-card__title"> {{ title }} </h3>
    </div>

    <div class="second-card__bottom">
      <p class="second-card__desc"> {{ desc }} </p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    imgURL: String,
    title: String,
    desc: String
  },
}
</script>

<style lang="scss">
  .second-card {
    height: 100%;
    
    &__top {
      display: flex;
      align-items: center;
      margin-bottom: 3rem;
    }

    &__img {
      width: 13.6rem;
    }

    &__title {
      font-family: var(--Muli);
      font-weight: bold;
      font-size: 2.4rem;
      width: 45%;
      margin: 0 auto;
      line-height: 150%;
      color: var(--black-dark);
    }

    &__desc {
      font-size: 2rem;
      line-height: 170%;
      letter-spacing: 0.08rem;
      color: var(--black-main);
    }
  }
</style>