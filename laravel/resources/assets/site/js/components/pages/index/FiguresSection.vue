<template>
  <section class="figures-section">
    <div class="container figures-section__container">
      <SectionHeader
        title="Experience In Figures"
        :desc="['We delight our customers with speed, innovation, and', 'quality being proven within years of collaboration on', 'multiple use cases.']"
        mode="center"
        icon="/images/site/icons/abstract/header-1.svg"
      />

      <ItemsList
        class="figures-section__figures"
        :items="items"
        :columns="{
          1200: 3,
          650: 2,
          400: 1,
          default: 6
        }"
      >
        <template v-slot="slotProps">
          <div class="figure-card">
            <div class="figure-card__number"> {{ slotProps.item.number }}+ </div>
            <div class="figure-card__title" v-html="slotProps.item.title"/>
          </div>
        </template>
      </ItemsList>

      <a class="btn-default btn-default--home-page" href="/company">more about us</a>
    </div>

    <div class="figures-section__circle ratio"></div>
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ItemsList from '@/js/components/global/ItemsList'

export default {
  components: {SectionHeader, ItemsList},

  data() {
    return {
      items: [
        {
          number: 11,
          title: 'Years of proven experience'
        },
        {
          number: 200,
          title: 'Successful projects delivered'
        },
        {
          number: 8,
          title: 'Years in longest-running project'
        },
        {
          number: 11,
          title: 'Years of iOS development expertise'
        },
        {
          number: 8,
          title: 'Industries efficiently covered'
        },
        {
          number: 6,
          title: 'Developed countries serviced'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .figures-section {
    padding: var(--section-pd-y-small) 0;
    position: relative;
    background: linear-gradient(133.98deg, #F8F8F8 0.2%, #F8F8F8 70.07%);
    box-shadow: 0px 15px 30px rgba(124, 124, 124, 0.1), -15px -15px 40px rgba(255, 255, 255, 0.9);
    overflow: hidden;

    &__container {
      position: relative;
      z-index: 1;
    }

    .items-list {
      &__item {
        max-width: 18rem;

        @media (max-width: 1400px) {
          max-width: 16rem;
        }
      }

      &__row {
        justify-content: space-evenly;
      }
    }

    &__figures {
      margin-bottom: calc(var(--space-unit) * 8);
    }

    &__circle {
      position: absolute;
      right: 0;
      bottom: 0;
      width: 50%;
      border: 11.5rem solid #DDDDDD;
      border-radius: 50%;
      transform: translate(40%, 35%);

      @media (max-width: 767px) {
        display: none;
      }
    }
  }

  .figure-card {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;

    &__number {
      position: relative;
      font-weight: 600;
      font-size: 5.4rem;
      margin-bottom: 1.9rem;
      color: var(--blue-main);
      text-shadow: 2px 2px 3px rgba(67, 67, 67, 0.25), -2px -2px 3px rgba(255, 255, 255, 0.25);

      // &:before {
      //   content: '';
      //   position: absolute;
      //   left: -.3em;
      //   top: 50%;
      //   transform: translateY(-50%);
      //   width: .15em;
      //   height: .15em;
      //   border-radius: 50%;
      //   background: var(--black-dark);
      //   box-shadow: 1px 1px 2px rgba(67, 67, 67, 0.25), -1px -1px 2px rgba(255, 255, 255, 0.25);
      // }
    }

    &__title {
      line-height: 130%;
      letter-spacing: 0.01em;
      color: var(--black-main);
    }
  }
</style>
