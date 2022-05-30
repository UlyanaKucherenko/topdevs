<template>
  <section class="industries-section">
    <div class="container">
      <SectionHeader
        title="Industries in Focus"
        :desc="['Our well-proven development experience is in', 'charge of excellent software solutions for', 'numerous business niches.']"
        icon="/images/site/icons/abstract/header-8.svg"
      />

      <SelectList/>
    </div>

  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import SelectList from '@/js/components/global/SelectList'

export default {
  components: {SectionHeader, SelectList},
}
</script>

<style lang="scss">
  .services {
    .industries-section {
      padding-bottom: var(--section-pd-y-small);
    }
  }
</style>