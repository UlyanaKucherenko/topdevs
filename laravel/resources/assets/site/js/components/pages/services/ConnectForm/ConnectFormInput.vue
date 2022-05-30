<template>
  <label
    :class="{
      'connect-form-input': true,
      'connect-form-input--status--error': error
    }"
  >
    <span class="connect-form-input__title"> {{ title }} </span>
    <div class="connect-form-input__inner">
      <slot/>
      <transition name="fade">
        <img
          src="/images/site/form-icons/form-error-icon.png"
          alt=""
          class="connect-form-input__error-icon"
          v-if="error"
        >
      </transition>
      <transition name="fade">
        <img
          src="/images/site/form-icons/form-clear-icon.png"
          alt=""
          class="connect-form-input__clear-icon"
          @click="clearIconOnClick"
          v-if="!error && value.length && focused"
        >
      </transition>
      <textarea
        v-if="type == 'textarea'"
        class="connect-form-input__field"
        :value="value"
        @input="inputOnInput($event)"
        @focus="focused = true"
        @blur="focused = false; $emit('blur')"
      ></textarea>

      <input
        v-else
        class="connect-form-input__field"
        :class="classes && classes.input"
        autocomplete="off"
        :type="inputType"
        :value="value"
        @input="inputOnInput($event)"
        @blur="focused = false; $emit('blur')"
        @focus="focused = true"
        v-numeric-only="numericOnly"
      >
    </div>
    <div class="connect-form__error" v-if="error">
      {{ error }}
    </div>
  </label>
</template>

<script>
export default {
  props: {
    title: String,
    value: String,
    type: String,
    error: String,
    inputType: {
      type: String,
      default: 'text'
    },
    classes: Object,
    numericOnly: Boolean,
  },


  data() {
    return {
      focused: false,
    }
  },


  methods: {
    inputOnInput(e) {
      this.$emit('input', e.target.value)
    },

    clearIconOnClick() {
      this.$emit('input', '')
    }
  },
}
</script>

<style lang="scss">
  .connect-form-input {
    display: block;

    &:hover {
      input, textarea {
        background-color: var(--black-form-hover);
        outline: 0.15rem solid var(--white-clear);
      }
    }

    &--status {
      &--error {
        .connect-form-input__title {
          color: var(--red-light);
        }

        .connect-form-input__inner {
          input, textarea {
            outline: 0.15rem solid var(--red-light);
          }

          &:hover {
            input, textarea {
              background-color: var(--black-form-hover);
              outline: 0.15rem solid var(--red-light);
            }
          }
        }
      }
    }

    &__inner {
      position: relative;
    }

    &__title {
      font-weight: 600;
      display: block;
      margin-bottom: 1rem;
      line-height: 2rem;
    }

    &__clear-icon, &__error-icon {
      position: absolute;
      right: 1.6rem;
      top: 1.2rem;
    }

    &__clear-icon {
      cursor: pointer;
    }

    &__field {
      width: 100%;
      background-color: var(--black-form);
      outline: 0.1rem solid #9E9E9E;
      padding: 1.4rem;
      font-family: inherit;
      font-size: 1.6rem;
      transition: .2s;
      color: var(--white-clear);

      &:focus {
        outline: 0.1rem solid #9E9E9E;
      }
    }

    textarea {
      height: 13rem;
      resize: none;
    }
  }
</style>
