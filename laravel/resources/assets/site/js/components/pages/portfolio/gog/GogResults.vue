<template>
  <div 
    class="gog-results"
    ref="gogResults"
  >
    <div class="container">
      <div 
        class="gog-results__helper-container"
        ref="helperContainer"
      />

      <GogHeader
        class="gog-results__header"
        innerMaxWidth="71.2rem"
        dividerColor="#DBE2E9"
        :baseOptions="{
          titleText: 'Results',
          titleTextColor: 'var(--case-color-primary)',
        }"
        :breakpoints="{
          1200: {
            innerMaxWidth: '60rem'
          }
        }"
      />
    </div>

    <div class="gog-results__content">
      <div class="gog-results__desc-list portfolio-desc">
        <img src="/images/site/portfolio/gog/results/bg-lines.svg" alt="" class="gog-results__bg-lines">

        <div 
          class="gog-results__desc-item"
          v-for="(text, index) in descItems" :key="index"
        >
          {{ text }}
        </div>
      </div>

      <div class="gog-results__benefits-list">
        <PortfolioBlockBase
          class="gog-results__benefits-item"
          v-for="(item, index) in benefitsItems" :key="index"
          v-bind="item"
          titleColor="var(--case-color-black-bold)"
        />
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'
import GogHeader from '@/js/components/pages/portfolio/gog/global/GogHeader'

export default {
  components: {PortfolioBlockBase, GogHeader},

  data() {
    return {
      descItems: [
        'The TopDevs team has helped our clients to get to know the end customers better with a solution that makes their customer journey more enjoyable. Now the client can easily predict consumer behavior, make better business decisions, improve services efficiently, and offer new features for the clientele.',
        'The SDK solves the continuous pain of each business of how to detect customers changing moods and satisfy them with innovative and in-demand services.',
        'The proper analysis of the collected customer tracking data helps to optimize and plan business offerings. Additionally, this data allows client-oriented businesses in retail and other industries to identify problems and grant superior customer service.'
      ],

      benefitsItems: [
        {
          titleText: '3x Sales Cycle Decrease',
          descText: 'The app provides a deeper level of customer attention and service which results in faster shopping decisions and sales cycle shortening.'
        },
        {
          titleText: 'Data-Driven Product Offerings',
          descText: 'Customer tracking solution helps retailers and other businesses to optimize and plan product offerings for each class of consumers.'
        }
      ]
    }
  },


  mounted() {
    this.updateContainerOffset()
  },


  watch: {
    windowWidth() {
      this.updateContainerOffset()
    }
  },


  methods: {
    updateContainerOffset() {
      const offset = this.$refs.helperContainer.getBoundingClientRect().left
      this.$refs.gogResults.style.setProperty('--container-offset', offset + 'px')
    }
  },
}
</script>

<style lang="scss">
  .gog-results {
    position: relative;
    margin-bottom: calc(var(--space-unit) * 25);

    &__bg-lines {
      position: absolute;
      left: 0;
      top: 0%;
      height: 100%;

      @media (max-width: 1700px) {
        display: none;
      }
    }

    &__header {
      margin-bottom: 10rem;

      @media (max-width: 1400px) {
        margin-bottom: 8rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 6rem;
      }

      @media (max-width: 991px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 4rem;
      }
    }

    &__helper-container {
      opacity: 0;
      visibility: hidden;
    }

    &__content {
      position: relative;
    }

    &__desc {
      &-list {
        position: relative;
        z-index: -1;
        padding: 11rem var(--container-offset);
        width: 54%;
        color: var(--case-color-white);
        background: linear-gradient(180deg, #101034 0%, #2A2A64 100%), #FFFFFF;
        box-shadow: 40px 40px 130px rgba(42, 42, 100, 0.07);
        border-top-right-radius: 2rem;
        border-bottom-right-radius: 2rem;
      
        @media (max-width: 1800px) {
          padding-right: 15%;
          /* width: 50%; */
        }

        @media (max-width: 1400px) {
          padding-right: 11%;
          padding-top: 6rem;
          padding-bottom: 6rem;
        }

        @media (max-width: 991px) {
          width: 92%;
          padding: 5rem 6rem 11.1rem var(--container-offset); 
        }

        @media (max-width: 450px) {
          width: 95%;
          padding: 2rem var(--container-offset) 7.6rem; 
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
        position: absolute;
        right: 0;
        top: 10%;
        padding: 11rem var(--container-offset) 11rem 11rem;
        width: 54%;
        background: white;
        border-top-left-radius: 2rem;
        border-bottom-left-radius: 2rem;
        box-shadow: 40px 40px 70px rgba(35, 42, 48, 0.05);

        @media (max-width: 1400px) {
          padding: 7rem var(--container-offset) 7rem 7rem;
        }

        @media (max-width: 991px) {
          position: static;
          width: 78%;
          margin-left: auto;
          margin-top: -6rem;
          padding-left: 6rem;
          padding-top: 6rem;
          padding-bottom: 6rem;
        }

        @media (max-width: 450px) {
          width: 95%;
          padding-left: 3rem;
          padding-top: 3rem;
          padding-bottom: 3rem;
        }
      }

      &-item {
        margin-bottom: 7rem;

        &:last-child {
          margin-bottom: 0;
        }

        @media (max-width: 1400px) {
          margin-bottom: 5rem;
        }

        @media (max-width: 1199px) {
          margin-bottom: 4rem;
        }

        @media (max-width: 450px) {
          margin-bottom: 2rem;
        }
      }
    }
  }
</style>