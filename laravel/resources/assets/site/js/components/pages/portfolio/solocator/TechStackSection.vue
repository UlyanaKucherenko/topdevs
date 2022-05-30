<template>
  <div class="tech-stack-section">
    <div class="tech-stack-section__header container">
      <PortfolioHeader
        titleText="Tech Stack"
        titleImg="/images/site/portfolio/solocator/tech/title-square.svg"
        titleBgColor="#FFFFFF"
        dividerColor="#4B4B4B"
      />

      <img 
        class="tech-stack-section__fig-squares"
        src="/images/site/portfolio/solocator/tech/fig-squares.svg" alt="" 
      >
    </div>

    <div class="container">
      <div class="tech-stack-section__list">
        <div 
          class="tech-stack-section__item text-lg portfolio-text-lg"
          v-for="(item, index) in items" :key="index"
          v-scroll-reveal="{delay: index * 100}"
        >
          {{ item }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  data() {
    return {
      items: ['Objective-C', 'Kotlin', 'CoreLocation', 'KML', 'Swift', 'Vue.js', 'Dropbox', 'KMZ', 'Java', 'CoreData', 'Google Drive']
    }
  },
}
</script>

<style lang="scss">
  .solocator .tech-stack-section {
    position: relative;
    padding: calc(var(--space-unit) * 15) 0;
    background: #F3F3F3;

    &__header {
      position: absolute;
      left: 0;
      right: 0;
      top: calc(var(--space-unit) * 10);
      width: 100%;

      @media (max-width: 630px) {
        position: static;
        padding-bottom: calc(var(--space-unit) * 7.4);
      }
    }

    &__fig-squares {
      position: absolute;
      top: 47%;
      left: 26.5%;
      width: 5rem;

      @media (max-width: 1199px) {
        width: 4rem;
      }

      @media (max-width: 768px) {
        width: 3.5rem;
      }

      @media (max-width: 575px) {
        width: 3rem;
      }

      @media (max-width: 630px) {
        top: calc(var(--space-unit) * 15);
        right: var(--container-padding);
        left: auto;
      }
    }

    &__list {
      width: 59%;
      margin-left: auto;
      display: grid;
      justify-content: space-between;
      grid-template-columns: repeat(4, max-content);
      grid-template-rows: repeat(3, 1fr);
      grid-row-gap: calc(var(--space-unit) * 3);

      @media (max-width: 930px) {
        grid-template-columns: repeat(3, max-content);
      }

      @media (max-width: 850px) {
        grid-template-columns: repeat(2, max-content);
        justify-content: space-around;
      }

      @media (max-width: 630px) {
        margin-left: 0;
        width: 100%;
      }
    }

    &__item {
      position: relative;
      font-weight: 600;
      line-height: 150%;
      letter-spacing: 0.03em;

      &::before {
        content: '';
        width: .8rem;
        height: .8rem;
        background-color: #FF8351;
        position: absolute;
        top: 50%;
        left: -1rem;
        transform: translate(-100%, -50%);
      }
    }
  }
</style>