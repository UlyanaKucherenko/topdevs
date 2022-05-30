<template>
  <section class="solving-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        icon="/images/site/icons/abstract/header-4.svg"
      />

      <SelectList></SelectList>
    </div>

    <img src="/images/site/icons/abstract/5.svg" alt="" class="solving-section__cursor-follow" v-cursor-follow="{multiplier: .1}">
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'
import MoreCard from '@/js/components/global/cards/MoreCard'
import SelectList from '@/js/components/global/SelectList'

export default {
  components: {SectionHeader, ItemsList, MoreCard, SelectList},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
  },
}
</script>

<style lang="scss">
  .home {
    .solving-section {
      position: relative;
      padding-bottom: var(--section-pd-y-big);
      padding-top: var(--section-pd-y-small);
      background: var(--grey-main);
      // z-index: 1; TO REMOVE

      &__cursor-follow {
        position: absolute;
        right: 10%;
        bottom: 0;

        @media (max-width: 767px) {
          display: none;
        }
      }
    }
  }
</style>
