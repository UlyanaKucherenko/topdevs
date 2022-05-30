<template>
  <component
    :is="link ? 'a' : 'div'"
    :href="link ? link : null"
    :class="{
      'first-card': true,
      'first-card--mode--center': mode == 'center'
    }"
    @click="onLinkClick(link, $event)"
  >
    <div :class="{
        'first-card__img': 'true',
        'first-card__img--width--fit': imgWidth == 'fit',
        'card-filled': mode == 'filled',
        [classes.img]: classes.img
      }"
    >
      <img :src="imgURL" alt="">
    </div>

    <div :class="{
        'first-card__content': true,
        'first-card__content--stretch': discoverLine
      }"
    >
      <h3
        class="first-card__title"
        :class="{'first-card__title--new-design': newDesign}"
        :style="styleOptions.title"
      >
        <span
          v-if="titleNumber"
          class="text-red-main"
        >
          {{ titleNumber }}.
        </span>
        <span
          v-for="(str, index) in formatted.title"
          :key="index"
          :class="titleQuery && windowWidth < titleQuery || titleNumber && !index ? '' : 'block'"
        >
          {{ str }}
        </span>
      </h3>

      <p
        class="first-card__desc"
        v-if="!discoverLine"
      >
        <img
          class="first-card__desc-number"
          v-if="descNumber"
          :src="`/images/site/numbers/${descNumber}.svg`"
        >
        <span
          v-for="(str, index) in formatted.desc"
          :key="index"
          :class="descQuery && windowWidth < descQuery ? '' : 'block'"
        >
          {{ str }}
        </span>
      </p>

      <div
        class="first-card__discover-line"
        v-else
      >
        <span>Discover More</span>
        <img class="first-card__discover-arrow" src="/images/site/arrow-right.svg" alt="">
      </div>
    </div>
  </component>
</template>

<script>
import formatValuesToArray from '@/js/utils/formatValuesToArray'

export default {
  props: {
    imgURL: String,
    imgWidth: String,
    title: [Array, String],
    desc: [Array, String],
    titleNumber: Number,
    titleQuery: Number,
    descNumber: Number,
    descQuery: Number,
    link: String,
    mode: String,
    item: {
      type: Object,
      default: () => ({})
    },
    discoverLine: {
      type: Boolean,
      default: false
    },
    styleOptions: {
      type: Object,
      default: () => ({})
    },
    classes: {
      type: Object,
      default: () => ({})
    },
    newDesign: Boolean
  },


  data() {
    return {
      formatted: {}
    }
  },


  created() {
    formatValuesToArray(this.$props, this.formatted)
  },


  methods: {
    onLinkClick(link, e) {
      if (link == 'coding') {
        e.preventDefault()
        this.$modal.show('coding')
      }
    }
  },
}
</script>

<style lang="scss">
  .first-card {
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    display: flex;
    flex-direction: column;
    height: 100%;
    color: var(--black-main);

    &--mode {
      &--center {
        text-align: center;
      }
    }

    &__img {
      margin-bottom: calc(var(--space-unit) * 2);

      img {
        width: 100%;
      }

      &--width {
        &--fit {
          img {
            width: auto;
          }
        }
      }
    }

    &__content {
      &--stretch {
        justify-content: space-between;
        display: flex;
        flex-direction: column;
        height: 100%;
      }
    }

    &__title {
      margin-bottom: calc(var(--space-unit) * 2);

      &--new-design {
        font-style: italic;
        letter-spacing: .04em;
      }
    }

    &__desc {
      position: relative;

      &-number {
        height: 4.3rem;
        position: absolute;
        top: 0;
        right: calc(100% + 2rem);
      }
    }

    &__discover-line {
      display: flex;
      align-items: center;

      span {
        margin-right: 1rem;
      }
    }

    &__discover-arrow {
      transition: .3s;
    }

    &:hover {
      .first-card__discover-arrow {
        @include arrow-hover;
      }
    }
  }
</style>
