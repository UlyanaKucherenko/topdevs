<template>
  <div class="easy-about" v-scroll-reveal="{distance: 0}">
    <picture class="easy-about__bg">
      <source media="(max-width: 360px)" srcset="/images/site/portfolio/easy/about/about-bg-360.png">
      <source media="(max-width: 576px)" srcset="/images/site/portfolio/easy/about/about-bg-576.png">
      <source media="(max-width: 768px)" srcset="/images/site/portfolio/easy/about/about-bg-768.png">
      <source media="(max-width: 992px)" srcset="/images/site/portfolio/easy/about/about-bg-992.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/easy/about/about-bg-1200.png">
      <img src="/images/site/portfolio/easy/about/about-bg.png" alt="">
    </picture>
    <div class="easy-about__content container">
      <div class="easy-about__row">
        <div class="easy-about__info">
          <div class="easy-about__title text-h1 portfolio-text-h1">Easy Phone <br/> Launcher</div>
          <h1 class="easy-about__subtitle portfolio-title portfolio-about-info__subtitle">
            Creating an Application For Older Mobile Phone Users
          </h1>
          <div class="easy-about__desc portfolio-desc">
            How TopDevs performed a full development cycle Launcher for Android to improve the lives of elderly people.
            Now they can make calls, surf the web and greet loved ones on special occasions easily. In case of
            emergency, close people will be notified with an SOS text message.
          </div>
        </div>
        <div class="easy-about__img-container">
          <img
              class="easy-about__img"
              src="/images/site/portfolio/easy/about/phones.png"
          >
        </div>
      </div>
      <div class="easy-about__list">
        <div v-for="item in list" :key="`item-${item.title}`" class="easy-about__item-list">
          <div class="easy-about__item-title">{{ item.title }}</div>
          <div class="easy-about__item-text">{{ item.text }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "EasyAbout",
  data() {
    return {
      list: [
        {
          title: 'Platform',
          text: 'Android'
        },
        {
          title: 'Duration',
          text: '2021 - Present'
        },
        {
          title: 'Industry',
          text: 'Media & Entertainment'
        },
      ]
    }
  }
}
</script>

<style lang="scss">
.easy-about {
  height: 100vh;
  min-height: 70rem;
  max-height: 120rem;
  padding-top: calc(var(--header-height) + 2%);
  display: flex;
  flex-direction: column;
  color: var(--case-color-white);
  position: relative;
  padding-bottom: calc(219px - (max(100vh, 900px) / 1080) * 74);

  @media (max-width: 1199px) {
    height: auto;
    min-height: unset;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-top: calc(var(--header-height) + 5%);
    padding-bottom: 21%;
  }

  @media (max-width: 991px) {
    padding-top: calc(var(--header-height) + 10%);
    padding-bottom: 18%;
  }

  @media (max-width: 767px) {
    padding-top: calc(var(--header-height) + 3%);
  }

  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;

      @media(max-width: 1200px) {
        height: 90%;
      }

      @media(max-width: 991px) {
        height: 100%;
      }
    }
  }

  &__content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    @media(max-width: 768px) {
      flex-direction: column;
    }
  }

  &__row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;

    @media(max-width: 768px) {
      flex-direction: column;
      margin-bottom: 5rem;
    }
  }

  &__info {
    width: 65%;
    margin-right: 5%;
    text-align: left;

    @media (max-width: 768px) {
      width: 100%;
      margin-right: 0;
      text-align: center;
    }
  }

  &__title {
    white-space: nowrap;
    text-transform: capitalize;
    font-weight: 900;
    margin-bottom: 4rem;
    font-size: 10rem;
    color: rgba(62, 105, 234, 0.8);
    text-shadow: 0 0 9px white;
    -webkit-text-stroke: 1px white;
    text-space: nowrap;

    @media (max-height: 855px) {
      font-size: 6rem;
      margin-bottom: 2rem;
    }

    @media (max-width: 1300px) {
      font-size: 9rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 3.5rem;
      font-size: 6rem;
    }
    @media (max-width: 992px) {
      margin-bottom: 3.5rem;
      font-size: 5.4rem;
    }

    @media (max-width: 767px) {
      margin-bottom: 3rem;
    }
    @media (max-width: 360px) {
      font-size: 4rem;
    }
  }

  &__subtitle {
    position: relative;
    margin-bottom: 2rem;
    text-transform: capitalize;

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
    max-width: 74rem;
    @media (max-width: 1199px) {
      padding-bottom: 5rem;
    }

    @media (max-width: 767px) {
      max-width: 100%;
    }
  }

  &__desc-link {
    color: var(--case-color-white);
    text-decoration: underline;
  }

  &__list {
    display: grid;
    grid-template-columns: repeat(3, max-content);
    row-gap: 1rem;
    column-gap: 4.8rem;
    //margin-top: calc(-100px + 2%);

    @media(max-width: 768px) {
      column-gap: 2.8rem;
    }
    @media (max-width: 576px) {
      column-gap: 0;
      grid-template-columns: 1fr 1fr;
    }
    @media (max-width: 360px) {
      grid-template-columns: 1fr;
    }
  }

  &__item-list {
    font-size: 24px;
    text-align: left;
    //@media (max-width: 1199px) {
    //  color:var(--case-color-black);
    //}
    @media (max-width: 991px) {
      //color: var(--case-color-white);
      font-size: 20px;
    }
  }

  &__item-title {
    margin-bottom: 1.2rem;
  }

  &__item-text {
    font-weight: 600;
    text-transform: uppercase;
  }

  &__img-container {
    position: relative;
    width: 25%;
    margin-right: 5%;
    height: 90%;

    @media (max-width: 767px) {
      margin-right: 0;
      width: 100%;
      max-width: 250px;
    }
  }

  &__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
    transform: scale(1.2);

    @media (max-width: 1400px) {
      transform: unset;
      position: relative;
    }

    @media (max-width: 1199px) {
      //padding-bottom: 12%;
    }
    @media (max-width: 991px) {
      padding-bottom: 0;
    }
  }

  &__img-phones {
    width: 100%;
    @media (max-width: 1400px) {
      width: 90%;
      margin: 2rem auto 0;
    }
    @media (max-width: 991px) {
      width: 60%;
    }
  }
}
</style>
