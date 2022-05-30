<template>
  <div class="easy-challenges">
    <picture class="easy-challenges__bg">
      <source media="(max-width: 360px)" srcset="/images/site/portfolio/easy/challenges/challenges-bg-360.png">
      <source media="(max-width: 576px)" srcset="/images/site/portfolio/easy/challenges/challenges-bg-576.png">
      <source media="(max-width: 768px)" srcset="/images/site/portfolio/easy/challenges/challenges-bg-768.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/easy/challenges/challenges-bg-992.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/easy/challenges/challenges-bg-1200.png">
      <img src="/images/site/portfolio/easy/challenges/challenges-bg.png" alt="">
    </picture>
    <div class="easy-challenges__content container">
      <div class="easy-challenges__img">
        <img
            class="easy-challenges__img-phones"
            src="/images/site/portfolio/easy/challenges/challenges-phone.png"
        >
      </div>
      <div class="easy-challenges__info">
        <div class="easy-challenges__text-content">
          <h2 class="easy-challenges__title text-h2 portfolio-text-h2">Challenges</h2>
          <div class="easy-challenges__text-secondary portfolio-desc" v-for="(item, i) in items" :key="i">
            {{ item }}
          </div>
          <picture class="easy-challenges__img easy-challenges__img-mobile">
              <source media="(max-width: 360px)" srcset="/images/site/portfolio/easy/challenges/challenges-phone-360.png">
              <source media="(max-width: 991px)" srcset="/images/site/portfolio/easy/challenges/challenges-phone-992.png">
              <img src="/images/site/portfolio/easy/challenges/challenges-phone.png">
          </picture>
          <h2 class="easy-challenges__title text-h2 portfolio-text-h2">Solutions</h2>
          <div class="easy-challenges__text-secondary portfolio-desc">
            We started the development of the launcher from scratch. The initial app development stage required us to
            make a specific app design. Our focus here was on creating eye-catching designs with great attention to user
            experience. This way we were able to achieve easy-to-use navigation for customers.
          </div>
        </div>
      </div>
    </div>
  </div>

</template>

<script>

export default {
  name: "EasyChallenges",
  data() {
    return {
      items: [
        'There are 25 million older people in Europe and all of them are willing to be completely active in the life of modern society. No wonder, there are many initiatives to help this category of the population have the same opportunities as the rest of the people.',
        'In order to serve this demanding market, the client has turned to us with an idea to simplify their perception of modern technologies. The challenge is quite hard but completely reachable.',
        'To improve our target audience\'s experience while using a mobile phone, we had to make simple navigation, provide the possibility of effortless actions, easily exchange messages with the closest people, etc.'
      ]
    }
  }
}
</script>

<style lang="scss">
.easy-challenges {

  display: flex;
  flex-direction: column;
  min-height: 80rem;
  position: relative;
  padding: calc(var(--space-section) * 1.6) 0;

  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;

      @media (max-width: 1400px) {
        height: 105%;
      }

      @media (max-width: 991px) {
        height: 100%;
      }
    }
  }

  &__content {
    flex-grow: 1;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;

    @media(max-width: 768px) {
      flex-direction: column;
    }
  }

  &__info {
    width: calc(65% - var(--container-padding));

    @media (max-width: 1299px) {
      width: calc(49% - var(--container-padding));
    }

    @media (max-width: 991px) {
      //text-align: center;
    }
    @media (max-width: 768px) {
      width: 100%;
    }
  }

  &__text-content {
    color: #FFFFFF;
  }

  &__title {
    margin-bottom: 2.5rem;
    @media (max-width: 768px) {
      text-align: center;
    }
  }

  &__text-secondary {
    margin-bottom: 2.5rem;
    @media (max-width: 768px) {
      text-align: center;
    }
  }

  &__img {
    padding-right: 5rem;
    @media (max-width: 768px) {
      padding-right: 0;
      max-width: 27rem;
    }
  }

  &__img-phones {
    width: 100%;
    @media (max-width: 768px) {
      display: none;
    }
  }

  &__img-mobile {
    display: none;
    @media (max-width: 768px) {
      display: block;
      margin: 0 auto 2rem;
      width: 100%;
      img {
        margin: 0 auto;
      }
    }
  }
}

</style>