<template>
  <div 
    :class="{
      'text-icon-card': true,
      'card-filled': mode == 'filled'
    }"
  >
    <img 
      class="text-icon-card__icon"
      :src="icon"
    >
    <div class="text-icon-card__text">
      {{ text }}
    </div>
  </div>
</template>

<script>
export default {
  props: {
    icon: String,
    text: String,
    mode: String
  }
}
</script>

<style lang="scss">
  .text-icon-card {
    display: flex;
    align-items: center;

    &__icon {
      margin-right: calc(var(--space-unit) * 2);
    }
  }
</style>