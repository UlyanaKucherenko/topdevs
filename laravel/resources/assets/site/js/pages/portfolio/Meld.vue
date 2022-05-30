<template>
  <main class="meld">
    <MeldAbout/>
    <MeldGist/>
    <MeldSummary/>
    <MeldChallenges/>
    <MeldSolutions/>
    <MeldResults/>
  </main>
</template>

<script>
import MeldAbout from '@/js/components/pages/portfolio/meld/MeldAbout'
import MeldGist from '@/js/components/pages/portfolio/meld/MeldGist'
import MeldSummary from '@/js/components/pages/portfolio/meld/MeldSummary'
import MeldChallenges from '@/js/components/pages/portfolio/meld/MeldChallenges'
import MeldSolutions from '@/js/components/pages/portfolio/meld/MeldSolutions'
import MeldResults from '@/js/components/pages/portfolio/meld/MeldResults'

export default {
  components: {MeldAbout, MeldGist, MeldSummary, MeldChallenges, MeldSolutions, MeldResults}
}
</script>

<style lang="scss">
  .meld {
    --case-color-primary: #011E50;
    --case-color-orange: #FE9B2B;
    --case-color-red: #FE524D;
    --case-color-black: #414040;

    color: var(--case-color-black);
  }
</style>