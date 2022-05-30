<template>
  <div 
    :class="{
      'row-card': true,
      'card-filled': mode == 'filled',
    }"
  >
    <img 
      class="row-card__icon"
      :src="icon"
      :style="styleOptions.icon"
    >

    <div class="row-card__text">
      <div 
        :class="{
          'row-card__title': true,
          'text-lg': true,
          ...classOptions.title
        }"
        :style="{
          marginBottom: desc && desc.length ? '' : 0,
          ...styleOptions.title
        }"
      >
        {{ title }}
      </div>
      <div class="row-card__desc">
        {{ desc }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    icon: String,
    title: String,
    desc: String,
    mode: String,
    styleOptions: {
      type: Object,
      default: () => ({})
    },
    classOptions: {
      type: Object,
      default: () => ({})
    }
  },
}
</script>

<style lang="scss">
  .row-card {
    display: flex;
    align-items: center;

    &__icon {
      margin-right: calc(var(--space-unit) * 2);
    }

    &__text {
    }

    &__title {
      margin-bottom: calc(var(--space-unit) * 2);
    }
  }
</style>