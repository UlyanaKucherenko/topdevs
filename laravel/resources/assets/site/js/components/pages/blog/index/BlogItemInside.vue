<template>
  <a
    class="blog-item-inside ratio"
    :style="{'--height-percentage': heightPercentage + '%'}"
    :href="'/blog/' + item.slug"
  >
    <div class="ratio__inner">
      <img :src="item.imgURL" alt="" class="blog-item-inside__thumb">

      <div class="blog-item-inside__hover">
        <img src="/images/site/icons/arrows/6.svg" alt="" class="blog-item-inside__hover-arrow">
      </div>

      <div class="blog-item-inside__content">
        <div class="blog-item-inside__rubrics-list">
          <div
            class="blog-item-inside__rubrics-item"
            v-for="(rubric, index) in item.rubrics"
            :key="index"
          >
            {{ rubric }}
          </div>
        </div>
        <div class="blog-item-inside__title text-md">
          {{ item.title }}
          <div class="blog-item-inside__title-bg"/>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  props: {
    item: Object,
    heightPercentage: {
      type: Number,
      default: 57
    }
  }
}
</script>

<style lang="scss">
  .blog-item-inside {
    position: relative;
    border-radius: 1rem;
    overflow: hidden;

    &::after {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
    }

    &:hover {
      .blog-item-inside {
        &__hover {
          opacity: 1;
        }

        &__thumb {
          transform: scale(1.1);
        }
      }
    }

    &__thumb {
      position: absolute;
      z-index: -1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: .25s ease-out;
    }

    &__content {
      position: relative;
      z-index: 1;
      padding: calc(var(--space-unit) * 3);
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    &__title {
      position: relative;
      font-family: var(--Muli);
      color: var(--white-main);
      font-weight: bold;
      line-height: 120%;
      letter-spacing: .3px;

      &-bg {
        position: absolute;
        left: calc(var(--space-unit) * -3);
        top: calc(var(--space-unit) * -4);
        width: calc(100% + calc(var(--space-unit) * 6));
        height: calc(100% + calc(var(--space-unit) * 7));
        background: linear-gradient( rgba(0, 0, 0, 0) 0%, rgba(40, 40, 40, 0.74) 95% );
        z-index: -1;
      }
    }

    &__hover {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.521);
      transition: .25s ease-out;
      opacity: 0;

      &-arrow {
        position: absolute;
        left: 50%;
        top: 50%;
        transition: .25s ease-out;
        transform: translate(-50%, -50%);
      }
    }

    &__figure {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: -1;
    }

    &__rubrics {
      &-list {
        display: flex;
        flex-wrap: wrap;
        margin-bottom: 1rem;
        height: calc(1em + 23px);
        overflow-y: hidden;
        padding: 5px 0 0 2px;
        margin-top: -5px;
      }

      &-item {
        padding: 7px 15px 6px;
        border-radius: 1rem;
        background-color: var(--white-main);
        margin-right: 1rem;
        margin-bottom: 1rem;
        box-shadow: 0 0 3px #00000029;
      }
    }
  }
</style>
