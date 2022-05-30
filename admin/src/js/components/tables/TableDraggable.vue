<template>
  <v-dialog
    width="fit-content"
    overlay-color="white"
    :value="isVisible"
    @click:outside="$emit('close')"
  >
    <div class="table-draggable">
      <v-progress-circular
        class="table-draggable__loader"
        v-if="isFetchingInit"
        :size="50"
        color="primary"
        indeterminate
      />

      <div 
        v-else
        class="table-draggable__content"
      >
        <draggable v-model="processedItems">
          <div v-for="(item, index) in processedItems" :key="index">
            <slot
              name="row"
              :index="index+1"
              :item="{...item}"
            />
          </div>
        </draggable>
        
        <v-btn 
          class="table-draggable__btn"
          dark
          color="redMain"
          :loading="isFetchingUpdate"
          @click="updateOrder"
        >
          save
        </v-btn>
      </div>
    </div>
  </v-dialog>
</template>

<script>
import draggable from 'vuedraggable'

export default {
  components: {
    draggable
  },


  props: {
    fetchPromiseInit: Function,
    fetchPromiseUpdate: Function,
    items: Array,
  },

  
  data() {
    return {
      processedItems: null,
      isVisible: true,
      isFetchingInit: true,
      isFetchingUpdate: false
    }
  },


  watch: {
    items() {
      this.processedItems = this.items
    }
  },


  mounted() {
    this.fetchPromiseInit()
      .then(res => {
        this.processedItems = res
        this.isFetchingInit = false
      })
      .catch(err => {
        this.$emit('fetchInitError', err)
      })
  },


  methods: {
    updateOrder() {
      this.isFetchingUpdate = true
      this.fetchPromiseUpdate(this.processedItems.map(item => item.id))
        .catch(err => this.$emit('fetchUpdateError', err))
        .finally(() => {
          this.isFetchingUpdate = false
        })
    }
  },
}
</script>

<style lang="scss">
  .table-draggable {
    width: 100%;
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: white;

    &__content {
    }

    &__btn {
      display: block;
      margin: 0 auto;
      margin-top: 10px;
    }
  }
</style>