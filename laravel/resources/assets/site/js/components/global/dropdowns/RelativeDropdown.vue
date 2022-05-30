<template>
  <div class="relative-dropdown">
    <div 
      class="relative-dropdown__btn text-md"
      @click="toggleDropdown"
    >
      <slot name="btn"/>
      <img 
        src="/images/site/icons/arrows/8.svg" alt="" 
        class="relative-dropdown__arrow"
        :class="{'relative-dropdown__arrow--opened': isOpened}"
      >
    </div>
    <div 
      class="relative-dropdown__content"
      ref="content"
    >
      <slot name="content"/>
    </div>
  </div>
</template>

<script>
import AppCheckbox from '@/js/components/global/AppCheckbox'
import gsap from 'gsap'

export default {
  components: {AppCheckbox},

  props: {
    title: String,
    items: Array
  },


  data() {
    return {
      isOpened: false,
      toggleTL: gsap.timeline()
    }
  },


  methods: {
    async toggleDropdown() {
      let content = this.$refs.content
      let defaultOptions = {duration: .5, ease: 'power3'.inOut}
      this.toggleTL.clear()

      if (!this.isOpened) {
        this.isOpened = true
        this.toggleTL.set(content, {height: 'auto', autoAlpha: 1})
        this.toggleTL.from(content, {...defaultOptions, height: 0, autoAlpha: 0})
      } else {
        this.isOpened = false
        this.toggleTL.to(content, {...defaultOptions, height: 0, autoAlpha: 0})
      }
    }
  },
}
</script>

<style lang="scss">
  .relative-dropdown {
    cursor: pointer;

    &__btn {
      position: relative;
    }

    &__arrow {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%) rotate(90deg);
      transition: .3s;

      &--opened {
        transform: translateY(-50%) rotate(270deg);
      }
    }

    &__content {
      height: 0;
      overflow: hidden;
    }
  }
</style>