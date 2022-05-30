<template>
  <div class="event-mockups">
    <div class="container">
      <div class="event-mockups__list">
        <div
          v-for="(item, idx) in items"
          :class="`event-mockups-item event-mockups-item--${idx + 1}`"
        >
          <div class="event-mockups-item__img">
            <img
              class="event-mockups-item__photo"
              :src="`/images/site/portfolio/event/mockups/mockup-${idx + 1}.png`"
              alt=""
            />

            <img
              class="event-mockups-item__icon"
              :src="`/images/site/portfolio/event/mockups/icon-${idx + 1}.svg`"
              alt=""
            >
          </div>

          <div class="event-mockups-item__text-content">
            <div class="event-mockups-item__title text-lg">
            <span class="event-mockups-item__number">
              0{{ idx + 1 }}.
            </span>
              {{ item.title }}
            </div>

            <div class="event-mockups-item__desc">
              {{ item.desc }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          title: 'event calendar',
          desc: 'Once the invitation for an event is accepted, the event gets automatically added to the personal calendar with the corresponding reminder. '
        },
        {
          title: 'tickets ordering',
          desc: 'The app allows a person to order and purchase tickets for the chosen event within a specified location.'
        },
        {
          title: 'social sharing',
          desc: 'People can follow friends and check whether they attend some specific event or have plans for another occasion.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.event-mockups {
  margin-bottom: var(--section-pd-y-big);

  &__list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: calc(var(--space-unit) * 10);

    @media (max-width: 991px) {
      grid-template-columns: 1fr;
      grid-row-gap: 4rem;
      justify-items: center;
    }
  }

  &-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: white;
    text-align: center;

    @media (max-width: 991px) {
      flex-direction: column-reverse;
      max-width: 500px;
    }

    &__img {
      position: relative;

      @media (max-width: 991px) {
        max-width: 250px;
      }
    }

    &__photo {
      width: 100%;
    }

    &__icon {
      position: absolute;
      z-index: -1;
    }

    &__title {
      font-weight: 700;
      text-transform: capitalize;
      margin-bottom: calc(var(--space-unit) * 2.5);
    }

    &__number {
      font-size: calc(var(--space-unit) * 4.8);
      margin-right: -.1em;
    }

    &__desc {
      letter-spacing: .06em;
      color: var(--case-color-secondary);
      line-height: 160%;
    }

    &--1 {
      .event-mockups-item {
        &__icon {
          width: 50%;
          top: 50%;
          left: 0;
          transform: translate(-10%, -50%);

          @media (max-width: 991px) {
            top: 0;
            right: 0;
            left: auto;
            transform: translate(12%, -2%) rotate(54deg);
          }
        }

        &__img {
          @media (max-width: 991px) {
            margin-top: 10%;
          }
        }
      }
    }

    &--2 {
      @media (max-width: 991px) {
        margin-bottom: 5%;
      }

      .event-mockups-item {
        &__icon {
          width: 130%;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -20%);

          @media (max-width: 991px) {
            width: 100%;
            top: 60%;
            transform: translate(-75%, -20%);
          }
        }
      }
    }

    &--3 {
      .event-mockups-item {
        &__icon {
          width: 40%;
          top: 0;
          right: 0;
          transform: translate(30%, -30%);

          @media (max-width: 991px) {
            width: 50%;
            top: auto;
            bottom: 0;
            transform: translate(30%, 10%);
          }
        }
      }
    }

  }
}
</style>
