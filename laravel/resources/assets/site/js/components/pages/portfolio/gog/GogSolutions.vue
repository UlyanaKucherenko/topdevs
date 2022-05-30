<template>
  <div class="gog-solutions">
    <div class="container">
      <GogHeader
        class="gog-solutions__header"
        innerMaxWidth="96.4rem"
        dividerColor="#595C84"
        :baseOptions="{
          titleText: 'Solutions',
          titleTextColor: 'var(--case-color-primary)',
          descText: [
            'We\'ve started our app development journey with brainstorming sessions. That resulted in a decision to create an SDK - a piece of code that can trace the user\'s relocation. We wanted a universal solution so an SDK was a perfect match as it is possible to incorporate it in almost any iOS application.',
            'All the major information should be processed with SDK but presented in an application. We\'ve introduced a convenient user interface that can provide all the customer tracking data though not only for an app owner but also for the user. This way everyone can see personal progress on various points while using each business service.'
          ],
          asideDescColor: 'var(--case-color-white)'
        }"
        :breakpoints="{
          1400: {innerMaxWidth: '85.8rem'},
          1199: {innerMaxWidth: '76.2rem'}
        }"
      />

      <div class="gog-solutions__grid">
        <GogSolutionsItem v-bind="items[0]"/>
        <div class="gog-solutions__grid-divider"/>
        <GogSolutionsItem v-bind="items[1]"/>
        <GogSolutionsItem v-bind="items[2]"/>
        <div class="gog-solutions__grid-divider gog-solutions__grid-divider--reverse"/>
        <GogSolutionsItem v-bind="items[3]"/>
      </div>
    </div>
  </div>
</template>

<script>
import GogHeader from '@/js/components/pages/portfolio/gog/global/GogHeader'
import GogSolutionsItem from './GogSolutionsItem'

export default {
  components: {GogHeader, GogSolutionsItem},

  data() {
    return {
      items: [
        {
          icon: '/images/site/portfolio/gog/solutions/icon-1.svg',
          title: 'Location Tracking',
          desc: 'The app detects user location, visits, activities, driving statistics, and displays all major information in the app via a map and a clear data list.',
          lineURL: '/images/site/portfolio/gog/solutions/bg-line-1.svg',
        },
        {
          icon: '/images/site/portfolio/gog/solutions/icon-2.svg',
          title: 'User Profile',
          desc: 'Data collection implemented in the app helps to design 360-degree customer profiles with specific characteristics based on previous choices.',
          lineURL: '/images/site/portfolio/gog/solutions/bg-line-2.svg',
          lineIsReversed: true
        },
        {
          icon: '/images/site/portfolio/gog/solutions/icon-3.svg',
          title: 'Behaviour Prediction',
          desc: 'Based on the collected data, the app forms a personalized schedule and can forecast the future actions of the user.',
          lineURL: '/images/site/portfolio/gog/solutions/bg-line-3.svg'
        },
        {
          icon: '/images/site/portfolio/gog/solutions/icon-4.svg',
          title: 'Sharing Mechanism',
          desc: 'There is a possibility to send debug data to other devices or to the server that helps to utilize data more efficiently.',
          lineURL: '/images/site/portfolio/gog/solutions/bg-line-4.svg',
          lineIsReversed: true
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .gog-solutions {
    padding-top: calc(var(--challenges-offset-bottom) * 2);
    background: linear-gradient(180deg, #2A2A64 0%, #101034 100%);
    padding-bottom: 25rem;
    margin-bottom: 15rem;

    @media (max-width: 1400px) {
      padding-bottom: 20rem;
      margin-bottom: 12rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 15rem;
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 12rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 10rem;
      margin-bottom: 8rem;
    }

    &__header {
      margin-bottom: calc(var(--space-unit) * 10);
    }

    &__grid {
      position: relative;
      z-index: 0;
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      column-gap: 4rem;
      row-gap: 7rem;
      grid-auto-rows: 1fr;

      @media (max-width: 1552px) {
        row-gap: 5.5rem;
        column-gap: 3rem;
      }

      @media (max-width: 1400px) {
        row-gap: 4.5rem;
        column-gap: 2.5rem;
      }

      @media (max-width: 1199px) {
        row-gap: 3.5rem;
        column-gap: 2rem;
      }

      @media (max-width: 991px) {
        row-gap: 3rem;
        column-gap: 1.5rem;
      }

      @media (max-width: 767px) {
        grid-template-columns: 1fr 1fr;
        row-gap: 2rem;
        column-gap: 2rem;
      }

      @media (max-width: 575px) {
        grid-template-columns: 1fr;
      }

      &-divider {
        display: flex;
        align-items: center;
        flex-direction: column;
        height: 100%;

        &:before {
          content: '';
          display: block;
          width: 1rem;
          height: 1rem;
          border-radius: 50%;
          background-color: var(--case-color-primary);
          margin-bottom: 3rem;
        }

        &:after {
          content: '';
          display: block;
          width: 2px;
          background: #595C84;
          flex-grow: 1;
        }

        &--reverse {
          flex-direction: column-reverse;

          &::before {
            margin-bottom: 0;
            margin-top: 3rem;
          }
        }

        @media (max-width: 767px) {
          display: none;
        }
      }
    }
  }
</style>