<template>
  <v-dialog v-model="$store.state.modalConfirm.show" persistent max-width="290">
    <v-card>
      <v-card-title class="headline">
        {{ $store.state.modalConfirm.title }}
      </v-card-title>
      <v-card-text>
        {{ $store.state.modalConfirm.text }}
      </v-card-text>
      <v-card-actions>
        <v-spacer></v-spacer>
        <v-btn
          color="grey darken-1"
          text
          @click="$store.commit('modalConfirm/MODAL_HANDLER', false)"
        >
          Cancel
        </v-btn>
        <v-btn
          color="red darken-2"
          text
          @click="$store.commit('modalConfirm/MODAL_ACTION')"
        >
          Delete
        </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  name: "ModalConfirm"
}
</script>

<style lang="scss">

</style>
