<template>
  <main class="thank">
    <div class="thank__inner container" v-scroll-reveal>
      <img src="/images/site/thank.svg" alt="" class="thank__img">
      <div class="thank__text">
        <h2 class="thank__title">Your Message Was Sent Successfully!</h2>
        <p class="thank__desc-1 text-lg">We'll get back to you within the next 12 business hours.</p>
        <p class="thank__desc-2 text-lg">Meanwhile, get a closer look at our clients <a class="text-blue-light" href="/portfolio">success stories</a> or dive deeper into the technology world with our <a class="text-blue-light" href="/blog">blog.</a></p>
      </div>
      <a class="thank__btn btn-default" href="/">go to homepage</a>
    </div>
  </main>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .thank {
    padding-top: var(--header-height);
    height: 100vh;
    min-height: 90rem;

    @media (max-width: 1400px) {
      min-height: 76.8rem;
    }

    &__inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    &__img {
      width: 30rem;
      // width: 25%;
      margin-bottom: calc(var(--space-unit) * 2.5);
    }

    &__text {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      margin-bottom: calc(var(--space-unit) * 3);
      color: (var(--black-dark));
    }

    &__title {
      margin-bottom: calc(var(--space-unit) *3);
    }

    &__desc-1 {
      margin-bottom: calc(var(--space-unit) * 2.25);
    }

    &__desc-2 {
      max-width: 77rem;
    }
  }
</style>