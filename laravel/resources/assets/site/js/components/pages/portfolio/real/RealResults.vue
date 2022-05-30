<template>
  <div class="real-results" v-scroll-reveal>
    <div class="container">
      <PortfolioHeader
        class="real-results__header"
        titleText="Results"
        titleTextColor="#002445"
      >
        <img 
          class="real-header-img"
          src="/images/site/portfolio/real/results/fig-header-pre.svg" alt=""
          slot="titleImg"
        >
      </PortfolioHeader>
      
      <div 
        class="real-results__content"
        v-scroll-reveal
      >
        <div class="real-results__desc-list portfolio-desc">
          <div 
            class="real-results__desc-item"
            v-for="(text, index) in descItems" :key="index"
          >
            {{ text }}
          </div>
        </div>
        
        <div class="real-results__benefits-list">
          <div 
            class="real-results__benefits-item"
            v-for="(item, index) in benefitsItems" :key="index"
          >
            <h3 class="real-results__benefits-title portfolio-desc portfolio-desc--sm">
              <span class="text-h1 portfolio-text-h1">{{ item.statsNumber }}</span> {{ item.statsText }}
              <img 
                class="real-results__benefits-fig"
                :src="item.imgURL" alt="" 
              >
            </h3>

            <div class="real-results__benefits-desc portfolio-desc portfolio-desc--sm">
              {{ item.desc }}
            </div>
          </div>
        </div>
      </div>
    </div>

    <img 
      class="real-results__fig-bg-bottom"
      src="/images/site/portfolio/real/results/fig-bg-bottom.svg" alt="" 
    >
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},
  
  data() {
    return {
      descItems: [
        'A RealPage app is a perfect tool for the real estate industry with a focus on property inspection and management. Due to the automation of routine procedures, it saves time and raises the satisfaction rate of rental services consumers significantly.', 
        'Our team has contributed both in the app functionality and design making it work smoothly and look attractive for end-users. That resulted in the escalated customer engagement and the overall app audience growth.'
      ],
      benefitsItems: [
        {
          statsNumber: '30,000+',
          statsText: 'CUSTOMER BASE',
          desc: 'The app is used by over 30,000 maintenance technicians at more than 23,000 sites.'
        },
        {
          statsNumber: '3x',
          statsText: 'FASTER ADDRESSING REQUESTS',
          desc: 'The speed of troubleshooting has been increased by 3 times resulting in overall tenants’ satisfaction.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .real-results {
    position: relative;
    padding: calc(var(--space-unit) * 15) 0 calc(var(--space-unit) * 25) 0;

    &__header {
      margin-bottom: calc(var(--space-unit) * 7.4);
    }

    &__content {
      display: flex;
      justify-content: space-between;

      @media (max-width: 960px) {
        flex-direction: column;
      }
    }

    &__desc {
      &-list {
        width: 42.9%;
        line-height: 160%;
        letter-spacing: 0.03em;
      
        @media (max-width: 960px) {
          width: 100%;
          margin-bottom: calc(var(--space-unit) * 8);
        }
      }

      &-item {
        margin-bottom: calc(var(--space-unit) * 3.5);
      }
    }

    &__benefits {
      &-list {
        width: 47.6%;
        font-size: 16px;
        line-height: 160%;
        letter-spacing: 0.03em;

        @media (max-width: 960px) {
          width: 100%;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          column-gap: 5%;
        }

        @media (max-width: 700px) {
          grid-template-columns: 100%;
        }
      }

      &-item {
        position: relative;
        margin-bottom: calc(var(--space-unit) * 8);

        &:last-child {
          margin-bottom: 0;
        }
      }

      &-title {
        font-weight: 600;

        span {
          line-height: 100%;
          font-weight: 700;
          font-family: var(--ProximaNova);
          color: var(--case-color-secondary);

          @media (max-width: 960px) and (min-width: 701px) {
            display: block;
          }

          @media (max-width: 500px) {
            display: block;
          }
        }

        @media (max-width: 960px) {
          margin-bottom: calc(var(--space-unit) * 1.5);          
        }
      }
    }

    &__fig-bg-bottom {
      width: 19%;
      position: absolute;
      right: 0;
      bottom: 0;

      @media (max-width: 1199px) {
        width: 21.9rem;
      }

      @media (max-width: 991px) {
        width: 20rem;
      }

      @media (max-width: 767px) {
        width: 16rem;
      }
    }
  }
</style>
