<template>
  <div class="easy-results">
    <picture class="easy-results__bg">
      <source media="(max-width: 360px)" srcset="/images/site/portfolio/easy/results/results-bg-360.png">
      <source media="(max-width: 576px)" srcset="/images/site/portfolio/easy/results/results-bg-576.png">
      <source media="(max-width: 768px)" srcset="/images/site/portfolio/easy/results/results-bg-768.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/easy/results/results-bg-992.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/easy/results/results-bg-1200.png">
      <img src="/images/site/portfolio/easy/results/results-bg.png" alt="">
    </picture>
    <div class="easy-results__content container">
      <div class="easy-results__info">
        <h2 class="easy-results__title text-h2 portfolio-text-h2">Results</h2>
        <div class="easy-results__desc portfolio-desc">
          The TopDevs development team has helped the client to create a launcher for Android OS that makes the life of
          elderly people easier and more substantive. The developed design adopts the user experience specifically for
          the needs of older people.<br>
          Such Android launcher allows elderly people to:
        </div>
        <ul class="easy-results__list portfolio-desc">
          <li class="easy-results__item-list" v-for="(item, i) in items" :key="`item+${i}`">
            {{ item }}
          </li>
        </ul>
        <div class="easy-results__desc portfolio-desc">
          In the end, we have provided full-cycle mobile app development services to deliver an Android launcher that is
          able to improve the lives of 25 million people just across Europe, not to mention the whole other world.
        </div>

      </div>
      <div class="easy-results__img">
        <img
            class="easy-results__img-phones"
            src="/images/site/portfolio/easy/results/mob-results.png"
        >
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "EasyResults",
  data() {
    return {
      items: [
        'improve the accessibility of modern technologies,',
        'sustain the level of public and social activity,',
        'maintain better health state,',
        'stay connected with the closest circle of people.'
      ]
    }
  }
}
</script>

<style lang="scss">

.easy-results {
  min-height: 60rem;
  display: flex;
  flex-direction: column;
  color: #FFFFFF;
  position: relative;
  padding: 20rem 0 10rem;

  @media (max-width: 768px) {
    padding: 10rem 0 10rem;
  }

  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }
  }

  &__content {
    flex-grow: 1;
    display: flex;
    align-items: center;
    position: relative;

    @media (max-width: 768px) {
      flex-direction: column-reverse;
    }
  }

  &__info {
    width: calc(90% - var(--container-padding));
    text-align: left;
    padding-right: 9rem;

    @media (max-width: 768px) {
      width: 100%;
      padding-right: 0;
    }
  }

  &__title {
    text-transform: capitalize;
    margin-bottom: 4rem;
    font-family: var(--Mulish);

    @media (max-width: 1199px) {
      margin-bottom: 3.5rem;
    }

    @media (max-width: 767px) {
      margin-bottom: 3rem;
    }
  }

  &__desc {
    max-width: 75rem;
    margin-bottom: calc(var(--space-unit) * 0.3);

    &:last-child {
      margin-bottom: 0;
    }

    @media(max-width: 1199px) {
      max-width: 66rem;
    }

    @media (max-width: 991px) {
      max-width: none;
    }
  }

  &__list {
    padding-left: 2.5rem;
    text-align: left;
    margin-bottom: calc(var(--space-unit) * 0.3);
  }

  &__item-list {
    list-style: disc;
  }

  &__img-phones {
    width: 90%;
    @media (max-width: 768px) {
      margin: 0 auto 2rem;
      width: 66%;
    }
  }
}

</style>