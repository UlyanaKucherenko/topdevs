<template>
  <div class="quick-results">
    <picture class="quick-results__bg">
<!--      <source media="(max-width: 360px)" srcset="/images/site/portfolio/quick/results/bg-360.png">-->
<!--      <source media="(max-width: 576px)" srcset="/images/site/portfolio/quick/results/bg-576.png">-->
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/quick/results/bg-992.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/quick/results/bg-1200.png">
      <img src="/images/site/portfolio/quick/results/results-bg.png"
           alt="Chris standing up holding his daughter Elva">
    </picture>
    <img class="quick-results__left-bg" src="/images/site/portfolio/quick/results/bg-left-circle.svg" alt="">
    <img class="quick-results__right-bg" src="/images/site/portfolio/quick/results/bg-right-circle.svg" alt="">
    <div class="container">
      <div class="quick-results__container">
        <div class="quick-results__content">
          <div class="quick-results__text-content">
            <QuickHeader
              class="quick-results__header"
              :isCentered="false"
              :baseOptions="{
                  titleText: 'Results',
                  titleTextColor: 'var(--case-color-white)',
                  descText: ''
                }"
            />


            <div class="quick-results__descr-text">
              The TopDevs team has helped the startup owner to create a backend of a mobile app with smart architecture
              and the most accurate garments size matching functionality. Besides, we've made sure to maintain the
              smooth integration of backend and frontend parts developed by the other app development team.

            </div>


            <div class="quick-results__descr-text">
              Thanks to the core size matching algorithm, app owners can reduce the number of returns in their retail
              business. The developed virtual try-on application guides users to a perfect fit. It increases the overall
              trust of consumers towards online clothes purchases and shopping satisfaction.

            </div>
            <div class="quick-results__descr-text">
              In the end, it is a unique solution that allows buyers to get the same experience of each model try-on at
              a distance and buy the most fitting clothes at a better price. This startup idea can not be underestimated
              by potential investors who can be impressed by the prospective benefits that retailers can get from this
              app.
            </div>


            <div class="quick-results__benefits">
              <div
                class="quick-results-benefit"
                v-for="item in items"
              >
                <div class="quick-results-benefit__title text-md text-bold">{{ item.title }}</div>
                <div class="quick-results-benefit__desc">{{ item.desc }}</div>
              </div>
            </div>


          </div>

          <img
            class="quick-results__mockup"
            src="/images/site/portfolio/quick/results/results-mobile.png" alt=""
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import QuickHeader from '@/js/components/pages/portfolio/quick/global/QuickHeader'

