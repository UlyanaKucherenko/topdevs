<template>
  <div class="breadcrumbs" v-scroll-reveal>
    <div class="container breadcrumbs__inner">
      <a href="/" class="breadcrumbs__home">
        <img src="/images/site/breadcrumbs/home.svg" alt="">
      </a>
      <div 
        class="breadcrumbs__item"
        v-for="(item, index) in items" 
        :key="index"
      >
        <img class="breadcrumbs__arrow" src="/images/site/breadcrumbs/arrow-right.svg" alt="">
        <a  
          :href="item.url" 
          :class="{breadcrumbs__name: true, 'breadcrumbs__name--last': index == items.length-1}"
        > 
          {{ item.name }} 
        </a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    items: Array
  },
}
</script>

<style lang="scss">
  .breadcrumbs {
    padding: calc(var(--space-unit) * 4) 0;

    &__inner {
      display: flex;
      align-items: center;
    }

    &__home {
    }

    &__item {
      display: flex;
      align-items: center;
    }

    &__arrow {
      margin: 0 1rem;
    }

    &__name {
      &--last {
        color: var(--red-light);
      }
    }
  }
</style>