<template>
  <div class="rubrics-section">
    <div class="container">
      <div class="rubrics-section__rubrics-list">
        <PortfolioBlockGist
          class="rubrics-section__rubrics-item"
          v-for="(item, index) in items" :key="index"
          :info="item"
          :hasWidthBreakpoint="767"
        />
        <!-- <PortfolioBlockBullet -->
          <!-- class="rubrics-section__rubrics-item" -->
          <!-- v-for="(rubricItem, index) in items" :key="index" -->
          <!-- titleColor="#951865" -->
          <!-- listPreType="circle" -->
          <!-- :titleText="rubricItem.title" -->
          <!-- :items="rubricItem.items" -->
          <!-- v-scroll-reveal="{delay: index * 100}" -->
        <!-- /> -->
        <img src="/images/site/portfolio/beauty/rubrics/figures.svg" alt="" class="rubrics-section__figures">
      </div>
    </div>

  </div>
</template>

<script>
import PortfolioBlockBullet from '../global/PortfolioBlockBullet'
import PortfolioBlockGist from '../global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockBullet, PortfolioBlockGist},

  data() {
    return {
      items: [
        {
          iconsColor: '#951865',
          titleColor: '#951865',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS, Android, Web',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: '#951865',
          titleColor: '#951865',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2019 - Present',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Education & E-Learning, <nobr>Media & Entertainment</nobr>',
              iconDefault: 'case'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .beauty .rubrics-section {
    position: relative;
    padding: calc(var(--space-unit) * 20) 0;
    padding-top: calc(var(--space-unit) * 20);

    @media (max-width: 800px) {
      padding-bottom: calc(var(--space-unit) * 15);
    }

    &__rubrics {
      &-list {
        position: relative;
        display: grid;
        grid-template-columns: repeat(2, max-content);
        column-gap: 11%;
        row-gap: 1rem;

        @media (max-width: 1350px) and (min-width: 1200px) {
          grid-template-columns: 1fr;
        }

        @media (max-width: 1080px) {
          grid-template-columns: 1fr;
        }
      }

      &-item {
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
      position: absolute;
      right: 0;
      bottom: -12rem;
      width: 11.5%;

      @media (max-width: 991px) {
        right: 10%;
        bottom: -30%;
      }

      @media (max-width: 800px) {
        display: none;
      }
    }
  }
</style>