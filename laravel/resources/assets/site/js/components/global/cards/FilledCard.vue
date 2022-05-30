<template>
  <div
    :class="{
      'filled-card': true,
    }"
  >
    <h3 class="filled-card__title">
      {{ title }}
      <img
        v-if="!disableCheckmark"
        src="/images/site/checkmark.svg"
      >
    </h3>
    <p class="filled-card__desc"> {{ desc }} </p>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    desc: String,
    mode: String,
    disableCheckmark: Boolean
  },
}
</script>

<style lang="scss">
  .filled-card {
    background: linear-gradient(120.58deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
    box-shadow: 9px 9px 25px rgba(124, 124, 124, 0.4);
    border-radius: 3rem;
    padding: 3rem;
    height: 100%;

    &__title {
      margin-bottom: calc(var(--space-unit) * 2);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  }
</style>
