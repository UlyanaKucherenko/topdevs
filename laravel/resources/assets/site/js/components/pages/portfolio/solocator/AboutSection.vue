<template>
  <div class="about-section" v-scroll-reveal="{distance: 0}">
    <div class="about-section__content container">
      <div class="about-section__info">
        <div class="about-section__title text-h1 portfolio-text-h1">solocator</div>
        <h1 class="about-section__subtitle portfolio-title portfolio-about-info__subtitle">
          Delivering a GPS Field Camera App to Capture Photo Direction
        </h1>
        <div class="about-section__desc portfolio-desc" >How TopDevs created a camera compass app for iOS and Android that brings unique value for users and the location tracking industry.</div>
        <a href="#rubrics-section">
          <img class="about-section__arrow" src="/images/site/portfolio/solocator/about/arrow.svg" alt="" >
        </a>
      </div>

      <div class="about-section__img">
        <img 
          class="about-section__img-phones"
          src="/images/site/portfolio/solocator/about/phones.png"
        >
        <img 
          class="about-section__img-dots"
          src="/images/site/portfolio/solocator/about/dots-circle.svg"
        >
      </div>

      <img 
        class="about-section__square about-section__square--green"
        src="/images/site/portfolio/solocator/about/square-green.svg" alt=""
        v-cursor-follow="{multiplier: .2}"
      >
      <img 
        class="about-section__square about-section__square--orange"
        src="/images/site/portfolio/solocator/about/square-orange.svg" alt="" 
        v-cursor-follow="{multiplier: .2}"
      >
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .solocator .about-section {
    height: 100vh;
    min-height: 60rem;
    padding-top: calc(var(--header-height));
    background: radial-gradient(105.52% 496.75% at -0.83% 0%, #EDFFDE 0%, #E2FFCC 100%);
    display: flex;
    flex-direction: column;

    @media (max-width: 1199px) {
      height: auto;
    }

    &__content {
      flex-grow: 1;
      display: flex;
      align-items: center;
      position: relative;
    }

    &__info {
      width: calc(50% - var(--container-padding));  
      
      @media (max-width: 991px) {
        text-align: center;
      }
    }

    &__title {
      text-transform: uppercase;
      font-weight: 800;
      color: #0A0E07;
      margin-bottom: 4rem;

      @media (max-width: 1199px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 767px) {
        margin-bottom: 3rem;
      }
    }

    &__subtitle {
      position: relative;
      color: #FF8351;
      margin-bottom: 2rem;
      text-transform: capitalize;
      max-width: 17em;

      @media (max-width: 991px) {
        line-height: 2.4rem;
        max-width: none;
      }

      @media (max-width: 767px) {
        line-height: 2.2rem;
        margin-bottom: 1.5rem;
      }
    }

    &__desc {
      max-width: 43rem;
      margin-bottom: calc(var(--space-unit) * 10);

      @media(max-width: 1199px) {
        max-width: 35rem;
      }

      @media (max-width: 991px) {
        max-width: none;
      }
    }

    &__arrow {
      cursor: pointer;
      animation: arrow infinite 1.5s;

      @keyframes arrow {
        20% {
          transform: translateY(5px);
        }
      }
    }

    &__img {
      width: 50%;
      position: absolute;
      right: var(--container-padding);
      height: 110%;
      top: 5%;
      z-index: 1;
      transform: translateX(11%);

      @media (max-width: 1299px) {
        width: 45%;
      }

      @media (max-width: 991px) {
        position: relative;
        width: 75%;
        margin-bottom: -6rem;
      }

      @media (max-width: 550px) {
        width: 110%;
        right: auto;
        transform: translateX(4%);
      }

      &-phones {
        width: 100%;
        height: 100%;
        object-fit: contain;
      }

      &-dots {
        width: 80%;
        height: 62%;
        position: absolute;
        right: -7%;
        top: 20%;
        z-index: -1;

        @media (max-width: 1199px) {
          width: 85%;
          height: 68%;
          top: 17%;
        }

        @media (max-width: 550px) {
          width: 105%;
          height: 88%;
          top: -8%;
          left: -25%;
          right: auto;
        }
      }
    }

    &__square {
      position: absolute;
      width: 3.5%;

      &--orange {
        bottom: 14%;
        left: 22%;

        @media (max-width: 1400px) {
          left: 30%;
        }
      }

      &--green {
        right: 10%;
        top: 12%;
      }

      @media (max-width: 991px) {
        width: 6%;

        &--green {
          top: 29%;
          right: 14%;
        }

        &--orange {
          top: 2%;
          left: 7%;
        }
      }

      @media (max-width: 870px) {
        &--green {
          display: none;
        }

        &--orange {
          top: 29%;
          right: 14%;
          left: auto;
        }
      }

      @media (max-width: 500px) {
        display: none;
      }
    }

    @media (max-width: 991px) {
      padding-top: calc(var(--header-height) + calc(var(--space-unit) * 12));

      &__content {
        flex-direction: column;
      }

      &__info {
        width: 100%;
        max-width: 45rem;
        margin-bottom: 7rem;
      }

      &__desc {
        margin-bottom: 0;
      }

      &__arrow {
        display: none;
      }
    }
  }
</style>