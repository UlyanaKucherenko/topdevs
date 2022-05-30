<template>
  <div class="golf-about">
    <picture class="golf-about__bg">
      <img src="/images/site/portfolio/golf/about/about-bg.svg">
    </picture>
    <div class="golf-about__container container">
      <div class="golf-about__row">
        <div class="golf-about__img-wrapper">
          <picture class="golf-about__img">
            <source media="(max-width: 768px)" srcset="/images/site/portfolio/golf/about/img-768.png">
            <source media="(max-width: 1200px)" srcset="/images/site/portfolio/golf/about/img-1200.png">
            <source media="(max-width: 1900px)" srcset="/images/site/portfolio/golf/about/img-1900.png">
            <img src="/images/site/portfolio/golf/about/img-1900.png">
          </picture>
        </div>
        <div class="golf-about__info">
          <div class="golf-about__info-row">
            <div class="golf-about__title text-h1 portfolio-text-h1">Golf app</div>
            <h1 class="golf-about__subtitle portfolio-title portfolio-about-info__subtitle">
              Developing a Virtual<br/> Golf Game Trainer App
            </h1>
            <picture class="golf-about__bg-info">
            <img src="/images/site/portfolio/golf/about/about-bg-360.svg">
            </picture>
          </div>
          <div class="golf-about__list-mobile">
            <div v-for="item in list" :key="`item-${item.title}`" class="golf-about__item-list">
              <div class="golf-about__item-title">{{ item.title }}: <span class="golf-about__item-text">{{
                  item.text
                }}</span></div>
            </div>
          </div>
        </div>
      </div>
      <div class="golf-about__list">
        <div v-for="item in list" :key="`item-${item.title}`" class="golf-about__item-list">
          <div class="golf-about__item-title">{{ item.title }}: <span class="golf-about__item-text">
            {{item.text }}</span></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "GolfAbout",
  data() {
    return {
      list: [
        {
          title: 'Country',
          text: 'Germany'
        },
        {
          title: 'Industry',
          text: 'AI Coaching'
        }
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.golf-about {
  padding-top: calc(var(--header-height) + 2%);
  position: relative;
  display: flex;
  flex-direction: column;
  height: 100vh;
  min-height: 50rem;
  max-height: 120rem;

  @media (max-width: 1200px) {
    height: auto;
  }

  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      object-fit: cover;
    }

    @media (max-width: 1200px) {
      display: none;
    }
  }

  &__container {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
  }

  &__row {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 5%;
    align-items: center;
    width: 100%;
    margin-bottom: 7rem;

    @media (max-width: 1400px) {
      grid-column-gap: 3%;
    }

    @media (max-width: 1200px) {
      margin-bottom: 0;
    }

    @media(max-width: 768px) {
      grid-template-columns: 1fr;
      grid-column-gap: 0;
    }
  }

  &__bg-info {
    img, source {
      display: none;
      position: absolute;
      top: 0;
      right: 0;
      z-index: -1;

      @media (max-width: 1200px) {
        display: block;
        top: -85px;
      }
    }
  }

  &__info {
    position: relative;
    display: grid;
    grid-template-columns: 1fr;
    align-items: flex-start;
  }

  &__info-row {
    display: grid;
    grid-template-columns: 1fr;
    @media (max-width: 1200px) {
      margin-bottom: 11rem;
    }
    @media (max-width: 992px) {
      margin-bottom: 4rem;
    }
    @media (max-width: 768px) {
      grid-template-columns: 1fr;
      grid-column-gap: 0;
      grid-row-gap: 8px;
      margin-bottom: 2rem;
    }
  }

  &__title {
    margin-bottom: 2.4rem;
    color: var(--case-color-primary);
    font-family: var(--Inter);
    font-weight: 500;
    font-size: 13.2rem;
    letter-spacing: 0.1px;
    white-space: nowrap;
    text-space: nowrap;
    text-transform: uppercase;

    @media (max-width: 1200px) {
      font-size: 7.2rem;
    }
    @media (max-width: 992px) {
      font-size: 6.4rem;
    }
    @media (max-width: 576px) {
      font-size: 4.8rem;
    }

  }

  &__subtitle {
    margin-bottom: 0;
    text-transform: uppercase;
    font-family: var(--Inter);
    font-weight: 500;
    font-size: 4rem;
    line-height: 56px;
    letter-spacing: 0.01em;
    color: var(--case-color-grey);

    @media (max-width: 1200px) {
      font-size: 2.4rem;
      line-height: 133%;
    }
    @media (max-width: 576px) {
      font-size: 2rem;
    }
  }


  &__img-wrapper {
    max-width: 616px;
    width: 100%;

    @media (max-width: 1199px) {
      max-width: 536px;
    }

    @media (max-width: 992px) {
      margin-bottom: 24px;
      max-width: 408px;
    }

    @media (max-width: 768px) {
      max-width: 656px;
    }
  }

  &__img {
    img, source {
      width: 100%;
      border-radius: 0 0 0 26%;
    }
  }

  &__list-mobile {
    display: none;
    row-gap: 1rem;
    grid-column-gap: 4.8rem;
    @media (max-width: 1200px) {
      display: grid;
    }
    @media (max-width: 768px) {
      grid-template-columns: 1fr;
      grid-column-gap: 0;
    }
  }

  &__list {
    display: grid;
    grid-template-columns: repeat(2, max-content);
    row-gap: 1rem;
    column-gap: 12rem;
    @media (max-width: 1200px) {
      display: none;
    }
  }

  &__item-list {
    font-size: 4rem;
    font-family: var(--Inter);
    font-weight: 600;
    text-align: left;
    line-height: 56px;

    @media (max-width: 1200px) {
      font-size: 2.4rem;
      line-height: 40px;
    }

    @media (max-width: 992px) {
      font-size: 2.4rem;
      line-height: 40px;
    }
  }

  &__item-title {
    color: var(--case-color-primary);
  }

  &__item-text {
    color: var(--case-color-gray-dark-2);
    font-weight: 400;
  }
}
</style>
