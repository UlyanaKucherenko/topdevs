<template>
  <main class="deal">
    <DealAbout :gistItems="gistItems"/>
    <DealGist :gistItems="gistItems"/>
    <DealSummary/>
    <DealChallenges/>
    <DealSolutions/>
    <DealResults/>
  </main>
</template>

<script>
import DealAbout from '@/js/components/pages/portfolio/deal/DealAbout'
import DealGist from '@/js/components/pages/portfolio/deal/DealGist'
import DealSummary from '@/js/components/pages/portfolio/deal/DealSummary'
import DealChallenges from '@/js/components/pages/portfolio/deal/DealChallenges'
import DealSolutions from '@/js/components/pages/portfolio/deal/DealSolutions'
import DealResults from '@/js/components/pages/portfolio/deal/DealResults'

export default {
  components: {DealAbout, DealGist, DealSummary, DealChallenges, DealSolutions, DealResults},

  data() {
    return {
      gistItems: [
        {
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
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
          iconsColor: 'var(--case-color-primary)',
          titleColor: 'var(--case-color-primary)',
          items: [
            {
              rubricTitle: 'Duration',
              rubricText: '2016 - Present',
              iconDefault: 'clock'
            },
            {
              rubricTitle: 'Industry',
              rubricText: 'Logistics & Tracking',
              iconDefault: 'case'
            }
          ]
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .deal {
    --case-color-primary: #1A379C;
    --case-color-black: #1A1C21;
    --case-color-yellow: #FFE94B;

    color: var(--case-color-black);
    background: #F3F3F3;
  
    &-block-marked {
      position: relative;
      padding-left: 4.4rem;

      &:before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 2.4rem;
        height: .3rem;
        background: var(--case-color-primary);
      }

      @media (max-width: 1199px) {
        padding-left: 3.9rem;
      }

      @media (max-width: 991px) {
        padding-left: 3.4rem;
      }
    }

    &-desc {
      @include text-lg;
      
      font-weight: 600;
    }

    &-underlay {
      position: relative;

      &:before {
        content: '';
        position: absolute;
        z-index: -1;
        left: 0;
        top: 0;
        width: 1000%;
        height: 100%;
        background: var(--case-color-yellow);
      }

      &--reversed {
        &:before {
          left: auto;
          right: 0;
        }
      }
    }
  }
</style>