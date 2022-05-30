<template>
  <section class="meld-solutions" v-scroll-reveal>
    <div class="container">
      <MeldHeader
        class="meld-solutions__header"
        titleText="solutions"
        titleColor="var(--case-color-red)"
        titleImg="/images/site/portfolio/meld/solutions/fig-header.svg"
        titleImgSide="right"
        descText="Our vision was to present an app that will be understandable for match seekers and at the same time provide additional value for a specific group of people. So we've created a pleasant design and ensured all interactions within the app are fast and easy-to-use. Professional network integration gave an added value and was favorably received by the black community."
      />
    </div>

    <div class="meld-solutions__grid">
      <img 
        class="meld-solutions__fig-circles-top"
        src="/images/site/portfolio/meld/solutions/fig-circles-top.svg" alt="" 
      >

      <div class="meld-solutions__row">
        <div 
          class="meld-solutions__row-inner container"
        >
          <div class="meld-solutions__mockup">
            <img src="/images/site/portfolio/meld/solutions/mockup-1.png" alt="" class="meld-solutions__mockup-img">
          </div>
          <div class="meld-solutions__card">
            <MeldSolutionsCard
              class="meld-solutions__card-inner"
              number="01"
              titleText="Facebook / LinkedIn Sign‑In"
              descText="To start using the app users should connect their Facebook and LinkedIn profiles to verify their professionalism though it doesn't require you to show all personal data."
            />
          </div>
        </div>

        <div class="meld-solutions__row-bg">
        </div>

        <img src="/images/site/portfolio/meld/solutions/fig-item-1.svg" alt="" class="meld-solutions__fig-item-1">
      </div>
      <div class="meld-solutions__row">
        <div class="meld-solutions__row-inner container">
          <div class="meld-solutions__mockup">
            <img src="/images/site/portfolio/meld/solutions/mockup-2.png" alt="" class="meld-solutions__mockup-img">
          </div>
          <div class="meld-solutions__card">
            <MeldSolutionsCard
              class="meld-solutions__card-inner"
              number="02"
              titleText="Location-Based Suggestions"
              descText="Users can still choose where to search for new acquaintances and allocate the ones living near them as well as choose other personalized matches."
            />
          </div>
        </div>

        <div class="meld-solutions__row-bg">
        </div>

        <img src="/images/site/portfolio/meld/solutions/fig-item-2.svg" alt="" class="meld-solutions__fig-item-2">
      </div>
      <div class="meld-solutions__row">
        <div class="meld-solutions__row-inner container">
          <div class="meld-solutions__mockup">
            <img src="/images/site/portfolio/meld/solutions/mockup-3.png" alt="" class="meld-solutions__mockup-img">
          </div>
          <div class="meld-solutions__card">
            <MeldSolutionsCard
              class="meld-solutions__card-inner"
              number="03"
              titleText="Instant Messaging"
              descText="Once some person matches the defined criteria and shows mutual sympathy, both individuals can chat with each other and get to know closer."
            />
          </div>
        </div>

        <div class="meld-solutions__row-bg">
        </div>

        <img src="/images/site/portfolio/meld/solutions/fig-item-3.svg" alt="" class="meld-solutions__fig-item-3">
      </div>
    </div>

    <img 
      class="meld-solutions__fig-circles-bottom"
      src="/images/site/portfolio/meld/solutions/fig-circles-bottom.svg" alt="" 
    >
  </section>
</template>

<script>
import MeldHeader from '@/js/components/pages/portfolio/meld/global/MeldHeader'
import MeldSolutionsCard from './MeldSolutionsCard'

export default {
  components: {MeldHeader, MeldSolutionsCard}
}
</script>

