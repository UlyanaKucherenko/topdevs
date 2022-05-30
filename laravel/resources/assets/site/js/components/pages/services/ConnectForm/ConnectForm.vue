<template>
  <form
    :class="{
      'connect-form': true,
      'connect-form--color--inverse': color == 'inverse'
    }"
    v-scroll-reveal
    autocomplete="off"
  >
    <div class="connect-form__fields">
      <div class="connect-form__child-wrapper connect-form__name">
        <ConnectFormInput
          title="Name:"
          v-model="name"
          :error="nameError"
          @blur="$v.name.$touch()"
        />
      </div>

      <div class="connect-form__child-wrapper connect-form__email">
        <ConnectFormInput
          title="Email:"
          v-model="email"
          :error="emailError"
          @blur="$v.email.$touch()"
        />
      </div>

      <ConnectFormPhoneNumberField
        class="connect-form__child-wrapper connect-form__phone"
        title="Phone (optional):"
        v-model="phone"
        :error="phoneError"
        @blur="$v.phone.$touch()"
      />

      <div class="connect-form__child-wrapper connect-form__skype">
        <ConnectFormInput
          title="Skype (optional):"
          v-model="skype"
        />
      </div>

      <div class="connect-form__child-wrapper connect-form__msg">
        <ConnectFormInput
          title="Message or question:"
          type="textarea"
          v-model="message"
          :error="messageError"
          @blur="$v.message.$touch()"
        />
      </div>

      <div class="connect-form__child-wrapper connect-form__nda" style="">
        <ConnectFormCheckbox
          title="Get NDA"
          v-model="getNDA"
        />
      </div>

      <div class="connect-form__child-wrapper connect-form__file">
        <ConnectFormFileInput
          title="Attach files"
          :filesCount="attachFiles.length"
          @change="onFilesUpload"
        />
      </div>

      <div class="connect-form__child-wrapper">
        <ConnectFormCheckbox
          title="I agree to process my personal data according to the Privacy & Cookies Policy"
          v-model="policy"
          :error="policyError"
        />
      </div>
    </div>
    <button
      @click.prevent="submitForm"
      class="connect-form__btn btn-default"
      type="submit"
    >
      <div
        v-if="isFetching"
        class="loader"
      />
      <span v-else>
        send message
      </span>
    </button>
  </form>
</template>

<script>
import { required, email, minLength, sameAs } from "vuelidate/lib/validators";
import ConnectFormInput from './ConnectFormInput';
import ConnectFormFileInput from './ConnectFormFileInput';
import ConnectFormCheckbox from './ConnectFormCheckbox';
import ConnectFormPhoneNumberField from './ConnectFormPhoneNumberField';

import api from '@/js/api/index.js';

export default {
  components: {ConnectFormInput, ConnectFormFileInput, ConnectFormCheckbox, ConnectFormPhoneNumberField},

  props: {
    color: String
  },


  data() {
    return {
      name: '',
      email: '',
      phone: '',
      skype: '',
      message: '',
      attachFiles: [],
      getNDA: false,
      policy: true,
      isFetching: false
    }
  },


  validations: {
    name: { required, minLength: minLength(3) },
    email: { required, email, minLength: minLength(4) },
    phone: { minLength: minLength(10) },
    message: {required, minLength: minLength(3)},
    policy: { sameAs: sameAs(() => true) }
  },


  computed: {
    nameError() {
      if (!this.$v.name.$dirty) return ''

      if (!this.$v.name.required) return 'This is a required field'
      if (!this.$v.name.minLength) return 'Must be at least 3 characters'
    },

    emailError() {
      if (!this.$v.email.$dirty) return ''

      if (!this.$v.email.required) return 'This is a required field'
      if (!this.$v.email.email) return 'Email is incorrect'
    },

    phoneError() {
      if (!this.$v.phone.$dirty) return ''
      if (this.phone.length && !this.$v.phone.minLength) return 'Must be at least 10 characters'
    },

    messageError() {
      if (!this.$v.message.$dirty) return ''

      if (!this.$v.message.required) return 'This is a required field'
      if (!this.$v.message.minLength) return 'Must be at least 3 characters'
    },

    policyError() {
      if (!this.$v.policy.sameAs) return 'We will not be able to answer you without your consent to the collection of personal data according to the Privacy & Cookies Policy'
    }
  },


  methods: {
    onFilesUpload(files) {
      if (Array.from(files).some(file => file.size / 1e6 >= 50)) {
        this.$toast.error('Your file is too big (must be < 50mb)', {position: 'top-right'})
        this.attachFiles = []
      } else this.attachFiles = files
    },

    submitForm() {
      this.$v.$touch()
      if (this.$v.$invalid) return

      let fd = new FormData()

      Array.from(this.attachFiles).forEach(file => fd.append('attachment[]', file))
      fd.append('name', this.name)
      fd.append('email', this.email)
      fd.append('message', this.message);
      fd.append('phone', this.phone);
      fd.append('skype', this.skype);
      fd.append('get_NDA', this.getNDA ? 1 : 0)

      if (this.isFetching) return

      this.isFetching = true
      api.contactForm.submit(fd)
        .then(response => {
          this.$v.$reset()
          window.location.href='/thank'
        })
        .catch(error => {
          this.isFetching = false
          this.$modal.show('error')
        })
    }
  },
}
</script>

<style lang="scss">
  .connect-form {
    font-family: var(--ProximaNova);
    color: var(--white-clear);

    &__child-wrapper {
      width: 100%;
      margin-bottom: 2.6rem;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__name, &__email, &__skype, &__phone {
      width: 47.5%;

      @media (max-width: 767px) {
        width: 100%;
      }
    }

    &__nda {
      width: 14rem
    }

    &__file {
      width: calc(100% - 14rem)
    }

    &__fields {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    &__input-img-inner {
      width: 4rem;
      height: 2rem;

      img {
        width: 100%;
        height: 100%;
      }
    }

    &__error {
      margin-top: 1.4rem;
      color: var(--red-light);
    }

    &__btn {
      margin: calc(var(--space-unit) * 6.5) auto 0;
    }

    &--color {
      &--inverse {
        --white-clear: var(--black-main);
        --black-form: white;
        --black-form-hover: rgb(245, 245, 245);

        .connect-form-input {
          input, textarea {
            outline: none;
            border-bottom: 1px solid #9E9E9E;
            box-shadow: 0 0 4px 0px #0000000f;
          }

          &__inner {
            &:hover {
              input, textarea {
                outline: none;
              }
            }
          }

          &--status--error {
            input, textarea {
              outline: none;
              border-bottom: 1px solid var(--red-light);
            }
          }
        }

        .connect-form {
          &__input-img-inner, &-checkmark__inner {
            img {
              filter: invert(.8);
            }
          }
        }

        .phone-number-field {
          &__arrow {
            filter: brightness(0);
          }

          &__control {
            bottom: 1.2rem;
          }

          &__countries-dropdown {
            background: var(--black-form);

            &-item {
              &:before {
                background: #EEEEEE;
              }

              &:hover {
                background: #F3F8FF;
              }
            }
          }
        }
      }
    }
  }
</style>
