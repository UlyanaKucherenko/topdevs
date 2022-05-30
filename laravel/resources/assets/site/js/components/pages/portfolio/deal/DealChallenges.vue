<template>
  <section class="deal-challenges" v-scroll-reveal>
    <div class="container">
      <DealHeader
        class="deal-challenges__header"
        :baseOptions="{
          titleText: 'Challenges',
          titleTextColor: 'var(--case-color-primary)',
          descText: 'The client has approached us with an idea to build a mobile app that is aimed to simplify and automate numerous processes in the vehicle transportation business. It is usually pretty hard to find an order and negotiate the conditions of the collaboration between carriers and customers.',
          maxWidth: 626,
          headerColumnBreakpoint: 1400,
          breakpoints: {
          }
        }"
      />
      
      <div class="deal-challenges__list deal-block-marked">
        <div 
          class="deal-challenges__item portfolio-desc"
          v-for="(item, index) in items" :key="index"
        >
          {{ item }}
        </div>  

        <div class="deal-challenges__bg-text">REASONS</div>
      </div>

      <div 
        class="deal-challenges__block-accent portfolio-desc deal-desc deal-underlay"
        :class="{'deal-underlay--reversed': windowWidth <= 1400}"
      >
        Our team has to put all efforts to understand the pains of each party and architect the most fitting functionality for every role.

        <img 
          class="deal-challenges__bg-lines"
          src="/images/site/portfolio/deal/bg-lines-grey.svg" alt="" 
        >
      </div>
    </div>
  </section>
</template>

<script>
import DealHeader from '@/js/components/pages/portfolio/deal/global/DealHeader'

export default {
  components: {DealHeader},

  data() {
    return {
      items: [
        `Too much time is wasted on continuous load search and communication with clients about each stage of delivery. Sometimes the problem is complicated by the unfitting load size, weight, or length. Besides that, too much paperwork is required to document the shipment deal and payment or delivery receipts.`,
        `But there are always two sides to the problem. Not only carriers were striving for an automated solution but customers as well, like car brokers or car buyers.`,
        `In the relationships of the last two parties transporters have always been the guilty ones when the dispute about old car damages appeared. Buyers were always at risk to get a vehicle with hidden damages. As for the brokers’ side, they required reliable shippers to provide buyers with more trusted services that result in bigger sales. Both of them were striving for real-time car tracking.`
      ]
    }
  },
}
</script>

<style lang="scss">
  .deal-challenges {
    margin-bottom: 18rem;

    @media (max-width: 1400px) {
      margin-bottom: 12rem;
    }

    @media (max-width: 991px) {
      margin-bottom: 8rem;
    }

    @media (max-width: 575px) {
      margin-bottom: 6rem;
    }

    &__header {
      margin-bottom: 7.5rem;
    
      @media (max-width: 1400px) {
        margin-bottom: 6.5rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 3.5rem;
      }
    }

    &__bg-text {
      position: absolute;
      left: 0;
      top: 50%;
      transform: translate(-33%, -50%);
      font-family: var(--Muli);
      font-weight: 900;
      font-size: 165px;
      line-height: 120%;
      letter-spacing: 0.05em;
      color: rgba(252, 252, 252, 0.6);
      z-index: -1;

      @media (max-width: 1600px) {
        font-size: 16rem;
        transform: translate(-21%, -50%);
      }

      @media (max-width: 1400px) {
        font-size: 14.5rem;
        transform: translate(-15%, -50%);
      }

      @media (max-width: 1199px) {
        font-size: 10.5rem;
      }
      
      @media (max-width: 991px) {
        font-size: 8rem;
      }

      @media (max-width: 767px) {
        font-size: 5rem;
        transform: translate(-38%, -50%) rotate(-90deg);
      }

      @media (max-width: 575px) {
        font-size: 8rem;
        transform: translate(-42%, -50%) rotate(-90deg);
      }
    }

    &__bg-lines {
      position: absolute;
      width: 17rem;
      bottom: 5%;
      right: calc(100% + 10vw);

      @media (max-width: 1400px) {
        right: auto;
        left: calc(100% + 6vw);
        width: 11rem;
      }

      @media (max-width: 1199px) {
        width: 10rem;
      }

      @media (max-width: 991px) {
        width: 9rem;
      }
    }

    &__list {
      position: relative;
      width: 78.5%;
      margin: 0 auto;
      margin-bottom: 8rem;

      @media (max-width: 1400px) {
        width: 90%;
        margin-bottom: 7rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 5.5rem;
      }

      @media (max-width: 575px) {
        width: 100%;
        margin-bottom: 4rem;
      }
    }

    &__item {
      margin-bottom: 1em;
      line-height: 180%;

      &:last-child {
        margin-bottom: 0;
      }
    }

    &__block-accent {
      position: relative;
      font-weight: 600;
      max-width: 80.8rem;
      padding: 3rem 0 3rem 6rem;
      margin-left: auto;

      @media (max-width: 1400px) {
        padding: 3rem 6rem 3rem 0;
        margin-left: 0;
        margin-right: auto;
      }

      @media (max-width: 1199px) {
        padding: 2rem 5.5rem 2rem 0;
        max-width: 80%;
      }

      @media (max-width: 991px) {
        padding: 2rem 5rem 2rem 0;
      }

      @media (max-width: 575px) {
        padding: 2rem 2rem 2rem 0;
        max-width: unset;
      }
    }
  }
</style>