<template>
  <div class="img-title-card">
    <img :src="imgURL" alt="" class="img-title-card__img">
    <div class="img-title-card__title text-lg text-center">{{ title }}</div>
  </div>
</template>

<script>
export default {
  props: {
    imgURL: String,
    title: String
  }
}
</script>

<style lang="scss">
  .img-title-card {
    &__img {
      width: 100%;
      margin-bottom: calc(var(--space-unit) * 2);
    }
  }
</style>