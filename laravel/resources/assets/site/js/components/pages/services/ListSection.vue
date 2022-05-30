<template>
  <section class="list-section">
    <div class="container">
      <SectionHeader
        class="list-section__header"
        :title="headerTitle"
        :desc="headerDesc"
        :icon="headerIcon"
        :mode="headerMode"
      />
      
      <ItemsList
        :items="items"
        :columns="columns"
        :cardType="cardType"
        :cardOptions="cardOptions"
      >
        <template v-if="$scopedSlots.default" v-slot="slotProps">
          <slot v-bind="slotProps"/>
        </template>
      </ItemsList>
    </div>

    <slot name="cursor-follow"></slot>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    headerIcon: String,
    headerMode: String,
    items: Array,
    columns: [Number, Object],
    cardOptions: {
      type: Object,
      default: () => ({})
    },
    cardType: {
      type: String,
      default: 'first'
    },
  },

  computed: {
    rows() {
      return Math.ceil(this.items.length / this.columns)
    },

    formattedItems() {
      const array = []
      for (let i = 0; i < this.rows; i++) {
        array.push(this.items.slice(i * this.columns, i * this.columns + this.columns))
      }

      return array
    }
  },

  methods: {
  },

}
</script>

<style lang="scss">
  .list-section {
    position: relative;
  }
</style>
