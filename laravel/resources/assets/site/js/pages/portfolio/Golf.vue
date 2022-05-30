<template>
  <main class="golf">
    <GolfAbout/>
    <GolfHowHelp/>
    <GolfSummary/>
    <GolfChallenges/>
    <GolfSolutions />
    <GolfResults />
  </main>
</template>

<script>
import GolfAbout from "@/js/components/pages/portfolio/golf/GolfAbout.vue";
import GolfHowHelp from "../../components/pages/portfolio/golf/GolfHowHelp";
import GolfSummary from "../../components/pages/portfolio/golf/GolfSummary";
import GolfChallenges from "../../components/pages/portfolio/golf/GolfChallenges";
import GolfSolutions from "../../components/pages/portfolio/golf/GolfSolutions";
import GolfResults from "../../components/pages/portfolio/golf/GolfResults";

export default {
  name: "Golf",
  components: {GolfResults, GolfSolutions, GolfChallenges, GolfSummary, GolfHowHelp, GolfAbout}
}
</script>

<style scoped lang="scss">
.golf {

  // - - - - - FONTS - - - - - //
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap');
  --Inter: Inter, sans-serif;

  font-family: var(--Inter);

  // - - - - - COLORS - - - - - //

  --case-color-primary: var(--case-color-blue);
  --case-color-blue: #18B8FC;
  --case-color-white: #FFFFFF;
  --case-color-gray-dark-2: #3B3B3B;
  --case-color-gray-dark-1: #3C3C3C;
  --case-color-grey: #636363;
  --case-color-black: #161616;
  color: var(--case-color-black);
  background: #F6F6F6;

  // - - - - - SIZES - - - - - //


  --challenges-offset-bottom: 15rem;
  --portfolio-header__title-margin: 2.4rem;

  --space-section: 10rem;
  --space-unit: 10rem;
  --header-height: 7rem;

  @media (max-width: 576px) {
    --space-section: 8rem;
    --space-unit: 8rem;
  }


}

</style>
