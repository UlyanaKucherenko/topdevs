<template>
  <div class="c-around-results">
    <div class="container">
      <div class="c-around-results__case">
        <div class="c-around-results__case-content">
          <h2 class="c-around-results__case-content_title">Results</h2>
          <p class="c-around-results__case-content_text">
            The TopDevs app development company has significantly contributed to the development of an intuitive and
            easily customizable fintech application. Essentially, it acts as a shell for performing transactions
            through the secure Stripe payment gateway.
          </p>
          <br />
          <p class="c-around-results__case-content_text">
            The 24/7 billing app allows businesses and individuals to make payments anytime and anywhere even if the
            user has low experience or understanding of how payment systems work.
            Our app development experts took care of the user experience to make the app look attractive and intuitive,
            work stable no matter a huge amount of handled data and represent the best practices of financial
            transactions processing.
          </p>
          <br />
          <p class="c-around-results__case-content_text">
            The 24/7 billing system application is in high demand on the Australian market and continues developing
            technological solutions that support the idea of simple and secure payments made within seconds from
            anywhere at any time.
          </p>
          <br />
          <div class="c-around-results__case-stage">
            <div class="c-around-results__case-stage_item">
              <h3 class="c-around-results__case-stage-title">24/7 Payment Processing</h3>
              <p class="c-around-results__case-stage-text">
                The app is accessible from any device and any place 24 hours a day and 7 days a week.
              </p>
            </div>
            <div class="c-around-results__case-stage_item">
              <h3 class="c-around-results__case-stage-title">
                Multi-Payments Support
              </h3>
              <p class="c-around-results__case-stage-text">
                The app supports a diverse range of app types: Visa, ApplePay, Mastercard, AE, GooglePay, etc.
              </p>
            </div>
          </div>
        </div>
        <div class="c-around-results__case-photo">
          <img class="c-around-results__case-photo-picture" src="/images/site/portfolio/around-the-clock/result-phones-update.png" alt="phone">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AroundResults"
}
</script>

