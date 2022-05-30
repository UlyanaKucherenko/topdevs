<template>
  <div class="results-section">
    <div class="container">
      <div class="results-section-header" v-scroll-reveal>
        <h2 class="results-section-header__title">
          results
          <img 
            class="results-section-header__title-bg"
            src="/images/site/portfolio/solocator/results/title-square.svg"
          >
        </h2>
        <div class="results-section__list">
          <div 
            class="results-section__item"
            v-for="(item, index) in items" :key="index"
            v-scroll-reveal="{delay: 100 * index}"
          >
            <h3 class="results-section__item-title  portfolio-title"> {{ item.title }} </h3>
            <div class="results-section__item-desc portfolio-desc"> {{ item.desc }} </div>
          </div>
        </div>
      </div>

      <img
        v-if="windowWidth > 767"
        class="results-section__big-mockup"
        src="/images/site/portfolio/solocator/results/big-mockup.png"
        v-scroll-reveal
      >
      <img
        v-else
        class="results-section__big-mockup"
        src="/images/site/portfolio/solocator/results/big-mockup-991.png"
        v-scroll-reveal
      >

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [
        {
          title: 'Top 20 Navigation App on App Store',
          desc: 'Solocator app has gained a high ranking on the App Store, taking the 19th position in the Navigation category.'
        },
        {
          title: 'Continuous Support',
          desc: 'Our team continues maintaining and supporting the application for over 8 years already, upgrading it with extensive functionality.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .solocator .results-section {
    padding-top: calc(var(--space-unit) * 15);
    margin-bottom: calc(var(--space-unit) * 20);
    background: linear-gradient(179.87deg, #E2FFCC 0.15%, rgba(226, 255, 204, 0)  99.41%);

    &-header {
      display: flex;
      align-items: flex-start;
      justify-content: space-between;
      margin-bottom: calc(var(--space-unit) * 10);

      @media (max-width: 991px) {
        flex-direction: column;
      }

      &__title {
        position: relative;
        z-index: 0;
        font-weight: 800;
        font-family: var(--Muli);
        text-transform: uppercase;
        width: fit-content;

        @media (min-width: 1200px) {
          font-size: 6rem;
        }

        @media (max-width: 991px) {
          margin-bottom: calc(var(--space-unit) * 17);
        }
      
        &-bg {
          position: absolute;
          z-index: -1;
          width: 70%;
          left: 80%;
          top: -40%;
        }
      }
    }

    &__list {
      width: 45%;

      @media (max-width: 991px) {
        width: 100%;
      }
    }

    &__item {
      margin-bottom: calc(var(--space-unit) * 4);

      &-title {
        color: #FF8351;
        margin-bottom: 1rem;
      }

      &-desc {
        color: #1F2718;
      }
    }

    &__big-mockup {
      width: 105%;
    }
  }
</style>