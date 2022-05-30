<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Posts</h3>

    <div class="mb-4">
      <v-btn
        color="redMain"
        dark
        :elevation="4"
        @click="$router.push(`${route}/create`)"
      >
        Add new post
      </v-btn>
    </div>

    <Table
      :headers="headers"
      :body="$store.getters['postsList/formattedList']"
      :route="route"
      :pagination-data="$store.state.postsList.pagination"
      @deleteItem="deleteItem"
      @setCurrentPage="getData($event)"
    />

  </div>
</template>

<script>
import Table from '@/js/components/tables/Table';

export default {
  name: "PostsList",
  components: {
    Table
  },
  data() {
    return {
      headers: [
        {text: '#', value: 'idx', sortable: false, align: 'center'},
        {text: 'Picture', value: 'picture', sortable: false},
        {text: 'Title', value: 'title'},
        {text: 'Show to main page', value: 'is_show_to_main_page', sortable: false, align: 'center', width: 110},
        {text: 'Status', value: 'status', align: 'center'},
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
    this.getData(this._queryPage);
  },
  methods: {
    getData(page) {
      this.$store.dispatch('postsList/getList', page).catch(err => {
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
        this.$store.dispatch('postsList/deleteItem', this.slug).then(res => {
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
