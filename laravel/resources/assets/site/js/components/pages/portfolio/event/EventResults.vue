<template>
  <div class="events-result">
    <div class="container">
      <div class="events-result__content">
        <div class="events-result__text-content">
          <EventHeader
            class="event-solutions__header"
            :baseOptions="{
            titleText: 'Results',
            descText: [
              'The TopDevs team has helped our client to evaluate future product prospects and choose the best technology for the interface development of the exceptional user-friendliness. The provided MVP development helps to test the idea value for the market. The app is aimed at connecting the US community with easy-to-schedule events.',
              'Our dedicated team has laid the foundations of future product success by not only performing the app development services but also enriching the solution with proper tech expertise.'
            ]
          }"
          />

          <div class="events-result__benefits">
            <div
              class="events-result-benefit"
              v-for="item in items"
            >
              <div class="events-result-benefit__title text-md text-bold">{{ item.title }}</div>
              <div class="events-result-benefit__desc">{{ item.desc }}</div>
            </div>
          </div>
        </div>

        <img
          class="events-result__mockup"
          src="/images/site/portfolio/event/results/mockup.png" alt=""
        >
      </div>
    </div>
  </div>
</template>

<script>
import EventHeader from '@/js/components/pages/portfolio/event/global/EventHeader'

export default {
  components: {EventHeader},
  data() {
    return {
      items: [
        {
          title: 'Intuitive Interface',
          desc: 'People can follow friends and check whether they attend some specific event or have plans for another occasion.'
        },
        {
          title: 'Minimum Viable Product',
          desc: 'The app allows a person to order and purchase tickets for the chosen event within a specified location.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.events-result {
  margin-bottom: var(--section-pd-y-small);

  &__content {
    display: grid;
    grid-template-columns: 50fr 50fr;
    grid-column-gap: 5%;
    align-items: center;

    @media (max-width: 991px) {
      grid-template-columns: 1fr;
      grid-row-gap: 3rem;
      justify-items: center;
    }
  }

  &__benefits {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: calc(var(--space-unit) * 8);

    @media (max-width: 575px) {
      grid-template-columns: 1fr;
      grid-row-gap: 2.5rem;
    }
  }

  &-benefit {
    &__title {
      color: white;
      margin-bottom: calc(var(--space-unit) * 2);
    }

    &__desc {
      line-height: 160%;
      letter-spacing: 0.06em;
      color: var(--case-color-secondary);
    }
  }

  &__mockup {
    max-width: 100%;
  }
}
</style>
