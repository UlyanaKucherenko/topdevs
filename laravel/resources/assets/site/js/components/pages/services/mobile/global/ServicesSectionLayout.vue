<template>
  <section class="section">
    <div class="container">

      <ServicesSectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        :icon="headerIcon"
        :mode="headerMode"
      >
      </ServicesSectionHeader>

      <slot/>
    </div>
    <slot name="cursor-follow"></slot>
  </section>
</template>

<script>
import ServicesSectionHeader from "./ServicesSectionHeader";

export default {
  name: 'ServicesSectionLayout',
  components: {ServicesSectionHeader},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    headerIcon: String,
    headerMode: String
  },
}
</script>

<style lang="scss">
  .section {
    position: relative;
  }
</style>
