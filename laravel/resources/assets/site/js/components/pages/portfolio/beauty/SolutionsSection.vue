<template>
  <div class="solutions-section">
    <div class="container">
      <div class="solutions-section__header">
        <PortfolioHeader
          class="solutions-section__header-inner"
          titleText="Solutions"
          titleTextColor="#951865"
          asideDescColor="#260018"
          :descText="[
            `We've accepted the challenge and started mapping the customer journey via UX design. Once we've got the client's approval, the second phase was to define how the apps will look and feel with UI design.`,
            `At some point, we've decided on the payment system and the most convenient live streaming platform. Though the last one was shut so we've moved on to the other one.`,
            `Currently, we continue working on the web solution and mobile application development to bring the startup's idea to life.`
          ]"
        />

      <div class="solutions-section__header-fig container">
        <img src="/images/site/portfolio/beauty/solutions/header-fig.svg" alt="">
      </div>
    </div>

      <div 
        class="solutions-section__item"
        :class="{'solutions-section__item--reverse': index % 2}"
        v-for="(item, index) in items" :key="index"
        v-scroll-reveal
      >
        <img :src="windowWidth >= 992 ? item.imgURL : `${item.imgURL.slice(0,-4)}-991.png`" alt="" class="solutions-section__item-img">
        <div class="solutions-section__item-info">
          <div class="solutions-section__item-number">{{ item.number }}</div>
          <h3 class="solutions-section__item-title portfolio-title">{{ item.title }}</h3>
          <div class="solutions-section__item-subtitle portfolio-desc portfolio-desc--sm">{{ item.subtitle }}</div>
        </div>
      </div>
    </div>

    <div class="beauty-ticker-text">results results results results</div>
  </div>
</template>

<script>
import PortfolioHeader from '@/js/components/pages/portfolio/global/PortfolioHeader'

export default {
  components: {PortfolioHeader},

  data() {
    return {
      items: [
        {
          number: '01',
          title: 'Subscription',
          subtitle: 'Users can choose the master of their interest and pay the specified subscription price that is divided between the platform and the beauty expert.',
          imgURL: '/images/site/portfolio/beauty/solutions/1.png'
        },
        {
          number: '02',
          title: 'Video Streaming',
          subtitle: 'Beauty professionals initiate live streaming sessions with free or paid access setting the cost per minute of viewing.',
          imgURL: '/images/site/portfolio/beauty/solutions/2.png'
        },
        {
          number: '03',
          title: 'Payment System',
          subtitle: 'Fans may pay online for provided services via an integrated CommerceGate payment system quickly and safely.',
          imgURL: '/images/site/portfolio/beauty/solutions/3.png'
        },
      ]
    }
  },
}
</script>

<style lang="scss">
  .beauty .solutions-section {
    position: relative;
    background: #ffe2ed;
    padding: calc(var(--space-unit) * 14) 0;

    &__header {
      position: relative;

      @media (max-width: 1000px) {
        margin-bottom: calc(var(--space-unit) * 7); 
      }

      &-fig {
        position: absolute;
        left: 50%;
        width: 100%;
        top: 0;
        transform: translateX(-50%);
        pointer-events: none;

        img {
          width: calc(var(--space-unit) * 9);
          position: absolute;
          top: 50%;
          left: calc(var(--container-padding) + 4%);
        
          @media (max-width: 1000px) {
            left: auto;
            right: calc(var(--container-padding) + 5%);
            top: 0;
          }
        }
      }
    }

    &__item {
      display: flex;
      align-items: center;
      margin-top: -5%;
      
      @media (max-width: 1000px) {
        &:nth-child(2) {
          margin-top: 0;
        }
      }

      @media (max-width: 991px) {
        &:nth-child(4) {
          margin-top: -10%;
          
          .solutions-section__item-img {
            transform: translateY(13%);

            @media (max-width: 550px) {
              transform: translateY(26%);
            }
          }
        }
      }

      @media (max-width: 550px) {
        flex-direction: column;
        margin: 0;
        margin-bottom: calc(var(--space-unit) * 10);
      }

      &:nth-child(2) {
        .solutions-section__item-img {
          @media (max-width: 550px) {
            transform: translateY(5%);
          }
        }
      }

      &:nth-child(3) {
        .solutions-section__item-img {
          @media (max-width: 550px) {
            transform: translateY(10%);
          }
        }
      }

      &:nth-child(4) {
        @media (max-width: 991px) {
          margin-top: -10%;
        }
          
        .solutions-section__item-img {
          @media (max-width: 991px) {
            transform: translateY(9%);
          }

          @media (max-width: 550px) {
            transform: translateY(26%);
          }
        }
      }

      &--reverse {
        @media (min-width: 551px) {
          flex-direction: row-reverse;

          .solutions-section__item {
            &-info {
              margin-left: auto;
              margin-right: 5%;
            }

            &-img {
              @media (max-width: 991px) {
                margin-right: -10%;
                margin-left: 0;
              }
            }
          }
        }
      }

      &:first-child {
        margin-top: 0;
      }

      &-img {
        width: 50%;

        @media (max-width: 991px) {
          width: 58%;
          margin-left: -8%;
        }

        @media (max-width: 550px) {
          width: 100%;
          max-width: 30rem;
          margin: 0;
        }
      }

      &-info {
        width: 31%;
        margin-left: 5%;
        margin-top: -5%;

        @media (max-width: 991px) {
          width: 40%;
        }

        @media (max-width: 550px) {
          margin: 0;
          width: auto;
          max-width: 40rem;
        }
      }

      &-number {
        font-size: calc(var(--space-unit) * 12);
        font-weight: 900;
        font-family: var(--Muli);
        color: transparent;
        -webkit-text-stroke: 1px #4D4981;
        line-height: 120%;
        margin-bottom: calc(var(--space-unit) * 1);
        letter-spacing: 4px;
      }

      &-title {
        color: #4D4981;
        line-height: 29px;
        letter-spacing: 1px;
        font-weight: bold;
        margin-bottom: calc(var(--space-unit) * 1.5)
      }

      &-subtitle {
        line-height: 160%;
        color: #260018;
      }
    }

    &__ticker {
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      transform: translateY(50%);
      opacity: .65;
    }
  }
</style>