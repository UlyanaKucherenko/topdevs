<template>
  <section class="mission-section">
    <div class="container">
      <SectionHeader
        title="Mission & Vision"
        :desc="['We\'ve gone a long path and continue empowering', 'startups and businesses with innovative technologies.']"
        icon="/images/site/icons/abstract/header-8.svg"
        mode="center"
      />

      <ItemsList
        class="mission-section__items"
        :items="missionItems"
        :columns="{
          992: 2,
          700: 1,
          default: 2
        }"
        cardType="row-full"
        :cardOptions="{
          class: 'card-filled'
        }"
      />
    </div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  data() {
    return {
      missionItems: [
        {
          title: 'Mission',
          desc: 'To simplify the life of our business partners, taking full responsibility for the development, configuration, and integration of modern web and mobile solutions.',
          imgURL: '/images/site/about-us/mission/1.svg'
        },
        {
          title: 'Vision',
          desc: 'To expand business and startup opportunities via innovative software, mobile applications and web services delivered by our tech company.',
          imgURL: '/images/site/about-us/mission/2.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .about-us {
    .mission-section {
      padding: var(--section-pd-y-big) 0;

      &__items {
        .row-full-card {
          align-items: flex-start;

          &__icon {
            margin-right: calc(var(--space-unit) * 3.5);
          }
        }

        .items-list {
          &__row {
            justify-content: space-evenly;
          }
          
          &__item {
            width: 42%;

            @media (max-width: 700px) {
              width: 90%;
            }
          }
        }
      }
    }
  }
</style>