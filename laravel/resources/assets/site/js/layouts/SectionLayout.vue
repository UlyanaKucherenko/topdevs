<template>
  <section class="section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        :icon="headerIcon"
        :mode="headerMode"
      >
      </SectionHeader>

      <slot/>
    </div>
    <slot name="cursor-follow"></slot>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'

export default {
  components: {SectionHeader},

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
