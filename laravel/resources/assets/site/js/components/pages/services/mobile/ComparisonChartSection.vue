<template>
  <section class="comparison-chart-section">
    <div class="comparison-chart-section__container container">

      <ServicesSectionHeader
          class="list-section__header"
          title="Native vs Cross Platform: Common Sense"
          :desc="[`The`,`comparison chart`,`between cross-platform and native app development approaches`]"
          mode="left"
          :options="{
            color:'inverse'
           }"
      />

      <div class="comparison-chart-section__main">

      <ComparisonTable />
        <TableAnimation  v-scroll-reveal="{delay: 100}" />
      </div>
    </div>
  </section>
</template>

<script>

import ServicesSectionHeader from "./global/ServicesSectionHeader";
import ComparisonTable from "./ComparisonTable";
import TableAnimation from "./TableAnimation";

export default {
  name: 'ComparisonChartSection',
  components: {
    TableAnimation,
    ComparisonTable,
    ServicesSectionHeader

  },

}
</script>

<style lang="scss">
.comparison-chart-section {

  margin: var(--section-pd-y-small) 0 var(--section-pd-y-big);
  padding: var(--section-pd-y-big) 0;
  background: var(--color-bg-section-dark);
  color: white;


  &__container {
    position: relative;
  }


  &__main {
    border-top: 1px solid var(--color-border);
    padding-top: calc(var(--space-unit) * 7.4);

    &-title {
      margin-bottom: var(--space-unit);
      font-family: var(--mulish);
      font-weight: 800;
    }

  }


}
</style>
