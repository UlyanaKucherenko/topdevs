<template>
<main class="quick">
  <QuickAbout />
  <QuickSummery />

  <QuickChallenges />
  <QuickSolutions />
  <QuickResults />

</main>
</template>

<script>
import QuickAbout from "@/js/components/pages/portfolio/quick/quickAbout";
import QuickSummery from "@/js/components/pages/portfolio/quick/QuickSummery";
import QuickResults from "@/js/components/pages/portfolio/quick/QuickResults";
import QuickChallenges from "@/js/components/pages/portfolio/quick/QuickChallenges";
import QuickSolutions from "@/js/components/pages/portfolio/quick/QuickSolutions";
export default {
name: "Quick",
  components: {QuickSolutions, QuickChallenges, QuickResults, QuickSummery, QuickAbout}
}
</script>

<style scoped lang="scss">
.quick {
    --case-color-primary: var(--case-color-black);
    --case-color-blue: #524AED;

    --case-color-violet: #6E00BF;
    --case-color-violet-light: #C767E5;
    --case-color-pink: #E6C9F0;
    --case-color-white: #FFFFFF;
    --case-color-grey: #626262;
    --case-color-black: #141414;

    --challenges-offset-bottom: 15rem;
    --portfolio-header__title-margin: 4rem;

    color: var(--case-color-black);
    background: #FFFFFF;

}

</style>
