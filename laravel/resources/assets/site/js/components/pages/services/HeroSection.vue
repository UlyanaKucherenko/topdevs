<template>
  <section class="hero-section">
    <div class="container hero-section__inner">
      <div class="hero-section__content">
        <div
          class="hero-section__info"
        >
          <h1
            :class="{
              'hero-section__title': true,
              'hero-section__title--size--small': styleOptions.smallTitle
            }"
            :style="windowWidth > 991 ? styleOptions.title : ''"
          >
            <span
              v-for="(str, index) in formatted.title"
              :class="{block: windowWidth > 991 ? true : false}"
              :key="index"
            >
              {{ str }}
            </span>
          </h1>

          <p
            class="hero-section__desc text-lg"
            :style="windowWidth > 991 ? styleOptions.desc : ''"
          >
            <span
              v-for="(str, index) in formatted.desc"
              :key="index"
              :class="{block: windowWidth > 991 ? true : false}"
            >
              {{ str }}
            </span>
          </p>

          <a
            class="btn-default hero-section__btn"
            @click="scrollTo('#connect-section')"
          >
          <span
              v-for="(str, index) in formatted.btnText"
              :key="index"
              class="block"
            >
              {{ str }}
            </span>
          </a>

          <slot name="info"/>
        </div>

        <div
          class="hero-section__img"
          :style="windowWidth > 991 ? styleOptions.img : ''"
          v-scroll-reveal="{delay: 500}"
        >
          <slot
            v-if="$slots.img"
            name="img"
          />
          <img
            v-else
            :src="imgURL"
            alt=""
          >
        </div>
      </div>
    </div>

    <slot name="bg"/>
  </section>
</template>

<script>
import formatValuesToArray from '@/js/utils/formatValuesToArray'

export default {
  props: {
    title: [Array, String],
    desc: [Array, String],
    btnText: [Array, String],
    imgURL: String,
    styleOptions: {
      type: Object,
      default: () => ({})
    }
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
  .hero-section {
    height: 100vh;
    padding-top: var(--header-height);
    min-height: 60rem;
    position: relative;

    @media (max-width: 991px) {
      padding-top: calc(var(--header-height) * 1.5);
      height: auto;
      margin-bottom: var(--section-pd-y-small);
    }

    &__content {
      display: flex;
      position: relative;
      align-items: center;
      height: 100%;

      @media (max-width: 991px) {
        flex-direction: column;
        justify-content: center;
      }
    }

    &__info {
      width: 36%;
      position: relative;
      z-index: 1;

      @media (max-width: 991px) {
        width: 100%;
        text-align: center;
        margin-bottom: calc(var(--space-unit) * 8);
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }

    &__title {
      margin-top: 0;
      margin-bottom: calc(var(--space-unit) * 4);

      &--size {
        &--small {
          letter-spacing: 0.05em;
          line-height: .9em;

          span {
            font-size: .85em;
          }
        }
      }
    }

    &__desc {
      margin-bottom: calc(var(--space-unit) * 4);

      span {
        min-height: 1.6em;
      }

      @media (max-width: 991px) {
        width: 70%;
      }

      @media (max-width: 450px) {
        width: 90%;
      }
    }

    &__btn {
      text-align: center;
    }

    &__img {
      width: 64%;
      height: 80%;
      position: absolute;
      top: 50%;
      right: 0;
      transform: translateY(-50%);

      @media (max-width: 991px) {
        width: 50%;
        height: auto;
        position: relative;
        top: auto;
        right: auto;
        transform: translateY(0);
      }

      @media (max-width: 767px) {
        width: 70%;
      }

      @media (max-width: 575px) {
        width: 100%;
      }

      img {
        display: block;
        height: 100%;
        width: 100%;
      }
    }
  }
</style>