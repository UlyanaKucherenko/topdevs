<template>
  <div class="golf-results" v-scroll-reveal>
    <img class="golf-results__center-bg" src="/images/site/portfolio/golf/results/bg-bottom-circle.svg" alt="">
<!--    <img class="golf-results__bg-top" src="/images/site/portfolio/golf/results/figure-top.svg">-->
    <div class="container">
      <div class="golf-results__row">
        <div class="golf-results__left">
          <div class="golf-results__item-left" v-for="item in items" :key="item.id">
            <div class="golf-results__item-percents">{{ item.percent }}</div>
            <div class="golf-results__item-title">{{ item.title }}</div>
            <div class="golf-results__item-text">{{ item.text }}</div>
          </div>
        </div>
        <div class="golf-results__info">
          <GolfHeader
              class="golf-results__header"
              :baseOptions="{
                titleText: 'Results',
                titleTextColor: 'var(--case-color-blue)',
              }"
          />
          <div class="golf-results__text-secondary" v-for="(item,i) in descItems" :key="`item-${i}`">
            {{ item }}
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GolfHeader from "./global/GolfHeader";

export default {
  name: "GolfResults",
  components: {GolfHeader},
  data() {
    return {
      descItems: [
        'The TopDevs development team has managed to finish the development of an application that simulates the golf game process. It is able to analyze the gamer\'s progress via shooted videos from the camera using machine learning and deep neural networks technologies.',
        'The app development started from an MVP development and turned into a full-scale product that is going to improve the golfers\' life exponentially.',
        'The accuracy of the received analytical results is tightly connected with the depth of mathematical computations performed by our experienced experts.'
      ],
      items: [
        {
          id: 0,
          percent: '67%',
          title: 'Increased Game Progress',
          text: 'Users are able to track their progress and motivate themselves much deeper.'
        },
        {
          id: 1,
          percent: '35%',
          title: 'Accuracy Improvement',
          text: 'The app allows to train the accuracy of the golf shoots and increase the precision rates.'
        },
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.golf-results {
  position: relative;
  display: flex;
  flex-direction: column;
  padding: 0 0 calc(var(--space-section) * 1);

  &__bg-top {
    position: absolute;
    top: -50%;
    right: -10%;
    z-index: -2;

    @media (max-width: 1199px) {
      display: none;
    }
  }

  &__center-bg {
    position: absolute;
    top: 24%;
    left: 50%;
    transform: translateX(-50%);
    z-index: -1;
    @media (max-width: 1920px) {
      top: 50%;
    }

    @media (max-width: 1440px) {
      top: 70%;
      width: 80%;
    }

    @media (max-width: 360px) {
      top: 83%;
      width: 109%;
    }
  }

  &__row {
    display: flex;
    align-items: flex-end;
    @media (max-width: 768px) {
      flex-direction: column;
    }
  }


  &__item {
    &-left {
      margin-bottom: 4rem;
      padding-right: 80px;
      text-align: left;
      font-weight: 500;
      color: var(--case-color-primary);

      &:last-child {
        margin-bottom: 0;
      }
      @media (max-width: 1200px) {
        padding-right: 20px;
      }
      @media (max-width: 360px) {
        padding-right: 0;
      }
    }

    &-percents {
      margin-bottom: 8px;
      font-size: 12rem;
      @media (max-width: 360px) {
        font-size: 7.2rem;
      }
    }

    &-title {
      margin-bottom: 16px;
      font-size: 4rem;
      line-height: 40px;
      @media (max-width: 1200px) {
        font-size: 2.4rem;
      }
      @media (max-width: 360px) {
        font-size: 1.6rem;
      }
    }

    &-text {
      font-weight: 400;
      font-size: 16px;
      line-height: 24px;
      color: var(--case-color-black);
    }
  }

  &__left {
    width: 60%;
    @media (max-width: 768px) {
     width: 100%;
      margin-bottom: 40px;
    }
  }

  &__info {
    width: 40%;
    @media (max-width: 768px) {
      width: 100%;
    }
  }

  &__header {
    margin-bottom: 2.4rem;
  }

  &__text-secondary {
    margin-bottom: 2.5rem;
    font-weight: 300;
    font-size: 2.4rem;
    line-height:  150%;
    color: var(--case-color-gray-dark-1);
    text-align: left;

    &:last-child,
    &:nth-child(2) {
      margin-bottom: 0;
    }

    @media (max-width: 1200px) {
      font-size: 1.6rem;
    }

    @media (max-width: 576px) {
      font-size: 1.4rem;
    }
  }

}
</style>