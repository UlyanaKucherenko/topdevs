<template>
  <div class="c-challenges">
    <div class="container">
      <div class="c-challenges__holder">
        <div class="c-challenges__content-text">
          <h3 class="c-challenges__content-text_item">Challenges</h3>
          <p class="c-challenges__content-text_desc">
            Despite the financial arena continuing to evolve, there are still some businesses that can not qualify for
            traditional banking services. The 24/7 app aims at solving this issue for a lot of solo entrepreneurs and
            SMBs by providing the service of making speedy payments within any industry.
            The client has turned to us for the full cycle development of web and mobile apps. We have envisioned the
            fintech solution to be transparent, efficient, and secure.
          </p>
          <br>
          <p class="c-challenges__content-text_desc">
            Since app security was among our major focuses, we have decided to integrate the international Stripe system.
            It uncovers numerous benefits for end-users starting from easy integration with websites to handling popular
            debit and credit card providers like Visa, Mastercard, etc.
          </p>
          <br>
          <p class="c-challenges__content-text_desc">
            However, the Stripe system requires a configuration of payment options for specific business objectives. It
            is rather time-consuming. So we had to configure webhooks on the Stripe side and gear up the controller layer
            to allow such events as payback, payment data update, payout generation, and many others.
          </p>
          <br>
          <p class="c-challenges__content-text_desc">
            While building a fintech application, one of the major challenges is to comply with legal regulations
            established in various countries. We had to study the documentation accurately to make sure there are no
            limitations for the defined feature set. Besides, the Stripe system raises considerable demands for accounts
            verification, therefore, we had to introduce the necessary preparations.
          </p>
        </div>
        <div class="c-challenges__content-photo">
          <img class="c-challenges__content-photo-item" src="/images/site/portfolio/around-the-clock/challenges-phone-update.png" alt="phone">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Challenges"
}
</script>

<style lang="scss">
.c-challenges {
  padding-top: 140px;
  @media screen and (max-width: 576px) {
    padding-top: 80px;
  }
  @media screen and (max-width: 360px) {
    padding-top: 50px;
  }
  &__holder {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    @media screen and (max-width: 1200px) {
      flex-direction: column-reverse;
      align-items: center;
    }
  }
  &__content {
    &-text {
      @media screen and (max-width: 768px) {
        max-width: 100%;
      }
      @media screen and (max-width: 576px) {
        max-width: 100%;
      }
      &_item {
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: 600;
        font-size: 54px;
        line-height: 120%;
        letter-spacing: 0.03em;
        color: #000000;
        margin-bottom: 25px;
        @media screen and (max-width: 1200px) {
          margin: 0 auto 25px auto;
        }

        @media screen and (max-width: 992px) {
          font-size: 40px;
        }
        @media screen and (max-width: 360px) {
          font-size: 34px;
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
        margin-bottom: 15px;
        @media screen and (max-width: 992px) {
          font-size: 16px;
        }
        @media screen and (max-width: 576px) {
          font-size: 16px;
        }
      }
    }
    &-photo {
      margin: 0 10% 0 6%;
      @media screen and (max-width: 1440px) {
        margin: 0 6.2% 0 5.3%;
      }
      @media screen and (max-width: 1200px) {
        margin-bottom: 80px;
      }
      &-item {
        width: 362px;
        @media screen and (max-width: 768px) {
          width: 300px;
        }
        @media screen and (max-width: 576px) {
          width: 264px;
        }

        @media screen and (max-width: 360px) {
          width: 240px;
        }
      }
    }
  }
}
</style>