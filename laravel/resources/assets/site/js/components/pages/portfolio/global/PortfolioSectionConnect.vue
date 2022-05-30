<template>
  <div class="portfolio-connect-section">
    <div class="container">
      <div class="portfolio-connect-section__content">
        <h2 class="portfolio-connect-section__title text-h1 portfolio-text-h1">Connect with Experts</h2>
        <div class="portfolio-connect-section__desc text-md portfolio-text-md">Anxious to know how we can bring your idea to life? Let's create a tracking app for your business growth!</div>
        <a
          class="portfolio-connect-section__btn btn-default"
          href="/contacts"
          target="_blank"
        >
            contact us
          </a>
      </div>
    </div>

    <img
      class="portfolio-connect-section__bg-item portfolio-connect-section__bg-item--1 absolute"
      src="/images/site/portfolio/global/connect/bg-left-1.svg" alt=""
      v-cursor-follow="{multiplier: .3}"
    >

    <img
      class="portfolio-connect-section__bg-item portfolio-connect-section__bg-item--2 absolute"
      src="/images/site/portfolio/global/connect/bg-left-2.svg" alt=""
      v-cursor-follow="{multiplier: .1}"
    >

    <img
      class="portfolio-connect-section__bg-item portfolio-connect-section__bg-item--3 absolute"
      src="/images/site/portfolio/global/connect/bg-right-1.svg" alt=""
      v-cursor-follow="{multiplier: .4}"
    >

    <img
      class="portfolio-connect-section__bg-item portfolio-connect-section__bg-item--4 absolute"
      src="/images/site/portfolio/global/connect/bg-right-2.svg" alt=""
      v-cursor-follow="{multiplier: .2, transform: {x: 40}}"
    >
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .portfolio-connect-section {
    position: relative;
    color: var(--white-clear);
    padding: calc(var(--space-unit) * 29) 0;
    background: url(/images/site/portfolio/global/connect/bg-lines.png) no-repeat center center;
    background-color: var(--black-dark);

    &__content {
     display: flex;
     flex-direction: column;
     align-items: center;
    }

    &__title {
      font-weight: 800;
      margin-bottom: calc(var(--space-unit) * 3.2);
      text-align: center;
    }

    &__desc {
      margin-bottom: calc(var(--space-unit) * 6.1);
      max-width: 57rem;
      text-align: center;
    }

    &__bg-item {
      @media (max-width: 1100px) {
        display: none;
      }

      &--1 {
        left: 5%;
        top: 15%;
        width: 14.2%;
      }

      &--2 {
        left: 20%;
        bottom: 15%;
      }

      &--3 {
        top: 15%;
        right: 10%;
      }

      &--4 {
        bottom: 10%;
        right: 0;
      }
    }
  }
</style>