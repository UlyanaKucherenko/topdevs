<template>
  <div class="about-section" v-scroll-reveal="{distance: 0}">
    <div class="about-section__content container">
      <div class="about-section__info">
        <div class="about-section__title text-h1 portfolio-text-h1">beauty streaming service</div>
        <h1 class="about-section__subtitle portfolio-title portfolio-about-info__subtitle">
          Creating a Beauty Expert Platform to Share Mastery
        </h1>
        <div class="about-section__desc portfolio-desc">
          How TopDevs built a digital ecosystem connecting beauty masters with their followers who are eager to learn from the industry experts via subscriptions and live streaming sessions.
          
          <img src="/images/site/portfolio/beauty/about/fig-1.svg" alt="" class="about-section__desc-fig">
        </div>
      </div>

      <div class="about-section__img">
        <img 
          class="about-section__img-tablet"
          src="/images/site/portfolio/beauty/about/tablet.png"
        >

        <img 
          class="about-section__img-phone-left"
          src="/images/site/portfolio/beauty/about/phone-left.png"
        >

        <img 
          class="about-section__img-phone-right"
          src="/images/site/portfolio/beauty/about/phone-right.png"
        >
      </div>
    </div>

    <div class="about-section__circles">
      <img 
        class="about-section__circles-inner"
        src="/images/site/portfolio/beauty/about/circles.svg"
      >
    </div>

    <div class="about-section__ticker-text beauty-ticker-text">beauty streaming service</div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .beauty .about-section {
    position: relative;
    padding-top: calc(var(--header-height) + 7%);
    padding-bottom: 9%;
    background: #FFE2ED;


    &__content {
      position: relative;
      display: flex;
      align-items: center;
    }

    &__info {
      width: 50%;
      z-index: 2;
      position: relative;

      @media (max-width: 1536px) {
        width: 44%;
      }
      
      @media (max-width: 991px) {
        width: 100%;
        margin-bottom: calc(var(--space-unit) * 7);
        text-align: center;
      }
    }

    &__title {
      text-transform: uppercase;
      font-weight: 800;
      color: #951865;
      margin-bottom: 4rem;

      @media (min-width: 1200px){
        font-size: 6rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 767px) {
        margin-bottom: 3rem;
      }
    }

    &__subtitle {
      position: relative;
      color: #4D4981;
      margin-bottom: 2rem;

      @media (max-width: 1536px) {
        max-width: 18em;
      }


      @media (max-width: 991px) {
        max-width: none;
      }

      @media (max-width: 767px) {
        margin-bottom: 1.5rem;
      }
    }

    &__desc {
      max-width: 25em;
      color: #260018;

      @media (max-width: 991px) {
        max-width: none;
      }

      &-fig {
        position: absolute;
        right: calc(var(--space-unit) * 5);
        bottom: -3vw;
        width: 15%;
        
        @media (max-width: 991px) {
          display: none;
        }
      }
    }

    &__img {
      width: 46%;
      position: absolute;
      right: calc(var(--container-padding) - 4%);
      top: 50%;
      z-index: 1;
      transform: translate(0%, -50%);

      @media (max-width: 1536px) {
        width: 52%;
        right: calc(var(--container-padding) - 3.5%);
        top: 48%;
      }

      @media (max-width: 1420px) {
        width: 56%;
        right: calc(var(--container-padding) - 13%);
      }

      @media (max-width: 991px) {
        position: static;
        width: 75%;
        transform: translate(0, 0);
        margin-bottom: 3%;
      }

      @media (max-width: 550px) {
        width: 100%;
        margin-bottom: 9%;
      }

      &-tablet {
        width: 100%;
      }

      &-phone {
        &-left {
          width: 33%;
          top: 63%;
          left: 30%;
          position: absolute;
        }

        &-right {
          position: absolute;
          width: 33%;
          top: 35%;
          left: 72%;
        }
      }
    }
    
    &__circles {
      position: absolute; 
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      overflow: hidden;

      &-inner {
        position: absolute;
        width: 58%;
        height: 125%;
        right: -2%;
        top: -10%;

        @media (max-width: 1536px) {
          width: 68%;
          right: -8%;
        }

        @media (max-width: 991px) {
          width: 110%;
          opacity: .7;
          position: absolute;
          height: 125%;
          right: -2%;
          top: 7%;
          left: -5%;
        }

        @media (max-width: 500px) {
          width: 130%;
          opacity: 0.7;
          position: absolute;
          right: -2%;
          top: 20%;
          left: -15%;
        }
      }
    }

    @media (max-width: 991px) {
      padding-top: calc(var(--header-height) + calc(var(--space-unit) * 12));

      &__content {
        flex-direction: column;
      }

      &__arrow {
        display: none;
      }
    }
  }
</style>