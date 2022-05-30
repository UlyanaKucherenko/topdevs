<template>
  <div 
    class="portfolio-block-base"
    :class="{
      'portfolio-block-base--column': __props.isColumn
    }"
  >
    <img 
      v-if="icon"
      class="portfolio-block-base__icon"
      :src="icon" alt="" 
    >
    <div class="portfolio-block-base__text">
      <h3
        v-if="titleText"
        class="portfolio-block-base__title portfolio-title"
        :style="{color: titleColor}"
      >
        {{ titleText }}
      </h3>

      <div 
        class="portfolio-block-base__desc portfolio-desc"
        :class="{'portfolio-desc--sm': titleText}"
        :style="{color: descColor}"
      >
        {{ descText }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    icon: String,
    titleText: String,
    titleColor: String,
    descText: String,
    descColor: String,
    isColumn: Boolean,
    breakpoints: Object
  },

  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    }
  },
}
</script>

<style lang="scss">
  .portfolio-block-base {
    --icon-width: 4rem;
    --icon-margin: 2rem;
    --title-margin: 1.5rem;

    display: flex;
    align-items: flex-start;

    @media (max-width: 1199px) {
      --title-margin: 1rem;
    }

    &--column {
      flex-direction: column;

      .portfolio-block-base {
        &__icon {
          margin-right: 0;
          margin-bottom: var(--icon-margin);
        }
      }
    }

    &__icon {
      flex-shrink: 0;
      width: var(--icon-width);
      margin-right: var(--icon-margin);
    }
    
    &__title {
      color: var(--black-main);
      margin-bottom: var(--title-margin, 1.5rem);

      @media (max-width: 1199px) {
        margin-bottom: var(--title-margin, 1rem);
      }
    }

    &__desc {
      color: var(--black-main);
    }
  }
</style>