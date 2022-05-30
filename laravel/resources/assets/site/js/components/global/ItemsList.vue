<template>
  <div class="items-list">
    <div 
      class="items-list__row"
      v-for="(row, rowIndex) in formattedItems" :key="generateRowKey(row)"
    >
      <template>
        <div 
          class="items-list__item"
          v-for="(item, index) in row"
          :key="index"
           v-scroll-reveal="{delay: 100 * (rowIndex+1) * index}"
        >
          <slot 
            v-if="$scopedSlots.default"
            v-bind="{...item, index, number: rowIndex * _columns + index + 1,  item}"
          />

          <FirstCard
            v-else-if="cardType == 'first'"
            v-bind="{...item, index, ...cardOptions}"
            :titleNumber="cardOptions.titleNumber ? rowIndex * _columns + index + 1 : null"
            :descNumber="cardOptions.descNumber ? rowIndex * _columns + index + 1 : null"
          />

          <CircleCard
            v-else-if="cardType == 'circle'"
            v-bind="{...item, index, number: rowIndex * _columns + index + 1, item, ...cardOptions}"
          />

          <PetalCard
            v-else-if="cardType == 'petal'"
            v-bind="{...item, index, number: rowIndex * _columns + index + 1, item}"
            :index="rowIndex * columns + index + 1"
          />

          <PortfolioCard 
            v-else-if="cardType == 'portfolio'"
            :item="item"
          />

          <LearnCard 
            v-else-if="cardType == 'learn'"
            v-bind="{...item, index, number: rowIndex * _columns + index + 1}"
          />

          <RowTitleCard
            v-else-if="cardType == 'row-title'"
            v-bind="item"
          />

          <RowFilledCard
            v-else-if="cardType == 'row-filled'"
            v-bind="{...item, ...cardOptions}"
          />

          <RowFullCard
            v-else-if="cardType == 'row-full'"
            v-bind="{...item, ...cardOptions}"
          />

          <ImgTitleCard
            v-else-if="cardType == 'img-title'"
            v-bind="{...item, ...cardOptions}"
          />

          <ListCard
            v-else-if="cardType == 'list'"
            v-bind="item"
          /> 

          <NumberTitleCard
            v-else-if="cardType == 'number-title'"
            v-bind="item"
          />
        </div>
      </template>
    </div>
  </div>
</template>

<script>
import FirstCard from '@/js/components/global/cards/FirstCard'
import CircleCard from '@/js/components/global/cards/CircleCard'
import PortfolioCard from '@/js/components/global/cards/PortfolioCard'
import LearnCard from '@/js/components/global/cards/LearnCard'
import TextIconCard from '@/js/components/global/cards/TextIconCard'
import RowTitleCard from '@/js/components/global/cards/RowTitleCard'
import RowFilledCard from '@/js/components/global/cards/RowFilledCard'
import RowFullCard from '@/js/components/global/cards/RowFullCard'
import ImgTitleCard from '@/js/components/global/cards/ImgTitleCard'
import ListCard from '@/js/components/global/cards/ListCard'

export default {
  components: {
    FirstCard, 
    CircleCard,
    PortfolioCard, 
    LearnCard, 
    RowTitleCard, 
    RowFilledCard, 
    RowFullCard,
    ImgTitleCard,
    ListCard
  },

  props: {
    items: Array,
    columns: [Object, Number],
    cardType: String,
    cardOptions: {
      type: Object,
      default: () => ({})
    },
  },


  computed: {
    _columns() {
      if (typeof this.columns == 'number') return this.columns

      let keys = Object.keys(this.columns).sort((a,b) => a-b)
      for (let i = 0; i < keys.length; i++) {
        if (this.windowWidth <= keys[i]) return this.columns[keys[i]]
      }
      return this.columns.default
    },

    rows() {
        return Math.ceil(this.items.length / this._columns)
    },
    
    formattedItems() {
      const array = []
      for (let i = 0; i < this.rows; i++) {
        array.push(this.items.slice(i * this._columns, i * this._columns + this._columns))
      }
      return array
    }
  },


  methods: {
    generateRowKey(row) {
      let title = row[0].title
      if (typeof title == 'string') return title
      else return title.toString()
    }
  },
}
</script>

<style lang="scss">
  .items-list {
    &__row {
      display: flex;
      justify-content: space-around;
      --margin-bottom: calc(var(--space-unit) * 6);
      margin-bottom: var(--margin-bottom);

      &:last-child {
        margin-bottom: 0;
      }
    }
  }
</style>