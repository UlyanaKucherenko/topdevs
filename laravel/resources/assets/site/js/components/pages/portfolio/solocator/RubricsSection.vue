<template>
  <div class="rubrics-section" id="rubrics-section">
    <div class="container">
      <div class="rubrics-section__rubrics-list">
        <PortfolioBlockBullet
          class="rubrics-section__rubrics-item"
          v-for="(rubricItem, index) in items" :key="index"
          titleColor="#0A0E07"
          :titleText="rubricItem.title.text"
          :titlePreIcon="rubricItem.title.preIcon"
          :items="rubricItem.items"
          v-scroll-reveal="{delay: index * 100}"
        />
      </div>
    </div>

    <div class="rubrics-section__figures">
      <div class="rubrics-section__figures-square" style="border: 2px solid #93EB4B"></div>
      <div class="rubrics-section__figures-square" style="border: 2px solid #FF8351"></div>
      <div class="rubrics-section__figures-square" style="border: 2px solid #0A0E07"></div>
      <div class="rubrics-section__figures-line"></div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'

export default {
  components: {PortfolioBlockBullet},

  data() {
    return {
      items: [
        {
          items: ['Australia'],
          title: {
            text: 'Country',
            preIcon: '/images/site/portfolio/solocator/rubrics/pre-1.svg'
          }
        },
        {
          items: ['2012 – Present'],
          title: {
            text: 'Duration',
            preIcon: '/images/site/portfolio/solocator/rubrics/pre-2.svg'
          }
        },
        {
          items: ['Logistics & Tracking', 'Real Estate'],
          title: {
            text: 'Industry',
            preIcon: '/images/site/portfolio/solocator/rubrics/pre-1.svg'
          }
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .solocator .rubrics-section {
    position: relative;
    padding: calc(var(--space-unit) * 20) 0;
    padding-top: calc(var(--space-unit) * 20);

    @media (max-width: 410px) {
      padding-bottom: 10rem;
    }

    &__rubrics {
      &-list {
        display: grid;
        grid-template-columns: repeat(3, max-content);
        grid-column-gap: 11%;
        grid-row-gap: calc(var(--space-unit) * 10);

        @media (max-width: 991px) {
          justify-content: space-between;
          grid-column-gap: 0%;
        }

        @media (max-width: 767px) {
          grid-template-columns: repeat(2, max-content);
          justify-content: flex-start;
          grid-column-gap: 15%;
          margin-left: calc(var(--space-unit) * 3);
        }

        @media (max-width: 410px) {
          grid-template-columns: 1fr;
        }
      }

      &-item {
        @media (max-width: 500px) {
        }
      }
    }

    &__square {
      &-list {
        --color: green;
        --padding-left: 1.5rem;
        padding-left: var(--padding-left);
      }

      &-title {
        position: relative;
        padding: .9em 0 .35em 0;
        z-index: 0;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 2.5rem;

        &::before {
          content: '';
          position: absolute;
          left: calc(var(--padding-left) * -1);
          top: 0;
          z-index: -1;
          height: 2.25em;
          width: 2.25em;
          background: var(--color);
        }
      }

      &-item {
        position: relative;
        margin-bottom: 1rem;

        &::before {
          content: '';
          position: absolute;
          left: calc(var(--padding-left) * -1);
          top: 50%;
          transform: translateY(-50%);
          width: .5rem;
          height: .5rem;
          background: var(--color);
        }

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__figures {
      display: flex;
      position: absolute;
      right: 0;
      bottom: calc(var(--space-unit) * 20);
      transform: translateY(calc(100% + 2.5rem));

      &-square {
        width: calc(var(--space-unit) * 4.3);
        height: calc(var(--space-unit) * 4.3);
        margin-right: calc(var(--space-unit) * 3.5);
      }

      &-line {
        margin-left: calc(var(--space-unit) * 3);
        width: 23.75vw;
        height: 2px;
        background: #768966;
      }
    }
  }
</style>