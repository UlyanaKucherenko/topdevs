<template>
  <main class="calibre">
    <CalibreAbout :gistItems="gistItems"/>
    <CalibreGist :gistItems="gistItems"/>
    <CalibreSummary/>
    <CalibreChallenges/>
    <CalibreSolutions/>
    <CalibreResults/>
  </main>
</template>

<script>
import CalibreAbout from '@/js/components/pages/portfolio/calibre/CalibreAbout'
import CalibreSummary from '@/js/components/pages/portfolio/calibre/CalibreSummary'
import CalibreGist from '@/js/components/pages/portfolio/calibre/CalibreGist'
import CalibreChallenges from '@/js/components/pages/portfolio/calibre/CalibreChallenges'
import CalibreSolutions from '@/js/components/pages/portfolio/calibre/CalibreSolutions'
import CalibreResults from '@/js/components/pages/portfolio/calibre/CalibreResults'

export default {
  components: {CalibreAbout, CalibreSummary, CalibreGist, CalibreChallenges, CalibreSolutions, CalibreResults},

  data() {
    return {
      gistItems: [
        {
          bg: '/images/site/portfolio/calibre/about/gist-bg.svg',
          iconsColor: 'var(--case-color-primary)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'Switzerland',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS, Web',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          bg: '/images/site/portfolio/calibre/about/gist-bg.svg',
          iconsColor: 'var(--case-color-primary)',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Retail & E-Commerce',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: 'March 2020 – Present',
              iconDefault: 'clock'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .calibre {
    --case-color-primary: #002A4A; 
    --case-color-black: #021523;
    --portfolio-header__title-margin: 4rem;

    color: var(--case-color-black);
    background-color: var(--white-main);

    &-header {
      @media (max-width: 991px) {
        width: 100%;
        max-width: 55.3rem;
      }

      &__line {
        --horizontal-offset: calc(100% + 3vw);
        position: absolute;
        right: var(--horizontal-offset);
        top: .3em;
        width: 100vw;
        border: 2px solid #F1C6A5;
        border-radius: 20px;
        
        &--right {
          right: auto;
          left: var(--horizontal-offset);
        }

        @media (max-width: 767px) {
          display: none;
        }
      }

      .portfolio-header__title {
        text-transform: uppercase;
        font-weight: 800;
      }
    }
  }
</style>