export default {
  name: "QuickResults",
  components: {QuickHeader},
  data() {
    return {
      items: [
        {
          title: '40% Reduced Returns',
          desc: 'The app is evaluated to decrease the number of clothes returns by at least 40 percent.'
        },

        {
          title: '25% Sales Increase',
          desc: 'The app raises buyer confidence, in turn, it leads to 25 percent higher sales conversions.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.quick-results {
  position: relative;
  padding: 10vw 0 10vw;
  color: var(--case-color-white);

  &__bg {
    img, source {
      position: absolute;
      left: -10%;
      top: 0;
      width: 120%;
      height: 100%;
      z-index: -1;
    }
  }

  &__container {
    //padding: 50px 0;
  }

  &__content {
    display: grid;
    grid-template-columns: 50fr 37fr;
    grid-column-gap: 5%;
    align-items: center;

    @media (max-width: 1920px) {
      position: relative;
      grid-template-columns: 5fr 2fr;

    }
    @media (max-width: 1440px) {
      display: flex;
    }
    @media (max-width: 1300px) {
      align-items: center;
    }
    @media (max-width: 1200px) {
      flex-direction: column-reverse;
    }
  }

  &__text-content {
    @media (max-width: 1440px) {
      width: 69%;
    }
    @media (max-width: 1200px) {
      width: 100%;
    }
    @media (max-width: 360px) {
      margin-top: 30px;
    }
  }

  &__mockup {
    max-width: 100%;

    @media (max-width: 1920px) {
      position: absolute;
      right: -10%;
      width: 45%;
      top: -10%;
    }
    @media (max-width: 1200px) {
      margin-top: -35%;
      right: 0;
      align-self: center;
      position: relative;
      margin-bottom: -5%;
      min-width: 400px;
      max-width: 500px;
      width: 60%;
    }
    @media (max-width: 992px) {
      margin-top: -45%;
    }
    @media (max-width: 768px) {
      margin-top: -55%;
      margin-bottom: -15%;
    }
    @media (max-width: 360px) {
      margin-top: -67%;
      margin-bottom: -31%;
    }
  }

  &__header {
    margin-bottom: 2rem;
  }

  &__descr-text {
    font-size: 1.6rem;
    line-height: 160%;
    letter-spacing: 0.06em;
    margin-bottom: 4rem;

    @media (max-width: 1920px) {
      font-size: 20px;
    }

    @media (max-width: 1440px) {
      font-size: 18px;
      line-height: 160%;
      letter-spacing: 0.06em;
    }
    @media (max-width: 1200px) {
      font-size: 20px;
    }
    @media (max-width: 992px) {
      font-size: 16px;
    }
  }

  &__benefits {
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: calc(var(--space-unit) * 8);
    @media (max-width: 575px) {
      grid-template-columns: 1fr;
      grid-row-gap: 2.5rem;
    }
  }

  &-benefit {
    font-size: 2rem;

    @media (max-width: 1440px) {
      font-size: 18px;
    }

    &__title {
      color: white;
      margin-bottom: calc(var(--space-unit) * 2);
      font-size: 1.8rem;


      @media (max-width: 1920px) {
        font-size: 20px;
      }

      @media (max-width: 1440px) {
        font-size: 18px;
      }
      @media (max-width: 1200px) {
        font-size: 20px;
      }
      @media (max-width: 992px) {
        font-size: 16px;
      }
    }

    &__desc {
      line-height: 160%;
      letter-spacing: 0.06em;
      color: var(--case-color-secondary);
      font-size: 1.8rem;

      @media (max-width: 1920px) {
        font-size: 20px;
      }

      @media (max-width: 1440px) {
        font-size: 18px;
      }

      @media (max-width: 1200px) {
        font-size: 20px;
      }
      @media (max-width: 992px) {
        font-size: 16px;
      }
    }
  }
  &__left-bg {
    position: absolute;
    top: -17%;
    left: -17%;
    width: 30%;

    @media (max-width: 1920px) {
      position: absolute;
      top: -17%;
      left: -18%;
      width: 38%;
    }
    @media (max-width: 1680px) {
      width: 34%;
    }
    @media (max-width: 1440px) {
      position: absolute;
      top: -22%;
      left: -21%;
      width: 38%;
    }
    @media (max-width: 1200px) {
      top: -20%;
      left: -30%;
      width: 50%;
    }
    @media (max-width: 992px) {
      top: -15%;
      width: 45%;
      left: -27%;
    }
    @media (max-width: 576px) {
      top: -11%;
      width: 55%;
      left: -37%;
    }
    @media (max-width: 360px) {
      top: -5%;
      left: -32%;
    }
  }
  &__right-bg {
    position: absolute;
    top: 18%;
    right: 0;
    z-index: -1;
    @media (max-width: 1920px) {
      right: -10%;
    }
    @media (max-width: 1680px) {
      right: -14%;
    }
    @media (max-width: 1440px) {
      right: -25%;
      width: 70%;
      top: 66px;
    }
    @media (max-width: 1200px) {
      left: 47%;
      top: 15%;
    }
    @media (max-width: 992px) {
      top: 27%;
      left: 50%;
    }
    @media (max-width: 768px) {
      left: 10%;
    }
    @media (max-width: 576px) {
      left: 0;
    }
  }
}

</style>
