<template>
  <component 
    v-if="authStore.tokenRefreshed || !authStore.token"
    :is="layout"
  >
    <router-view/>
  </component>
</template>

<script>
import AuthLayout from '@/js/layouts/AuthLayout';
import MainLayout from '@/js/layouts/MainLayout';

export default {
  name: "App",
  components: {
    AuthLayout, MainLayout
  },
  data: () => ({
    layout: null
  }),
  computed: {
    authStore() {return this.$store.state.auth}
  },
  watch: {
    $route(to, from) {
      this.layout = (this.$route.meta.layout || 'auth') + '-layout';
    }
  },
  created() {
    if (this.authStore.token) this.$store.dispatch('auth/refreshToken')
  }
}
</script>

<style scoped>

</style>
