<template>
  <div class="golf-solutions" v-scroll-reveal>
    <img class="golf-solutions__bg-right" src="/images/site/portfolio/golf/solutions/figure-right.svg">
    <img class="golf-solutions__bg-left" src="/images/site/portfolio/golf/solutions/figure-left-768.svg">
    <div class="container">
      <div class="golf-solutions__row">
        <div class="golf-solutions__phones">
          <div class="golf-solutions__img-wrapper" v-for="item in images" :key="item.id">
            <picture class="golf-solutions__img">
              <source media="(max-width: 1200px)" :srcset="item.srcImg">
              <img :src="item.srcImg">
            </picture>
          </div>
        </div>
        <div class="golf-solutions__info">
          <GolfHeader
              class="golf-solutions__header"
              :baseOptions="{
                titleText: 'Solutions',
                titleTextColor: 'var(--case-color-blue)',
              }"
          />
          <div class="golf-solutions__text-secondary portfolio-desc" v-for="(item,i) in descr" :key="`item-${i}`">
            {{ item }}
          </div>
          <div class="golf-solutions__img-wrapper-mobile">
            <picture class="golf-solutions__img">
              <source media="(max-width: 360px)" srcset="/images/site/portfolio/golf/solutions/mobile-1-360.png">
              <img src="/images/site/portfolio/golf/solutions/mobile-1-768.png">
            </picture>
          </div>
          <div class="golf-solutions__list-title">During the app development, we have managed to create the following
            major features:
          </div>
          <div class="golf-solutions__list">
            <div class="golf-solutions__item-list" v-for="item in itemsList" :key="item.id">
              <div class="golf-solutions__item-title">{{ item.title }}</div>
              <div class="golf-solutions__item-text">{{ item.text }}</div>
            </div>
          </div>
          <div class="golf-solutions__img-wrapper-mobile">
            <picture class="golf-solutions__img">
              <source media="(max-width: 360px)" srcset="/images/site/portfolio/golf/solutions/mobile-2-360.png">
              <img src="/images/site/portfolio/golf/solutions/mobile-2-768.png">
            </picture>
<!--            <img class="golf-solutions__img" src="/images/site/portfolio/golf/solutions/mobile-2-768.png">-->
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GolfHeader from "./global/GolfHeader";

export default {
  name: "GolfSolutions",
  components: {GolfHeader},

  data() {
    return {

      images: [
        {
          id: 0,
          srcImg: "/images/site/portfolio/golf/solutions/img-5.png",
          srcImg2: "/images/site/portfolio/golf/solutions/img1-1200.png",
        },
        {
          id: 1,
          srcImg: "/images/site/portfolio/golf/solutions/img-6.png",
          srcImg2: "/images/site/portfolio/golf/solutions/img2-1200.png",
        },
      ],

      descr: [
        'Once we\'ve received the inquiry from the client, we\'ve decided to implement the most fundamental components of the app - its MVC architecture and the whole business logic. Once approved, we\'ve started developing the graphical part of the app that required solid mathematical computations to make the user interface as accurate as possible.',
        'Surely, the most important part was to make an SDK using the best practices of artificial intelligence that takes the visuals from the device\'s camera, analyzes every tiny detail, and informs the user about their results.'
      ],

      itemsList: [
        {
          id: 0,
          title: 'Golf game info',
          text: 'The app shows game-related data about various types of golf sticks and other information.'
        },
        {
          id: 1,
          title: 'Performance measurement',
          text: 'The app tracks various performance indicators like shots, power, distance, etc.'
        },
        {
          id: 2,
          title: 'Awards and ratings',
          text: 'Users can achieve various awards based on their achievements or reaching goals.'
        },
        {
          id: 3,
          title: 'Video evaluation',
          text: 'Users can shoot their training and get a detailed analysis based on the results.'
        },
        {
          id: 4,
          title: '',
          text: 'Our app development team has been able to test the hypothesis of how virtual coaching works. Based on the received results after the MVP development, we have continued with full-cycle app development.'
        },
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.golf-solutions {
  position: relative;
  display: flex;
  flex-direction: column;
  padding-bottom: calc(var(--space-section) * 1);

  &__bg-right {
    position: absolute;
    top: 19%;
    right: -35%;
    z-index: -1;

    @media (max-width: 1199px) {
      display: none;
    }
  }

  &__bg-left {
    display: none;
    position: absolute;
    top: 35%;
    left: 0;
    z-index: -1;

    @media (max-width: 768px) {
      display: block;
    }
  }


  &__row {
    display: flex;
    align-items: center;
    @media (max-width: 768px) {
      flex-direction: column;
    }
  }

  &__info {
    width: 40%;
    @media (max-width: 768px) {
      width: 100%;
    }
  }

  &__phones {
    width: 60%;
    @media (max-width: 768px) {
      display: none;
    }
  }

  &__img-wrapper-mobile {
    display: none;

    img {
      img, sourse {
        width: 100%;
      }
    }

    @media (max-width: 768px) {
      display: block;
    }
  }

  &__img-wrapper {
    margin-bottom: 3.2rem;

    &:last-child {
      margin-bottom: 0;
    }
  }

  &__img {
    img, sourse {
      max-width: 768px;
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

    &:first-child {
      margin-bottom: 0;
    }
  }

  &__list-title {
    margin-bottom: 3.2rem;
    font-weight: 500;
    font-size: 3.2rem;
    line-height: 167%;
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
      font-weight: 600;
      letter-spacing: 0.01em;
      @media (max-width: 1200px) {
        font-size: 1.6rem;
      }

      &:last-child {
        margin-bottom: 0;
      }
    }

    &-title {
      margin-bottom: 0.8rem;
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
}

</style>