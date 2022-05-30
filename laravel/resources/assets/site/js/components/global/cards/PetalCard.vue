<template>
  <div class="petal-card">
    <img class="petal-card__img" :src="imgURL">
    <h3 class="petal-card__title"> {{ title }} </h3>
    <p class="petal-card__desc"> {{ desc }} </p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    desc: String,
    index: Number,
    imgURL: String
  }
}
</script>

<style lang="scss">
  .petal-card {
    padding: 31% 19%;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: url('/images/site/cards/petal-bg.png');
    background-size: 100% 100%;
    height: 100%;

    &__img {
      margin-bottom: 3rem;
    }

    &__title {
      font-weight: 600;
      font-size: 2.4rem;
      line-height: 2.9rem;
      color: var(--black-dark);
      margin-bottom: 2rem ;
    }

    &__desc {
      line-height: 160%;
      letter-spacing: 0.03em;
      color: var(--black-main);
    }
  }
</style>