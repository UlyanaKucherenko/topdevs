<template>
  <div class="dancebug-results">
    <picture class="dancebug-results__bg">
      <source media="(max-width: 360px)" srcset="/images/site/portfolio/dancebug/results/bg-360.png">
      <source media="(max-width: 576px)" srcset="/images/site/portfolio/dancebug/results/bg-576.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/dancebug/results/bg-992.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/dancebug/results/bg-1200.png">
      <img src="/images/site/portfolio/dancebug/results/results-bg.png"
           alt="Chris standing up holding his daughter Elva">
    </picture>

    <div class="container">
      <div class="dancebug-results__container">
        <div class="dancebug-results__content">
          <div class="dancebug-results__text-content">
            <DancebugHeader
                class="dancebug-solutions__header"
                :isCentered="false"
                :baseOptions="{
                  titleText: 'Results',
                  titleTextColor: 'var(--case-color-white)',
                  descText: ''
                }"
            />
            <div class="dancebug-results__descr-text">
              The TopDevs development team has not only developed frontend and backend parts for a dance competition
              scoring app but also continued cooperation with the client on upgrading the app after its deployment.
              Among notable achievements in the web app development process, there are:
            </div>

            <div class="dancebug-results__list dancebug-results__descr-text">
              <div
                  class="dancebug-results__item-list"
                  v-for="(item, idx) in items"
                  :key="`item-${idx}`">
                {{ item }}
              </div>
            </div>

            <div class="dancebug-results__descr-text">
              In the end, the web app makes the organization of dancing contests faster and easier. All routine
              operations
              were replaced by the solution. It makes the organizational and participation process much more pleasant
              for
              each party and lays the foundation for the dancing industry's growth.
            </div>

          </div>

          <img
              class="dancebug-results__mockup"
              src="/images/site/portfolio/dancebug/results/mackbook.png" alt=""
          >
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import DancebugHeader from '@/js/components/pages/portfolio/dancebug/global/DancebugHeader'

export default {
  name: "DancebugResults",
  components: {DancebugHeader},
  data() {
    return {
      items: [
        `Easy events creation,`,
        `convenient dashboard for the management of the contest,`,
        `mailing PDF reports from the app to email,`,
        `fast processing extensive amounts of database queries,`,
        `a unique solution developed manually for entertainment enterprises.`,
      ]
    }
  },
}
</script>

<style lang="scss">

.dancebug-results {
  position: relative;
  padding: 18vw 0 10vw;
  color: var(--case-color-white);

  @media (max-width: 1300px) {
    padding-top: 0;
  }

  &__bg {
    img, source {
      position: absolute;
      left: -10%;
      top: 0;
      width: 120%;
      height: 100%;
      z-index: -1;
    }
  }

  &__container {
    padding: 50px 0;
  }

  &__content {
    display: grid;
    grid-template-columns: 50fr 37fr;
    grid-column-gap: 5%;
    align-items: center;

    @media (max-width: 1300px) {
      display: flex;
      flex-direction: column-reverse;
    }
  }

  &__mockup {
    max-width: 100%;
  }

  &__list {
    padding: 2rem 0;
  }

  &__item-list {
    padding-left: 15px;
    position: relative;

    &:after {
      content: '';
      width: 4px;
      height: 4px;
      background-color: var(--case-color-white);;
      border-radius: 50%;
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 0;
      display: block;
    }
  }

  &__descr-text {
    font-size: 20px;
    line-height: 160%;
    letter-spacing: 0.06em;
  }
}
</style>