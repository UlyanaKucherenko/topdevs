<template>
  <div class="c-solutions">
    <div class="container">
      <div class="c-solutions__wrapper">
        <div class="c-solutions__wrapper-content-photo">
          <img class="c-solutions__wrapper-content-photo-item" src="/images/site/portfolio/around-the-clock/solutions-phone-update.png" alt="phone">
        </div>
        <div class="c-solutions__wrapper-content-text">
          <h2 class="c-solutions__wrapper-content-text_title">Solutions</h2>
          <p class="c-solutions__wrapper-content-text_desc">
            Our app development team has been engaged in web and mobile app development of the fintech solution from end
            to end.
          </p>
          <br>
          <p class="c-solutions__wrapper-content-text_desc">
            From starters, our product development team has developed a UX/UI design to make sure the app will look and
            function the way our client requires according to the specified business goals.
            The major part of it was to integrate the Stripe API within all the necessary adjustments that we have
            successfully performed.
          </p>
          <br>
          <p class="c-solutions__wrapper-content-text_desc">
            Our backend developers have utilized the Laravel framework to be able to easily expand the app
            functionality. Along the way, our engineering team has implemented a personal profile registration,
            administrator panel, transactions dashboard, smooth data exchange with the Stripe system, and many other
            features. The MVC Structure laid the foundation for future easy updates of the app functionality.
          </p>
          <br>
          <p class="c-solutions__wrapper-content-text_desc">
            React.js helped our frontend developers to implement the visual part of the web application. Notably,
            Material made the app animation look more attractive and realistic.
            <br>
            We have developed a mobile application for both iOS and Android operating systems at the same time using
            the React Native framework. Among notable mobile app features, Touch ID holds a special place as it allows
            to optimize the user's profile filling by simply scanning a card.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Solutions"
}
</script>

<style lang="scss">
.c-solutions {
  padding-top: 140px;
  @media screen and (max-width: 768px) {
    padding-top: 80px;
  }
  @media screen and (max-width: 360px) {
    padding-top: 40px;
  }
  &__wrapper {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    @media screen and (max-width: 1200px) {
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    &-content {
      &-text {
        @media screen and (max-width: 1200px) {
          margin-top: 60px;
        }
        @media screen and (max-width: 768px){
          max-width: 100%;
        }
        @media screen and (max-width: 576px){
          max-width: 100%;
        }
        @media screen and (max-width: 360px){
          margin-top: 25px;
        }
        &_title {
          font-family: var(--ProximaNova);
          font-style: normal;
          font-weight: 600;
          font-size: 54px;
          line-height: 120%;
          letter-spacing: 0.03em;
          color: #000000;
          margin-bottom: 25px;
          @media screen and (max-width: 992px) {
            font-size: 40px;
          }
          @media screen and (max-width: 360px){
            font-size: 34px;
            margin-bottom: 15px;
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
          padding-right: 3%;
          margin-bottom: 15px;
          @media screen and (max-width: 1920px) {
            padding-right: 3%;
          }

          @media screen and (max-width: 992px) {
            font-size: 16px;
            padding: 0;
          }

          @media screen and (max-width: 1200px) {
            padding-right: 0;
          }
        }
      }
      &-photo {
        padding-top: 25px;
        margin: 0 10% 0 5%;
        width: 100%;
        @media screen and (max-width: 1440px){
          margin: 0 4% 0 0;
        }
        @media screen and (max-width: 1200px){
          width: 100%;
          margin: 0 auto;
          display: flex;
          justify-content: center;
        }
        &-item {
          width: 362px;
          @media screen and (max-width: 768px){
            width: 300px;
          }
          @media screen and (max-width: 576px){
            width: 264px;
          }
          @media screen and (max-width: 360px){
            width: 240px;
          }
        }
      }
    }
  }
}
</style>