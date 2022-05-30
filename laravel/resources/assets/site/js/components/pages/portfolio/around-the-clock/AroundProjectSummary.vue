<template>
  <div class="c-around-summary">
    <div class="container">
      <div class="c-around-summary__wrapper">
        <div class="c-around-summary__wrapper-title">
          <h1 class="c-around-summary__wrapper-title_text">Project Summary</h1>
        </div>
        <div class="c-around-summary__wrapper-desc">
          <p class="c-around-summary__wrapper-desc_item">24/7 Billing Co. is on a mission to help those small businesses and sole traders who can't afford or simply
            don't qualify for financial services from traditional banks. The 24/7 billing app is aimed at providing fast
            payments with easy setup via trusted security systems for private individuals and companies operating in any
            industry.
          </p>
        </div>
        <div class="c-around-summary__wrapper-cards">
            <AutowidthSlider
                sliderNavIcon="/images/site/portfolio/quick/summary/nav-arrow.svg"
                sliderNavMargin="10"
                :sliderBreakpoint="1200"
                :fullWidth="windowWidth <= 900"
                :sliderOptions="{
                  spaceBetween: 0,
                  slidesOffsetAfter: 0,
                  breakpoints: {
                    320: {spaceBetween: 36},
                    768: {spaceBetween: 38},
                    992: {spaceBetween: 0},
                    1200: {spaceBetween: 0},
                  }
                }"
            >
<!--              <AroundSummeryCard v-for="(data, index) of cardsData" :index="index" :label="data.label" :options="data.options" :key="data.id"/>-->
              <PortfolioBlockBullet
                  v-for="(item, index) in cardsData" :key="index"
                  :class="{'c-summery-card--second': index === 1,
                   'c-summery-card--last-child': index === 3}"
                  titleColor="var(--case-color-white)"
                  :titleText="item.label"
                  listItemColor="var(--case-color-white)"
                  listPreColor="#B4CAE2"
                  :items="item.options"
                  class="c-summery-card"
                  caseName="dancebug"
                  preIconIsDisabled
              />
            </AutowidthSlider>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import AutowidthSlider from "../../../global/sliders/AutowidthSlider";
import PortfolioBlockBullet from "../global/PortfolioBlockBullet";
export default {
  name: "AroundProjectSummary",
  components: {PortfolioBlockBullet, AutowidthSlider },
  data() {
    return {
      cardsData: [
        { id: 0, label: "Team", options: [
            "2 iOS Developer",
            "2 Android Developers",
            "1 Frontend Developer",
            "2 Backend Developers ",
            "2 Designers",
            "1 QA Engineer",
          ],
        },
        { id: 1, label: "Platform", options: [
            "Web",
            "iOS",
            "Android",
          ],
        },
        { id: 2, label: "Services", options: [
            "UX/UI Design",
            "Backend Development" ,
            "Frontend Development",
            "iOS App Development",
            "Android App Development",
          ],
        },
        { id: 3, label: "Target Audience", options: [
             "Service Sole Traders",
            "Service Industry ",
            "Professionals",
          ],
        },

      ]
    }
  },
}
</script>

<style lang="scss">
.c-around-summary {
  background: #FFFFFF;
  padding: 148px 0;
  @media screen and (max-width: 768px) {
    padding: 80px 0;
  }
  @media screen and (max-width: 360px) {
    padding: 40px 0;
  }
  &__wrapper {
    &-title {
      &_text {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: 600;
        font-size: 54px;
        line-height: 120%;
        letter-spacing: 0.03em;
        color: #000000;
        @media screen and (max-width: 992px) {
          font-size: 40px;
        }
        @media screen and (max-width: 576px) {
          font-size: 36px;
        }
      }
    }
    &-desc {
      max-width: 64%;
      margin-top: 25px;
      font-family: var(--ProximaNova);
      font-style: normal;
      font-weight: 600;
      font-size: 20px;
      line-height: 160%;
      letter-spacing: 0.03em;
      color: #3E3E3E;
      @media screen and (max-width: 1920px) {
        max-width: 78%;
      }
      @media screen and (max-width: 1440px) {
        max-width: 95%;
      }

      @media screen and (max-width: 1200px) {
        max-width: 100%;
      }
      @media screen and (max-width: 992px) {
        max-width: 100%;
        font-size: 16px;
      }
      @media screen and (max-width: 768px) {
        font-size: 16px;
      }
      @media screen and (max-width: 576px) {
        max-width: 100%;
      }

      &_item {
        font-size: 20px;
        @media screen and (max-width: 1920px) {
          font-size: 20px;
        }
        @media screen and (max-width: 1440px) {
          font-size: 20px;
        }
        @media screen and (max-width: 992px) {
          font-size: 16px;
        }
        @media screen and (max-width: 768px) {
          font-size: 16px;
        }
      }
    }
    &-cards {
      display: flex;
      justify-content: space-between;
      margin-top: 85px;
    }
  }
  .autowidth-slider.autowidth-slider--static {
    width: 100%;
  }

}

.c-summery-card {
  background: #14183B;
  padding: 30px;
  border-radius: 8px;
  @media screen and (max-width: 1200px) {
    width: 270px;
  }
  &--second {
    background: rgb(20,24,59);
    background: linear-gradient(124deg, rgba(20,24,59,1) 64%, rgba(230,25,73,1) 64%);
    @media screen and (max-width: 576px) {
      background: linear-gradient(124deg, rgba(20,24,59,1) 74%, rgba(230,25,73,1) 64%);
    }
  }
  &--last-child {
    background: rgb(20,24,59);
    background:linear-gradient(303deg, #14183b 65.5%, #e61949 65.5%);
  }
  &__wrapper {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    .portfolio-bullet-block__title {
      font-family: var(--ProximaNova);
      font-style: normal;
      font-weight: 600;
      font-size: 24px;
      line-height: 160%;
      letter-spacing: 0.03em;
      color: #FFFFFF;
      margin-bottom: 10px;
      @media screen and (max-width: 1440px) {
        font-size: 22px;
      }
      @media screen and (max-width: 992px) {
        font-size: 20px;
      }
    }
    .portfolio-bullet-block__item {
      color: #FFFFFF;
      font-family: var(--ProximaNova);
      font-style: normal;
      font-weight: normal;
      font-size: 16px;
      line-height: 19px;
      letter-spacing: 0.03em;
      margin-bottom: 10px;

      @media screen and (max-width: 1200px){
        font-size: 16px;
        line-height: 19px;
        letter-spacing: 0.03em;
        color: #CCCCCC !important;
      }
      @media screen and (max-width: 992px) {
        font-size: 14px;
      }
    }
  }
}
</style>