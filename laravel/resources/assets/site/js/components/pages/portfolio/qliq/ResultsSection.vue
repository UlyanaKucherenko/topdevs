<template>
  <div class="results-section" v-scroll-reveal>
    <div class="container">
      <div class="results-section__inner">
        <PortfolioHeader
          class="results-section__header"
          titleText="Results"
          titleTextColor="var(--case-color-primary)"
        >
          <div 
						class="qliq-header-line"
						slot="titleImg"
					/>
        </PortfolioHeader>
        
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
              <h3 class="results-section__benefits-title portfolio-desc portfolio-desc--sm">
                <span class="text-h1 portfolio-text-h1">{{ item.statsNumber }}</span> {{ item.statsText }}
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
      </div>
    </div>

    <img src="/images/site/portfolio/qliq/results/spot-yellow.svg" alt="" class="results-section__spot-yellow">
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},
  
  data() {
    return {
      descItems: [
        'The TopDevs team has helped our client to tailor a sought-after communication app for the healthcare industry. Doctors can efficiently make data-driven decisions and unleash additional time to treat more patients.', 
        'Qliq application has proven to provide superior patient-focused collaboration and enhanced teamwork levels between healthcare professionals from various organizations: hospitals, home health, hospice institutions, and ambulatory care.' 
      ],
      benefitsItems: [
        {
          statsNumber: '165+ MLN',
          statsText: 'TEXTS PER MONTH',
          desc: 'Users of the Qliq application send more than 165 million messages per month.'
        },
        {
          statsNumber: '1000+',
          statsText: 'CUSTOMERS',
          desc: 'More than 1,000 healthcare organizations use the Qliq platform for clinical collaboration.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .qliq .results-section {
    position: relative;
    padding: calc(var(--space-unit) * 15) 0 calc(var(--space-unit) * 25) 0;

    &__inner {
      position: relative;
    }

    &__header {
  		margin-bottom: var(--portfolio-header__title-margin);
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

    &__spot-yellow {
      width: 33%;
      position: absolute;
      right: 0;
      top: 0;
      transform: translate(3%, -20%);
      min-width: 15rem;

      @media (max-width: 700px) {
        width: 38%;
      }
    }
  }
</style>
