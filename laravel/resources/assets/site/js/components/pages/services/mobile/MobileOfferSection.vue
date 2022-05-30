<template>
  <section class="mobile-offer-section">
    <div class="mobile-offer-section__container container">
      <img
        class="mobile-offer-section__figures"
        src="/images/site/services/mobile/offer/new/1.svg" alt=""
        v-cursor-follow="{multiplier: .2, transform: {x: -100, y: -50}}"
      >
      <ServicesSectionHeader
        class="list-section__header"
        title="What We Offer"
        :desc="['Our scalable','mobility solutions', 'function smoothly across all popular mobile platforms.']"
        mode="left"
        :revealIsDisabled="true"
      />

      <div class="mobile-offer-section__cards">
        <div
          v-for="(card, idx) in cards"
          class="mobile-offer-section-card"
        >
          <div class="mobile-offer-section-card__header text-lg">
            <span class="mobile-offer-section-card__icon">
            (0{{idx +1}})
            </span>
            <span class="mobile-offer-section-card__title">
                  {{ card.title }}
                </span>
          </div>

          <p class="mobile-offer-section-card__desc">
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
  name:'MobileOfferSection',
  components: {
    ServicesSectionHeader

  },
  data() {
    return {
      cards: [
        {
          title: 'Native iOS App Development',
          desc: 'We are keen to bring your business to new heights. So our iOS app developers cover the full cycle of app development for all Apple platforms via iPhone apps, iPad apps, Apple TV apps, watchOS apps.'
        },
        {
          title: 'Native Android App Development',
          desc: 'We create highly customized applications compatible with all Android-based devices to extend your customer base. It includes smartphone apps, tablet apps, wearable apps, Smart TV apps, and more.'
        },
        {
          title: 'Mobile App MVP Development',
          desc: 'Our MVP app development company can help you build a minimum viable product with just enough functionality for idea validation, collecting first feedback, and pitching your mobile app vision to investors.'
        },
        {
          title: 'Mobile App Design',
          desc: 'Our mobile design team prototypes, designs, and delivers elegant mobile apps with close attention to all modern screen sizes and platform guidelines ensuring the native look and smooth interactions.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.mobile-offer-section {
  margin: var(--section-pd-y-small) 0 var(--section-pd-y-big);

  &__cards {
    display: grid;
    grid-template-columns: 600px 600px;
    gap: calc(var(--space-unit) * 8);

    @media (max-width: 1400px) {
      grid-template-columns: 1fr 1fr;
    }

    @media (max-width: 998px) {
      max-width: 600px;
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
      position: relative;
      padding-left: 2em;
      display: flex;
      align-items: center;
      margin-bottom: 16px;
    }

    &__icon {
      position: absolute;
      left: 0;
      top: -0.5em;
      color: var(--red-light);
      font-family: var(--mulish);
      font-weight: 600;
    }

    &__title {
      font-style: italic;
      font-weight: 600;
    }

    &__desc {
      line-height: 180%;
      padding-left: 2.8em;
      letter-spacing: 0.01em;
    }
  }
}
</style>
