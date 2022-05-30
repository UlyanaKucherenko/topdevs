<template>
  <div class="row-full-card">
    <img
      class="row-full-card__icon"
      :class="classes.icon"
      :src="imgURL"
    >

    <div class="row-full-card__text">
      <div
        class="row-full-card__title text-lg"
        :class="classes.title"
      >
        {{ title }}
      </div>
      <div
        class="row-full-card__desc"
        :class="classes.desc"
      >
        {{ desc }}
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    title: String,
    desc: String,
    imgURL: String,
    classes: {
      type: Object,
      default: () => ({})
    }
  },

  mounted() {
  },
}
</script>

<style lang="scss">
.row-full-card {
  display: flex;
  align-items: center;
  height: 100%;

  &__title {
    margin-bottom: calc(var(--space-unit) * 2);
  }

  &__desc {
    line-height: 140%;
  }

  &__icon {
    margin-right: calc(var(--space-unit) * 5);
  }
}
</style>