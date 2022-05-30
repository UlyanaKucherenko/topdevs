<template>
  <ul :class="{
      'list-card': true,
      'list-card--mode--filled': mode == 'filled'
    }"
    v-scroll-reveal
  >
    <li
      class="list-card__item text-md"
      v-for="(item, index) in items" :key="index"
    >
      <img class="list-card__item-img" :src="item.icon || icon || '/images/site/icons/circle-red.svg'">
      <div class="list-card__item-title">{{ item.title }}</div>
    </li>
  </ul>
</template>

<script>
export default {
  props: {
    items: Array,
    icon: String,
    mode: String,
  }
}
</script>

<style lang="scss">
  .list-card {
    
    &__item {
      display: flex;
      margin-bottom: calc(var(--space-unit) * 2);
      color: var(--black-main);
      
      
      &:last-child {
        margin-bottom: 0;
      }

      &-img {
        margin-right: 1rem;
      }
    }

    &--mode {
      &--filled {
        background: linear-gradient(117.01deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
        box-shadow: 9px 9px 25px rgba(124, 124, 124, 0.4), -15px -15px 40px #FFFFFF, -15px -15px 40px #FFFFFF;
        border-radius: 30px;
        padding: calc(var(--space-unit) * 4);
      }
    }
  }
</style>