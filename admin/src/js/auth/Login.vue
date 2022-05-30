<template>
  <div class="login-overlay">
    <v-form
      v-if="!token"
      class="login-form"
      ref="form"
      v-model="formHasErrors"
      lazy-validation
    >
      <h3 class="text-center mb-4">
        Login
      </h3>
      <div class="login-form__row">
        <v-text-field
          v-model="email"
          label="E-mail"
          dark
          outlined
          clearable
          :rules="[rules.required, rules.email]"
          required
        ></v-text-field>
      </div>
      <div class="login-form__row">
        <v-text-field
          v-model="password"
          label="Password"
          :append-icon="passwordShow ? 'mdi-eye' : 'mdi-eye-off'"
          :type="passwordShow ? 'text' : 'password'"
          counter
          @click:append="passwordShow = !passwordShow"
          dark
          outlined
          clearable
          :rules="[rules.required, rules.min]"
          required
          autocomplete="new-password"
        ></v-text-field>
      </div>
      <v-btn
        @click="validateForm"
        color="redMain"
        dark
        x-large
        block
        raised
        :loading="loading"
      >
        login
      </v-btn>
    </v-form>

    <div
      v-else
      class="login-form text-center"
    >
      <h4>You are already signed in!</h4>
      <v-btn
        @click="$router.push({name: 'main'})"
        class="mt-4"
        color="redMain"
        dark
      >
        Go to home page
        <v-icon class="ml-2">east</v-icon>
      </v-btn>
    </div>
  </div>
</template>

<script>
import api from '@/js/api/index'

export default {
  name: "Login",
  data() {
    return {
      email: '',
      password: '',
      loading: false,
      token: null,

      passwordShow: false,
      passwordText: 'Password',

      // validation
      rules: {
        required: v => !!v || 'This field is required.',
        min: v => (v && v.length >= 6) || 'This field must be more than 6 characters',
        email: value => {
          const pattern = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          return pattern.test(value) || 'Invalid e-mail.'
        },
      },
      formHasErrors: true,
    }
  },
  created() {
    this.token = localStorage.getItem('token')
  },
  methods: {
    async validateForm() {
      await this.$refs.form.validate()
      if (this.formHasErrors) await this.submitForm()
    },
    async submitForm() {
      this.loading = true

      const data = {
        email: this.email,
        password: this.password
      }

      await api.auth.login(data).then(res => {
        this.$store.commit('auth/SET_TOKEN', res.data.access_token)
        localStorage.setItem('user_info', this.email)
        this.$router.push({name: 'main'})
      }).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })

      this.loading = false
    }
  }
}
</script>

<style lang="scss" scoped>
.login {
  &-overlay {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background-color: #2D2C2C;
    background-image: url(/admin/images/logo-short.svg);
    background-position: right bottom;
    background-repeat: no-repeat;
    background-size: auto 35%;
    padding: 15px;
  }

  &-form {
    display: block;
    width: 100%;
    max-width: 400px;
    color: #fff;

    &__row {
      width: 100%;
      margin-bottom: .5rem;
    }
  }
}
</style>
