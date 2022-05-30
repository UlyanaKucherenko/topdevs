<template>
  <main 
    class="helpy"
    :style="{'--about-text-offset': aboutTextOffset}"
  >
    <HelpyAbout :gistItems="gistItems"/>
    <HelpyGist :gistItems="gistItems"/>
    <HelpySummary/>
    <HelpyChallenges/>
    <HelpySolutions/>
    <HelpyResults/>
  </main>
</template>

<script>
import HelpyAbout from '@/js/components/pages/portfolio/helpy/HelpyAbout'
import HelpyGist from '@/js/components/pages/portfolio/helpy/HelpyGist'
import HelpySummary from '@/js/components/pages/portfolio/helpy/HelpySummary'
import HelpyChallenges from '@/js/components/pages/portfolio/helpy/HelpyChallenges'
import HelpySolutions from '@/js/components/pages/portfolio/helpy/HelpySolutions'
import HelpyResults from '@/js/components/pages/portfolio/helpy/HelpyResults'

export default {
  components: {HelpyAbout, HelpyGist, HelpySummary, HelpyChallenges, HelpySolutions, HelpyResults},

  data() {
    return {
      aboutTextOffset: 0,
      gistItems: [
        {
          iconsColor: 'var(--case-color-purple)',
          titleColor: 'var(--case-color-purple)',
          items: [
            {
              rubricTitle: 'Country',
              rubricText: 'USA',
              iconDefault: 'gps',
            },
            {
              rubricTitle: 'Platform',
              rubricText: 'iOS',
              iconDefault: 'monitor'
            }
          ]
        },
        {
          iconsColor: 'var(--case-color-purple)',
          titleColor: 'var(--case-color-purple)',
          items: [
            {
              rubricTitle: 'Industry',
              rubricText: 'Healthcare',
              iconDefault: 'case'
            },
            {
              rubricTitle: 'Duration',
              rubricText: '11 months',
              iconDefault: 'clock'
            }
          ]
        }
      ]
    }
  },


  mounted() {
    this.updateAboutTextOffset()
  },


  watch: {
    windowWidth() {this.updateAboutTextOffset()},
    windowHeight() {this.updateAboutTextOffset()}
  },


  methods: {
    updateAboutTextOffset() {
      const textDom = document.querySelector('.helpy-about__bg-text')
      const textRect = textDom.getBoundingClientRect()
      const sectionDom = document.querySelector('.helpy-about')
      const sectionRect = sectionDom.getBoundingClientRect()
      const offset = textRect.bottom - sectionRect.bottom

      this.aboutTextOffset = offset > 0 ? `${offset}px` : '0px'
    }
  },
}
</script>

<style lang="scss">
  .helpy {
    --case-color-black: #070611;
    --case-color-purple: #6E67A7;
    --case-color-orange: #FF9900;
    --portfolio-header__title-margin: 4rem;
    --offset-header-to-text-accent: 3.5rem;

    color: var(--case-color-black);
    background: #F7F7F7;

    @media (max-width: 1199px) {
      --portfolio-header__title-margin: 3.5rem;
    }

    @media (max-width: 575px) {
      --portfolio-header__title-margin: 2.5rem;
    }

    &-text-accent {
      @include text-lg;
      font-weight: 600;
      color: var(--case-color-purple);
    
      @media (min-width: 1200px) {
        font-size: 2.4rem;
      }
    }
  }
</style>