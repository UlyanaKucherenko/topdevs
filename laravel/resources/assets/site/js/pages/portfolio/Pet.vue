<template>
  <main class="pet">
    <PetAbout/>
    <PetSummary/>
    <PetChallenges/>
    <PetSolutions/>
    <PetResults/>
  </main>
</template>

<script>
import PetAbout from '@/js/components/pages/portfolio/pet/PetAbout'
import PetSummary from '@/js/components/pages/portfolio/pet/PetSummary'
import PetChallenges from '@/js/components/pages/portfolio/pet/PetChallenges'
import PetSolutions from '@/js/components/pages/portfolio/pet/PetSolutions'
import PetResults from '@/js/components/pages/portfolio/pet/PetResults'

export default {
  components: {PetAbout, PetSummary, PetChallenges, PetSolutions, PetResults}
}
</script>

<style lang="scss">
  .pet {
    --case-color-primary: #200B00;
    --case-color-secondary: #FC8A52;
    --case-color-beige: #FEEFE7;
    --case-color-black: #414040;
    --case-color-blue: #2C95E2;

    color: var(--case-color-black);
    background: white;
  }
</style>