<template>
  <main class="artv">
    <ArtvAbout/>
    <ArtvGist/>
    <ArtvSummary/>
    <ArtvChallenges/>
    <ArtvSolutions/>
    <ArtvResults/>
  </main>
</template>

<script>
import ArtvAbout from '@/js/components/pages/portfolio/artv/ArtvAbout'
import ArtvGist from '@/js/components/pages/portfolio/artv/ArtvGist'
import ArtvSummary from '@/js/components/pages/portfolio/artv/ArtvSummary'
import ArtvChallenges from '@/js/components/pages/portfolio/artv/ArtvChallenges'
import ArtvSolutions from '@/js/components/pages/portfolio/artv/ArtvSolutions'
import ArtvResults from '@/js/components/pages/portfolio/artv/ArtvResults'

export default {
  components: {ArtvAbout, ArtvGist, ArtvSummary, ArtvChallenges, ArtvSolutions, ArtvResults}
}
</script>

<style lang="scss">
  .artv {
    --case-color-primary: #151411;
    --case-color-white: white;
    --case-color-yellow: #FFDD68;

    color: var(--case-color-primary);
    background: #F6F6F6;

    @media (max-width: 1400px) {
      --challenges-offset-bottom: 13rem;
    }

    @media (max-width: 1199px) {
      --portfolio-header__title-margin: 3.5rem;
      --challenges-offset-bottom: 11rem;
    }

    @media (max-width: 991px) {
      --challenges-offset-bottom: 10rem;
    }

    @media (max-width: 575px) {
      --portfolio-header__title-margin: 2.5rem;
      --challenges-offset-bottom: 5rem;
    }
  }
</style>