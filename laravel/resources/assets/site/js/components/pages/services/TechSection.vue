<template>
  <section class="tech-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        :icon="headerIcon"
      >
      </SectionHeader>

      <TechTable
        class="tech-section__table"
        :blocks="blocks"
        v-if="type == 'single'"
      />

      <div 
        class="tech-section__tables"
        v-if="type == 'divided'"
      >
        <DividedTechTable
          v-for="(item, index) in blocks" 
          :key="index"
          v-bind="item"
        />
      </div>
    </div>

    <slot name="cursor-follow"/>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import TechTable from '@/js/components/global/tables/TechTable'
import DividedTechTable from '@/js/components/global/tables/DividedTechTable'

export default {
  components: {SectionHeader, TechTable, DividedTechTable},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    headerIcon: String,
    blocks: Array,
    type: {
      type: String,
      default: 'single'
    }
  },

  data() {
    return {

    }
  },
}
</script>

<style lang="scss">
  .tech-section {
    position: relative;
    padding: var(--section-pd-y-small) 0;
    background: linear-gradient(115.41deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.1), -1.5rem -1.5rem 4rem rgba(255, 255, 255, 0.9);

    &__tables {
      display: flex;
      justify-content: space-evenly;
      flex-wrap: wrap;
    }

    &__table {
      padding: 0 calc(var(--space-unit) * 5);
      border-radius: 3rem;
    }
  }
</style>
