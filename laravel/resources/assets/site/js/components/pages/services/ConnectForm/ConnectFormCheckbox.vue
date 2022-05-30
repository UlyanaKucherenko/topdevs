<template>
  <label
    :class="{
      'connect-form-checkbox': true,
      'connect-form-checkbox--status--error': error,
    }"
  >
    <div class="connect-form-checkbox__inner">
      <input type="checkbox" :checked="value" @input="$emit('input', !value)">
      <div class="connect-form-checkmark">
        <div class="connect-form-checkmark__inner">
          <img class="connect-form-checkmark__img" src="/images/site/check-icon.png">
        </div>
      </div>
      <span class="connect-form-checkbox__title"> {{ title }} </span>
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
    value: Boolean,
    error: String
  }
}
</script>

<style lang="scss">
  .connect-form-checkbox {
    cursor: pointer;
    display: block;
    width: fit-content;

    &--status {
      &--error {
        .connect-form__checkmark-inner {
          border: 0.1rem solid var(--red-light);
        }
      }
    }

    &__inner {
      display: flex;
      align-items: center;

      input {
        display: none;
      }

      input:checked ~ .connect-form-checkmark {
        .connect-form-checkmark__img {
          opacity: 1;
        }
      }
    }

    &__title {
      // line-height: 2rem;
    }
  }

  .connect-form-checkmark {
    width: 4rem;
    flex-shrink: 0;

    &__inner {
      width: 2rem;
      height: 2rem;
      border: 0.1rem solid #9E9E9E;
      transition: .2s;
    }

    &__img {
      opacity: 0;
      transition: .2s;
    }
  }
</style>

