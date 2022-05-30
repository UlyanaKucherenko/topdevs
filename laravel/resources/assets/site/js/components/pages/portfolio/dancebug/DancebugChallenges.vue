<template>
  <div class="dancebug-challenges">
    <div class="container">
      <div class="dancebug-challenges__content">
        <DancebugHeader
          class="dancebug-challenges__header"
          titleTextColor="black"
          :isCentered="true"
          :baseOptions="{
          titleText: 'Challenges',
          descText: ''
        }"/>
        <div class="dancebug-challenges__number">01</div>
        <div class="dancebug-challenges__asides-list">
          <PortfolioAside
            class="dancebug-challenges__asides-item"
            v-for="(item, index) in asidesList" :key="index"
            :descText="item"
          />
        </div>
        <div class="dancebug-challenges__mockup">
          <img
            class="dancebug-challenges__mockup-fig"
            src="/images/site/portfolio/dancebug/challenges/fig1.png"
          />
          <img
            class="dancebug-challenges__mockup-img"
            src="/images/site/portfolio/dancebug/challenges/challenges-mockup1.png"
          />
        </div>

        <div class="dancebug-challenges__number">02</div>
        <div class="dancebug-challenges__asides-list">
          <PortfolioAside
            class="dancebug-challenges__asides-item"
            v-for="(item, index) in asidesListSecond" :key="index"
            :descText="item"
          />
        </div>
        <img
          class="dancebug-challenges__figur"
          src="/images/site/portfolio/dancebug/challenges/fig1.png"
        />

      </div>
    </div>
  </div>
</template>

<script>
import DancebugHeader from '@/js/components/pages/portfolio/dancebug/global/DancebugHeader'
import PortfolioAside from '@/js/components/pages/portfolio/global/PortfolioAside'

export default {
  name: "DancebugChallenges",
  components: {DancebugHeader, PortfolioAside},
  data() {
    return {
      asidesList: [
        'Professional dance contests are usually beautiful events where dancers from various locations try to show their dancing skills best, outperform their competitors, gain top places, precious prizes, and worldwide fame. However, it requires a lot of routine activities to actually hold and manage such events - from announcing the event to the community to calculating the final scores.',
        'In order to make the whole process simple and more enjoyable for its organizers and participants, our client has decided to develop a web application. Its main focus was to automate the evaluation process and provide a convenient web platform serving the goals of each party.',
        'We have allocated the main issues that strike each side of dancing events. Dancers often complain about the lack of transparency in the evaluation process. Also, it becomes hard to get video copies of their performances.',
      ],
      asidesListSecond: [
        'Studio owners who back up their dancers are also not so confident about the scoring results. Not to mention that finding such competitions and registering for them may be a real pain at times. But the main load falls on the shoulders of dance contest organizers. They should make the whole competition activities simple for all other participants including dancers and judges.',
        'Each and every step should be counted - from the moment they announce the event to the final moments of the contest when the winner takes its trophy.',
        'So our goal was not only to actually perform the web app development process from end to end but make sure that every user role is consistent within the app and gets the necessary pool of required functionality.'
      ]
    }
  },
}
</script>

<style lang="scss">
.dancebug-challenges {
  position: relative;
  z-index: 1;
  padding-bottom: calc(var(--space-unit) * 12);

  &__header {
    margin-bottom: var(--portfolio-header__title-margin);
    color: black;
    @media (max-width: 576px) {
      text-align: left;
    }
  }

  &__content {
    position: relative;
    padding: 0 100px;

    @media (max-width: 1200px) {
      padding: 0;
    }
  }

  &__number {
    position: absolute;
    font-weight: bold;
    font-size: 21rem;
    line-height: 80%;
    text-align: center;
    color: var(--case-color-pink);

    @media (max-width: 576px) {
     display: none;
    }
  }

  &__asides {
    &-list {
      width: 100%;
      margin: 0 auto;
      margin-bottom: calc(var(--space-unit) * 12);

      @media (max-width: 991px) {
        width: 100%;
        margin: 0 auto;
        margin-bottom: 3.5rem;
      }

      &:last-child {
        background-color: #00c853;
        margin-bottom: 0;
      }
    }

    &-item {
      margin-bottom: calc(var(--space-unit) * 3.5);

      &:first-child {
        padding-left: 30rem;
        width: 90%;
      }

      &:last-child {
        margin-bottom: 0;
      }

      @media (max-width: 800px) {
        &:first-child {
          padding-left: 50%;
          width: 100%;
        }
      }

      @media (max-width: 576px) {
        &:first-child {
          padding-left: 0;
          width: 100%;
        }
      }
    }
  }

  &__mockup {
    width: 100%;
    position: relative;
    margin-bottom: calc(var(--space-unit) * 10);

    &-fig {
      margin: 0 auto;
      position: absolute;
      top: -210px;
      right: -103px;
      z-index: -1;
      width: 100%;

      @media (max-width: 991px) {
        top: 0;
        right: -50%;
      }

    }

    &-img {
      width: 90%;
      margin: 0 auto;
      filter: drop-shadow(0px 0px 18px rgba(0, 0, 0, 0.18));
    }
  }

  &__figur {
    position: absolute;
    left: -70%;
    bottom: -33%;
    z-index: -1;

    @media (max-width: 1200px) {
      left: -90%;
      bottom: -66%;
    }

    @media (max-width: 991px) {
      left: -98%;
      bottom: -79%;
    }

    @media (max-width: 576px) {
      display: none;
    }
  }
}

</style>