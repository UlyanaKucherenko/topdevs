<template>
  <div class="checkbox" @click="$emit('change', !checked)">
    <div class="checkbox__square">
      <transition name="fade-top">
        <img 
          v-if="checked"
          class="checkbox__checkmark" src="/images/site/checkmark-black.svg"
        >
      </transition>
    </div>
    <div class="checkbox__title">{{ name }}</div>
  </div>
</template>

<script>
export default {
  props: {
    name: String,
    checked: Boolean
  }
}
</script>

<style lang="scss">
  .checkbox {
    cursor: pointer;
    display: flex;
    align-items: center;

    &__square {
      width: 1.8rem;
      height: 1.8rem;
      border: 1px solid var(--grey-light);
      border-radius: .2rem;
      margin-right: 2rem;
    }
  }
</style>