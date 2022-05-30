<template>
  <div class="v-tabs">
    <div class="v-tabs__row">
      <div
          class="v-tabs__tab"
          :class="{'v-tabs__tab--active': tab.component === selectedTab}"
          v-for="tab in tabs"
          :key="tab.component"
          @click="onSelect(tab)"
      >
        {{ tab.title }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "VTabs",
  props: {
    tabs: {
      type: Array,
      required: true
    },
    selectedTab: {
      type: String,
      required: true,
    }
  },
  methods: {
    onSelect(tab) {
      this.$emit('click', tab);
    }
  }
}
</script>

<style lang="scss" scoped>
.v-tabs {
  display: flex;
  justify-content: space-between;
  align-items: center;
  text-align: left;
  width: 100%;

  &__row {
    display: flex;
    column-gap: 47px;
    padding-bottom: 16px;
    border-bottom: 1px solid #DDE4EB;
    width: 100%;
  }

  &__tab {
    position: relative;
    text-transform: capitalize;
    font-weight: 600;
    font-style: italic;
    cursor: pointer;
    width: 100%;

    &::before {
      content: "";
      position: absolute;
      bottom: -16px;
      left: 0;
      width: 100%;
      height: 5px;
      opacity: 0;
      background: var(--blue-main);
    }

    &--active {

      &::before {
        opacity: 1;
        transition: opacity 0.4s ease-in-out;
      }
    }
  }
}
</style>