<style lang="scss">
.c-around-results {
  position: relative;
  padding: 140px 0;
  background: rgb(20,24,59);
  background: linear-gradient(126deg, #e61949 43%, #14183b 43%);
  @media screen and (max-width: 1400px) {
    padding-top: 0;
    margin-top: 35%;
    background: linear-gradient(126deg, #14183b 24.5%, #e61949 24%, #e61949 74%, #14183b 74%);
  }
  @media screen and (max-width: 1200px) {
    padding-top: 0;
    margin-top: 35%;
    background: linear-gradient(126deg, #14183b 23%, #e61949 23%, #e61949 74%, #14183b 74%);
  }
  @media screen and (max-width: 992px) {
    background: linear-gradient(126deg, #14183b 21%, #e61949 21%, #e61949 85%, #14183b 74%);
  }
  @media screen and (max-width: 800px) {
    background: linear-gradient(126deg, #14183b 19%, #e61949 19%, #e61949 85%, #14183b 74%);
  }
  @media screen and (max-width: 768px) {
    background:linear-gradient(126deg, #14183b 18.5%, #e61949 18.5%, #e61949 85%, #14183b 74%);
  }
  @media screen and (max-width: 576px) {
    padding-bottom: 40px;
    background: linear-gradient(126deg,  #14183b 16%, #e61949 16%);
  }
  @media screen and (max-width: 480px) {
    padding-bottom: 40px;
    background: linear-gradient(126deg, #14183b 13.5%, #e61949 13%);
  }
  @media screen and (max-width: 360px) {
    background: linear-gradient(126deg,  #14183b 8.5%, #e61949 8%);
    margin-top: 50%;
  }
  @media screen and (max-width: 340px) {
    background: linear-gradient(126deg, #14183b 8%, #e61949 8%);
  }
  &__case {
    display: flex;
    align-items: flex-start;
    @media screen and (max-width: 1400px) {
      flex-direction: column-reverse;
    }
    &-content {
      width: 58%;
      @media screen and (max-width: 1440px) {
        width: 59%;
      }
      @media screen and (max-width: 1400px) {
        width: 100%;
        margin: 0 auto;
        max-width: 75%;
      }
      @media screen and (max-width: 1400px) {
        width: 100%;
        margin: 0 auto;
        max-width: 90%;
      }
      @media screen and (max-width: 992px) {
        max-width: 100%;
      }
      @media screen and (max-width: 768px) {
        max-width: 100%;
      }
      @media screen and (max-width: 576px) {
        max-width: 100%;
      }
      @media screen and (max-width: 360px) {
        margin-top: 30px;
      }
      &_title {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: 600;
        font-size: 54px;
        line-height: 120%;
        letter-spacing: 0.03em;
        color: #FFF6F2;
        margin-bottom: 25px;

        @media screen and (max-width: 360px) {
          font-size: 34px;
          margin-bottom: 10px;
        }
      }
      &_text {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 160%;
        letter-spacing: 0.06em;
        color: #FFF6F2;
        @media screen and (max-width: 1440px) {
          font-size: 18px;
        }
        @media screen and (max-width: 992px) {
          font-size: 16px;
          font-style: normal;
          font-weight: normal;
          line-height: 160%;
          letter-spacing: 0.03em;
        }
        @media screen and (max-width: 768px) {
          margin-bottom: 20px;
        }
      }
    }
    &-photo {
      position: absolute;
      right: 5%;
      @media screen and (max-width: 1700px) {
        right: 2%;
      }
      @media screen and (max-width: 1650px) {
        right: -60%;
        width: 100%;
        top: 20%;
      }
      @media screen and (max-width: 1440px) {
        right: -60%;
        width: 100%;
        top: 20%;
      }
      @media screen and (max-width: 1400px) {
        margin: -30% auto 0 auto;
        right: 0;
        position: relative;
        display: flex;
        justify-content: center;
      }

      @media screen and (max-width: 992px) {
        margin: -35% auto 0 auto;
      }

      @media screen and (max-width: 360px) {
        margin: -50% auto 0 auto;
      }
      &-picture {
        width: 669px;
        @media screen and (max-width: 1650px) {
          width: 36%;
        }
        @media screen and (max-width: 1440px) {
          width: 35%;
        }
        @media screen and (max-width: 1400px) {
          width: 669px;
        }
        @media screen and (max-width: 768px) {
          width: 462px;
        }
        @media screen and (max-width: 490px) {
          width: 329px;
        }
        @media screen and (max-width: 350px) {
          width: 290px;
        }
      }
    }
    &-stage {
      margin-top: 40px;
      display: flex;
      justify-content: space-between;

      @media screen and (max-width: 360px) {
        flex-direction: column;
        margin-top: 0;
      }
      &_item {
        width: 50%;
        margin-right: 10px;
        @media screen and (max-width: 1400px) {
          width: 43%;
        }
        @media screen and (max-width: 992px) {
          width: 50%;
          margin-right: 0;
          &:first-child {
            margin-right: 20px;
          }
        }
        @media screen and (max-width: 768px) {
          width: 44%;
        }
        @media screen and (max-width: 576px) {
          width: 50%;
        }
        @media screen and (max-width: 360px) {
          width: 100%;
          margin: 0;
          &:nth-child(1) {
            margin-bottom: 10px;
          }
        }
      }
      &-title {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: bold;
        font-size: 20px;
        line-height: 160%;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #FFF6F2;
        @media screen and (max-width: 1440px) {
          font-size: 18px;
        }
        @media screen and (max-width: 992px) {
          font-size: 16px;
        }
      }
      &-text {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 160%;
        letter-spacing: 0.06em;
        color: #FFF6F2;
        @media screen and (max-width: 1440px) {
          font-size: 18px;
        }
        @media screen and (max-width: 992px) {
          font-size: 16px;
        }
      }
    }
  }
}
</style>