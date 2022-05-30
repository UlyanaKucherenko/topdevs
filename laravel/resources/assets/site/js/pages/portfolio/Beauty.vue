<template>
  <main class="beauty">
    <AboutSection/>
    <RubricsSection/>
    <SummarySection/>
    <ChallengesSection/>
    <SolutionsSection/>
    <ResultsSection/>
  </main>
</template>

<script>
import AboutSection from '@/js/components/pages/portfolio/beauty/AboutSection'
import RubricsSection from '@/js/components/pages/portfolio/beauty/RubricsSection'
import SummarySection from '@/js/components/pages/portfolio/beauty/SummarySection'
import ChallengesSection from '@/js/components/pages/portfolio/beauty/ChallengesSection'
import SolutionsSection from '@/js/components/pages/portfolio/beauty/SolutionsSection'
import ResultsSection from '@/js/components/pages/portfolio/beauty/ResultsSection'

export default {
  components: {AboutSection, RubricsSection, SummarySection, ChallengesSection, SolutionsSection, ResultsSection}
}
</script>

<style lang="scss">
  .beauty {
    background-color: var(--white-clear);

    &-ticker-text {
      white-space: nowrap;
      text-transform: uppercase;
      font-family: var(--Muli);
      font-weight: 900;
      color: transparent;
      -webkit-text-stroke: 1px rgba(149, 24, 101, 0.1);
      font-size: calc(6.61vw - calc(var(--scrollbar-width) / 15.31));
      position: absolute;
      left: 50%;
      bottom: 0;
      transform: translate(-50%, 50%);

      @media (max-width: 767px) {
        font-size: 5rem;
      }
    }
  }
</style>