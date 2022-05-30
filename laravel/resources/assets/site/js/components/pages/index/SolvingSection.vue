<template>
  <section class="solving-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
      />

      <ItemsList
        class="solving-section__items"
        :items="items"
        :columns="4"
      >
        <template v-slot="slotProps">
          <MoreCard :item="slotProps.item" bottomSide="left"/>
        </template>
      </ItemsList>

      <div class="btn-default btn-default--home-page">discover more</div>
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'
import MoreCard from '@/js/components/global/cards/MoreCard'

export default {
  components: {SectionHeader, ItemsList, MoreCard},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    items: Array
  },
}
</script>

<style lang="scss">
  // .home {
  //   .solving-section {
  //     padding-bottom: var(--section-pd-y-big);

  //     .items-list {
  //       &__item {
  //         width: 18.5%;

  //         .first-card__img {
  //           margin-bottom: 5rem;
  //         }
  //       }
  //     }

  //     &__items {
  //       // margin-bottom: 12rem;
  //     }
  //   }
  // }
</style>
