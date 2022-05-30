<template>
  <section class="deal-solutions" v-scroll-reveal>
    <img 
      class="deal-solutions__bg-lines-grey"
      src="/images/site/portfolio/deal/bg-lines-grey.svg" alt="" 
    >

    <div class="deal-solutions__header-wrapper">
      <img 
        class="deal-solutions__bg-lines-white"
        src="/images/site/portfolio/deal/bg-lines-white.svg" alt="" 
      >

      <div class="container">
        <DealHeader
          class="deal-solutions__header"
          :baseOptions="{
            titleText: 'Solutions',
            titleTextColor: 'var(--case-color-primary)',
          }"
        />
        
        <div class="deal-solutions__list deal-block-marked">
          <div 
            class="deal-solutions__item portfolio-desc"
            v-for="(item, index) in items" :key="index"
          >
            {{ item }}
          </div>

          <img 
            class="deal-solutions__bg-circle"
            src="/images/site/portfolio/deal/solutions/bg-circle.svg" alt="" 
          >  
        </div>
      </div>
    </div>

    <div class="container">
      <DealSolutionsRow
        class="deal-solutions__row"
        v-for="(row, index) in rowsData" :key="index"
        v-bind="row"
        :reversed="!!(index % 2)"
      />
    </div>

    <img 
      class="deal-solutions__bg-circle-bottom"
      src="/images/site/portfolio/deal/solutions/bg-circle-bottom.svg" alt="" 
    >
  </section>
</template>

<script>
import DealHeader from '@/js/components/pages/portfolio/deal/global/DealHeader'
import DealSolutionsRow from './DealSolutionsRow'

