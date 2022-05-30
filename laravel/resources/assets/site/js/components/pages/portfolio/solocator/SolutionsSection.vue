<template>
  <div class="solutions-section">
    <img 
      class="solutions-section__bg-lines"
      src="/images/site/portfolio/solocator/solutions/bg-lines.png" alt="" 
    >
    <div class="solutions-section__top">
      <div class="container">
        <PortfolioHeader
          class="solutions-section__header"
          titleText="Solutions"
          titleImg="/images/site/portfolio/solocator/solutions/title-square.svg"
          titleBgColor="#FFFFFF"
          descText="We've started our cooperation with an implementation of the basic app idea. Further features were added along the way. Over time we've polished our communication and development process to make it even more transparent and continue supporting the project for over 8 years so far."
          asideDividerColor="#4B4B4B"
        />
        
        <div class="solutions-section__top-row">
          <img 
            class="solutions-section__bg-squares-1"
            src="/images/site/portfolio/solocator/solutions/bg-squares-1.svg" alt="" 
          >
          <SolutionsSectionRow
            :leftItem="topItems[0]"
            :rightItem="topItems[1]"
          />
        </div>
      </div>
    </div>

    <div class="solutions-section__bottom">
      <div class="container">
        <div class="solutions-section__bottom-row">
          <img 
            class="solutions-section__bg-squares-2"
            src="/images/site/portfolio/solocator/solutions/bg-squares-2.svg" alt="" 
          >
          <SolutionsSectionRow
            :leftItem="bottomItems[0]"
            :rightItem="bottomItems[1]"
          />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import SolutionsSectionRow from './SolutionsSectionRow'
import SolutionsSectionItem from './SolutionsSectionItem'

export default {
  components: {PortfolioHeader, SolutionsSectionItem, SolutionsSectionRow},

  data() {
    return {
      topItems: [
        {
          imgURL: '/images/site/portfolio/solocator/solutions/mockup-1.png',
          titleText: 'Data Selection',
          descText: 'A user can choose what information to capture and overlay over the photos. It is possible to select coordinate formats, metric or imperial units, turn on / off the accelerometer indicator, and edit the layout for the date format with printed photos, text color, and font size, applying a gradient if necessary.'
        },
        {
          imgURL: '/images/site/portfolio/solocator/solutions/mockup-2.png',
          titleText: 'Photos Management',
          descText: 'Photos can be sorted by date, location (street), distance from the user, and the name of the project. They can be viewed on a map with directions, both single and multiple.'
        },
      ],

      bottomItems: [
        {
          imgURL: '/images/site/portfolio/solocator/solutions/mockup-3.png',
          titleText: 'Data Export',
          descText: 'The application has the function of exporting stamped photos, their cards (single or multiple), photo information, KML, KMZ and CSV files with general information in the form of separate files or archives on request, or automatically downloading stamped and original photos to Google Drive, Dropbox or iCloud.'
        },
        {
          imgURL: '/images/site/portfolio/solocator/solutions/mockup-4.png',
          titleText: 'Industry Package',
          descText: 'Additional features are available via in-app purchases. They include selecting street modes, editing overlay fields, improving GPS location, flexible capture modes, custom exporting options, etc.'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .solocator .solutions-section {
    position: relative;
    overflow: hidden;

    &__bg-lines {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 101%;
      pointer-events: none;
      opacity: .5;

      @media (max-width: 991px) {
        display: none;
      }
    }

    &__bg-squares-1 {
      position: absolute;
      top: 0;
      right: 0;
      width: 16.5rem;

      @media (max-width: 1400px) {
        width: 7.5%;
      }

      @media (max-width: 1199px) {
        width: 6%;
        top: 4rem;
      }

      @media (max-width: 550px) {
        display: none;
      }
    }

    &__bg-squares-2 {
      position: absolute;
      top: 0;
      right: 0;
      width: 10rem;

      @media (max-width: 1400px) {
        width: 6.6%;
      }

      @media (max-width: 1199px) {
        width: 5.3%;
      }

      @media (max-width: 550px) {
        display: none;
      }
    }

    &__header {
      padding-bottom: calc(var(--space-unit) * 10);

      .portfolio-header {
        @media (max-width: 1000px) {
          &__title {
            margin-bottom: calc(var(--space-unit) * 7.4);
          }

          &__aside {
            width: 100%;
          }

          &__content {
            flex-direction: column;
            align-items: flex-start;
          }
        }
      }
    }

    &__top {
      padding-top: calc(var(--space-unit) * 15);
      padding-bottom: calc(var(--space-unit) * 10);
      background: linear-gradient(0deg, #F3F3F3, #F3F3F3);

      .solutions-section-item__mockup {
        margin-top: -1.5%;
      }

      &-row {
        position: relative;
      }
    }

    &__bottom {
      padding-top: calc(var(--space-unit) * 37);
      padding-bottom: calc(var(--space-unit) * 50);

      @media (max-width: 1450px) {
        padding-top: calc(var(--space-unit) * 25);
        padding-bottom: calc(var(--space-unit) * 35);
      }

      @media (max-width: 1400px) {
        padding-top: calc(var(--space-unit) * 35);
        padding-bottom: calc(var(--space-unit) * 45);
      }

      @media (max-width: 1000px) {
        padding-top: calc(var(--space-unit) * 30);
        padding-bottom: calc(var(--space-unit) * 40);
      }

      @media (max-width: 991px) {
        padding-top: calc(var(--space-unit) * 40);
        padding-bottom: calc(var(--space-unit) * 50);
      }

      @media (max-width: 880px) {
        padding-top: calc(var(--space-unit) * 10);
        padding-bottom: calc(var(--space-unit) * 10);
      }

      @media (max-width: 550px) {
        padding-top: calc(var(--space-unit) * 10);
      }

      &-row {
        position: relative;
      }
    }
  }
</style>