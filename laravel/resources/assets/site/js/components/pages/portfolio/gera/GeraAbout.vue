<template>
  <section class="gera-about" v-scroll-reveal="{distance: 0}">
    <picture class="gera-about__bg">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/bg-991.png">
      <img src="/images/site/portfolio/gera/about/bg.png" alt="">
    </picture> 

    <div class="container">
      <div class="gera-about__content">
        <div class="gera-about__info">
          <div class="gera-about__info-title portfolio-about-info__title text-h1 portfolio-text-h1">
            Gerasyanov
          </div>
          <h1 class="gera-about__info-subtitle portfolio-title portfolio-about-info__subtitle">
            Cultivating an inclusive wellness platform for human wellbeing 
          </h1>
          <div class="gera-about__info-desc portfolio-desc">
            How TopDevs fine-tuned a digital wellness ecosystem with new functionality and mobile apps development to enhance people’s health worldwide. 
          </div>
        </div>

        <picture class="gera-about__img">
          <source media="(max-width: 991px)" srcset="/images/site/portfolio/gera/about/mockup-991.png">
          <img src="/images/site/portfolio/gera/about/mockup.png" alt="">
        </picture> 
      </div>
    </div>
  </section>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .gera-about {
    height: 100vh;
    position: relative;
    min-height: 80rem;
    max-height: 108rem;

    @media (max-width: 1550px) {
      max-height: 90rem;
    }

    @media (max-width: 1350px) {
      max-height: 80rem;
      min-height: 67rem;
    }

    @media (max-width: 1200px) {
      max-height: 72rem;
    }

    @media (max-width: 991px) {
      height: unset;
      max-height: unset;
      min-height: unset;
      padding-top: calc(var(--header-height) + 7rem);
    }

    &__bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 95%;

      img, source {
        width: 100%;
        height: 100%;
        
        @media (max-width: 1700px) and (min-width: 992px) {
          object-fit: cover;
        }
      }

      @media (max-width: 650px) {
        width: 150%;
        left: -25%;
      }
    }

    &__content {
      display: flex;
      align-items: center;
      height: 100%;
      position: relative;

      @media (max-width: 991px) {
        flex-direction: column;
      }
    }

    &__info {
      width: 55.5rem;

      @media (max-width: 1400px) {
        width: 47%;
      }

      @media (max-width: 991px) {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        max-width: 45rem;
        text-align: center;
        margin-bottom: 1rem;
      }

      &-title {
        color: var(--case-color-primary);

        @media (max-width: 1400px) and (min-width: 1200px) {
          font-size: 6rem;
        }
      }

      &-subtitle {
        color: var(--case-color-secondary);
      }
    }

    &__img {
      position: absolute;
      // width: 44%;
      width: 61.6rem;
      right: 0;
      top: 50%;
      transform: translate(5%, -40%);

      img, source {
        width: 100%;
      }

      @media (max-width: 1400px) {
        width: 50%;
      }

      @media (max-width: 991px) {
        position: static;
        transform: none;
        width: 100%;
        max-width: 47rem;
        transform: translateX(3%);
      }
    }
  }
</style>