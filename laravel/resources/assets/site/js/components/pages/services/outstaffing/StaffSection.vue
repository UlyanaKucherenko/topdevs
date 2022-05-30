<template>
  <div class="staff-section">
    <div class="container">
      <SectionHeader
        :title="['Staff Augmentation', 'Process Flow']"
        :desc="['Have no trouble, only the people you', 'need to focus on your further business', 'development. ']"
        icon="/images/site/icons/abstract/header-11.svg"
      />
      
      <ItemsList
        v-if="windowWidth > 1225"
        class="staff-section__circles"
        :items="items"
        :columns="3"
        cardType="circle"
        :cardOptions="{numbered: false}"
      />

      <ItemsList
        v-else
        class="staff-section__items"
        :items="items"
        :columns="{
          600: 1,
          default: 3
        }"
        cardType="first"
        :cardOptions="{imgWidth: 'fit'}"
      />
    </div>
  </div>
</template>

<script>
import ItemsList from '@/js/components/global/ItemsList'
import SectionHeader from '@/js/components/global/SectionHeader'

export default {
  components: {
    ItemsList, SectionHeader
  },

  data() {
    return {
      items: [
        {
          imgURL: '/images/site/services/outstaffing/staff/1.svg',
          title: 'Candidate Profile',
          desc: 'We create an ideal candidate profile based on your expectations, project\'s requirements, desired competencies.'
        },
        {
          imgURL: '/images/site/services/outstaffing/staff/2.svg',
          title: 'Continuous Support',
          desc: 'We manage a well-balanced onboarding and ongoing work process of your augmented team to ensure smooth cooperation.'
        },
        {
          imgURL: '/images/site/services/outstaffing/staff/3.svg',
          title: 'Recruitment Process',
          desc: 'We conduct interviews with the best-fit candidates until selecting the perfect person completely approved by you.'
        }
      ],
    }
  },
}
</script>

<style lang="scss">
  .outstaffing {
    .staff-section {
      &__circles {
        .items-list {
          &__item {
            width: 35rem;
          }
        }
      }

      &__items {
        .items-list {
          &__item {
            width: 30%;

            @media (max-width: 600px) {
              width: 90%;
            }
          }
        }
      }
    }
  }
</style>