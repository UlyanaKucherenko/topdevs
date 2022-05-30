<template>
  <div class="quick-about" v-scroll-reveal="{distance: 0}">
    <div class="quick-about__content container">
      <div class="quick-about__row">
        <div class="quick-about__info">
          <div class="quick-about__title text-h1 portfolio-text-h1">Quick Size</div>
          <h1 class="quick-about__subtitle portfolio-title portfolio-about-info__subtitle text-lg">
            Developing a Backend for a Virtual Fitting Room
          </h1>
          <div class="quick-about__desc portfolio-desc">
            How TopDevs backend developers extended an app development team of a fashion startup. It is focused on
            building a mobile app that helps to define the right size of any brand's model for each shopper based on
            data comparison from other app users' wardrobes.
          </div>
        </div>
        <div class="quick-about__img">
          <img
            class="quick-about__img-phones"
            src="/images/site/portfolio/quick/about/about-phones.png"
          >
        </div>
      </div>
    </div>
    <img
        class="quick-about__large-bg"
        src="/images/site/portfolio/quick/about/about-circles-large.svg"
    >
    <img
        class="quick-about__small-bg"
        src="/images/site/portfolio/quick/about/about-circle-small.svg"
    >
  </div>
</template>

<script>
export default {
  name: "quickAbout"
}
</script>

<style lang="scss">
.quick-about {
  position: relative;

  padding-bottom: calc(var(--space-unit) * 5);
  background-color: #524AED;


  height: 100vh;
  min-height: 60rem;
  padding-top: calc(var(--header-height));
  display: flex;
  flex-direction: column;
  color: #FFF6F2;

  &__large-bg {
    position: absolute;
    top: -30px;
    right: -15%;
    width: 60%;
    z-index: 0;
    @media (max-width: 1920px) {
      right: -15%;
      top: -25px;
      width: 57%;
    }
    @media (max-width: 1850px) {
      right: -11%;
      top: -30px;
      width: 47%;
    }
    @media (max-width: 1850px) and (min-height: 950px) {
      right: -16%;
      top: -15px;
      width: 56%;
    }
    @media (max-width: 1770px) {
      right: -20%;
      top: -20px;
      width: 61%;
    }
    @media (max-width: 1700px) {
      right: -19%;
      top: -5px;
      width: 61%;
    }
    @media (max-width: 1650px) {
      right: -22%;
      top: -12 px;
      width: 62.5%;
    }
    @media(max-width: 1500px) {
      top: -10px;
      width: 69%;
      right: -25%;
    }
    @media(max-width: 1400px) {
      top: -10px;
      width: 75%;
      right: -27%;
    }
    @media(max-width: 1350px) {
      top: -10px;
      width: 75%;
      right: -27%;
    }

    @media(max-width: 1200px) {
      width: 70%;
      top: 5%;
    }

    @media(max-width: 1199px) {
      width: 63%;
      top: 19%;
    }
    @media(max-width: 992px) {
      width: 70%;
      top: 20%;
    }
    @media(max-width: 768px) {
      width: 100%;
      top: 45%;
    }
    @media (max-width: 670px) {
      top: 45%;
    }
    @media (max-width: 576px) {
      top: 55%;
      left: 40%;
    }
    @media (max-width: 470px) {
      top: 65%;
    }
    @media (max-width: 360px) {
      top: 70%;
      left: 50%;
    }
  }

  &__small-bg {
    position: absolute;
    top: 0;
    left: 0;

    @media (max-width: 1920px) {
      width: 10%;
    }

    @media (max-width: 1800px) {
      width: 7%;
    }

    @media (max-width: 1650px) {
      width: 6%;
    }

    @media (max-width: 1200px) {
      display: none;
    }
  }

  @media (max-width: 768px) {
    height: auto;
  }


  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;

      @media(max-width: 1200px) {
        height: 90%;
      }

      @media(max-width: 991px) {
        height: 100%;
      }
    }
  }

  &__content {
    flex-grow: 1;
    z-index: 1;
    display: flex;
    position: relative;
    flex-direction: column;
    justify-content: center;
    @media(max-width: 768px) {
      flex-direction: column;
      padding-bottom: 0;
    }
  }

  &__row {
    display: flex;
    align-items: center;

    @media(max-width: 768px) {
      flex-direction: column;
      padding-top: 8rem;
      margin-bottom: 5rem;
    }

    @media(max-width: 576px) {
      padding-top: 3rem;
    }

    @media(max-width: 360px) {
      padding-top: 2rem;
    }
  }

  &__info {
    margin-right: 30px;
    width: calc(75% - var(--container-padding));
    text-align: left;

    @media (max-width: 1400px) {
      width: calc(85% - var(--container-padding));
    }

    @media (max-width: 768px) {
      width: 100%;
      text-align: center;
      margin-right: 0;
    }
  }

  &__title {
    white-space: nowrap;
    text-transform: capitalize;
    font-weight: 600;
    margin-bottom: 4rem;
    font-size: 10rem;
    text-space: nowrap;
    @media (max-width: 1500px) {
      font-size: 60px;
    }

    @media (max-width: 1200px) {
      margin-bottom: 3.5rem;
      font-size: 60px;
    }
    @media (max-width: 992px) {
      margin-bottom: 3.5rem;
      font-size: 5.4rem;
    }

    @media (max-width: 576px) {
      font-size: 4.8rem;
    }

    @media (max-width: 767px) {
      margin-bottom: 3rem;
    }
    @media (max-width: 360px) {
      font-size: 4rem;
    }
  }

  &__subtitle {
    position: relative;
    margin-bottom: 2rem;
    text-transform: capitalize;
    font-weight: 600;
    font-size: 2.4rem;

    @media (max-width: 1200px) {
      max-width: 315px;
      line-height: 140%;
    }

    @media (max-width: 992px) {
      line-height: 2.8rem;
      font-size: 2rem;
    }

    @media (max-width: 768px) {
      text-align: center;
      width: 100%;
      max-width: 100%;
    }

    @media (max-width: 360px) {
      font-size: 1.8rem;
      max-width: 255px;
      margin-left: auto;
      margin-right: auto;
    }
  }

  &__desc {
    max-width: 647px;
    font-size: 1.85rem;
    @media (max-width: 1200px) {
      font-size: 20px;
    }
    @media (max-width: 992px) {
      max-width: 99%;
      font-size: 16px;
      line-height: 160%;
      letter-spacing: 0.03em;
    }
    @media (max-width: 768px) {
      max-width: 87%;
      margin: 0 auto;
    }

    @media (max-width: 576px) {
      max-width: none;
    }
  }

  &__img {
    @media (max-width: 1500px) {
      flex-basis: 50%;
    }

    @media (max-width: 991px) {
      padding-bottom: 0;
    }
  }

  &__img-phones {
    min-width: 520px;

    @media (max-width: 1500px) {
      width: 100%;
      margin: 2rem auto 0;
    }

    @media (max-width: 1199px) {
      min-width: 420px;
    }

    @media (max-width: 992px) {
      min-width: 359px;
    }

    @media (max-width: 768px) {
      min-width: auto;
      max-width: 436px;
      margin-top: 5.8rem;
    }

    @media (max-width: 576px) {
      margin-top: 2.8rem;
    }
  }

}
</style>
