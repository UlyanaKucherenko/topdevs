<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Letters</h3>

    <Table
      :headers="headers"
      :body="$store.getters['lettersList/formattedList']"
      :pagination-data="$store.state.lettersList.pagination"
      :actions="{
        edit: false,
        show: true,
        delete: true
      }"
      @showItem="showItem"
      @deleteItem="deleteItem"
      @setCurrentPage="getData($event)"
    />

    <v-dialog :value="dialogCategory" @input="close()" max-width="500px">
      <v-card>
        <v-card-title>
          <span class="headline">
            Letter details
          </span>
        </v-card-title>

        <v-card-text>
          <v-row>
            <v-col cols="4">
              <div class="text-uppercase font-weight-bold">Name</div>
              <div class="pl-2">{{ $store.state.lettersList.showedItem.name }}</div>
            </v-col>
            <v-col cols="4">
              <div class="text-uppercase font-weight-bold">Email</div>
              <div class="pl-2">{{ $store.state.lettersList.showedItem.email }}</div>
            </v-col>
            <v-col cols="4">
              <div class="text-uppercase font-weight-bold">Phone</div>
              <div class="pl-2">{{ $store.state.lettersList.showedItem.phone }}</div>
            </v-col>
            <v-col cols="4">
              <div class="text-uppercase font-weight-bold">Skype</div>
              <div class="pl-2">{{ $store.state.lettersList.showedItem.skype }}</div>
            </v-col>
            <v-col cols="8">
              <div class="text-uppercase font-weight-bold">Message</div>
              <div class="pl-2">{{ $store.state.lettersList.showedItem.message }}</div>
            </v-col>
            <v-col cols="4">
              <div class="text-uppercase font-weight-bold">Get NDA</div>
              <div class="pl-2">
                <v-checkbox
                  :input-value="$store.state.lettersList.showedItem.checked"
                  value
                  :indeterminate="!$store.state.lettersList.showedItem.checked"
                  readonly
                  class="mt-0"
                  hide-details
                ></v-checkbox>
              </div>
            </v-col>
          </v-row>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="grey darken-1" text @click="close">Cancel</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

  </div>
</template>

<script>
import Table from '@/js/components/tables/Table';

export default {
  name: "LettersList",
  components: {
    Table
  },
  data() {
    return {
      headers: [
        {text: '#', value: 'idx', sortable: false, align: 'center'},
        {text: 'Name', value: 'name', sortable: true},
        {text: 'Email', value: 'email', sortable: true},
        {text: 'Phone', value: 'phone', sortable: true},
        {text: 'Skype', value: 'skype', sortable: true},
        {text: 'Get NDA', value: 'checked', sortable: true},
        {text: 'Created', value: 'created', align: 'center', sortable: true},
        {text: 'Actions', value: 'actions', sortable: false, align: 'center', width: 110},
      ],
      showItemId: null,
      dialogCategory: false
    }
  },
  computed: {
    _queryPage() {
      return +this.$route.query.page || 1
    }
  },
  mounted() {
    this.getData(this._queryPage)
  },
  methods: {
    getData(page) {
      this.$store.dispatch('lettersList/getList', page).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    showItem(item) {
      this.$store.commit('lettersList/SET_SHOWED_ITEM', item)
      this.dialogCategory = true
    },

    deleteItem(item) {
      this.showItemId = item.id
      this.$store.commit('modalConfirm/MODAL_HANDLER', true)
    },

    close() {
      this.dialogCategory = false
      this.$store.commit('lettersList/RESET_ITEM')
    },
  },
  watch: {
    '$store.state.modalConfirm.action': function (next) {
      if (next) {
        this.$store.dispatch('lettersList/deleteItem', this.showItemId).then(res => {
          if (res.data.status) {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Project successfully deleted'
            })
            this.getData(this._queryPage)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
        this.$store.commit('modalConfirm/MODAL_HANDLER', false)
        this.$store.commit('modalConfirm/MODAL_RESET')
      }
    }
  }
}
</script>

<style lang="scss">

</style>
