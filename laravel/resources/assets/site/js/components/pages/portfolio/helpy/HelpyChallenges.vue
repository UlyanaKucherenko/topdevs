<template>
  <div class="helpy-challenges">
    <div class="container">
      <div class="helpy-challenges__content-wrapper">
        <div class="helpy-challenges__bg-circle-corner-left"/>
        <div class="helpy-challenges__bg-circle-bottom"/>

        <div class="helpy-challenges__content">
          <HelpyHeader
            class="helpy-challenges__header"
            :headerPropsBase="{
              titleText: 'challenges',
              descText: `Healthcare staff is always challenged to keep thousands of complicated terms in mind. That's what terrified our client who has decided to create a medical handbook that will store all the medical terms, disorders overview, drug description, and treatment methods in one place.`,
              headerColumnBreakpoint: true,
              isCentered: true
            }"
          />

          <div class="helpy-challenges__text helpy-text-accent text-center portfolio-desc">
            Our major task was to ensure fast operating, perfect database response, and pleasant user experience. Obviously, the app should not only present the complex search results but be intuitively understandable for its users.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import HelpyHeader from './global/HelpyHeader'

export default {
  components: {HelpyHeader}
}
</script>

<style lang="scss">
  .helpy-challenges {
    margin-bottom: 20rem;

    @media (max-width: 1400px) {
      margin-bottom: 15rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 8rem;
    }

    &__content {
      display: flex;
      flex-direction: column;
      align-items: center;
    
      &-wrapper {
        position: relative;
        overflow: hidden;
        padding: 8rem 0;
        background: linear-gradient(128.04deg, #F2F2F2 0%, #F5F5F5 98.91%);
        box-shadow: inset -12px -12px 30px rgba(255, 255, 255, 0.8), inset 12px 12px 30px rgba(0, 0, 0, 0.04);
        border-radius: 10px;
        z-index: 0;

        @media (max-width: 1400px) {
          padding: 7rem 0;
        }

        @media (max-width: 1199px) {
          padding: 6rem 0;
        }

        @media (max-width: 991px) {
          padding: 5rem 0;
        }

        @media (max-width: 575px) {
          padding: 4rem 0;
        }
      }
    }

    &__header {
      width: 57%;
      margin-bottom: var(--offset-header-to-text-accent);
    
      @media (max-width: 1400px) {
        width: 73%;
      }

      @media (max-width: 575px) {
        width: calc(100% - 3rem);
      }
    }

    &__text {
      width: 63%;

      @media (max-width: 1400px) {
        width: 71%;
      }

      @media (max-width: 575px) {
        width: calc(100% - 3rem);
      }
    }

    &__bg-circle {
      &-corner-left {
        --size: 8vw;
        position: absolute;
        left: 0;
        top: 0;
        width: var(--size);
        height: var(--size);
        min-width: 5rem;
        min-height: 5rem;
        border-radius: 50%;
        background: var(--case-color-orange);
        transform: translate(-20%, -20%);
        z-index: -1;

        @media (max-width: 991px) {
          --size: 13.8vw;
          max-width: 11rem;
          max-height: 11rem;
        }
      }

      &-bottom {
        --size: 25vw;
        position: absolute;
        left: 5%;
        bottom: 0;
        width: var(--size);
        height: var(--size);
        min-width: 28.2rem;
        min-height: 28.2rem;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.4);
        transform: translate(0, 33%);
        z-index: -1;
      }
    }
  }
</style>