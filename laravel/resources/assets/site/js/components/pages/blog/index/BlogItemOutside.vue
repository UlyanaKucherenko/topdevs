<template>
  <a class="blog-item-outside" :href="'/blog/' + item.slug">
    <div
      class="blog-item-outside__thumb ratio"
      :style="{'--height-percentage': heightPercentage + '%'}"
    >
      <div class="ratio__inner">
        <img
          class="blog-item-outside__thumb-img"
          :src="item.imgURL" alt=""
        >

        <div class="blog-item-outside__hover">
          <img src="/images/site/icons/arrows/6.svg" alt="" class="blog-item-outside__hover-arrow">
        </div>
      </div>
    </div>

    <div class="blog-item-outside__content">
      <div class="blog-item-outside__rubrics-list text-p">
        <div
          class="blog-item-outside__rubrics-item"
          v-for="(rubric, index) in item.rubrics"
          :key="index"
        >
          {{ rubric }}
        </div>
      </div>
      <div class="blog-item-outside__title text-md">{{ item.title }}</div>
      <div class="blog-item-outside__date">{{ item.date | formatDate }}</div>
    </div>
  </a>
</template>

<script>
export default {
  props: {
    item: Object,
    heightPercentage: {
      type: Number,
      default: 66
    }
  },
}
</script>

<style lang="scss">
  .blog-item-outside {
    position: relative;
    overflow: hidden;

    &:hover {
      .blog-item-outside {
        &__hover {
          opacity: 1;
        }

        &__thumb {
          &-img {
            transform: scale(1.1);
          }
        }
      }
    }

    &__thumb {
      --height-percentage: 100%;
      left: 0;
      top: 0;
      width: 100%;
      overflow: hidden;
      position: relative;
      border-radius: 1rem;
      margin-bottom: calc(var(--space-unit) * 1);

      &-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .35s ease-out;
      }
    }

    &__content {
      padding: 1rem;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    &__title {
      font-family: var(--Muli);
      font-weight: bold;
      margin-bottom: calc(var(--space-unit) * 2);
      line-height: 120%;
      letter-spacing: .3px;
    }

    &__hover {
      position: absolute;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.521);
      transition: .35s ease-out;
      opacity: 0;

      &-arrow {
        position: absolute;
        left: 50%;
        top: 50%;
        transition: .35s ease-out;
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
    }

    &__rubrics {
      &-list {
        display: flex;
        flex-wrap: wrap;
        overflow: hidden;
        height: calc(1em + 10px);
        margin-bottom: calc(var(--space-unit) * 1.5);
        line-height: 1;
      }

      &-item {
        margin-right: 1rem;
        padding: 5px 10px;
        background: #c4c4c452;
        color: var(--black-dark);
        border-radius: 1rem;
        font-weight: 400;
      }
    }
  }
</style>
