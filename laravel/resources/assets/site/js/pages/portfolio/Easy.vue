<template>
  <main class="easy">
    <EasyAbout/>
    <EasySummary/>
    <EasyChallenges/>
    <EasySolutions/>
    <EasyResults/>
  </main>
</template>

<script>
import EasyAbout from "@/js/components/pages/portfolio/easy/EasyAbout";
import EasySummary from "@/js/components/pages/portfolio/easy/EasySummary";
import EasyChallenges from "@/js/components/pages/portfolio/easy/EasyChallenges";
import EasySolutions from "@/js/components/pages/portfolio/easy/EasySolutions";
import EasyResults from "@/js/components/pages/portfolio/easy/EasyResults";

export default {
  name: "Easy",
  components: {EasyResults, EasySolutions, EasyChallenges, EasySummary, EasyAbout}
}
</script>

<style lang="scss" scoped>
.easy {
  --case-color-b1: #408EFF;
  --case-color-blue: #3E69EA;
  --case-color-w3: #E5E5E5;
  --case-color-w2: #EEEEEE;
  --case-color-w1: #F7F7F7;
  --case-color-white: #ffffff;
  --case-color-black: #000000;
  --case-color-grey: #3E3E3E;

  --space-section: 10rem;
  --space-unit: 10rem;

  @media (max-width: 576px) {
    --space-section: 8rem;
    --space-unit: 8rem;
  }

  color: var(--case-color-grey);
  background-color: var( --case-color-w3);

}

</style>