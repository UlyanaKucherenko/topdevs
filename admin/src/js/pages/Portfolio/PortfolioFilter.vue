<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Portfolio's filter</h3>

    <div class="mb-4">
      <v-btn
        color="redMain"
        dark
        :elevation="4"
        @click="dialogTechnology = true"
      >
        Add new technology
      </v-btn>
    </div>

    <Table
      :headers="headers"
      :body="$store.getters['portfolioTechnology/formattedList']"
      :paginationData="$store.state.portfolioTechnology.pagination"
      @editItem="editItem"
      @deleteItem="deleteItem"
      @setCurrentPage="getData($event)"
    />

    <v-dialog :value="dialogTechnology" @input="close()" max-width="500px">
      <v-card>
        <v-card-title>
          <span class="headline">
            {{ $store.getters['portfolioTechnology/formTitle'] }}
          </span>
        </v-card-title>

        <v-card-text>
          <v-form
            ref="form"
            v-model="formHasErrors"
            lazy-validation
          >
            <v-text-field
              :value="$store.state.portfolioTechnology.editedItem.name"
              @input="changeItem.name = $event"
              label="Technology name"
              outlined
              clearable
              class="mt-4"
              :rules="[rules.required, rules.min3]"
              required
            ></v-text-field>
          </v-form>
        </v-card-text>

        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn color="grey darken-1" text @click="close">Cancel</v-btn>
          <v-btn color="green darken-1" text @click="save">Save</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

  </div>
</template>

<script>
import Table from '@/js/components/tables/Table';
import getFormData from "@/js/global/get_form_data";

export default {
  name: "PortfolioTechnology",
  components: {
    Table
  },
  computed: {
    _tabItems() {
      return this.$store.getters['portfolioTechnology/tabItems']
    },
    _queryPage() {
      return +this.$route.query.page || 1
    },
  },
  data() {
    return {
      headers: [
        {text: '#', sortable: false, value: 'idx',},
        {text: 'Technology name', sortable: true, value: 'name', width: '100%'},
        {text: 'Created', value: 'created', align: 'center'},
        {text: 'Actions', sortable: false, value: 'actions', width: 110, align: 'center'},
      ],
      dialogTechnology: false,
      changeItem: {
        name: '',
      },

      // validation
      rules: {
        required: value => !!value || 'This field is required.',
        min3: v => (v && v.length >= 3) || 'This field must be more than 3 characters',
      },
      formHasErrors: true,
    }
  },
  mounted() {
    if (!this.$store.state.portfolioTechnology.list) {
      this.getData(this._queryPage)
    }
  },
  methods: {
    getData(page) {
      this.$store.dispatch('portfolioTechnology/getList', page).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    editItem(item) {
      this.$store.commit('portfolioTechnology/SET_INDEX', item)
      this.$store.commit('portfolioTechnology/SET_ITEM', item)
      this.changeItem = {...this.$store.state.portfolioTechnology.editedItem}
      this.dialogTechnology = true
    },

    deleteItem(item) {
      this.slug = item.slug
      this.$store.commit('modalConfirm/MODAL_HANDLER', true)
    },

    async save() {
      await this.$refs.form.validate()
      if (this.formHasErrors) await this.submit()
    },

    async submit() {

      if (this.$store.state.portfolioTechnology.editedIndex > -1) { // update
        let fd = getFormData(this.changeItem, true)
        await this.$store.dispatch('portfolioTechnology/updateItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Technology successfully updated'
            })
            this.getData(this._queryPage)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else { // create
        await this.$store.dispatch('portfolioTechnology/createItem', this.changeItem).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Technology successfully created'
            })
            this.getData(this._queryPage)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      }

      this.close()
    },

    close() {
      this.dialogTechnology = false
      this.resetForm()
    },

    resetForm() {
      this.formHasErrors = true
      this.$refs.form.reset()
      this.$store.commit('portfolioTechnology/RESET_ITEM')
    },
  },
  watch: {
    '$store.state.modalConfirm.action': function (next) {
      if (next) {
        this.$store.dispatch('portfolioTechnology/deleteItem', this.slug).then(res => {

          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Technology successfully deleted'
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

<style scoped>

</style>
