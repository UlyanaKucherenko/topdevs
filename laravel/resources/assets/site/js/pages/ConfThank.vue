<template>
  <div class="thank container">
    <img
      class="thank__img"
      src="/images/site/conf/mail.svg"
    />

    <div class="thank__title">
      You have successfully registered for the webinar!
    </div>

    <div class="thank__text">
      While you’re there you can read our <a href="/portfolio" class="thank__link">customer success</a> stories or
      dive deeper into the world of technology on our
      <a href="/blog" class="thank__link">blog.</a>
      <br>
      <a href="/conf" class="thank__link">Return to webinar page</a>
    </div>
    <img
      class="thank__bg"
      src="/images/site/conf/thank-bg.svg" alt="">
  </div>
</template>

<script>

</script>

<style lang="scss">
.thank {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  height: 100vh;
  min-height: 800px;
  max-height: 1200px;

  &__img {
    max-width: 240px;
    min-width: 150px;
    width: 14vw;
    margin-bottom: 60px;

    @media (max-width: 767px) {
      margin-bottom: 30px;
    }
  }

  &__title {
    font-size: 60px;
    line-height: 120%;
    margin-bottom: 72px;

    @media (max-width: 767px) {
      font-size: 36px;
      margin-bottom: 20px;
    }
  }

  &__text {
    font-size: 24px;
    line-height: 140%;

    @media (max-width: 767px) {
      font-size: 20px;
    }
  }

  &__link {
    color: #145DCC;

    &:hover {
      text-decoration: unset;
    }
  }

  &__bg {
    position: fixed;
    z-index: -1;
  }
}
</style>
