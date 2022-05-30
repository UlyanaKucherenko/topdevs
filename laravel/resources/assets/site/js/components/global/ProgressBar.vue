<template>
  <div class="progress-bar">
    <div 
      class="progress-bar__done"
      :style="{
        width: `${delayedValue}%`,
        borderRadius: progressStyle.border
      }"
    />

    <div
      v-if="withNumber"
      class="progress-bar__percent text-lg"
      :style="{left: `${delayedValue}%`}"
    >
      {{ delayedValue }}
    </div>
  </div>
</template>

<script>
import gsap from 'gsap'

export default {
  props: {
    value: {
      type: Number,
      default: 0
    },

    progressStyle: {
      type: Object,
      default: () => ({})
    },

    withNumber: {
      type: Boolean,
      default: true
    }
  },


  data() {
    return {
      delayedValue: 0
    }
  },


  computed: {
    formattedDelayedValue() {
      if (this.delayedValue == NaN || this.delayedValue == Infinity) return 0
      return Math.ceil(this.delayedValue)
    }
  },


  watch: {
    value(next, prev) {
      gsap.to(this, {delayedValue: this.value, duration: 1.5, ease: 'expo.inOut'})
    },

    delayedValue(next, prev) {
      if (next == 100) this.$emit('load')
    }
  },
}
</script>

<style lang="scss">
  .progress-bar {
      // background: lightgray;
    height: .33rem;
    border-radius: 30px;

    &__done {
      background-color: var(--red-light);
      height: 100%;
      border-radius: 30px;
    }

    &__percent {
      position: absolute;
      bottom: calc(100% + 3px);
      transform: translateX(-50%);
    }
  }
</style>