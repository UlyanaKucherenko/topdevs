<template>
  <div
    class="event-divider"
    :style="dividerStyle"
  >
    <div
      class="event-divider__line"
      :style="lineStyle"
    />
    <div
      class="event-divider__circle"
      :style="circleStyle"
    />
    <div
      class="event-divider__line"
      :style="lineStyle"
    />
  </div>
</template>

<script>
export default {
  props: {
    color: {
      type: String,
      required: true
    },
    lineWeight: {
      type: Number,
      required: true
    },
    circleRadius: {
      type: Number,
      required: true
    },
    circleMargin: {
      type: Number,
      required: true
    },
    modeVertical: Boolean,
    breakpoints: Object,
  },


  computed: {
    __props() {
      return this.handlePropsBreakpoints(this.$props)
    },

    lineStyle() {
      const style = {}

      if (this.__props.modeVertical) style.width = this.lineWeight + 'px'
      else style.height = this.lineWeight + 'px'

      return style
    },

    circleStyle() {
      const style = {}

      if (this.__props.modeVertical) style.margin = `${this.__props.circleMargin}px 0`
      else style.margin = `0 ${this.__props.circleMargin}px`

      return {
        ...style,
        width: `${this.__props.circleRadius}px`,
        height: `${this.__props.circleRadius}px`
      }
    },

    dividerStyle() {
      return {
        flexDirection: this.__props.modeVertical ? 'column'  : '',
        '--line-basis': `${this.__props.lineBasis}px`,
        '--color': this.__props.color,
        color: 'white'
      }
    }
  }
}
</script>

<style lang="scss">
  .event-divider {
    display: flex;
    justify-content: center;
    align-items: center;

    &__line {
      flex: 1;
      background-color: var(--color);
    }

    &__circle {
      flex-shrink: 0;
      background-color: var(--color);
      border-radius: 50%;
    }
  }
</style>
