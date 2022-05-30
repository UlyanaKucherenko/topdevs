<template>
  <div class="event-solutions">
    <div class="container">
      <div class="event-solutions__content">
        <div class="event-solutions__text-content">
          <EventHeader
            class="event-solutions__header"
            asideDescColor="white"
            :baseOptions="{
            titleText: 'Solutions',
            descText: 'The team began from the project requirements gathering and app architecture evaluation. We\'ve offered our client a simple way to build a user interface via the SwiftUI framework. It guarantees smooth interface interaction and stable app operating. With this technology, our team was able to provide a truly native and intuitive experience for users.'
          }"
          />
          <span class="event-solutions__text-secondary portfolio-desc">
            In close collaboration with the client, we've decided to develop an MVP in the first place. It allows the client to gather initial feedback from customers and validate an idea on the market. As soon as we get positive results, the next stage is to evaluate the outcome, make up further decisions, and continue the mobile app development until the fully-fledged product gets ready.
          </span>
        </div>

        <img
          class="event-solutions__mockup"
          src="/images/site/portfolio/event/solutions/mockup.png"
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
.event-solutions {
  position: relative;
  margin-bottom: 18%;

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
    margin-left: auto;

    @media (max-width: 991px) {
      width: unset;
      margin-left: 0;
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
      left: -10%;
      top: 50%;
      transform: translateY(-50%);
      width: 60%;
      height: auto;
    }

    @media (max-width: 991px) {
      max-width: 650px;
      width: 100%;
      transform: translateX(-10%);
    }
  }
}
</style>
