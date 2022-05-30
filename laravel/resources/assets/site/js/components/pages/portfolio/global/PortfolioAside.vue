<template>
  <div
    class="portfolio-aside"
    :class="{'portfolio-aside--no-padding': !dividerColor}"
    :style="{
      '--title-color': titleColor,
      '--desc-color': descColor,
      '--divider-color': dividerColor
    }"
  >
    <h3
      class="portfolio-aside__title portfolio-title"
      v-if="titleText"
    >
        {{ titleText }}
      </h3>
    <div
      v-if="Array.isArray(descText)"
      class="portfolio-aside__desc portfolio-desc"
      :class="{'portfolio-desc--sm': descSmall}"
      :style="descStyles"
    >
      <div
        class="portfolio-aside__desc-row"
        v-for="(text, index) in descText" :key="index"
      >
        {{ text }}
      </div>
    </div>

    <div
      v-else
      class="portfolio-aside__desc portfolio-desc"
      :class="{'portfolio-desc--sm': descSmall}"
      :style="descStyles"
    >
      {{ descText }}
    </div>
    <div
      v-if="dividerColor"
      class="portfolio-aside__divider"
      :class="{'portfolio-aside__divider--filled': dividerFilled}"
    />
  </div>
</template>

<script>
export default {
  props: {
    color: String,
    titleColor: String,
    descColor: String,
    dividerColor: String,
    titleText: String,
    descText: [String, Array],
    descSmall: Boolean,
    descStyles: Object,
    dividerFilled: Boolean
  },
}
</script>

<style lang="scss">
  .portfolio-aside {
    position: relative;
    line-height: 150%;
    padding-left: 3.9rem;

    @media (max-width: 767px) {
      padding-left: 2.9rem;
    }

    &--no-padding {
      padding-left: 0;
    }

    &__title {
      margin-bottom: 1.3rem;
      color: var(--title-color);
      font-weight: 600;
    }

    &__desc {
      color: var(--desc-color);
      letter-spacing: 0.03em;
      font-weight: normal;

      &-row {
        margin-bottom: calc(var(--space-unit) * 2);
      }
    }

    &__divider {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      width: .9rem;
      border: 2px solid var(--divider-color);

      &--filled {
        background: var(--divider-color);
      }
    }
  }
</style>