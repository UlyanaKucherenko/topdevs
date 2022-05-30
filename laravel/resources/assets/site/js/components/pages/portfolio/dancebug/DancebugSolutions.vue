<template>
  <div class="dancebug-solutions">
    <div class="container">
      <div class="dancebug-solutions__content">
        <DancebugHeader
            class="dancebug-solutions__header"
            titleTextColor="var(--case-color-primary)"
            :isCentered="true"
            :baseOptions="{
          titleText: 'Solutions',
          descText: 'The TopDevs development team has been responsible for the frontend and backend development of a web app. We have taken into account the needs of each party and allocated the most crucial functionality that everyone can benefit from. Some of the features are of shared use with certain limitations, the others are developed specifically for the needs of each particular group.'
        }"/>

        <div class="dancebug-solutions__mockup">
          <img class="dancebug-solutions__mockup-img"
               src="/images/site/portfolio/dancebug/solutions/solutions-img.png"
          />
        </div>
      </div>
    </div>

    <img class="dancebug-solutions__figure"
         src="/images/site/portfolio/dancebug/solutions/solutions-figur.png"
    />

    <img class="dancebug-solutions__figure-small"
         src="/images/site/portfolio/dancebug/solutions/fig2.png"
    />

  </div>
</template>

<script>
import DancebugHeader from '@/js/components/pages/portfolio/dancebug/global/DancebugHeader'

export default {
  name: "DancebugSolutions",
  components: {
    DancebugHeader
  }
}
</script>

<style lang="scss">
.dancebug-solutions {
  padding-bottom: calc(var(--space-unit) * 12);
  position: relative;
  z-index: 1;

  &__content {
    padding: 0 50px;

    @media (max-width: 768px) {
      padding: 0;
    }

  }

  &__header {
    margin-bottom: var(--portfolio-header__title-margin);
    text-align: center;
  }

  &__figure {
    position: absolute;
    z-index: -1;
    bottom: -100px;
    pointer-events: none;

    @media (max-width: 1200px) {
      width: 100%;
      bottom: 100px;
    }
  }

  &__figure-small {
    position: absolute;
    z-index: -2;
    right: 0;
    bottom: -280px;
    width: 30%;
    @media (max-width: 991px) {
      display: none;
    }
  }

  &__mockup {
    width: 100%;
    position: relative;
    margin-bottom: calc(var(--space-unit) * 10);

    &-img {
      width: 80%;
      margin: 0 auto;
      filter: drop-shadow(0px 0px 18px rgba(0, 0, 0, 0.18));
    }
  }
}
</style>