<template>
  <div class="solutions-section-item" v-scroll-reveal>
    <div 
      v-if="titleText === 'Industry Package'"
      class="solutions-section-item__bg-circle"
    />

    <img 
      class="solutions-section-item__mockup"
      :src="imgURL"
    >

    <PortfolioAside 
      class="solutions-section-item__aside"
      :titleText="titleText"
      :descText="descText"
      titleColor="#ff8351"
      dividerColor="#ff8351"
      descSmall
    />
  </div>
</template>

<script>
import PortfolioAside from '../global/PortfolioAside'

export default {
  components: {PortfolioAside},

  props: {
    imgURL: String,
    titleText: String,
    descText: String
  }
}
</script>

<style lang="scss">
  .solocator .solutions-section-item {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;

    @media (max-width: 880px) and (min-width: 551px) {
      align-items: center;    

      &:nth-child(even) {
        flex-direction: row-reverse;

        img {
          margin-left: 5%;
        }
      }
    }

    @media (max-width: 550px) {
      flex-direction: column;
    }

    &__bg-circle {
      position: absolute;
      top: 10%;
      right: 90%;
      width: 48rem;
      height: 48rem;
      border-radius: 50%;
      background: #E5FFD1;
      z-index: -1;

      @media (max-width: 1600px) {
        width: 27vw;
        height: 27vw;
      }

      @media (max-width: 880px) {
        top: -15%;
        right: 25%;
      }

      @media (max-width: 550px) {
        display: none;
      }
    }

    &__mockup {
      width: 43%;

      @media (max-width: 1450px) {
        width: 32rem;
      }

      @media (max-width: 991px) {
        width: 25rem;
      }

      @media (max-width: 550px) {
        transform: translateX(7%);
        margin: 0 auto;
      }
    }

    &__aside {
      width: 47%;

      @media (max-width: 1450px) {
        width: 55%;
        margin-right: auto;
      }

      @media (max-width: 880px) {
        width: 100%;
      }
    }
  }
</style>