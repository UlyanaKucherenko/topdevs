<template>
  <div class="row-title-card text-lg">
    <img 
      class="row-title-card__icon"
      :src="icon"
    >
    <div class="row-title-card__title">
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
  .row-title-card {
    display: flex;
    align-items: flex-start;

    &__icon {
      margin-top: -.35em;
      width: 2.5em;
      flex-shrink: 0;
    }

    &__title {
      line-height: 120%;
    }
  }
</style>