<template>
  <v-snackbar
    v-model="$store.state.snackbar.show"
    :timeout="$store.state.snackbar.timeout"
    elevation="24"
    top
    right
    multi-line
    :color="$store.state.snackbar.type"
  >
    {{ $store.state.snackbar.text }}

    <template v-slot:action="{ attrs }">
      <v-btn
        color="white"
        text
        v-bind="attrs"
        @click="$store.commit('snackbar/CLOSE_SNACKBAR')"
      >
        Close
      </v-btn>
    </template>
  </v-snackbar>
</template>

<script>
export default {
  name: "Snackbar"
}
</script>

<style scoped>

</style>
