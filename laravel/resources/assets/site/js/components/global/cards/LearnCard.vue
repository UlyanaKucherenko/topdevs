<template>
  <a
    class="learn-card hover-card"
    :href="href"
  >
    <div class="learn-card__img ratio">
      <img
        class="ratio__inner"
        :src="imgURL" alt=""
      >
    </div>

    <div class="learn-card__content">
      <div class="learn-card__date">
        {{ date }}
      </div>

      <h3
        class="learn-card__title"
      >
        <span
          v-for="(str, index) in formatted.title"
          :key="index"
          class="block"
        >
          {{ str }}
        </span>
      </h3>

      <p
        class="learn-card__desc"
      >
        <span
          v-for="(str, index) in formatted.desc"
          :key="index"
          class="block"
        >
          {{ str }}
        </span>
      </p>

      <div class="learn-card__action">
        <span class="learn-card__action-text">exchange</span>
        <img
          class="learn-card__action-text hover-card__arrow"
          src="/images/site/icons/arrows/10.svg" alt=""
          alt=""
        >
      </div>
    </div>
  </a>
</template>

<script>
import formatValuesToArray from '@/js/utils/formatValuesToArray'

export default {
  props: {
    imgURL: String,
    title: [Array, String],
    desc: [Array, String],
    date: String,
    href: String
  },


  data() {
    return {
      formatted: {}
    }
  },


  created() {
    formatValuesToArray(this.$props, this.formatted)
  },
}
</script>

<style lang="scss">
  .learn-card {
    display: flex;
    flex-direction: column;
    height: 100%;
    cursor: pointer;
    padding: calc(var(--space-unit) * 3);
    border: 1px solid transparent;
    transition: .3s;

    &:hover {
      border-color: rgba(26, 55, 156, .3);
    }

    &__img {
      --height-percentage: 72%;
      max-width: 220px;
      margin-bottom: calc(var(--space-unit) * 4);

      img {
        width: 100%;
        object-fit: cover;
      }
    }

    &__content {
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    &__date {
      margin-bottom: 10px;
      color: #1A379C;
      font-weight: 600;
      text-transform: uppercase;
    }

    &__title {
      margin-bottom: calc(var(--space-unit) * 2);
      color: var(--black-dark);
    }

    &__desc {
      color: var(--black-main);
      margin-bottom: 25px;
      display: -webkit-box;
      -webkit-line-clamp: 4;
      -webkit-box-orient: vertical;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    &__action {
      display: flex;
      will-change: transform;
      margin: auto -15px 0 auto;

      &-text {
        text-transform: uppercase;
        margin-right: 8px;
      }

      &-img {
        width: 4rem;
      }
    }
  }
</style>
