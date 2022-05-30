<template>
  <main class="real">
    <RealAbout/>
    <RealGist/>
    <RealSummary/>
    <RealChallenges/>
    <RealSolutions/>
    <RealResults/>
  </main>
</template>

<script>
import RealAbout from '@/js/components/pages/portfolio/real/RealAbout'
import RealGist from '@/js/components/pages/portfolio/real/RealGist'
import RealSummary from '@/js/components/pages/portfolio/real/RealSummary'
import RealChallenges from '@/js/components/pages/portfolio/real/RealChallenges'
import RealSolutions from '@/js/components/pages/portfolio/real/RealSolutions'
import RealResults from '@/js/components/pages/portfolio/real/RealResults'

export default {
  components: {RealAbout, RealSummary, RealChallenges, RealGist, RealSolutions, RealResults}
}
</script>

<style lang="scss">
  .real {
    --case-color-primary: #FFDC23; 
    --case-color-secondary: #3D83D6;
    --case-color-black: #202428;

    color: var(--case-color-black);
    background-color: #F9F9F9;

    &-header-img {
      position: absolute;
      left: -5.6rem;
      top: 50%;
      transform: translate(-100%, -50%);

      @media (max-width: 1750px) {
        width: 3.7rem;
        left: -2rem;
        transform: translate(-100%, -50%);
      }

      @media (max-width: 1199px) {
        left: calc(100% + 2.5rem);
        transform: translateY(-50%);
      }

      @media (max-width: 575px) {
        left: calc(100% + 1rem);
        width: 2.3rem;
      }

      @media (max-width: 359px) {
        display: none;
      }
    }
  }
</style>