<template>
  <div class="mb-4">
    <v-btn
      dark
      color="darkenMain"
      :elevation="4"
      @click="$emit('returnBack')"
    >
      <v-icon
        dark
        left
        small
      >
        mdi-arrow-left
      </v-icon>
      Back
    </v-btn>
  </div>
</template>

<script>
export default {
name: "BtnBack"
}
</script>

<style scoped>

</style>
