<template>
  <main class="dancebug">
    <DancebugAbout/>
    <DancebugSummery />
    <DancebugChallenges />
    <DancebugSolutions />
    <DancebugTarget />
    <DancebugResults />
  </main>
</template>

<script>
import DancebugAbout from "@/js/components/pages/portfolio/dancebug/DancebugAbout";
import DancebugSummery from "@/js/components/pages/portfolio/dancebug/DancebugSummery";
import DancebugChallenges from "@/js/components/pages/portfolio/dancebug/DancebugChallenges";
import DancebugSolutions from "@/js/components/pages/portfolio/dancebug/DancebugSolutions";
import DancebugTarget from "@/js/components/pages/portfolio/dancebug/DancebugTarget";
import DancebugResults from "@/js/components/pages/portfolio/dancebug/DancebugResults";

export default {
  name: "Dancebug",
  components: {DancebugResults, DancebugTarget, DancebugChallenges, DancebugSummery, DancebugAbout, DancebugSolutions}
}
</script>

<style lang="scss">
.dancebug {
  --case-color-primary: var(--case-color-black);
  --case-color-violet: #6E00BF;
  --case-color-violet-light: #C767E5;
  --case-color-pink: #E6C9F0;
  --case-color-white: #FFFFFF;
  --case-color-grey: #626262;
  --case-color-black: #141414;

  --challenges-offset-bottom: 15rem;
  --portfolio-header__title-margin: 2.5rem;

  color: var(--case-color-black);
  background: #FFFFFF;
}

</style>
