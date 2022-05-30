<template>
  <div :class="{
      'img-out-card': true,
      'img-out-card--align--center': mode == 'center'
    }"
  >
    <div class="img-out-card__inner">
      <img :src="imgURL" alt="" class="img-out-card__img">
      <h3 class="img-out-card__title">
        <span 
          class="text-red-light"
          v-if="number"
        >
          {{ number }}.
        </span>
        {{ title }}
      </h3>
      <p class="img-out-card__desc">
        {{ desc }}
      </p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    imgURL: String,
    title: String,
    desc: String,
    mode: String,
    number: Number
  }
}
</script>

<style lang="scss">
  .img-out-card {
    color: var(--black-main);
    padding-top: 16%;
    height: 100%;
    padding-top: 16%;

    &__inner {
      background: linear-gradient(120.58deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
      box-shadow: 9px 9px 25px rgba(124, 124, 124, 0.4), 0 0 40px #FFFFFF, 0 0 40px #FFFFFF;
      border-radius: 3rem;
      padding: 3rem;
      position: relative;
      height: 100%;
      padding-top: 20%;
    }

    &__img {
      position: absolute;
      left: 3rem;
      top: 0;
      max-width: 50%;
      width: auto;
      height: auto;
      transform: translateY(-50%);
    }

    &__title {
      margin-bottom: calc(var(--space-unit) * 2);
    }

    &--align {
      &--center {
        text-align: center;

        .img-out-card__img {
          left: 50%;
          transform: translate(-50%, -50%);
        }
      }
    }
  }
</style>