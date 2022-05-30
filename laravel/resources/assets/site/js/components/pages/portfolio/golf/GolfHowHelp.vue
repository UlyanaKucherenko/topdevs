<template>
  <div class="golf-how-help" v-scroll-reveal>
    <img class="golf-how-help__bg" src="/images/site/portfolio/golf/howHelp/figur-right.svg">

    <div class="container">
      <div class="golf-how-help__row">
        <div class="golf-how-help__info">
          <div class="golf-how-help__info-item">How TopDevs helped to create a mobile app for golf enthusiasts to assist
            them in their game skills
            improvement.
          </div>

          <div class="golf-how-help__info-item">It consists of two parts: an SDK and an application with an app
            architecture, the graphics component, and
            database management.
          </div>
        </div>

        <div class="golf-how-help__img">
          <picture class="golf-how-help__img-phones">
            <source media="(max-width: 576px)" srcset="/images/site/portfolio/golf/howHelp/img-576.png">
            <source media="(max-width: 768px)" srcset="/images/site/portfolio/golf/howHelp/img-768.png">
            <source media="(max-width: 1201px)" srcset="/images/site/portfolio/golf/howHelp/img-1200.png">
            <source srcset="/images/site/portfolio/golf/howHelp/img-big.png">
            <img src="/images/site/portfolio/golf/howHelp/img-big.png">
          </picture>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "GolfHowHelp"
}
</script>

<style lang="scss" scoped>
.golf-how-help {
  position: relative;
  padding-top: calc(var(--space-section) * 1);
  padding-bottom: calc(var(--space-section) * 0.49);
  @media (max-width: 1200px) {
    padding-top: calc(var(--space-section) * 0.4);
  }

  &__bg {
    position: absolute;
    top: -24%;
    z-index: -1;

    @media(max-width: 768px) {
     display: none;
    }

  }

  &__row {
    display: flex;
    align-items: center;

    @media(max-width: 768px) {
     flex-direction: column-reverse;
    }
  }

  &__info {
    width: 60%;
    @media(max-width: 768px) {
     width: 100%;
    }
  }

  &__info-item {
    color: var(--case-color-gray-dark-1);
    font-family: var(--Inter);
    font-weight: 300;
    font-size: 24px;
    line-height: 32px;

    &:first-child {
      margin-bottom: 40px;
    }

    @media (max-width: 576px) {
      font-size: 16px;
    }
  }

  &__img {
    @media(max-width: 768px) {
      margin: 0 auto 40px;
    }
  }

  &__img-phones {
    img,sourse {
      width: 100%;
    }
  }
}
</style>