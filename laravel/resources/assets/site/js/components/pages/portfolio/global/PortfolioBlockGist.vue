<template>
  <div
    class="portfolio-block-gist"
    :class="{
      'portfolio-block-gist--has-width': windowWidth <= hasWidthBreakpoint,
      'portfolio-block-gist--no-padding': !info.bg
    }"
  >
    <div class="portfolio-block-gist__list text-lg portfolio-text-lg">
      <img :src="info.bg" alt="" class="portfolio-block-gist__bg">
      <div
        class="portfolio-block-gist__item"
        v-for="(item, index) in info.items" :key="index"
      >
        <img
          v-if="item.iconCustom"
          class="portfolio-block-gist__icon"
          :src="item.iconCustom" alt=""
        >

        <SvgKeeper
          v-if="item.iconDefault"
          class="portfolio-block-gist__icon portfolio-block-gist__icon--svg"
          :class="classes.icon"
          :name="`portfolio-${item.iconDefault}`"
          :style="{'--fill': info.iconsColor}"
        />

        <div class="portfolio-block-gist__text">
          <h3
            class="portfolio-block-gist__text-name text-semibold inline portfolio-text-h3"
            :class="classes.name"
            :style="{color: info.titleColor}"
          >
            {{ item.rubricTitle }}:
          </h3>
          <span
            class="portfolio-block-gist__text-value"
            :class="classes.value"
            :style="{color: info.rubricColor}"
            v-html="item.rubricText"
          >
          </span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import SvgKeeper from '@/js/components/global/SvgKeeper'

export default {
  components: {SvgKeeper},

  props: {
    info: Object,
    hasWidthBreakpoint: Number,
    classes: {
      type: Object,
      default: () => ({})
    }
  }
}
</script>

<style lang="scss">
  .portfolio-block-gist {
    position: relative;
    margin-left: -2.5rem;

    &--has-width {
      margin-left: 0;
    }

    &--no-padding {
      margin-left: 0;

      .portfolio-block-gist__list {
        padding: 0;
      }
    }

    &__list {
      padding: 1.2075em 0 1.2075em 2.5rem;
    }

    &__item {
      display: flex;
      align-items: flex-start;
      line-height: 160%;
      letter-spacing: 0.03em;
      margin-bottom: 1rem;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__icon {
      display: flex;
      margin-right: .7rem;
      margin-top: .15em;
      flex-shrink: 0;

      &--svg {
        width: 1em;
        path {
          fill: var(--fill, black);
        }
      }
    }

    &__bg {
      position: absolute;
      left: 0;
      top: 0;
      height: 100%;
      z-index: -1;
    }

    &__text {
      display: flex;

      &-name {
        margin-right: .4em;
      }
    }
  }
</style>
