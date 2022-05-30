<template>
  <section class="why-native-section">
    <div class="why-native-section__container container">

      <ServicesSectionHeader
          class="list-section__header"
          title="Why Native Mobile Development"
          :desc="['Learn from the best how', 'native development', 'can provide unique and outstanding business value.']"
          mode="left"
          :options="{
            color:'inverse'
           }"
      />

      <div class="why-native-section__main">
        <h3 class="why-native-section__main-title text-md">
          {{ title }}
        </h3>

        <p class="why-native-section__main-desc text-md">
          {{ desc }}
        </p>
      </div>
    </div>
    <ApplicationsSlider
        :items="applicationsItems"
        :sliderOptions="{loop: false}"
        :slidesCount="{
          1200:6,
          992: 5,
          650: 3,
          default: 9}"

    />
  </section>
</template>

<script>

import ServicesSectionHeader from "./global/ServicesSectionHeader";
import ApplicationsSlider from "./sliders/ApplicationsSlider";

export default {
  name: 'WhyNativeSection',
  components: {
    ApplicationsSlider,
    ServicesSectionHeader
  },
  data() {
    return {
      title: 'They Choose Native Apps',
      desc: 'The most prominent examples of native applications',


      applicationsItems: [
        {
          imgURL: '/images/site/services/mobile/applications/telegram.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/google-maps.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/facebook-messenger.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/twitter.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/whats-app.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/spotify.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/linkedin.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/shazam.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/pinterest.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/artsy.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/waze.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/tesla.svg',
        },
        {
          imgURL: '/images/site/services/mobile/applications/pokemon-go.svg',
        },
      ],
    }
  },
}
</script>

<style lang="scss">
.why-native-section {
  position: relative;
  margin: var(--section-pd-y-small) 0 var(--section-pd-y-big);
  padding: var(--section-pd-y-big) 0;
  background: var(--color-bg-section-dark);
  color: white;

  &::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    border: calc(var(--space-unit) * 10) solid transparent;
    border-left: calc(var(--space-unit) * 20) solid white;
    border-top: 0 solid white;
  }

  &__container {
    position: relative;
  }


  &__main {
    border-top: 1px solid var(--color-border);
    padding-top: calc(var(--space-unit) * 7.4);

    &-title {
      margin-bottom: var(--space-unit);
      font-family: var(--mulish);
      font-weight: 800;
    }

  }
}
</style>
