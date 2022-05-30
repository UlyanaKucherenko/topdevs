<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">Portfolio</h3>

    <div class="mb-4">
      <v-btn
        class="mr-4"
        color="redMain"
        dark
        :elevation="4"
        @click="$router.push(`${route}/create`)"
      >
        Add new project
      </v-btn>

      <v-btn
        color="redMain"
        dark
        :elevation="4"
        @click="casesModalIsVisible = true"
      >
        change cases order
      </v-btn>
    </div>

    <TableDraggable
      v-if="casesModalIsVisible"
      @close="casesModalIsVisible = false"
      :fetchPromiseInit="getAllCases"
      :fetchPromiseUpdate="updateCasesOrder"
      @fetchInitError="handleFetchInitError"
      @fetchUpdateError="handleFetchUpdateError"
    >
      <template #row="data">
        <div class="modal-order-cases-row">
          <div class="modal-order-cases-row__index">{{ data.index }}</div>
          <img class="modal-order-cases-row__img" :src="`${location.protocol}//${location.hostname}/storage/` + data.item.picture.path">
          <div class="modal-order-cases-row__title">{{ data.item.title }}</div>
        </div>
      </template>
    </TableDraggable>

    <Table
      :headers="headers"
      :body="$store.getters['portfolioList/formattedList']"
      :route="route"
      :pagination-data="$store.state.portfolioList.pagination"
      @deleteItem="deleteItem"
      @setCurrentPage="getData($event)"
    />

  </div>
</template>

<script>
import api from '@/js/api'

import Table from '@/js/components/tables/Table';
import TableDraggable from '@/js/components/tables/TableDraggable'

export default {
  name: "PortfolioList",
  components: {
    Table, TableDraggable
  },
  data() {
    return {
      api,
      location,
      headers: [
        {text: '#', value: 'idx', sortable: false, align: 'center'},
        {text: 'Picture', value: 'picture', sortable: false},
        {text: 'Project name', value: 'project', width: '100%'},
        {text: 'Created', value: 'created', align: 'center'},
        {text: 'Actions', value: 'actions', sortable: false, align: 'center', width: 110},
      ],
      route: this.$route.path,
      slug: null,
      casesModalIsVisible: false
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
      this.$store.dispatch('portfolioList/getList', page).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    deleteItem(item) {
      this.slug = item.slug
      this.$store.commit('modalConfirm/MODAL_HANDLER', true)
    },

    getAllCases() {
      return api.portfolio.getList('all')
        .then(res => res.data.data.data)
    },

    updateCasesOrder(payload) {
      return api.portfolio.updateOrder(payload)
        .then(res => {
          this.casesModalIsVisible = false
          this.$store.commit('portfolioList/CLEAR_LIST')
          this.getData(this._queryPage)
        })
    },

    handleFetchInitError(err) {
      this.casesModalIsVisible = false
      this.$store.commit('snackbar/OPEN_SNACKBAR', {
        type: 'error',
        text: err
      })
    },

    handleFetchUpdateError(err) {
      this.$store.commit('snackbar/OPEN_SNACKBAR', {
        type: 'error',
        text: err
      })
    }
  },
  watch: {
    '$store.state.modalConfirm.action': function (next) {
      if (next) {
        this.$store.dispatch('portfolioList/deleteItem', this.slug).then(res => {
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
  .modal-order-cases-row {
    display: flex;
    align-items: center;
    padding: 5px;
    cursor: pointer;
    border-bottom: 1px solid rgba(0,0,0,.1);

    &__img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      margin: 0 10px;
    }
  }
</style>
