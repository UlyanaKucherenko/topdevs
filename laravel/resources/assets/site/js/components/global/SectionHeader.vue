<template>
  <div
    :class="{
      'section-header': true,
      'section-header--inverse': options.color == 'inverse',
      'section-header--mode--center': mode == 'center',
      'section-header--mode--left': mode == 'left'
    }"
    ref="header"
    v-scroll-reveal="{disabled: revealIsDisabled}"
  >
    <h2
      v-if="mode != 'center'"
      :class="{
        'section-header__title': true,
        'section-header__title--no-width': !icon || mode == 'center'
      }"
    >
      <span
        v-for="(str, index) in formatted.title"
        :key="index"
        :class="{
          block: true,
        }"
      >
        {{ str }}
      </span>

      <img
        v-if="icon"
        class="section-header__icon"
        :src="icon"
      >
    </h2>

    <h2
      v-else
      :class="{
        'section-header__title': true,
        'section-header__title--no-width': Array.isArray(title) && title.length > 1
      }"
    >
      <span
        v-for="(str, index) in formatted.title"
        :key="index"
        :class="{
          block: true,
          relative: true,
        }"
      >
        <img
          v-if="index == 0 && icon"
          class="section-header__icon section-header__icon--no-width"
          :src="icon"
        >
        {{ str }}
      </span>
    </h2>

    <div
      :class="{
        'section-header__desc': true,
        'section-header__desc--with-width': mode == 'left' && icon,
        'text-lg': true,
      }"
    >
      <span
        v-for="(str, index) in formatted.desc"
        :key="index"
        :class="windowWidth > 768 ? 'block' : ''"
      >
        {{ str }}
      </span>
    </div>
  </div>
</template>

<script>
import formatValuesToArray from '@/js/utils/formatValuesToArray'

export default {
  props: {
    title: [Array, String],
    desc: [Array, String],
    withoutWidth: Boolean,
    mode: {
      type: String,
      default: 'space-beetween'
    },
    options: {
      type: Object,
      default() {
        return {
          lines: true,
        }
      }
    },
    icon: String,
    revealIsDisabled: {
      type: Boolean,
      default: false
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

  mounted() {
  },
}
</script>

<style lang="scss">
  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: calc(var(--space-unit) * 8);


    @media (max-width: 991px) {
      flex-direction: column;
    }

    &__title {
      position: relative;
      padding-left: 1em;

      @media (max-width: 991px) {
        margin-bottom: calc(var(--space-unit) * 2.5);
        padding-left: 0;
      }

      &--no-width {
        padding-left: 0;
      }
    }

    &__text-with-icon {
      padding-left: 1em;
    }

    &__icon {
      position: absolute;
      left: 0;
      width: 1em;
      height: .8em;
      top: 0.23em;

      &--no-width {
        left: -1em;
      }

      @media (max-width: 991px) {
        display: none;
      }
    }

    &__desc {
      color: var(--red-light);
      line-height: 150%;
      letter-spacing: 0.01em;

      &--with-width {
        padding-left: 5.4rem;

        @media (max-width: 1400px) {
          padding-left: 4rem;
        }

        @media (max-width: 991px) {
          padding-left: 0;
        }
      }
    }

    &--inverse {
      .section-header__title {
        color: var(--white-clear);
      }

      .section-header__desc {
        color: var(--white-clear);
        padding-left: 0;
      }
    }

    &--mode {
      &--center {

        @media (min-width: 577px) {
          flex-direction: column;
          align-items: center;
          text-align: center;

          .section-header__title {
            margin-bottom: calc(var(--space-unit) * 4);
            padding-left: 1em;
            display: flex;
            flex-direction: column;
            align-items: center;

            &--no-width {
              padding-left: 0;
            }
          }

          .section-header__desc {
            // max-width: 60rem;
            padding-left: 0;
          }

          .section-header__icon {
            display: block;
          }
        }
      }

      &--left {
        flex-direction: column;
        justify-content: flex-start;

        .section-header__title {
          margin-bottom: calc(var(--space-unit) * 2.5)
        }
      }
    }


  }
</style>
