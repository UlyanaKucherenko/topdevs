<template>
  <div class="bark-block-pre-bullet">
    <div class="bark-block-pre-bullet__circles-list">
      <div 
        class="bark-block-pre-bullet__circles-item"
        v-for="(circle, index) in circlesCount" :key="index"
      >
      </div>
    </div>
    <div 
      class="bark-block-pre-bullet__content"
      ref="content"
    >
      <slot/>
    </div>
  </div>
</template>

<script>
import { debounce } from '@/js/mixins/functions'

export default {
  data() {
    return {
      blockHeight: 0,
      margin: 15,
    }
  },


  computed: {
    circlesCount() {
      return Math.floor((this.blockHeight - this.circleHeight) / (this.margin + this.circleHeight)) + 1
    },

    circleHeight() {
      return this.windowWidth > 575 ? 7 : 5
    }
  },


  mounted() {
    this.updateBlockHeight()
      window.addEventListener('resize', this.updateBlockHeight)
  },


  destroyed() {
    window.removeEventListener('resize', this.updateBlockHeight)
  },


  methods: {
    updateBlockHeight() {
      this.blockHeight = this.$refs.content.clientHeight
    },
  },
}
</script>

<style lang="scss">
  .bark-block-pre-bullet {
    position: relative;
    padding-left: 3.7rem;

    @media (max-width: 1400px) {
      padding-left: 3.2rem;
    }

    @media (max-width: 1199px) {
      padding-left: 2.7rem;
    }

    @media (max-width: 575px) {
      padding-left: 1.7rem;
    }

    &__circles {
      &-list {
        position: absolute;
        left: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
      }

      &-item {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--case-color-green);

        @media (max-width: 575px) {
          width: 5px;
          height: 5px;
        }
      }
    }
  }
</style>