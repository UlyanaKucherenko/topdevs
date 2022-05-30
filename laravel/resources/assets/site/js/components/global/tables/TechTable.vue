<template>
  <div class="tech-table" v-scroll-reveal="{delay: 250, cleanup: false}">
    <div 
      :class="{
        'tech-table__block': true,
      }"
    >
      <ul 
        v-if="blocks.length > 1"
        class="tech-table__nav-list text-lg"
      >
        <li 
          :class="{
            'tech-table__nav-item': true,
            'text-with-border': true,
            'tech-table__nav-item--active': activeTable == blocks[index],
          }"
          v-for="(item, index) in blocks" :key="index"
          @click="changeActiveTable(index)"
        >
          {{ item.title }}
        </li>
      </ul>

      <div 
        class="tech-table__columns"
        ref="columns"
        :style="currentOptions"
      >
        <div 
          class="tech-table__column"
          v-for="(column, index) in activeTable.columns" :key="index"
        >
          <div
            v-if="column.title" 
            :class="{
              'tech-table__column-title text-lg': true,
              hidden: column.title == 'hidden'
            }"
          >
            {{ column.title }}
          </div>
          <div 
            :class="{
              'tech-table__column-item_last': index == column.items.length - 1,
              'tech-table__column-item': true
            }"
            v-for="(item, index) in column.items" 
            :key="index"
          >
            <div 
              class="tech-table__column-item-img"
              v-if="item.imgURL"
            >
              <img :src="item.imgURL" alt="">
            </div>
            <div 
              class="tech-table__column-item-title text-md"
            >
              {{ item.title }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import VueTinySlider from '@/js/components/global/sliders/VueTinySlider.js'
import gsap from 'gsap'

export default {
  components: {
    'TinySlider': VueTinySlider,
  },


  props: {
    blocks: Array
  },


  data() {
    return {
      activeTable: {},
      activeTableIndex: 0,
      columnsIsVisible: true
    }
  },

  watch: {
    blocks() {
      this.activeTable = this.blocks[this.activeTableIndex]
    }
  },

  computed: {
    lastRowBlocksCount() {
      let allBlocksSum = this.blocks.map(block => block.width).reduce((acc, blockWidth) => acc + blockWidth)
      let lastRowWidth = allBlocksSum % 100 || 100

      if (allBlocksSum <= 100) return this.blocks.length
      
      let lastRowBlocksSum = 0
      let lastIndex = this.blocks.length - 1
      let lastRowBlocksCount = 0

      for (let i = this.blocks.length-1; i > 0; i--) {
        lastRowBlocksSum += this.blocks[i].width
        lastRowBlocksCount++
        if (lastRowBlocksSum + this.blocks[i-1].width > lastRowWidth) break;
      }

      return lastRowBlocksCount
    },

    currentOptions() {
      let options = this.activeTable.styleOptions
      let keys = Object.keys(options).sort((a,b) => a-b)
      for (let i = 0; i < keys.length; i++) {
        if (this.windowWidth <= keys[i]) return options[keys[i]]
      }
      return options.default
    }
  },

  
  created() {
    this.activeTable = this.blocks[0]
  },


  methods: {
    changeActiveTable(index) {
      let el = this.$refs.columns
      gsap.set(el, {autoAlpha: 0})
      setTimeout(async () => {
        this.activeTable = this.blocks[index]
        this.activeTableIndex = index
        gsap.set(el, {autoAlpha: 1})
      }, 300);
    },

    currentWidth(width) {
      if (typeof width == 'string') return width

      let keys = Object.keys(width).sort((a,b) => a-b)
      for (let i = 0; i < keys.length; i++) {
        if (this.windowWidth <= keys[i]) return width[keys[i]]
      }
      return width.default
    },
  },
}
</script>

<style lang="scss">
  @import 'tiny-slider/src/tiny-slider';

  .tech-table {
    // display: flex;
    // flex-wrap: wrap;
    font-weight: 600;
    // background: linear-gradient(115.41deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    // box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);

    &__nav-list {
      display: flex;
      font-weight: 400;
      text-transform: uppercase;
      justify-content: center;
      margin-bottom: calc(var(--space-unit) * 5);
      cursor: pointer;
    }
    
    &__nav-item {
      margin-right: calc(var(--space-unit) * 8);

      &:last-child {
        margin-right: 0;
      }

      &:before {
        content: '';
        position: absolute;
        left: -.80em;
        top: 50%;
        transform: translateY(-50%);
        width: .31em;
        height: .31em;
        background: var(--red-light);
        opacity: 0;
        transition: .3s;
      }

      &--active {
        &:before {
          transition: .3s;
          opacity: 1;
        }
      }
    }

    &__block {
      // margin-bottom: 9rem;

      &_last {
        margin-bottom: 0;
      }
    }

    &__block-title {
      color: var(--black-main);
      margin-bottom: 5rem;
    }

    &__columns {
      display: grid;
      row-gap: calc(var(--space-unit) * 7);
      transition: .3s;
    }

    &__column-title {
      font-weight: 400;
      color: var(--red-light);
      margin-bottom: calc(var(--space-unit) * 5);
    }

    &__column-item {
      display: flex;
      align-items: center;
      margin-bottom: calc(var(--space-unit) * 4);
      
      // height: calc(var(--space-unit) * 4.3);

      &_last {
        margin-bottom: 0;
      }
    }

    &__column-item-title {
      color: var(--grey-dark);
    }

    &__column-item-img {
      width: calc(var(--space-unit) * 8);

      img {
        width: 80%;
        max-width: 4.3rem;
      }
    }
  }
</style>