export default {
  components: {DealHeader, DealSolutionsRow},

  data() {
    return {
      items: [
        `In tandem with the client's development team, we've started from the application architecture design. Each car transportation party deserved a thought-through feature set. So we have developed a deep logic for the role of each app user.`,
        `There were some specific features for each role as well as some common ones to serve the interests of all parties. As a shared functionality we've allocated the need to implement the opportunity to sign a service contract that safeguards the rights and obligations of each user.`, 
        `The integration of payment systems was another important feature. This way transporters could instantly receive compensation for provided services and customers’ payments were properly secured and guaranteed. Another crucial feature was real-time location tracking that was useful for both transporters who could receive offers based on their location and customers who could instantly monitor the delivery process.`, 
        `Ultimately, each party has received a list of specific features that automate, simplify, and secure the whole car transportation service for all. Besides, it is easily accessible from one mobile application.`, 
        `Once the app was fully developed, we deployed it to the App Store and continued supporting it after launch. By constantly upgrading the app with new functionality we ensure it is up-to-date and continues serving the best interests of their users.`
      ],

      rowsData: [
        {
          rowTitle: 'For Car Transporters',
          mockupURL: '/images/site/portfolio/deal/solutions/mockup-1.png',
          listItems: [
            {
              titleText: 'Order Selection',
              descText: 'Carriers can check and filter the available loads by a range of criteria to choose the most suitable as well as get offers from brokers.'
            },
            {
              titleText: 'Order Management',
              descText: 'The app allows car haulers to send offers, negotiate and accept shipment cost, get all information about the pickup and destination parties along with electronic proof of each action.'
            },
            {
              titleText: 'Reporting System',
              descText: 'No more paperwork with a convenient list of records about current or historic loads that can be easily filtered and printed upon request.'
            },
            {
              titleText: 'Inspection Diagram',
              descText: 'Before shipment, old vehicles can be accurately inspected for any damages with detailed description backed by photos and videos to prevent transportation damage claims'
            }
          ],
        },
        {
          rowTitle: 'For Car Dealers',
          mockupURL: '/images/site/portfolio/deal/solutions/mockup-2.png',
          listItems: [
            {
              titleText: 'Transporter Selection',
              descText: `The app helps to search for the best transporters in the area, review carrier's experience and ratings, add to favorites, send and receive offers, or assign loads instantly from the app.`
            },
            {
              titleText: 'Transportation Monitoring',
              descText: 'Dealers get instant notifications about the load status change, vehicle inspection reports, and other crucial information in real-time with the ability to rate the delivery service.'
            }
          ],
        },
        {
          rowTitle: 'For Car Buyers',
          mockupURL: '/images/site/portfolio/deal/solutions/mockup-3.png',
          listItems: [
            {
              titleText: 'Vehicle Inspection',
              descText: 'Car buyers get an unbiased condition report about the vehicle of their interest from the non-involved in the sale transporters that prevents them from hidden damages.',
            },
            {
              titleText: 'Deals Notification',
              descText: 'The app provides potential buyers with notifications about the new deals and the detailed data along with condition reports from carriers even before the auction to buy the best cars.'
            },
            {
              titleText: 'Real-Time Tracking',
              descText: 'Customers can monitor each stage of car delivery starting from vehicle inspection to real-time location tracking and the endpoint of shipment. '
            }
          ],
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .deal-solutions {
    position: relative;
    margin-bottom: 12rem;

    @media (max-width: 1400px) {
      margin-bottom: 11rem;
    }

    @media (max-width: 1199px) {
      margin-bottom: 10rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    &__header-wrapper {
      position: relative;
    }

    &__bg-circle {
      position: absolute;
      right: 0;
      top: 0;
      width: 46rem;
      transform: translate(60%, 10%);
      z-index: -1;

      @media (max-width: 1400px) {
        transform: translate(calc(var(--container-padding) + 25%), 10%);
      }

      @media (max-width: 767px) {
        top: 10%;
        width: 100vw;
        transform: translate(53%, 10%);
      }
    }

    &__bg-circle-bottom {
      position: absolute;
      left: 40rem;
      bottom: 10rem;
    
      @media (max-width: 1600px) {
        left: 30rem;
      }

      @media (max-width: 991px) {
        left: auto;
        right: calc(20% + var(--container-padding));
        bottom: 3rem;
      }

      @media (max-width: 575px) {
        display: none;
      }
    }

    &__bg-lines-white {
      position: absolute;
      width: 13.5%;
      left: 0;
      bottom: 15%;

      @media (max-width: 1400px) {
        width: calc(var(--container-padding) * 1.5);
      }

      @media (max-width: 767px) {
        width: 30%;
        bottom: auto;
        top: 67%;
      }
    }

    &__bg-lines-grey {
      position: absolute;
      width: 12.6rem;
      right: 9.7vw;
      top: 67%;

      @media (max-width: 1700px) {
        right: var(--container-padding);
      }

      @media (max-width: 991px) {
        display: none;
      }
    }

    &__header {
      margin-bottom: 5rem;
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

      @media (min-width: 992px) {
        &:nth-child(1) {
          .deal-solutions-row__mockup {
            transform: translate(5%, -5%);

            @media (max-width: 1400px) {
              transform: translate(-5%, -5%);
            }
          }
        }
  
        &:nth-child(2) {
          .deal-solutions-row__mockup {
            transform: translateY(-9%);

            @media (max-width: 1400px) {
              width: 64.8%;
              transform: translate(3%, -9%);
            }

            @media (max-width: 1199px) {
              margin-bottom: -5%;
            }
          }
        }
  
        &:nth-child(3) {
          .deal-solutions-row__mockup {
            transform: translate(5%, -12%);
          
            @media (max-width: 1400px) {
              transform: translate(-5%, -12%);
            }
          }
        }
      }

      @media (max-width: 991px) {
        &:first-child {
          .deal-solutions-row__mockup {
            transform: translateX(4.2%);
          }
        }

        &:nth-child(2) {
          .deal-solutions-row__mockup {
            transform: translateX(-1.8%);
          }
        }

        &:last-child {
          .deal-solutions-row__mockup {
            transform: translateX(9.2%);
          }
        }
      }

      @media (max-width: 991px) and (min-width: 576px) {
        &:first-child {
          .deal-solutions-row__item {
            &:nth-child(1) {order: 1};
            &:nth-child(2) {order: 3};
            &:nth-child(3) {order: 2};
            &:nth-child(4) {order: 4};
          }
        }
      }
    }

    &__list {
      position: relative;
      width: 78.5%;
      margin: 0 auto;
      margin-bottom: 8rem;

      @media (max-width: 1400px) {
        width: 92%;
      }

      @media (max-width: 991px) {
        margin-bottom: 5.5rem;
      }

      @media (max-width: 575px) {
        width: 100%;
        margin-bottom: 4.5rem;
      }
    }

    &__item {
      line-height: 180%;
      margin-bottom: 1em;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__block-accent {
      max-width: 80.8rem;
      padding: 3rem 0 3rem 6rem;
      margin-left: auto;
    }
  }
</style>