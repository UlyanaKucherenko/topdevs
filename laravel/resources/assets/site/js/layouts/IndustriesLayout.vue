<template>
  <DefaultLayout class="industries-layout">
    <slot/>
    <PortfolioSection
      class="portfolio-section"
      :headerTitle="locPortfolio.title"
      :headerDesc="locPortfolio.desc"
      :sliderProps="portfolio.sliderProps"
    >
      <template v-slot:cursor-follow>
        <img class="portfolio-section__bg-lines" src="/images/site/icons/abstract/fig-27.svg" alt="">
      </template>
    </PortfolioSection>

    <LearnSection
      :headerTitle="locLearn.title"
      :headerDesc="locLearn.desc"
      :industry="locLearn.industry"
    />

    <ConnectSection
      :headerTitle="locConnect.title"
      :headerDesc="locConnect.desc"
    />
  </DefaultLayout>
</template>

<script>
import DefaultLayout from '@/js/layouts/DefaultLayout'
import PortfolioSection from '@/js/components/global/sections/PortfolioSection'
import LearnSection from '@/js/components/pages/services/LearnSection'
import ConnectSection from '@/js/components/pages/services/ConnectSection'

export default {
  components: {DefaultLayout, PortfolioSection, LearnSection, ConnectSection},
  props: {
    portfolio: Object,
    learn: Object,
    connect: Object
  },


  computed: {
    locPortfolio() {
      let portfolio = {
        title: 'Case Studies',
        desc: ['Dig into the best testimony of our logistics', 'software development expertise reflected in our', 'clients\' success stories.']
      }

      return {
        ...portfolio,
        ...this.portfolio
      }
    },

    locLearn() {
      let learn = {
        title: 'Learn More',
        desc: ['Get to know the newest technology trends', 'and how we will incorporate them into your', 'outsourcing project.']
      }

      return {
        ...learn,
        ...this.learn
      }
    },

    locConnect() {
      let connect = {
        title: 'Reach an Industry Expert',
        desc: ['Your idea - our execution. Let\'s create', 'meaningful solutions together!']
      }

      return {
        ...connect,
        ...this.connect
      }
    }
  },
}
</script>

<style lang="scss">
  .industries-layout {
    .portfolio-section {
      padding-top: var(--section-pd-y-big);
      padding-bottom: 0;
      z-index: 0;

      &__bg-lines {
        position: absolute;
        z-index: -1;
        right: -5%;
        top: 5%;
        opacity: .5;
        pointer-events: none;

        @media (max-width: 991px) {
          display: none;
        }
      }
    }
  }
</style>
