<template>
  <div class="artv-challenges">
    <div class="container">
      <PortfolioHeader
        class="artv-challenges__header"
        titleText="Challenges"
        titleUppercase
      />

      <div class="artv-challenges-list">
        <div 
          class="artv-challenges-item"
          v-for="(item, index) in items" :key="index"
        >
          <div 
            v-if="windowWidth > 575"
            class="artv-challenges-item__number"
          >
            <div class="artv-challenges-item__number-text">
              0{{ index + 1 }}
            </div>
            
            <img 
              class="artv-challenges-item__number-bg"
              src="/images/site/portfolio/artv/challenges/bg-icon.svg" alt="" 
            >
          </div>

          <ArtvBlockBase
            class="artv-challenges-item__text"
            v-bind="item"
            color="var(--case-color-primary)"
          >
            <template 
              #title
              v-if="windowWidth < 576"
            >
              <div class="artv-challenges-item__number">
                <div class="artv-challenges-item__number-text">
                  0{{ index + 1 }}
                </div>

                <img 
                  class="artv-challenges-item__number-bg"
                  src="/images/site/portfolio/artv/challenges/bg-icon.svg" alt="" 
                >
              </div>
            </template>
          </ArtvBlockBase>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ArtvBlockBase from '@/js/components/pages/portfolio/artv/global/ArtvBlockBase'
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {ArtvBlockBase, PortfolioHeader},
  
  data() {
    return {
      items: [
        {
          title: 'QUESTION',
          desc: 'The media streaming services are extremely popular these days. More and more apps appear to satisfy the most demanding tastes of music fans. People go mobile and need their favorite music and videos play on various devices with a single touch. Moreover, they do not excuse mediocre visuals anymore but value only the ideal streaming quality.'
        },
        {
          title: 'TASK',
          desc: 'So the task was to develop an app with familiar YouTube-like features enhanced by the best possible quality with TvOS. The content that users watch and share should look amazing on Apple TV.'
        },
        {
          title: 'OFFER',
          desc: 'That\'s what the client came up with. There was a need for a team extension. So we\'ve offered our support and our experienced iOS developers have gone all the way side-by-side with the client\'s development team to deliver a perfect streaming solution.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .artv-challenges {
    margin-bottom: 20rem;

    @media (max-width: 1400px) {
      margin-bottom: 15rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 12rem;
    }
  
    @media (max-width: 575px) {
      margin-bottom: 8rem;
    }

    &__header {
      margin-bottom: 10rem;

      @media (max-width: 1400px) {
        margin-bottom: 8rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 7rem;
      }

      @media (max-width: 991px) {
        margin-bottom: 5.5rem;
      }
    }

    &__header {
      .portfolio-header__title {
        font-weight: bold;
        letter-spacing: 0.04em;
      }
    }

    &-list {

    }

    &-item {
      display: flex;
      max-width: 110rem;
      margin-bottom: 8.5rem;

      &:last-child {
        margin-bottom: 0;
      }

      @media (max-width: 1400px) {
        margin-bottom: 6rem;
      }

      @media (max-width: 991px) {
        margin-bottom: 4.5rem;
      }

      @media (max-width: 767px) {
        margin-bottom: 4rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3rem;
      }

      &__number {
        --size: 11.9rem;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: var(--size);
        height: var(--size);
        flex-shrink: 0;
        margin-right: 7rem;

        @media (max-width: 1400px) {
          --size: 10.2rem;
          margin-right: 5rem;
        }

        @media (max-width: 1199px) {
          --size: 9.5rem;
          margin-right: 4.5rem;
        }

        @media (max-width: 991px) {
          --size: 8.3rem;
          margin-right: 3rem;
        }

        @media (max-width: 767px) {
          --size: 6.5rem;
          margin-right: 2.1rem;
        }

        &-text {
          font-weight: 800;
          font-size: 4rem;
          font-family: var(--Muli);
          line-height: 160%;
        
          @media (max-width: 1400px) {
            font-size: 3.5rem;
          }

          @media (max-width: 1199px) {
            font-size: 3rem;
          }

          @media (max-width: 991px) {
            font-size: 2.5rem;
          }

          @media (max-width: 767px) {
            font-size: 2rem;
          }
        }

        &-bg {
          position: absolute;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          z-index: -1;
        }
      }
    }
  }
</style>