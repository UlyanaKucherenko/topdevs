<template>
  <section class="meld-about" v-scroll-reveal="{distance: 0}">
    <div class="meld-about__inner">
      <div class="container">
        <div class="meld-about__content">
          <div class="meld-about__info portfolio-about-info">
            <div class="meld-about__title portfolio-about-info__title">
              meld
            </div>
            <h1 class="meld-about__subtitle portfolio-title portfolio-about-info__subtitle">
                Supplying a serious dating app to find quality matches
            </h1>
            <div class="meld-about__desc portfolio-desc">
                How TopDevs made a dating app for single black professionals willing to find romantic relationships and date with alike people.
            </div>
          </div>

          <picture class="meld-about__img">
            <source media="(max-width: 575px)" srcset="/images/site/portfolio/meld/about/mockup-575.png">
            <source media="(max-width: 991px)" srcset="/images/site/portfolio/meld/about/mockup-991.png">
            <img src="/images/site/portfolio/meld/about/mockup.png" alt="">
          </picture> 
        </div>
      </div>

      <picture class="meld-about__fig-top-right">
        <source media="(max-width: 991px)" srcset="/images/site/portfolio/meld/about/fig-top-right-991.svg">
        <img src="/images/site/portfolio/meld/about/fig-top-right.svg" alt="">
      </picture> 

      <img 
        class="meld-about__fig-bottom-left"
        src="/images/site/portfolio/meld/about/fig-bottom-left.svg" alt="" 
      >
    </div>
  </section>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .meld-about {
    padding-top: var(--header-height);

    &__inner {
      position: relative;
      background: linear-gradient(101.4deg, #FFEBD9 -1.07%, #FFDFC1 110.13%);
    }

    &__content {
      position: relative;
      padding: 15% 0;
      display: flex;
      align-items: center;

      @media (max-width: 1400px) {
        padding: 11% 0;
      }

      @media (max-width: 1199px) {
        padding-top: 10% 0;
      }

      @media (max-width: 991px) {
        flex-direction: column;
        padding: 0;
        padding-top: 6.7rem;
      }
    }

    &__info {
      @media (min-width: 992px) {
        max-width: 53.7rem;
        width: 40%;
      }

      @media (max-width: 991px) {
        max-width: 48rem;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
      }
    }

    &__title {
      position: relative;
      font-size: 12rem;
      font-weight: 900;
      color: var(--case-color-primary);
      width: fit-content;

      &:before {
        content: 'meld';
        position: absolute;
        top: -.1em;
        left: -.03em;
        color: transparent;
        -webkit-text-stroke: 1px #011E50;
        opacity: 0.4;
      }

      &:after {
        content: '';
        position: absolute;
        bottom: .237em;
        right: -.3em;
        width: .208em;
        height: .208em;
        background: var(--case-color-orange);
      }

      @media (max-width: 1400px) {
        font-size: 9rem;
      }

      @media (max-width: 1199px) {
        font-size: 7.5rem;
      }

      @media (max-width: 575px) {
        font-size: 6rem;
      }
    }

    &__subtitle {
      color: var(--case-color-red);
    }

    &__desc {
      @media (max-width: 991px) {
        margin-bottom: 2.5rem;
      }
    }

    &__img {
      img, source {
        @media (min-width: 992px) {
          position: absolute;
          object-fit: contain;
          width: 49.7%;
          max-height: 105%;
          right: 0;
          bottom: 0;
          transform: translate(5%, 16%);
        }

        @media (max-width: 991px) {
          width: 100%;
          max-width: 49rem;
          transform: translateX(6%);
        }

        @media (max-width: 575px) {
          transform: none;
        }
      }
    }

    &__fig {
      &-top-right {
        img, source {
          position: absolute;
          right: 10%;
          top: 0;

          @media (max-width: 1400px) {
            width: 5.6rem;
          }

          @media (max-width: 991px) {
            top: 40%;
            right: 0;
          }

          @media (max-width: 767px) {
            top: 36.5%;
            right: 0;
            width: 3.3rem;
          }

          @media (max-width: 500px) {
            display: none;
          }
        }
      }

      &-bottom-left {
        position: absolute;
        left: 0;
        bottom: 0;
        transform: translateY(41%);
        width: 11.3vw;

        @media (max-width: 1700px) {
          width: 11rem;
        }

        @media (max-width: 1199px) {
          width: 7rem;
        }

        @media (max-width: 991px) {
          width: 9.7rem;
        }

        @media (max-width: 575px) {
          width: 7rem;
        }
      }
    }
  }
</style>