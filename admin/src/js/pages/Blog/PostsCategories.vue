<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Blog's Categories</h3>

    <div class="mb-4">
      <v-btn
        color="redMain"
        dark
        :elevation="4"
        @click="dialogCategory = true"
      >
        Add new category
      </v-btn>
    </div>

    <Table
      :headers="headers"
      :body="$store.getters['postsCategories/formattedList']"
      :pagination-data="$store.state.postsCategories.pagination"
      @setCurrentPage="getCategories($event)"
      @editItem="editItem"
      @deleteItem="deleteItem"
    />

    <v-dialog :value="dialogCategory" @input="close()" max-width="500px">
      <v-card>
        <v-card-title>
          <span class="headline">
            {{ $store.getters['postsCategories/formTitle'] }}
          </span>
        </v-card-title>

        <v-card-text>
          <v-form
            ref="formCategory"
            v-model="formHasErrors"
            lazy-validation
          >
            <v-text-field
              :value="$store.state.postsCategories.editedItem.name"
              @input="changeItem.name = $event"
              label="Category name"
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
  name: "PostsFilter",
  components: {
    Table
  },
  computed: {
    _queryPage() {
      return +this.$route.query.page || 1
    }
  },
  data() {
    return {
      headers: [
        {text: '#', sortable: false, value: 'idx',},
        {text: 'Name', sortable: true, value: 'name', width: '100%'},
        {text: 'Actions', sortable: false, value: 'actions', width: 110, align: 'center'},
      ],
      dialogCategory: false,
      changeItem: {
        name: '',
      },
      slug: null,

      // validation
      rules: {
        required: value => !!value || 'This field is required.',
        min3: v => (v && v.length >= 3) || 'This field must be more than 3 characters',
      },
      formHasErrors: true,
    }
  },
  mounted() {
    this.getCategories(this._queryPage)
  },
  methods: {
    getCategories(page) {
      this.$store.dispatch('postsCategories/getList', page).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    editItem(item) {
      this.$store.commit('postsCategories/SET_INDEX', item)
      this.$store.commit('postsCategories/SET_ITEM', item)
      this.changeItem = {...this.$store.state.postsCategories.editedItem}
      this.dialogCategory = true
    },

    async deleteItem(item) {
      this.slug = item.slug
      this.$store.commit('modalConfirm/MODAL_SET_DATA')
      this.$store.commit('modalConfirm/MODAL_HANDLER', true)
    },

    async save() {
      await this.$refs.formCategory.validate()
      if (this.formHasErrors) await this.submit()
    },

    async submit() {
      if (this.$store.state.postsCategories.editedIndex > -1) { // update
        let fd = getFormData(this.changeItem, true)
        await this.$store.dispatch('postsCategories/updateItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Category successfully updated'
            })
            this.getCategories(this._queryPage)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else { // create
        await this.$store.dispatch('postsCategories/createItem', this.changeItem).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Category successfully created'
            })
            this.getCategories(this._queryPage)
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
      this.dialogCategory = false
      this.$store.commit('postsCategories/RESET_ITEM')
      this.resetForm()
    },

    resetForm() {
      this.formHasErrors = true
      this.$refs.formCategory.reset()
    },
  },
  watch: {
    '$store.state.modalConfirm.action': function (next) {
      if (next) {
        this.$store.dispatch('postsCategories/deleteItem', this.slug).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Category successfully deleted'
            })
            this.getCategories(this._queryPage)
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
