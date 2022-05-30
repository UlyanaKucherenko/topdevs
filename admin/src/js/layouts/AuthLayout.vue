<template>
  <v-app id="inspire">
    <Login/>

    <Snackbar/>
  </v-app>
</template>

<script>
    import Login from "@/js/auth/Login.vue";
    export default {
        name: "AuthLayout",
        components: {
            Login
        }
    }
</script>

<style scoped>

</style>