<style lang="scss">
  .meld-solutions {
    position: relative;
    padding-bottom: 32.8rem;

    @media (max-width: 1400px) {
      padding-bottom: 23.5rem;
    }

    @media (max-width: 1199px) {
      padding-bottom: 16.7rem;
    }

    @media (max-width: 991px) {
      padding-bottom: 15rem;
    }

    @media (max-width: 575px) {
      padding-bottom: 7rem;
    }

    &__header {
      margin-bottom: 10rem;

      @media (max-width: 1400px) {
        margin-bottom: 7rem;
      }

      @media (max-width: 1199px) {
        margin-bottom: 6rem;
      }

      @media (max-width: 575px) {
        margin-bottom: 4rem;
      }
    }

    &__grid {
      position: relative;
      display: grid;
      grid-auto-rows: 1fr;

      @media (max-width: 575px) {
        grid-auto-rows: auto;
      }
    }

    &__row {
      position: relative;

      @media (max-width: 575px) {
        &:last-child {
          .meld-solutions__card {
            margin-bottom: 0;
          }
        }
      }

      &-inner {
        display: flex;

        @media (max-width: 575px) {
          flex-direction: column;
          padding: 0;
        }
      }

      &-bg {
        position: absolute;
        z-index: -1;
        left: 0;
        top: 0;
        width: 50%;
        height: 100%;
        background: linear-gradient(101.4deg, #FFEBD9 -1.07%, #FFDFC1 110.13%);

        @media (max-width: 575px) {
          background: none;
        }
      }

      &:nth-child(odd) {
        @media (min-width: 576px) {
          .meld-solutions {
            &__row {
              &-bg {
                left: 50%;
              }

              &-inner {
                flex-direction: row-reverse;
              }
            }

            &__card {
              @media (max-width: 840px) {
                justify-content: flex-start;
              }

              @media (max-width: 800px) {
                padding-left: 0;
                padding-right: var(--container-padding);
              }
            }

            &__mockup {
              &-img {
                @media (max-width: 800px) {
                  transform: translate(calc(-50% + calc(var(--container-padding) / 2)), -50%);
                }
              }
            }
          }
        }
      }
    }

    &__mockup {
      width: 50%;
      position: relative;

      @media (max-width: 575px) {
        width: 100%;
        padding: 0 var(--container-padding);
        background: linear-gradient(101.4deg, #FFEBD9 -1.07%, #FFDFC1 110.13%);
        display: flex;
        justify-content: center;
        height: 80vw;
        min-width: 26.8rem;
        align-items: flex-end;
        margin-bottom: 2rem;
      }

      &-img {
        position: absolute;
        width: 28rem;
        left: 50%;
        top: 7rem;
        transform: translateX(-50%);
      
        @media (max-width: 1400px) {
          width: 23rem;
        }

        @media (max-width: 1199px) {
          width: 20rem;
          top: 6.5rem;
        }

        @media (max-width: 991px) {
          width: 17.5rem;
          top: 5.5rem;
        }

        @media (max-width: 800px) {
          top: 50%;
          transform: translate(calc(-50% - calc(var(--container-padding) / 2)), -48%);
        }

        @media (max-width: 575px) {
          width: 50%;
          min-width: 14.5rem;
          position: static;
          transform: translateY(20%)
        }
      }
    }

    &__card {
      @media (min-width: 576px) {
        width: 50%;
        padding: 10rem 0 8rem;
        display: flex;
        justify-content: center;
        align-items: center;

        @media (max-width: 1400px) {
          padding: 9rem 0 6.5rem;
        }

        @media (max-width: 1199px) {
          padding: 6.5rem 0 6rem;
        }

        @media (max-width: 991px) {
          padding: 5.5rem 0 5.3rem;
        }

        @media (max-width: 840px) {
          justify-content: flex-end;
        }

        @media (max-width: 800px) {
          padding: 5.5rem 0;
          padding-left: var(--container-padding);
        }

        &-inner {
          max-width: 40rem;

          @media (max-width: 1400px) {
            max-width: 35rem;
          }

          @media (max-width: 1199px) {
            max-width: 30.6rem;
          }

          @media (max-width: 991px) {
            max-width: 29rem;
          }
        }
      }

      @media (max-width: 575px) {
        padding: 0 var(--container-padding);
        margin-bottom: 6rem;
      }
    }

    &__fig-item {
      &-1 {
        position: absolute;
        right: 0;
        bottom: 0;
        transform: translateY(10%);
        width: 7.29vw;
      }

      &-2 {
        position: absolute;
        left: 0;
        top: 0;
        width: 6.46vw;
      }
      
      &-3 {
        position: absolute;
        left: 50%;
        top: 100%;
        transform: translateX(-15%); 
        width: 5.78vw;      
      }

      &-1, &-2, &-3 {
        min-width: 6rem;

        @media (max-width: 767px) {
          display: none;
        }
      }
    }

    &__fig-circles-top {
      position: absolute;
      right: 10vw;
      top: 0;
      transform: translateY(-100%);

      @media (max-width: 1400px) {
        width: 1.5rem;
      }

      @media (max-width: 1199px) {
        width: 1.3rem;
      }

      @media (max-width: 991px) {
        width: 1rem;
      }

      @media (max-width: 767px) {
        display: none;
      }
    }

    &__fig-circles-bottom {
      position: absolute;
      right: 10vw;
      bottom: 0;

      @media (max-width: 1400px) {
        width: 8rem;
      }

      @media (max-width: 1199px) {
        width: 7rem;
      }

      @media (max-width: 991px) {
        width: 5.5rem;
      }

      @media (max-width: 767px) {
        display: none;
      }
    }
  }
</style>