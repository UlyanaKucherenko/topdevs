<template>
  <component 
    :is="tag" 
    class="absolute-dropdown"
    @mouseenter="mode == 'hover' ? openDropdown() : ''"
    @mouseleave="mode == 'hover' ? closeDropdown() : ''"
    @click="openDropdown"
    v-click-outside="() => {this.closeDropdown()}"
  >

    <slot name="btn"/>

    <transition name="fade">
      <div 
        v-if="contentIsVisible"
        ref="content"
        class="absolute-dropdown__content"
        :style="contentStyle"
      >
        <div class="absolute-dropdown__content-inner">
          <slot name="content"/>
        </div>
      </div>
    </transition>
  </component>
</template>

<script>
import gsap from 'gsap'

export default {
  props: {
    tag: {
      type: String,
      default: 'div'
    },

    mode: { // click || hover
      type: String,
    },

    coords: {
      type: Object,
      default: () => ({})
    }
  },


  data() {
    return {
      contentIsVisible: false,
    }
  },


  computed: {
    contentStyle() {
      return {
        left: this.coords.left ? this.coords.left : ''
      }
    }
  },


  methods: {
    async openDropdown() {
      this.contentIsVisible = true
      clearTimeout(this.closeTimeout)
      await this.$nextTick()
      let rect = this.$refs.content.getBoundingClientRect()
      let diffX = this.windowWidth - rect.right
      let diffY = this.windowHeight - rect.bottom
      let compStyle = getComputedStyle(this.$refs.content)
      if (diffX < 0) gsap.set(this.$refs.content, {right: 0, left: 'auto'})
      if (diffY < 0) gsap.set(this.$refs.content, {bottom: '100%', top: 'auto', paddingBottom: compStyle.paddingTop ? compStyle.paddingTop.slice(0, -2) : ''})
    },

    async closeDropdown() {
      this.contentIsVisible = false
    }
  },
}
</script>

<style lang="scss">
  .absolute-dropdown {
    position: relative;

    &__content {
      position: absolute;
      left: 0;
      top: 100%;
      padding-top: 1.6rem;
    }
  }
</style>