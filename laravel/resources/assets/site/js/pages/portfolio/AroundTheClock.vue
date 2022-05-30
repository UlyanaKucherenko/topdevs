<template>
  <main class="around-clock">
    <AroundClockHome />
    <AroundProjectSummary />
    <TechStack />
    <Challenges />
    <Solutions />
    <Integration />
    <AroundResults />
  </main>
</template>

<script>
import AroundClockHome from "../../components/pages/portfolio/around-the-clock/AroundClockHome";
import AroundProjectSummary from "../../components/pages/portfolio/around-the-clock/AroundProjectSummary";
import TechStack from "../../components/pages/portfolio/around-the-clock/TechStack";
import Challenges from "../../components/pages/portfolio/around-the-clock/Challenges";
import Solutions from "../../components/pages/portfolio/around-the-clock/Solutions";
import Integration from "../../components/pages/portfolio/around-the-clock/Integration";
import AroundResults from "../../components/pages/portfolio/around-the-clock/AroundResults";
export default {
  name: "AroundTheClock",
  components: {
    AroundResults,
    Integration,
    Solutions,
    Challenges,
    TechStack,
    AroundProjectSummary,
    AroundClockHome
  }
}
</script>

<style lang="scss">
.around-clock {
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