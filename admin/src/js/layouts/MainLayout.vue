<template>
  <v-app id="inspire" class="app-admin">

    <AppSidebar
      :drawer="drawer"
      @setDrawer="drawer = $event"
    />

    <AppHeader
      @drawer="drawer = !drawer"
    />

    <AppContent/>

    <ModalConfirm/>
    <Snackbar/>

  </v-app>
</template>

<script>
import AppHeader from "@/js/layouts/App/AppHeader";
import AppSidebar from "@/js/layouts/App/AppSidebar";
import AppContent from "@/js/layouts/App/AppContent";

export default {
  name: "MainLayout",
  components: {
    AppHeader, AppSidebar, AppContent
  },
  data: () => ({
    drawer: window.innerWidth >= 1265 ? true : false // 1265
  })
}
</script>

<style lang="scss" scoped>

</style>
