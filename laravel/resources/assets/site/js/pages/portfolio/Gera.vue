<template>
  <main class="gera">
    <GeraAbout/>
    <GeraGist/>
    <GeraSummary/>
    <GeraChallenges/>
    <GeraSolutions/>
    <GeraResults/>
  </main>
</template>

<script>
import GeraAbout from '@/js/components/pages/portfolio/gera/GeraAbout'
import GeraGist from '@/js/components/pages/portfolio/gera/GeraGist'
import GeraSummary from '@/js/components/pages/portfolio/gera/GeraSummary'
import GeraChallenges from '@/js/components/pages/portfolio/gera/GeraChallenges'
import GeraSolutions from '@/js/components/pages/portfolio/gera/GeraSolutions'
import GeraResults from '@/js/components/pages/portfolio/gera/GeraResults'

export default {
  components: {GeraAbout, GeraGist, GeraSummary, GeraChallenges, GeraSolutions, GeraResults}
}
</script>

<style lang="scss">
  .gera {
    --case-color-primary: #01239B;
    --case-color-secondary: #2A3147;
    --case-color-black: #343434;

    color: var(--case-color-black);
    background: #FBFBFB;
  }
</style>