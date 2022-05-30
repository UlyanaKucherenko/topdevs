<template>
  <div
      :class="{
      'server-section-header': true,
      'server-section-header--inverse': options.color == 'inverse',
      'server-section-header--mode--center': mode == 'center',
      'server-section-header--mode--left': mode == 'left'
    }"
      ref="header"
      v-scroll-reveal="{disabled: revealIsDisabled}"
  >
    <h2
        v-if="mode != 'center'"
        :class="{
        'server-section-header__title': true,
        'server-section-header__title--no-width': !icon || mode == 'center',
        'text-lg': true,
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
    </h2>

    <h2
        v-else
        :class="{
        'server-section-header__title': true,
        'server-section-header__title--no-width': Array.isArray(title) && title.length > 1,
        'text-lg': true,
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
            class="server-section-header__icon server-section-header__icon--no-width"
            :src="icon"
        >
        {{ str }}
      </span>
    </h2>

    <div
        :class="{
        'server-section-header__desc': true,
         'text-xll':true,
         'server-section-header__desc--width':  windowWidth > 1070,

      }"
    >
      <span
          v-for="(str, index) in formatted.desc"
          :key="index"
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
      default: 'space-between'
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
.server-section-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: calc(var(--space-unit) * 8);


  @media (max-width: 991px) {
    flex-direction: column;
  }

  &__title {
    position: relative;
    font-family: var(--mulish);
    font-weight: 800;
    text-transform: uppercase;
    color: var(--blue-main);

    @media (max-width: 991px) {
      margin-bottom: calc(var(--space-unit) * 2.5);
      padding-left: 0;
    }

    &--no-width {
      padding-left: 0;
    }
  }

  &__desc {
    line-height: 150%;
    letter-spacing: 0.01em;
    font-weight: 500;
    color: var(--grey-dark);

    span:nth-child(2) {
      font-style: italic;
      font-weight: 600;
    }

    &--width {
      max-width: 1050px;
    }
  }

  &--inverse {
    .server-section-header__title {
      color: var(--white-clear);
    }

    .server-section-header__desc {
      color: var(--white-clear);
      padding-left: 0;

      span:nth-child(2) {
        font-style: italic;
        font-weight: 600;
        color: var(--blue-main);
      }
    }
  }

  &--mode {
    &--center {

      @media (min-width: 577px) {
        flex-direction: column;
        align-items: center;
        text-align: center;

        .server-section-header__title {
          margin-bottom: calc(var(--space-unit) * 4);
          padding-left: 1em;
          display: flex;
          flex-direction: column;
          align-items: center;

          &--no-width {
            padding-left: 0;
          }
        }

        .server-section-header__desc {
          // max-width: 60rem;
          padding-left: 0;
        }

        .server-section-header__icon {
          display: block;
        }
      }
    }

    &--left {
      flex-direction: column;
      justify-content: flex-start;

      .server-section-header__title {
        margin-bottom: calc(var(--space-unit) * 2.5)
      }
    }
  }


}
</style>
