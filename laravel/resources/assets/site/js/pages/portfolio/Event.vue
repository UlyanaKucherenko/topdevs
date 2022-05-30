<template>
  <main class="event">
    <EventAbout/>
    <EventGist/>
    <EventSummary/>
    <EventChallenges/>
    <EventSolutions/>
    <EventMockups/>
    <EventResults/>
  </main>
</template>

<script>
import EventAbout from '@/js/components/pages/portfolio/event/EventAbout'
import EventGist from '@/js/components/pages/portfolio/event/EventGist'
import EventSummary from '@/js/components/pages/portfolio/event/EventSummary'
import EventChallenges from '@/js/components/pages/portfolio/event/EventChallenges'
import EventSolutions from '@/js/components/pages/portfolio/event/EventSolutions'
import EventMockups from '@/js/components/pages/portfolio/event/EventMockups'
import EventResults from '@/js/components/pages/portfolio/event/EventResults'

export default {
  components: {EventAbout, EventGist, EventSummary, EventChallenges, EventSolutions, EventResults, EventMockups}
}
</script>

<style lang="scss">
.event {
  --case-color-primary: #FFFFFF;
  --case-color-secondary: #A8A8A8;
  --case-color-white: #FFFFFF;
  --case-color-black-bold: #101034;
  --case-color-black-default: #2C2C50;
  --challenges-offset-bottom: 15rem;
  --portfolio-header__title-margin: 4rem;

  color: var(--case-color-black-default);
  background: #222020;

  @media (max-width: 1400px) {
    --challenges-offset-bottom: 13rem;
  }

  @media (max-width: 1199px) {
    --portfolio-header__title-margin: 3.5rem;
    --challenges-offset-bottom: 11rem;
  }

  @media (max-width: 991px) {
    --challenges-offset-bottom: 10rem;
  }

  @media (max-width: 575px) {
    --portfolio-header__title-margin: 2.5rem;
    --challenges-offset-bottom: 5rem;
  }
}
</style>
