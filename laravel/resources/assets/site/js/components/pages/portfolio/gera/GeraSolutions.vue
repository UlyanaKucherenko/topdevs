<template>
  <section class="gera-solutions" v-scroll-reveal>
    <img 
      class="gera-solutions__bg"
      src="/images/site/portfolio/gera/solutions/bg.png" alt="" 
    >

    <div class="container">
      <PortfolioHeader
        class="gera-solutions__header "
        isCentered
        headerColumnBreakpoint
        :maxWidth="1027"
        titleText="Solutions"
        titleTextColor="var(--case-color-primary)"
        :descText="[
          'We have started our journey from the functionality refinement of the existing site. The front end part of the admin panel was implemented with the Vue.js framework. Now users can register with their Google profiles or social media platforms like Facebook and VK.',
          'A fully-fledged online store was presented to the audience for buying wellness goods and specific courses. We\'ve integrated payment systems like international Paypal and Russian Robokassa for conducting secure, easy and convenient payments. As there are lots of visual content, our team has decided to add the opportunity to watch videos from YouTube. Per the client\'s request, we\'ve managed to build mobile apps for iOS and Android to expand the business audience reach.'
        ]"
        :breakpoints="{
          991: {isCentered: false}
        }"
      />

      <div class="gera-solutions__list">
        <div 
          class="gera-solutions__item"
          v-for="(item, index) in items" :key="index"
        >
          <img 
            class="gera-solutions__mockup"
            :src="item.imgURL" alt="" 
          >
          <div class="gera-solutions__card">
            <div class="gera-solutions__card-number">
              0{{ index+1 }}
            </div>
            <PortfolioBlockBase
              v-bind="item"
              titleColor="var(--case-color-primary)"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'
import PortfolioBlockBase from '@/js/components/pages/portfolio/global/PortfolioBlockBase'

export default {
  components: {PortfolioHeader, PortfolioBlockBase},

  data() {
    return {
      items: [
        {
          titleText: 'Subscription System',
          descText: 'Users may subscribe for free or within a specified price, register via Google account, or social media for online classes and wellness tours.',
          imgURL: '/images/site/portfolio/gera/solutions/mockup-1.png'
        },
        {
          titleText: 'Training & Courses',
          descText: 'After registration users get access to online courses, yoga practice, training for eyesight recovery, spine rehabilitation, and healing of the whole human body.  ',
          imgURL: '/images/site/portfolio/gera/solutions/mockup-2.png'
        },
        {
          titleText: 'Knowledge Base',
          descText: 'There is an online library full of thematic books and a blog filled with useful tips, news, and other information important for customers.',
          imgURL: '/images/site/portfolio/gera/solutions/mockup-3.png'
        },
        {
          titleText: 'Events Calendar',
          descText: 'Every user can see a calendar with a schedule of all training, classes, festivals, wellness tours, and online consultations.',
          imgURL: '/images/site/portfolio/gera/solutions/mockup-4.png'
        },
        {
          titleText: 'Payment Systems',
          descText: 'PayPal and Robokassa payment systems were integrated into the app so that users could pay for goods, unique content, and participation in events. ',
          imgURL: '/images/site/portfolio/gera/solutions/mockup-5.png'
        }
      ]
    }
  },
}
</script>

<style lang="scss">
  .gera-solutions {
    position: relative;

    @media (max-width: 991px) {
      padding-bottom: 5rem;
    }

    &__bg {
      position: absolute;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    &__item {
      display: flex;
      align-items: center;
      margin-top: -7.5%;

      @media (max-width: 575px) {
        flex-direction: column;
        max-width: 50rem;
        margin: 0 auto;
        margin-bottom: 2rem;
      }

      &:first-child {
        margin-top: 0;
      }

      &:nth-child(even) {
        @media (min-width: 576px) {
          flex-direction: row-reverse;

          .gera-solutions {
            &__mockup {
              margin-right: -3%;
              margin-left: 7.6rem;

              @media (max-width: 840px) {
                margin-left: 1rem;
              }
            }
          }
        }
      }
    }

    &__mockup {
      width: 23%;
      min-width: 24rem;
      transform: translateY(7.5%);
      margin-right: 8rem;
      margin-left: -1.5%;

      @media (max-width: 840px) {
        margin-right: 1rem;
      }

      @media (max-width: 767px) {
        transform: translateY(6.5%);
      }

      @media (max-width: 575px) {
        margin-left: 0;
        margin-right: 0;
        transform: translate(9%, 7.5%);
      }
    }

    &__card {
      width: 67.6rem;
      display: flex;
      align-items: center;

      @media (max-width: 991px) {
        align-items: flex-start;
      }

      @media (max-width: 767px) {
        width: unset;
        flex-direction: column;
      }

      @media (max-width: 575px) {
        flex-direction: row;
      }

      &-number {
        margin-right: 5rem;
        font-weight: 900;
        font-family: var(--Muli);
        font-size: 15.3rem;
        color: rgba(194, 79, 136, 0.3);
        line-height: 80%;
        letter-spacing: 0.03em;

        @media (max-width: 1199px) {
          font-size: 13.3rem;
          margin-right: 4rem;
        }

        @media (max-width: 991px) {
          font-size: 9.3rem;
          margin-right: 3rem;
        }

        @media (max-width: 767px) and (min-width: 576px) {
          margin-bottom: 2.5rem;
        }

        @media (max-width: 767px) {
          font-size: 6.3rem;
          margin-right: 1.5rem;
          // transform: translateY(-16%);
        }
      }
    }
  }
</style>