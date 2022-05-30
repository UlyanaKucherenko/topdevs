<template>
  <div class="golf-challenges" v-scroll-reveal>
    <img class="golf-challenges__bg-right" src="/images/site/portfolio/golf/challenges/figur-top-bg.png">
    <img class="golf-challenges__bg-left" src="/images/site/portfolio/golf/challenges/figur-left-bg.svg">
    <div class="container">
      <div class="golf-challenges__row">
        <div class="golf-challenges__info">
          <GolfHeader
              class="golf-challenges__header"
              :baseOptions="{
                titleText: 'Challenges',
                titleTextColor: 'var(--case-color-blue)',
              }"
          />
          <div class="golf-challenges__text-secondary portfolio-desc" v-for="(item,i) in descr" :key="`item-${i}`">
            {{ item }}
          </div>
          <img class="golf-challenges__img-figure-right" src="/images/site/portfolio/golf/challenges/figure-right-768.svg">
          <div class="golf-challenges__list-title">Among the most important challenges are:</div>
          <div class="golf-challenges__list">
            <div class="golf-challenges__item-list" v-for="item in itemsList" :key="`${item}-${item.id}`">
              <div class="golf-challenges__item-title">{{ item.title }}</div>
              <div class="golf-challenges__item-text">{{ item.text }}</div>
            </div>
          </div>
        </div>
        <div class="golf-challenges__img-wrapper">
          <picture class="golf-challenges__img">
            <source media="(max-width: 360px)" srcset="/images/site/portfolio/golf/challenges/img-360.png">
            <source media="(max-width: 768px)" srcset="/images/site/portfolio/golf/challenges/img-768.png">
            <source media="(max-width: 1201px)" srcset="/images/site/portfolio/golf/challenges/img-1200.png">
            <img src="/images/site/portfolio/golf/challenges/img-4.png">
          </picture>
        </div>
      </div>
    </div>
  </div>

</template>

<script>

import GolfHeader from "./global/GolfHeader";

export default {
  name: "GolfChallenges",
  components: {GolfHeader},
  data() {
    return {

      descr: [
        'To master the game skills a person needs to track progress and see intermediate results. That\'s what our client thought and decided to create a set of online products dedicated to training various physical skills. The golf game was one of those. It resulted in an idea to make a golf app where the recorded videos are analyzed to show the user\'s progress in detail.',
        'We\'ve realized that to solve the challenge we need to create a special SDK able to analyze the received data and the external part of the application with architecture, graphical part, and data storage and processing.'
      ],

      itemsList: [
        {
          id: 0,
          title: 'Architecture and business logic building',
          text: 'Before the actual app implementation, the development of app architecture and business logic is of crucial importance.'
        },
        {
          id: 1,
          title: 'Graphics rendering with math calculations',
          text: 'The pixel-perfect visualization of the app graphics requires extensive mathematical calculations.'
        }, {
          id: 2,
          title: '',
          text: 'Another challenge was to implement the core functionality using innovative technologies like machine learning and deep neural networks. Our ultimate task was to make an MVP and continue developing a full-scale app.'
        },
      ]
    }
  }
}
</script>

<style lang="scss">
.golf-challenges {
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 80rem;
  padding: calc(var(--space-section) * 1) 0 calc(var(--space-section) * 1);

  &__bg-right {
    position: absolute;
    top: -10%;
    right: 0;

    @media (max-width: 1200px) {
      display: none;
    }
  }

  &__bg-left {
    position: absolute;
    bottom: -24%;
    left: 0;

    @media (max-width: 1199px) {
      //display: none;
    }
    @media (max-width: 768px) {
      display: none;
    }
  }

  &__img-figure-right {
    display: none;
    position: absolute;
    top: 10%;
    right: -10%;
    z-index: -1;
    @media (max-width: 768px) {
      display: block;
    }
    @media (max-width: 400px) {
      right: -50%;
    }
  }

  &__row {
    display: flex;
    align-items: flex-start;
    text-align: left;

    @media (max-width: 768px) {
      flex-direction: column;
    }
  }


  &__info {
    position: relative;
    width: 60%;
    @media (max-width: 768px) {
      width: 100%;
    }
  }

  &__header {
    margin-bottom: 2.4rem;
  }

  &__text-secondary {
    margin-bottom: 2.5rem;
    font-weight: 400;
    font-size: 1.6rem;
    line-height: 24px;
    text-align: left;
  }

  &__list-title {
    margin-bottom: 3.2rem;
    font-weight: 500;
    font-size: 3.2rem;
    line-height: 150%;
    color: var(--case-color-gray-dark-1);
    @media (max-width: 1200px) {
      font-size: 2.4rem;
    }
  }

  &__list {
    margin-bottom: 3.2rem;
  }

  &__item {

    &-list {
      margin-bottom: 3.2rem;
      line-height: 24px;
      font-weight: 500;
      letter-spacing: 0.01em;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &-title {
      margin-bottom: 1.6rem;
      font-size: 2.4rem;
      color: var(--case-color-primary);
      @media (max-width: 1200px) {
        font-size: 1.6rem;
      }
    }

    &-text {
      font-weight: 400;
      @media (max-width: 1200px) {
        font-size: 1.6rem;
      }
    }
  }

  &__img-wrapper {
    padding-left: 4rem;
    @media (max-width: 768px) {
      margin: 0 auto;
      padding-left: 0;
    }
  }

  &__img {
    img, sourse {
      width: 100%;
    }
  }
}

</style>