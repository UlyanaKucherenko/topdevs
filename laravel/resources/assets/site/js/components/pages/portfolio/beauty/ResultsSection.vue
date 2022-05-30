<template>
  <div class="results-section">
    <div class="container">
      <div class="results-section__inner">
        <PortfolioHeader
          class="results-section__header"
          titleText="Results"
          titleTextColor="#951865"
        />
        
        <div 
          class="results-section__content"
          v-scroll-reveal
        >
          <div class="results-section__desc-list portfolio-desc">
            <div 
              class="results-section__desc-item"
              v-for="(text, index) in descItems" :key="index"
            >
              {{ text }}
            </div>
          </div>
          
          <div class="results-section__benefits-list">
            <div 
              class="results-section__benefits-item"
              v-for="(item, index) in benefitsItems" :key="index"
            >
              <h3 class="results-section__benefits-title portfolio-title">
                {{ item.title }}

                <img 
                  class="results-section__benefits-fig"
                  :src="item.imgURL" alt="" 
                >
              </h3>

              <div class="results-section__benefits-desc portfolio-desc portfolio-desc--sm">
                {{ item.desc }}
              </div>
            </div>
          </div>
        </div>
        
        <img src="/images/site/portfolio/beauty/results/fig.svg" alt="" class="results-section__fig">
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
      descItems: [
        'The TopDevs team has provided the full cycle of apps development services presenting a one-of-a-kind digital solution for the beauty industry.',
        'The application assists beauty followers to meet and learn the best practices from the industry influencers.'
      ],
      benefitsItems: [
        {
          title: 'Learning From Influencers',
          desc: 'Beauty fans can directly follow and learn from the best experts in the industry to enhance mastery skills effectively.',
          imgURL: '/images/site/portfolio/beauty/results/title-1.svg'
        },
        {
          title: 'Expertise Monetization',
          desc: 'Beauty professionals have finally got a platform for sharing their skills and receiving an additional income with a worldwide audience reach.',
          imgURL: '/images/site/portfolio/beauty/results/title-2.svg'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .beauty .results-section {
    position: relative;
    padding: calc(var(--space-unit) * 15) 0 calc(var(--space-unit) * 25) 0;

    &__inner {
      position: relative;
    }

    &__header {
      margin-bottom: calc(var(--space-unit) * 8.8);
    }

    &__content {
      display: flex;

      @media (max-width: 900px) {
        flex-direction: column;
      }
    }

    &__desc {
      &-list {
        width: 41%;
        margin-right: 12.5%;
        line-height: 160%;
        letter-spacing: 0.03em;
      
        @media (max-width: 900px) {
          width: 100%;
          margin-right: 0;
          margin-bottom: calc(var(--space-unit) * 8);
        }
      }

      &-item {
        margin-bottom: calc(var(--space-unit) * 3.5);
      }
    }

    &__benefits {
      &-list {
        width: 42%;
        font-size: 16px;
        line-height: 160%;
        letter-spacing: 0.03em;

        @media (max-width: 900px) {
          display: flex;
          justify-content: space-between;
          width: auto;
        }

        @media (max-width: 575px) {
          flex-direction: column;
          padding: 0 2rem;
        }
      }

      &-item {
        position: relative;
        margin-bottom: calc(var(--space-unit) * 4);
      
        @media (max-width: 900px) {
          width: 47.5%;
        }

        @media (max-width: 575px) {
          width: 100%;
        }
      }

      &-title {
        color: #4D4981;
        font-weight: 700;
        letter-spacing: 1px;
        margin-bottom: calc(var(--space-unit) * 1.5);
      }

      &-fig {
        position: absolute;
        left: 0;
        top: 0;
        width: 10%;
        z-index: -1;
        transform: translate(-55%, -50%);

        @media (max-width: 575px) {
          width: 2.5rem;
        }
      }
    }

    &__fig {
      position: absolute;
      top: 100%;
      left: 30%;
      width: 10rem;

      @media (max-width: 1199px) {
        width: 7rem;
      }

      @media (max-width: 991px) {
        top: 1rem;
        right: 0;
        left: auto;
      }
    }
  }
</style>
