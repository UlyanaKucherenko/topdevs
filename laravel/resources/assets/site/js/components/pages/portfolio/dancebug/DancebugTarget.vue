<template>
  <div class="dancebug-target">
    <div class="container">
      <DancebugHeader
        class="dancebug-target__header"
        asideDescColor="var(--case-color-violet)"
        :isCentered="false"
        :baseOptions="{
          titleText: 'Target audience',
          descText: ''
        }"/>
      <DancebugTargetRow
        class="dancebug-target__row"
        v-for="(row, index) in rowsData" :key="index"
        v-bind="row"
        :reversed="!!(index % 2)"
      />

      <div class="dancebug-target__text">
        There are many more features available in the web app. However, the system continues to grow so we keep on
        providing the app post-launch support.
      </div>
    </div>
    <img
      class="dancebug-target__figur"
      src="/images/site/portfolio/dancebug/target/fig-target.png"
    />
  </div>
</template>

<script>
import DancebugHeader from '@/js/components/pages/portfolio/dancebug/global/DancebugHeader'
import DancebugTargetRow from './DancebugTargetRow'

export default {
  name: "DancebugTarget",
  components: {DancebugHeader, DancebugTargetRow},
  data() {
    return {
      rowsData: [
        {
          rowTitle: 'For Dencers and Studio Owners',
          mockupURL: '/images/site/portfolio/dancebug/target/mockup-1.png',
          listItems: [
            {
              titleText: 'Simple Registration',
              descText: 'It has never been so easy to register for a dance competition within just a few clicks and an enjoyable user interface.'
            },
            {
              titleText: 'Access to Videos',
              descText: 'Studios can check how their dancers performed, analyze the weak and strong sides and decide on further improvements.'
            },
            {
              titleText: 'Monitor Scoring',
              descText: 'Much of crucial information can be monitored within the app account including the competition scores of dancers.'
            },
            {
              titleText: 'Easy Access to Videos',
              descText: 'Dancers can see and analyze their performance videos for future improvement and simply save them for their personal memories.'
            }
          ]
        },
        {
          rowTitle: 'For Competition Organizers',
          mockupURL: '/images/site/portfolio/dancebug/target/mockup-2.png',
          listItems: [
            {
              titleText: 'Scheduling',
              descText: 'A special dashboard allows to schedule the events, screen participants, manage the events requirements, and convenient reporting once each stage is complete.'
            },
            {
              titleText: 'Remote Performance Evaluation',
              descText: 'The app allows performance live streaming, recording, and uploading to the app where judges can watch the videos and decide on scores.'
            },
            {
              titleText: 'Scoring System',
              descText: 'Judges can easily use a convenient tool for scoring dancers\' performances, automated results calculation, and speedy reporting.'
            },
          ]
        }
      ],

    }
  }
}
</script>

<style lang="scss">
.dancebug-target {
  padding-bottom: calc(var(--space-unit) * 12);
  position: relative;

  &__header {
    text-align: left;
  }

  &__content {
    display: flex;
    z-index: 1;
  }

  &__row {
    margin-bottom: 8rem;

    &:last-child {
      margin-bottom: 0;
    }

    @media (max-width: 1400px) {
      margin-bottom: 7rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 5.5rem;
    }
  }

  &__text {
    font-weight: 600;
    font-size: 2.4rem;
    line-height: 120%;
    text-align: center;
    letter-spacing: 0.06em;
    color: var(--case-color-black);

    @media (max-width: 991px) {
      font-size: 2rem;
    }

    @media (max-width: 360px) {
      font-size: 1.8rem;
      text-align: left;
    }
  }

  &__figur {
    position: absolute;
    left: 0;
    bottom: -50%;
    z-index: -1;

    @media (max-width: 991px) {
      left: -50%;
    }
    @media (max-width: 576px) {
      display: none;
    }
  }
}
</style>