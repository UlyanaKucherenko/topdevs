<template>
  <div class="row-filled-card filled-card">
    <img 
      class="row-filled-card__icon"
      :src="icon"
    >
    <div class="row-filled-card__title text-md text-semibold">
      {{ title }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    icon: String,
    title: String
  },

  mounted() {
  },
}
</script>

<style lang="scss">
  .row-filled-card {
    display: flex;
    align-items: center;

    &__icon {
      margin-right: calc(var(--space-unit) * 2);
    }
  }
</style>