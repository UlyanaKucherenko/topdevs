<template>
  <section class="functionality-section">
    <div class="functionality-section__container container">
      <img
          class="functionality-section__figures"
          src="/images/site/services/mobile/functionality/1.svg" alt=""
          v-cursor-follow="{multiplier: .4, transform: {x: -100, y: -50}}"
      >
      <ServicesSectionHeader
          class="list-section__header"
          title="Mobile Device-Specific Functionality"
          :desc="['',`Native development`,`takes the most out of direct access to the device's hardware`]"
          mode="left"
          :revealIsDisabled="true"
      />

      <div class="functionality-section__cards">
        <div
            v-for="(card, idx) in cards"
            class="functionality-section-card"
        >
          <div class="functionality-section-card__header">
            <img
                src="/images/site/services/mobile/functionality/icon-dots.svg"
                class="functionality-section-card__icon"
            />
            <span class="functionality-section-card__title text-lg">
                  {{ card.title }}
                </span>
          </div>

          <p class="functionality-section-card__desc">
            {{ card.desc }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>

import ServicesSectionHeader from "./global/ServicesSectionHeader";

export default {
  name: 'FunctionalitySection',
  components: {
    ServicesSectionHeader
  },
  data() {
    return {
      cards: [
        {
          title: 'Location services',
          desc: 'Easily identified and displayed geolocation of the device along with associated data.'
        },
        {
          title: 'Push notifications',
          desc: 'Instant notification about the events occurring in the background or when the app is yet to run.'
        },
        {
          title: 'Multimedia tools',
          desc: 'Much faster processing of audio and video recording along with taking pictures via camera.'
        },
        {
          title: 'Barcode scanning',
          desc: 'Convenient scanning and decoding of barcodes to give users fast access to the hidden data.'
        },
        {
          title: 'Contacts data',
          desc: 'Full access to smartphone\'s contacts allowing users to read and modify data right from the app.'
        },
        {
          title: 'Calendar',
          desc: 'Events manipulation instantly from the app allowing users to add reminders, events, and participants.'
        },
        {
          title: 'Telephony',
          desc: 'Direct dial with a contact number providing access to call history browsing and filtering.'
        },
        {
          title: 'SMS / MMS messages',
          desc: 'Handling incoming and outgoing text messages with access to its history per contact.'
        },
        {
          title: 'Mail',
          desc: 'Smoothly sending electronic mails via the built-in mail client of the operating system.'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
.functionality-section {
  margin: var(--section-pd-y-small) 0 var(--section-pd-y-big);

  &__cards {
    display: grid;
    grid-template-columns: 440px 440px;
    column-gap: calc(var(--space-unit) * 10);
    row-gap: calc(var(--space-unit) * 5);

    @media (max-width: 1024px) {
      grid-template-columns: 1fr 1fr;
    }

    @media (max-width: 768px) {
      max-width: 440px;
      margin: 0 auto;
      grid-template-columns: 1fr;
    }
  }

  &__container {
    position: relative;
  }

  &__figures {
    position: absolute;
    top: 5%;
    right: 0%;

    @media (max-width: 1099px) {
      display: none;
    }
  }

  &-card {

    &__header {
      display: flex;
      align-items: center;
      margin-bottom: 16px;
    }

    &__icon {
      color: var(--red-light);
      font-family: var(--mulish);
      font-weight: 600;
      font-size: 20px;
      margin-right: var(--space-unit);
    }

    &__title {
      font-style: italic;
      font-weight: 600;
    }

    &__desc {
      line-height: 180%;
      letter-spacing: 0.01em;
    }
  }
}
</style>
