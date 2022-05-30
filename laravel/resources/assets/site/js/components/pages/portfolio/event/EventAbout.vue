<template>
  <section class="event-about" v-scroll-reveal="{distance: 0}">
    <div class="container">
      <div class="event-about__content">
        <div class="event-about__info">
          <div class="event-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
            Event App
          </div>
          <h1 class="event-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
            Delivering an Event Invitation App for US Community
          </h1>
          <div class="event-about__info-desc portfolio-desc">
            How TopDevs built a social ecosystem for events management - from creation to scheduling and purchasing tickets.
          </div>
        </div>

        <div class="event-about__gist-list">
          <div class="event-about__gist-list-inner">
             <PortfolioBlockGist
              class="event-about__gist-item"
              :classes="{name: 'event-about__gist-item-name'}"
              v-for="(item, index) in gistItems" :key="index"
              :info="item"
            />
          </div>
        </div>

        <div class="event-about__img">
          <picture class="event-about__img-inner">
            <!-- <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/mockup-991.png"> -->
            <img src="/images/site/portfolio/event/about/mockup.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioBlockGist from '@/js/components/pages/portfolio/global/PortfolioBlockGist'
import EventDivider from './global/EventDivider'

export default {
  components: {PortfolioBlockGist, EventDivider},

  data() {
    return {
      gistItems: [
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
  .event-about {
    height: 100vh;
    overflow: hidden;
    position: relative;
    min-height: 80rem;
    max-height: 110rem;

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
    }

    @media (max-width: 575px) {
      margin-bottom: 3.5rem;
    }

    &__content {
      @media (min-width: 992px) {
        padding-top: var(--header-height);
      }

      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 100%;
      position: relative;

      @media (max-width: 991px) {
        flex-direction: column;
        align-items: center;
      }
    }

    &__info {
      width: 45%;
      margin-bottom: 9rem;

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 45rem;
        text-align: center;
        margin-bottom: 4rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3rem;
      }

      &-title {
        color: #FC8B6B;
        text-transform: capitalize;
        font-weight: 700;
      }

      &-subtitle {
        color: white;
      }

      &-desc {
        color: var(--case-color-secondary);
      }
    }

    &__gist {
      &-list {
        position: relative;

        &-inner {
          @media (max-width: 1400px) {
            display: none;
          }
        }
      }

      &-item {
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }

        &-name {
          text-transform: uppercase;
        }
      }
    }

    &__img {
      position: absolute;
      width: 50%;
      top: 50%;
      right: 0;
      transform: translateY(-50%);

      img, source {
        width: 100%;
      }

      @media (max-width: 991px) {
        position: static;
        transform: none;
        width: 100%;
        max-width: 47rem;
        pointer-events: none;
      }
    }
  }
</style>
