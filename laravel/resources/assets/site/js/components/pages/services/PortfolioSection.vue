<template>
  <section class="portfolio-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        icon="/images/site/services/portfolio/header-icon.svg"
      />
      <ItemsList
        :items="items"
        :columns="{
          992: 2,
          700: 1,
          default: 3
        }"
        cardType="portfolio"
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
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    items: {
      type: Array,
      default: () => [
        {
          imgURL: '/images/site/services/outsourcing/portfolio/1.png',
          title: 'Slogger',
          desc: 'JavaScript, Jquery, PHP',
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/2.png',
          title: 'Helpy',
          desc: 'JavaScript, Jquery, PHP'
        },
        {
          imgURL: '/images/site/services/outsourcing/portfolio/3.png',
          title: 'Tmm',
          desc: 'JavaScript, Jquery, PHP'
        }
      ],
    }
  },
}
</script>

<style lang="scss">
  .portfolio-section {
    position: relative;
    padding-bottom: var(--section-pd-y-big);

    .items-list {
      &__row {
        justify-content: space-between;
      }

      &__item {
        width: 29%;
      }

      @media (max-width: 991px) {
        &__row {
          justify-content: space-around;
        }

        &__item {
          width: 40%;
        }
      }

      @media (max-width: 700px) {
        &__item {
          width: 90%;
          max-width: 45rem;
        }
      }
    }
  }
</style>
