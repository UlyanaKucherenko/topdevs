<template>
  <main class="gog">
    <GogAbout/>
    <GogGist/>
    <GogSummary/>
    <GogChallenges/>
    <GogSolutions/>
    <GogResults/>
  </main>
</template>

<script>
import GogAbout from '@/js/components/pages/portfolio/gog/GogAbout'
import GogGist from '@/js/components/pages/portfolio/gog/GogGist'
import GogSummary from '@/js/components/pages/portfolio/gog/GogSummary'
import GogChallenges from '@/js/components/pages/portfolio/gog/GogChallenges'
import GogSolutions from '@/js/components/pages/portfolio/gog/GogSolutions'
import GogResults from '@/js/components/pages/portfolio/gog/GogResults'

export default {
  components: {GogAbout, GogGist, GogSummary, GogChallenges, GogSolutions, GogResults}
}
</script>

<style lang="scss">
  .gog {
    --case-color-primary: #21DAD7;
    --case-color-white: #F1F5F9;
    --case-color-black-bold: #101034;
    --case-color-black-default: #2C2C50;
    --challenges-offset-bottom: 15rem;
    --portfolio-header__title-margin: 4rem;

    color: var(--case-color-black-default);
    background: #F5FAFF;

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