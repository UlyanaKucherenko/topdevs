<template>
  <main class="contact-us">
    <section class="contact-section">
      <div class="container">
        <SectionHeader
            invalid="123123"
            title="Привет ;)"
            :desc="['Оставь свои контактные данные и стань частью TopDevs team!']"
            icon="/images/site/icons/abstract/header-2.svg"
            mode="center"
        />
        <ResumeForm
            class="contact-section__form"
            color="inverse"
        />
      </div>

      <img src="/images/site/icons/abstract/fig-43.svg" alt="" class="contact-section__bg-square bg-absolute" v-cursor-follow="{multiplier: .2}">
      <img src="/images/site/icons/abstract/fig-42.svg" alt="" class="contact-section__bg-triangle bg-absolute" v-cursor-follow="{multiplier: .3}">
    </section>
  </main>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ResumeForm from '@/js/components/pages/services/ConnectForm/ResumeForm'

export default {
  components: {SectionHeader, ResumeForm},

  data() {
    return {
    }
  }
}
</script>

<style lang="scss">
.contact-us {
  .contact-section {
    position: relative;
    padding-top: calc(var(--header-height) * 2);
    padding-bottom: calc(var(--space-unit) * 16);

    &__form {
      max-width: 83rem;
      margin: 0 auto;
    }

    &__bg {
      &-square {
        right: 14%;
        top: 11%;
        width: 6%;
      }

      &-triangle {
        left: 11%;
        top: 33%;
        width: 5%;
      }

      @media (max-width: 1400px) {
        &-square, &-triangle {
          display: none;
        }
      }
    }
  }

  .info-section {
    position: relative;
    padding-bottom: calc(var(--space-unit) * 14);

    &__cards {
      display: grid;
      grid-template-columns: repeat(3, 33rem);
      grid-column-gap: calc(var(--space-unit) * 6);
      grid-row-gap: calc(var(--space-unit) * 6);
      justify-content: center;

      @media (max-width: 1300px) {
        grid-template-columns: repeat(2, 33rem);
      }

      @media (max-width: 767px) {
        grid-template-columns: repeat(2, 45%);
      }

      @media (max-width: 500px) {
        grid-template-columns: repeat(1, 90%);
      }
    }

    &__bg-lines {
      bottom: 0;
      opacity: .5;
    }
  }

  &-card {
    &__top-row {
      display: flex;
      align-items: center;
      font-weight: 600;
    }

    &__icon {
      width: 4rem;
      margin-right: 1.5rem;
    }

    &__list {
      margin-left: 5.5rem;

      @media (max-width: 650px) {
        margin-left: 0;
        margin-top: calc(var(--space-unit) * 2);
      }

      &-item {
        --color: var(--grey-lighter);
        line-height: 150%;
        padding-left: 1em;

        &::before {
          top: .6em;
        }
      }
    }
  }
}
</style>