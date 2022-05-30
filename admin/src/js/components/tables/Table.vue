<template>
  <div class="app-table">
    <v-data-table
      :headers="headers"
      :items="_body"
      :page.sync="page"
      :items-per-page="itemsPerPage"
      :class="{'elevation-4': shadow}"
      @page-count="pageCount = $event"
      :loading="!_body"
      loading-text="Loading... Please wait"
      :hide-default-footer="hideFooter"
    >
      <template v-slot:item.idx="{item}">
        {{ item.idx }}
      </template>

      <template v-slot:item.picture="{item}">
        <v-img
          :src="item.picture"
          :height="40"
          :width="40"
        ></v-img>
      </template>

      <template v-slot:item.is_show_to_main_page="{item}">
        <v-btn
          v-if="item.is_show_to_main_page"
          fab
          x-small
          dark
          color="green"
          elevation="3"
        >
          <v-icon>
            done
          </v-icon>
        </v-btn>
      </template>

      <template v-slot:item.created="{item}">
        {{ item.created | dateFilter }}
      </template>

      <template v-slot:item.status="{item}">
        <v-chip
          :color="setStatus(item.status)"
          dark
          class="text-uppercase text-caption elevation-3"
        >
          {{ item.status }}
        </v-chip>
      </template>

      <template v-slot:item.checked="{item}">
        <v-checkbox
          :input-value="item.checked"
          value=""
          :indeterminate="!item.checked"
          readonly
          class="mt-0"
          hide-details
        ></v-checkbox>
      </template>

      <template v-slot:item.actions="{item}">
        <v-btn
          v-if="actions.edit"
          fab
          x-small
          class="mr-2"
          dark
          color="warning"
          elevation="3"
          @click="editItem(item)"
        >
          <v-icon>
            mdi-pencil
          </v-icon>
        </v-btn>
        <v-btn
          v-if="actions.show"
          fab
          x-small
          class="mr-2"
          dark
          color="blue"
          elevation="3"
          @click="$emit('showItem', item)"
        >
          <v-icon>
            remove_red_eye
          </v-icon>
        </v-btn>
        <v-btn
          v-if="actions.delete"
          fab
          x-small
          dark
          color="redMain"
          elevation="3"
          @click="$emit('deleteItem', item)"
        >
          <v-icon>
            mdi-delete
          </v-icon>
        </v-btn>
      </template>
    </v-data-table>

    <div
      v-if="paginationShow && paginationData"
      class="text-center pt-4"
    >
      <v-pagination
        :value="paginationData.current_page"
        @input="$emit('setCurrentPage', $event)"
        :length="paginationData.last_page"
        color="redMain"
        :total-visible="7"
      ></v-pagination>
    </div>

  </div>
</template>

<script>
export default {
  name: "Table",
  props: {
    headers: Array,
    body: Array,
    route: {
      type: String,
      default: ''
    },
    shadow: {
      type: Boolean,
      default: true
    },
    hideFooter: {
      type: Boolean,
      default: true
    },
    paginationShow: {
      type: Boolean,
      default: true
    },
    paginationData: Object,
    actions: {
      type: Object,
      default: () => ({
        edit: true,
        delete: true,
        show: false
      })
    }
  },
  computed: {
    _body() {
      let pageFrom = this.paginationData
      return this.body?.map((c, idx) => ({
        idx: pageFrom ? pageFrom.from + idx : idx + 1,
        ...c
      }))
    }
  },
  data() {
    return {
      page: 1,
      pageCount: 0,
      itemsPerPage: 10
    }
  },
  methods: {
    editItem(item) {
      if (this.route) {
        this.$router.push(`${this.route}/edit/${item.slug}`)
      } else {
        this.$emit('editItem', item)
      }
    },
    setStatus(status) {
      switch (status) {
        case 'future':
          return 'blue'
        case 'publish':
          return 'green'
        case 'draft':
          return 'blue-grey'
        case 'auto-draft':
          return 'orange'
        case 'trash':
          return 'red'
        default:
          return 'grey'
      }
    }
  }
}
</script>

<style lang="scss">

</style>
