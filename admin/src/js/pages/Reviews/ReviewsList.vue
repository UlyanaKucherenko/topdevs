<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Reviews</h3>

    <div class="mb-4">
      <v-btn
        color="redMain"
        dark
        :elevation="4"
        @click="$router.push(`${route}/create`)"
      >
        Add new review
      </v-btn>
    </div>

    <Table
      :headers="headers"
      :body="$store.getters['reviewsList/formattedList']"
      :route="route"
      :pagination-data="$store.state.reviewsList.pagination"
      @deleteItem="deleteItem"
      @setCurrentPage="getData($event)"
    />

  </div>
</template>

<script>
import Table from '@/js/components/tables/Table';

export default {
  name: "ReviewsList",
  components: {
    Table
  },
  data() {
    return {
      headers: [
        {text: '#', value: 'idx', sortable: false, align: 'center'},
        {text: 'Customer name', value: 'customer_name', sortable: true},
        {text: 'Customer position', value: 'customer_position', sortable: true},
        {text: 'Country', value: 'country', sortable: true},
        {text: 'Created', value: 'created', align: 'center'},
        {text: 'Actions', value: 'actions', sortable: false, align: 'center', width: 110},
      ],
      route: this.$route.path,
      slug: null
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
      this.$store.dispatch('reviewsList/getList', page).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    deleteItem(item) {
      this.slug = item.slug
      this.$store.commit('modalConfirm/MODAL_HANDLER', true)
    }
  },
  watch: {
    '$store.state.modalConfirm.action': function (next) {
      if (next) {
        this.$store.dispatch('reviewsList/deleteItem', this.slug).then(res => {
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
