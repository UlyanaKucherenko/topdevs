<template>
  <div class="bark-challenges">
    <div class="container">
      <div class="bark-challenges-content">
        <PortfolioHeader
          class="bark-challenges__header"
          titleText="Challenges"
          titleTextColor="var(--case-color-green)"
          :descText="[
            `The BabelBark story has begun with two software developers who really loved their dogs so they've created a special app. As everyone enjoyed it, they've decided to share it with the whole world.`,
            `The client has challenged us with an existing app that was meant to help the dog sitters take care of pets while the dog owners were on vacation. We had to help the client's development team to make the app work faster, safer, and extend its feature set.`,
            `The application was meant to connect pet parents with veterinary clinics and pet businesses to take care of dogs and make their lives healthier and happier`
          ]"
          headerColumnBreakpoint
          titleUppercase
        />

        <img 
          class="bark-challenges-content__icon-dots"
          src="/images/site/portfolio/bark/challenges/icon-dots.svg" alt="" 
        >
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader}
}
</script>

<style lang="scss">
  .bark-challenges {
    margin-bottom: 18rem;

    @media (max-width: 1400px) {
      margin-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 8rem;
    }

    &-content {
        --offset: 2.5rem;
      position: relative;
      margin-left: var(--offset);
      padding: 9.5rem;
      background: #ECFBF3;
      border-radius: 20px;
    
      &:before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        top: var(--offset);
        left: calc(var(--offset) * -1);
        border: 1px solid var(--case-color-green);
        border-radius: 2rem;
      }

      @media (max-width: 1400px) {
        padding: 6.5rem;
      }

      @media (max-width: 1199px) {
        --offset: 2rem;
        padding: 6rem;
      }

      @media (max-width: 991px) {
        --offset: 1.5rem;
        padding: 5rem;
      }

      @media (max-width: 575px) {
        --offset: 1rem;
        width: calc(100% + var(--offset));
        padding: 3rem;
        margin-left: 0;
        
      }

      &__icon-dots {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 23.3%;
        transform: translate(25%, 25%);

        @media (max-width: 575px) {
          display: none;
        }
      }
    }

    &__header {
      width: 71%;

      @media (max-width: 1400px) {
        width: 81%;
      }

      @media (max-width: 575px) {
        width: 100%;
      }
    }
  }
</style>