<template>
  <div class="golf-summary" v-scroll-reveal>
    <img class="golf-summary__bg" src="/images/site/portfolio/golf/summery/figur-bg.png">
    <div class="container">
      <div class="golf-summary__row">
        <div class="golf-summary__info">
          <GolfHeader
              class="golf-summary__header"
              :baseOptions="{
          titleText: 'Project Summary',
          titleTextColor: 'var(--case-color-blue)',
          descText: 'The golf app is a special virtual assistant for golf fans, who can improve their game skills, monitor their own progress, and analyze their own game techniques using machine learning and deep neural networks.',
          asideDescColor: 'var(--case-color-black)',
        }"
          />

          <div class="golf-summary__mobile-image">
            <img
                class="golf-summary__img"
                src="/images/site/portfolio/golf/summery/img-1-768.png"
            >
          </div>

          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Target Audience:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">Golf Players</div>
            </div>
          </div>

          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Platform:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">iOS</div>
            </div>
          </div>

          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Duration:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">October 2021 - Present</div>
            </div>
          </div>
          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Team:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">2 iOS Developers</div>
              <div class="golf-summary__item-list">PM Manager</div>
            </div>
          </div>
          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Services:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">iOS App Development</div>
              <div class="golf-summary__item-list">Artificial intelligence</div>
              <div class="golf-summary__item-list">Machine Learning</div>
              <div class="golf-summary__item-list">Deep Neural Networks</div>
            </div>
          </div>
          <div class="golf-summary__list-wrap">
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">
                <div class="golf-summary__item-title">Tech Stack:</div>
              </div>
            </div>
            <div class="golf-summary__list">
              <div class="golf-summary__item-list">Swift 5.0</div>
              <div class="golf-summary__item-list">MVC/UIKit</div>
              <div class="golf-summary__item-list">CoreGraphics</div>
              <div class="golf-summary__item-list">CoreImage</div>
              <div class="golf-summary__item-list">CoreData</div>
              <div class="golf-summary__item-list">AVKit</div>
              <div class="golf-summary__item-list">Alamofire</div>
              <div class="golf-summary__item-list">Charts SDK</div>
              <div class="golf-summary__item-list">Sockets</div>
            </div>
          </div>

          <div class="golf-summary__mobile-image">
            <img
                class="golf-summary__img"
                src="/images/site/portfolio/golf/summery/img2-1200.png"
            >
          </div>
        </div>

        <div class="golf-summary__img-wrapper">
          <img
              class="golf-summary__img"
              src="/images/site/portfolio/golf/summery/img-3.png"
          >
        </div>

        <div class="golf-summary__phones">
          <div class="golf-summary__img-phones-wrapper" v-for="item in images" :key="item.id">
            <img
                class="golf-summary__img"
                :src="item.srcImg"
            >
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import GolfHeader from "./global/GolfHeader";
import PortfolioBlockBullet from "../global/PortfolioBlockBullet";

export default {
  name: "GolfSummary",
  components: {PortfolioBlockBullet, GolfHeader},
  data() {
    return {
      images: [
        {
          id: 0,
          srcImg: "/images/site/portfolio/golf/summery/img1-1200.png"
        },
        {
          id: 1,
          srcImg: "/images/site/portfolio/golf/summery/img2-1200.png"
        },
      ],
      titles: [
        'Target Audience:',
        'Platform:',
        'Duration:',
        'Team:',
        'Services:',
        'Tech Stack:',
      ],
      itemsList: [
        ['Golf Players'],
        ['iOS'],
        ['October 2021 - Present'],
        ['2 iOS Developers', 'PM Manager'],
        ['iOS App Development', 'Artificial intelligence', 'Machine Learning', 'Deep Neural Networks'],
        ['Swift 5.0', 'MVC/UIKit', 'CoreGraphics', 'CoreImage', 'CoreData', 'AVKit', 'Alamofire', 'Charts SDK', 'Sockets'],
      ],


      list: [
        {
          title: 'Target Audience:',
          items: ['Golf Players'],
        },
        {
          title: 'Platform:',
          items: ['iOS'],
        },
        {
          title: 'Duration:',
          items: ['October 2021 - Present'],
        },
        {
          title: 'Team:',
          items: ['2 iOS Developers', 'PM Manager'],
        },
        {
          title: 'Services:',
          items: ['iOS App Development', 'Artificial intelligence', 'Machine Learning', 'Deep Neural Networks'],
        },
        {
          title: 'Tech Stack:',
          items: ['Swift 5.0', 'MVC/UIKit', 'CoreGraphics', 'CoreImage', 'CoreData', 'AVKit', 'Alamofire', 'Charts SDK', 'Sockets'],
        },
      ]
    }
  }
}
</script>

<style lang="scss" scoped>
.golf-summary {
  position: relative;
  color: var(--case-color-gray-dark-1);
  font-weight: 300;
  font-size: 24px;
  line-height: 32px;

  @media (max-width: 992px) {
    font-size: 20px;
  }

  @media (max-width: 576px) {
    font-size: 16px;
  }

  &__row {
    display: flex;
    align-items: center;
    @media (max-width: 1200px) {

    }

  }

  &__bg {
    position: absolute;
    bottom: 0;
    z-index: -1;
    transform: translateY(5%);


    @media (max-width: 1199px) {
      display: none;
    }
  }

  &__info {
    width: 60%;
    @media (max-width: 768px) {
     width: 100%;
    }
  }

  &__header {
    margin-bottom: 4rem;
  }

  &__list-wrap {
    display: grid;
    grid-template-columns: 0.3fr 0.6fr;
    margin-bottom: 64px;

    &:last-child {
      margin-bottom: 0;
    }

    @media (max-width: 1200px) {
      grid-template-columns: 0.4fr 0.6fr;
      margin-bottom: 40px;
    }
    @media (max-width: 768px) {
      grid-template-columns: 0.4fr 0.6fr;
      margin-bottom: 24px;
    }
    @media (max-width: 568px) {
      grid-template-columns: 0.5fr 0.5fr;
    }
  }

  &__item-list {
    display: flex;
  }

  &__item-title {
    color: var(--case-color-primary);
    font-weight: 600;
  }

  &__img-wrapper {
    padding-top: 120px;
    @media (max-width: 1200px) {
      display: none;
    }
  }

  &__phones {
    display: none;
    @media (max-width: 1200px) {
      display: block;
    }
    @media (max-width: 768px) {
      display: none;
    }
  }

  &__mobile-image {
    display: none;
    @media (max-width: 768px) {
      display: block;
      max-width: 328px;
      margin: 0 auto 20px;
      img {
        width: 100%;
      }

      &:last-child {
        margin: 0 auto 0;
      }
    }
  }

  &__img {
    width: 100%;
  }
}
</style>