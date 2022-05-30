<template>
  <main class="qliq">
    <AboutSection/>
    <!-- <RubricsSection/> -->
    <SummarySection/>
    <ChallengesSection/>
    <SolutionsSection/>
    <ResultsSection/>
  </main>
</template>

<script>
import AboutSection from '@/js/components/pages/portfolio/qliq/AboutSection'
// import RubricsSection from '@/js/components/pages/portfolio/beauty/RubricsSection'
import SummarySection from '@/js/components/pages/portfolio/qliq/SummarySection'
import ChallengesSection from '@/js/components/pages/portfolio/qliq/ChallengesSection'
import SolutionsSection from '@/js/components/pages/portfolio/qliq/SolutionsSection'
import ResultsSection from '@/js/components/pages/portfolio/qliq/ResultsSection'

export default {
  components: {AboutSection, SummarySection, ChallengesSection, SolutionsSection, ResultsSection
  // RubricsSection, SummarySection, 
  }
}
</script>

<style lang="scss">
  .qliq {


    --case-color-primary: #155898; 
    --case-color-secondary: #EA5710;
    --case-color-black: #414040;

    color: var(--case-color-black);
    background-color: var(--white-clear);

    @media (max-width: 1199px) {
      --portfolio-header__title-margin: 8rem;
    }

    @media (max-width: 575px) {
      --portfolio-header__title-margin: 5rem;
    }
  
    &-header-line {
      --offset-top: 5.75rem;
      position: absolute;
      top: calc(100% + var(--offset-top));
      left: 0;
      width: 9.6rem;
      height: .2rem;
      background: var(--case-color-black);

      @media (max-width: 1199px) {
        --offset-top: 4.75rem;
        width: 7.1rem;
      }

      @media (max-width: 575px) {
        --offset-top: 2.75rem;
        width: 6.1rem;
      }
    }
  }
</style>