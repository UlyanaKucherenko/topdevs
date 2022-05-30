<template>
  <main class="solocator">
    <AboutSection/>
    <RubricsSection/>
    <SummarySection/>
    <TechStackSection/>
    <ChallengesSection/>
    <SolutionsSection/>
    <ResultsSection/>
  </main>
</template>

<script>
import AboutSection from '@/js/components/pages/portfolio/solocator/AboutSection'
import RubricsSection from '@/js/components/pages/portfolio/solocator/RubricsSection'
import SummarySection from '@/js/components/pages/portfolio/solocator/SummarySection'
import TechStackSection from '@/js/components/pages/portfolio/solocator/TechStackSection'
import ChallengesSection from '@/js/components/pages/portfolio/solocator/ChallengesSection'
import SolutionsSection from '@/js/components/pages/portfolio/solocator/SolutionsSection'
import ResultsSection from '@/js/components/pages/portfolio/solocator/ResultsSection'

export default {
  components: { AboutSection, RubricsSection, SummarySection, TechStackSection, ChallengesSection, SolutionsSection, ResultsSection }
}
</script>

<style>

</style>