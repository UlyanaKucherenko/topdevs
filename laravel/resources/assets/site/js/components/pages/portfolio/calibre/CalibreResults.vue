<template>
  <div class="calibre-results" v-scroll-reveal>
    <div class="container">
        <PortfolioHeader
          class="calibre-results__header calibre-header"
          headerColumnBreakpoint
          titleText="Results"
          titleTextColor="var(--case-color-primary)"
        >
          <div 
            class="calibre-header__line"
            slot="titleImg"
          />
        </PortfolioHeader>
      
      <div 
        class="calibre-results__content"
        v-scroll-reveal
      >
        <div class="calibre-results__desc-list portfolio-desc">
          <div 
            class="calibre-results__desc-item"
            v-for="(text, index) in descItems" :key="index"
          >
            {{ text }}
          </div>
        </div>
        
        <div class="calibre-results__benefits-list">
          <PortfolioBlockBase
            class="calibre-results__benefits-item"
            v-for="(item, index) in benefitsItems" :key="index"
            v-bind="item"
            titleColor="var(--case-color-primary)"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioHeader, PortfolioBlockBase},
  
  data() {
    return {
      descItems: [
        'The TopDevs team has helped our client to prepare the idea for pitching to investors. An MVP was developed to showcase the future product value for the luxury watches industry. An application connects watchmakers, watch owners, and watch repairs with a goal to control the continued quality of expensive devices.', 
        'Our dedicated team has contributed to the initial product development stage laying the foundations for future startup growth.'
      ],
      benefitsItems: [
        {
          icon: '/images/site/portfolio/calibre/results/icon-benefit-1.svg',
          titleText: 'Fundraising',
          descText: 'Having an MVP, our client can pitch the idea to potential investors and raise money for future product development.'
        },
        {
          icon: '/images/site/portfolio/calibre/results/icon-benefit-2.svg',
          titleText: 'Minimum Viable Product',
          descText: 'The client has received a working demo version of the iOS application along with the web edition and backend part.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .calibre-results {
    position: relative;
    padding: 15rem 0 20rem;
    background: #FFE9D9;

    @media (max-width: 1400px) {
      padding: 10rem 0 15rem;
    }

    @media (max-width: 991px) {
      padding: 10rem 0;
    }

    @media (max-width: 575px) {
      padding: 7rem 0;
    }

    &__header {
      margin-bottom: calc(var(--portfolio-header__title-margin));
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
        width: 49.7%;
        line-height: 160%;
        letter-spacing: 0.03em;
      
        @media (max-width: 1400px) {
          width: 52.7%;
        }

        @media (max-width: 1199px) {
          width: 50.7%;
        }

        @media (max-width: 960px) {
          width: 100%;
          max-width: 55.3rem;
          margin-bottom: calc(var(--space-unit) * 11.5);
        }
      }

      &-item {
        margin-bottom: calc(var(--space-unit) * 3.5);

        &:last-child {
          margin-bottom: 0;
        }
      }
    }

    &__benefits {
      &-list {
        width: 42.6%;

        @media (max-width: 1400px) {
          width: 40.6%;
        }

        @media (max-width: 1199px) {
          width: 42.6%;
        }

        @media (max-width: 960px) {
          width: unset;
          display: grid;
          grid-template-columns: repeat(2, 1fr);
          column-gap: 5%;
        }

        @media (max-width: 700px) {
          max-width: 55.3rem;
          grid-template-columns: 100%;
        }
      }

      &-item {
        --icon-width: 4.3rem;
        margin-bottom: calc(var(--space-unit) * 6);

        @media (max-width: 1199px) {
          --title-margin: 1rem;
        }

        @media (max-width: 575px) {
          --icon-margin: 1rem;
        }

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
  }
</style>
