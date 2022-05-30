<template>
  <div class="dancebug-about" v-scroll-reveal="{distance: 0}">
    <picture class="dancebug-about__bg">
      <source media="(max-width: 360px)" srcset="/images/site/portfolio/dancebug/about/bg-360.png">
      <source media="(max-width: 576px)" srcset="/images/site/portfolio/dancebug/about/bg-576.png">
      <source media="(max-width: 991px)" srcset="/images/site/portfolio/dancebug/about/bg-768.png">
      <source media="(max-width: 1200px)" srcset="/images/site/portfolio/dancebug/about/bg-1200.png">
      <img src="/images/site/portfolio/dancebug/about/bg.png" alt="Chris standing up holding his daughter Elva">
    </picture>
    <div class="container">
      <div class="dancebug-about__hero">
        <div class="dancebug-about__hero-info">
          <div class="dancebug-about__hero-title text-h1 portfolio-text-h1">DanceBug</div>
          <h1 class="dancebug-about__hero-subtitle portfolio-about-info__subtitle portfolio-title">
            Automating the Process of Judging Dance Contests
          </h1>
          <div class="about-section__hero-desc portfolio-desc">
            How TopDevs helped to create a web app for dancing experts that allows them to conduct dance events, manage
            the competition process, create reports, etc. It all simplifies the dance contest management and speeds up
            many routine processes.
          </div>
        </div>
        <img
            class="dancebug-about__hero-img"
            src="/images/site/portfolio/dancebug/about/hero.png"
        >
      </div>
      <div class="dancebug-about__gist-blocks">
        <PortfolioBlockGist
            class="dancebug-about__gist-block"
            v-for="(item, index) in gistItems" :key="index"
            :info="item"
            :classes="{icon: 'dancebug-about__gist-block-icon'}"
        />
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioBlockGist from "../global/PortfolioBlockGist";

export default {
  name: "DancebugAbout",
  components: {PortfolioBlockGist},
  data() {
    return {
      gistItems: [
        {
          iconsColor: '#000000',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'Canada',
              iconDefault: 'gps'
            },
          ]
        },
        {
          iconsColor: '#000000',
          items: [
            {
              rubricTitle: 'Platform',
              rubricText: 'Web',
              iconDefault: 'monitor'
            },
          ]
        },
        {
          iconsColor: '#000000',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2020 - Present',
              iconDefault: 'clock'
            },
          ]
        },
        {
          iconsColor: '#000000',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Media & Entertainment',
              iconDefault: 'case'
            },
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
.dancebug-about {
  position: relative;
  padding-top: calc(var(--header-height) * 2);
  padding-bottom: calc(var(--space-unit) * 5);

  @media (max-width: 576px) {
    padding-bottom: 0;
  }

  &__hero {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    flex-direction: column;
    position: relative;
    margin-bottom: calc(var(--space-unit) * 8);

    @media (max-width: 1199px) {
      margin-bottom: calc(var(--space-unit) * 5);
    }

    &-info {
      width: 100%;
      margin: 0 auto;
      position: relative;
      color: #FFFFFF;
      margin-bottom: calc(var(--space-unit) * 5);

      @media (max-width: 991px) {
        width: 78%;
        margin-bottom: calc(var(--space-unit) * 4);
        text-align: center;
      }
      @media (max-width: 576px) {
        width: 100%;
      }
    }

    &-title {
      text-transform: capitalize;
      font-weight: 700;
      margin-bottom: 4rem;

      @media (min-width: 1200px) {
        font-size: 10rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 3.5rem;
      }

      @media (max-width: 767px) {
        margin-bottom: 3rem;
      }
    }

    &-subtitle {
      margin-bottom: 2rem;
      letter-spacing: 1px;
      text-transform: uppercase;

      @media (max-width: 991px) {
        text-transform: capitalize;
      }

      @media (max-width: 767px) {
        margin-bottom: 1.5rem;
      }
    }

    &-img {
      width: 75%;
      margin: 0 auto;

      @media (max-width: 991px) {
        position: static;
        transform: none;
      }
    }
  }

  &__gist {
    &-blocks {
      display: grid;
      grid-template-columns: repeat(4, auto);
      grid-column-gap: 3%;
      justify-content: center;
      white-space: nowrap;

      @media (max-width: 1320px) {
        grid-template-columns: auto auto;
        justify-content: center;
        grid-column-gap: 5%;
      }
      @media (max-width: 767px) {
        grid-template-columns: auto;
      }
      @media (max-width: 450px) {
        grid-template-columns: 1fr;
        width: 100%;
      }
    }
  }

  &__bg {
    img, source {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 95%;
      z-index: -1;

      @media (max-width: 767px) {
        height: 85%;
      }
    }
  }
}
</style>