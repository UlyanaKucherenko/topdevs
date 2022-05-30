<template>
  <main class="bark">
    <BarkAbout :gistItems="gistItems"/>
    <BarkGist :gistItems="gistItems"/>
    <BarkSummary/>
    <BarkChallenges/>
    <BarkSolutions/>
    <BarkResults/>
  </main>
</template>

<script>
import BarkAbout from '@/js/components/pages/portfolio/bark/BarkAbout'
import BarkGist from '@/js/components/pages/portfolio/bark/BarkGist'
import BarkSummary from '@/js/components/pages/portfolio/bark/BarkSummary'
import BarkChallenges from '@/js/components/pages/portfolio/bark/BarkChallenges'
import BarkSolutions from '@/js/components/pages/portfolio/bark/BarkSolutions'
import BarkResults from '@/js/components/pages/portfolio/bark/BarkResults'

export default {
  components: {BarkAbout, BarkGist, BarkSummary, BarkChallenges, BarkSolutions, BarkResults},

  data() {
    return {
      gistItems: [
        {
          iconsColor: 'var(--case-color-green)',
          titleColor: 'var(--case-color-green)',
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
          iconsColor: 'var(--case-color-green)',
          titleColor: 'var(--case-color-green)',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '7 months',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Media & Entertainment, <nobr>Sports & Fitness</nobr>',
              iconDefault: 'case'
            }
          ]
        }
      ]
    }
  }
}
</script>

<style lang="scss">
  .bark {
    --case-color-primary: #F37233;
    --case-color-green: #257E4E;
    --case-color-black: #0C0C0C;
    --portfolio-header__title-margin: 4rem;

    color: var(--case-color-black);
    background: white;

    @media (max-width: 1199px) {
      --portfolio-header__title-margin: 3.5rem;
    }

    @media (max-width: 575px) {
      --portfolio-header__title-margin: 2.5rem;
    }

  }
</style>