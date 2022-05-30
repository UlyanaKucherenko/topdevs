<template>
  <div class="event-challenges">
    <div class="container">
      <div class="event-challenges__content">
        <div class="event-challenges__text-content">
          <EventHeader
            class="event-challenges__header"
            innerMaxWidth="81rem"
            asideDescColor="white"
            :baseOptions="{
            titleText: 'Challenges',
            descText: 'The client had an idea to create a social network for events invitations. The main concern was the scattered information about specific occasions within a community that prompts people to use different services in order to visit an activity.'
          }"
          />
          <span class="event-challenges__text-secondary portfolio-desc">
            So the main responsibility we've taken is to create an application for events management that will have all the important features in one place. The major aspect was that it should look good and work smoothly for app users. So at some point, there was a decision to implement the application interface with an innovative SwiftUI technology.
          </span>
        </div>

        <img
          class="event-challenges__mockup"
          src="/images/site/portfolio/event/challenges/mockup.png"
        />

      </div>
    </div>
  </div>
</template>

<script>
import EventHeader from '@/js/components/pages/portfolio/event/global/EventHeader'

export default {
  components: {EventHeader}
}
</script>

<style lang="scss">
.event-challenges {
  position: relative;
  margin-bottom: 15%;

  @media (max-width: 991px) {
    margin-bottom: var(--section-pd-y-big);
  }

  &__content {
    position: relative;

    @media (max-width: 991px) {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
  }

  &__text-content {
    width: 45%;

    @media (max-width: 991px) {
      width: unset;
      margin-bottom: 3rem;
    }
  }

  &__header {
    margin-bottom: 3rem;
  }

  &__text-secondary {
    color: var(--case-color-secondary);

    @media (max-width: 991px) {
      display: inline-block;
      max-width: 570px;
    }
  }

  &__mockup {
    @media (min-width: 992px) {
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      width: 50%;
    }

    @media (max-width: 991px) {
      max-width: 650px;
      width: 100%;
    }
  }
}
</style>
