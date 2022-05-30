<template>
  <div class="c-integration">
    <div class="container">
        <div class="c-integration__holder">
          <div class="c-integration__content-text">
            <div class="c-integration__content-wrapper">
              <h3 class="c-integration__content-wrapper_title">
                Stripe Integration
              </h3>
              <p class="c-integration__content-wrapper_desc">
                All transactions are conducted in close interaction with a secure and reliable Stripe payment system.
              </p>
            </div>
            <div class="c-integration__content-wrapper">
              <h3 class="c-integration__content-wrapper_title">
                Dashboard
              </h3>
              <p class="c-integration__content-wrapper_desc">
                Transactions data are conveniently displayed in the form of graphs to see all cash flows on the account
                balance.
              </p>
            </div>
            <div class="c-integration__content-wrapper">
              <h3 class="c-integration__content-wrapper_title">
                Admin Panel
              </h3>
              <p class="c-integration__content-wrapper_desc">
                The billing system can be managed with administrator functionality directly from the web via any device.
              </p>
            </div>
            <div class="c-integration__content-wrapper">
              <h3 class="c-integration__content-wrapper_title">
                Two-Factor Authentication
              </h3>
              <p class="c-integration__content-wrapper_desc">
                Each transaction should be approved via SMS or QR code directly by the customer to ensure the highest
                level of security.
              </p>
            </div>
          </div>
          <div class="c-integration__content-photo">
            <img class="c-integration__content-photo-item" src="/images/site/portfolio/around-the-clock/integration-phone-update.png" alt="phone">
          </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Integration"
}
</script>

<style lang="scss">
.c-integration {
  padding: 140px 0;
  @media screen and (max-width: 768px) {
    padding: 80px 0;
  }
  @media screen and (max-width: 360px) {
    padding: 50px 0;
  }
  &__holder {
    display: flex;
    align-items: center;
    justify-content: space-between;
    @media screen and (max-width: 1200px) {
      flex-direction: column-reverse;
      align-items: center;
    }
  }
  &__content {
    &-text {
      display: flex;
      flex-direction: column;
      margin-top: 80px;

      @media screen and (max-width: 360px) {
        margin-top: 40px;
      }
    }
    &-wrapper {
      margin-bottom: 30px;
      max-width: 80%;

      @media screen and (max-width: 1440px) {
        max-width: 97%;
      }

      @media screen and (max-width: 1200px) {
        max-width: 85%;
      }

      @media screen and (max-width: 768px) {
        max-width: 83%;
      }
      @media screen and (max-width: 576px) {
        max-width: 84%;
      }

      @media screen and (max-width: 360px) {
        max-width: 80%;
        margin-bottom: 10px;
      }

      &:nth-child(4) {
        @media screen and (max-width: 992px) {
          max-width: 95% !important;
        }
        @media screen and (max-width: 576px) {
          max-width: 100% !important;
        }
      }

      &:nth-child(3) {
        @media screen and (max-width: 360px) {
          max-width: 85%;
        }
      }

      &:nth-child(2n) {
        max-width: 90%;
        @media screen and (max-width: 1440px) {
          max-width: 100%;
        }
        @media screen and (max-width: 992px) {
          max-width: 87%;
        }
        @media screen and (max-width: 768px) {
          max-width: 92%;
        }
        @media screen and (max-width: 576px) {
          max-width: 100%;
        }
        @media screen and (max-width: 360px) {
          max-width: 95%;
        }
      }
      &_title {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 29px;
        letter-spacing: 1px;
        text-transform: capitalize;
        color: #000000;
        margin-bottom: 10px;
        @media screen and (max-width: 992px) {
          font-size: 20px;
        }
      }
      &_desc {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 160%;
        letter-spacing: 0.06em;
        color: #3E3E3E;

        @media screen and (max-width: 992px) {
          font-size: 16px;
        }
      }
    }
    &-photo {
      margin: 0 10% 0 5%;
      @media screen and (max-width: 1200px) {
        margin: 0 auto;
      }
      &-item {
        width: 362px;
        @media screen and (max-width: 768px) {
          width: 300px;
        }
        @media screen and (max-width: 576px) {
          width: 264px;
        }
      }
    }
  }
}
</style>