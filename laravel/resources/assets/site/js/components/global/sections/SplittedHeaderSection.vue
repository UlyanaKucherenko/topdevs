<template>
  <section class="splitted-header-section">
    <div class="container splitted-header-section__container">
      <SectionHeader
        class="splitted-header-section__header"
        :title="headerTitle"
        :desc="headerDesc"
        :icon="headerIcon"
        mode="left"
      />

      <ItemsList
        class="splitted-header-section__list"
        :items="items"
        :columns="{...listOptions.columns}"
        cardType="row-full"
      />
    </div>

    <slot name="cursor-follow"/>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  props: {
    headerTitle: [String, Array],
    headerDesc: [String, Array],
    headerIcon: String,
    items: Array,
    listOptions: {
      type: Object,
      default: () => ({})
    }
  },
}
</script>

<style lang="scss">
  .splitted-header-section {
    position: relative;
    z-index: 0;
    padding: var(--section-pd-y-small) 0;
    background: linear-gradient(140.24deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);

    &__container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    &__header {
      width: 50%;

      @media (min-width: 1151px) {
        margin-bottom: 0;
      }
    }

    &__list {
      width: 43%;
      
      .items-list__item {
        width: 100%;
      }

      .row-full-card__title {
        font-weight: 600;
      }
    }

    @media (max-width: 1150px) {
      &__container {
        flex-direction: column;
      }

      &__header {
        width: 100%;
      }

      &__list {
        width: 90%;
      }
    }
  }
</style>