<template>
  <div class="event-gist">
    <div class="container">
      <div class="event-gist__list">
        <PortfolioBlockGist
          class="event-gist__item"
          :classes="{name: 'event-gist__item-name'}"
          v-for="(item, index) in items" :key="index"
          :info="item"
        />
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'

export default {
  components: {PortfolioBlockGist},

  data() {
    return {
      items: [
        {
          titleColor: 'var(--case-color-white)',
          rubricColor: 'var(--case-color-secondary)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS',
            }
          ]
        },
        {
          titleColor: 'var(--case-color-white)',
          rubricColor: 'var(--case-color-secondary)',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2020 - Present',
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Media & Entertainment, Logistics & Tracking',
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.event-gist {
  margin-bottom: 13rem;

  @media (min-width: 1401px) {
    display: none;
  }

  @media (max-width: 1199px) {
    margin-bottom: 10rem;
  }

  @media (max-width: 575px) {
    margin-bottom: 7rem;
  }

  &__list {
    position: relative;
    display: flex;
    // justify-content: space-between;
    padding-left: 6rem;

    &::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      width: 5px;
      height: 100%;
      background: var(--case-color-primary);

      @media (max-width: 640px) {
        display: none;
      }
    }

    @media (max-width: 991px) {
      flex-direction: column;
    }

    @media (max-width: 640px) {
      padding-left: 0;
    }
  }

  &__item {
    @media (min-width: 992px) {
      margin-right: 6rem;

      &:last-child {
        margin-right: 0;
      }
    }

    @media (max-width: 991px) {
      margin-bottom: 1rem;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &-name {
      text-transform: uppercase;
    }
  }
}
</style>
