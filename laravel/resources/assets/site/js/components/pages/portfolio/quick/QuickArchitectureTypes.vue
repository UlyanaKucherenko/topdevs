<template>
  <div class="quick-types">
    <div class="container quick-types__container">
      <div class="quick-types__item">
        <div class="quick-types__item-picture">
          <img class="quick-types__item-picture_img" src="/images/site/portfolio/quick/summary/mobile-architecture.svg" alt="">
        </div>
        <div class="quick-types__item-title">
          <h3 class="quick-types__item-title_item">Mobile App Architecture</h3>
        </div>
        <div class="quick-types__item-text">
          <p class="quick-types__item-text_item">
            The app has received a clear app architecture that leads to a well-structured application with obvious user stories, a pleasant user experience, and the ability to scale further.
          </p>
        </div>
      </div>
      <div class="quick-types__item">
        <div class="quick-types__item-picture">
          <img class="quick-types__item-picture_img" src="/images/site/portfolio/quick/summary/sizes-fatures.svg" alt="">
        </div>
        <div class="quick-types__item-title">
          <h3 class="quick-types__item-title_item">Sizes Match Feature</h3>
        </div>
        <div class="quick-types__item-text">
          <p class="quick-types__item-text_item">Once users see the perfect look of a certain model on some previous buyer, they can match that user's body measurements with their own to make sure which size of this exact model will fit them best.</p>
        </div>
      </div>
      <div class="quick-types__item">
        <div class="quick-types__item-picture">
          <img class="quick-types__item-picture_img" src="/images/site/portfolio/quick/summary/showcase.svg" alt="">
        </div>
        <div class="quick-types__item-title">
          <h3 class="quick-types__item-title_item">Showcase Model Try-On</h3>
        </div>
        <div class="quick-types__item-text">
          <p class="quick-types__item-text_item">
            Once app users get interested in some outfit, they can check whether someone has already bought it previously and compare how it looks on different body types in various sizes.
          </p>
        </div>
      </div>
    </div>
    <img class="quick-types__left-bg" src="/images/site/portfolio/quick/summary/architecture-left-circle.svg" alt="">
    <img class="quick-types__right-bg" src="/images/site/portfolio/quick/summary/architecture-right-circle.svg" alt="">
  </div>
</template>

<script>
export default {
  name: "QuickArchitectureTypes"
}
</script>

<style lang="scss">
.quick-types {
  background: #524AED;
  padding: 80px 0 100px 0;
  margin-bottom: 150px;
  position: relative;

  @media (max-width: 1400px) {
    margin-bottom: 120px;
  }

  @media (max-width: 992px) {
    margin-bottom: 100px;
  }

  @media (max-width: 768px) {
    margin-bottom: 140px;
    padding: 100px 0 80px 0;
  }

  @media (max-width: 576px) {
    margin-bottom: 100px;
  }

  @media (max-width: 360px) {
    margin-bottom: 180px;
    padding: 60px 0;
  }
  &__container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    column-gap: 70px;
    @media (max-width: 1300px) {
      column-gap: 35px;
    }
    @media (max-width: 768px) {
      flex-direction: column;
    }
  }
  &__item {
    width: calc(100% / 3);
    height: 300px;
    @media (max-width: 768px) {
      width: 100%;
      text-align: center;
      &:nth-child(2) {
        margin: 30px 0;
      }
    }
    &-picture {
      display: flex;
      justify-content: center;
      &_img {
        width: 80px;
        height: 80px;
      }
    }
    &-title {
      color: #ffffff;
      margin: 3rem 0 1rem;
      text-align: center;

      &_item {
        font-size: 24px;

        @media (max-width: 992px) {
          font-size: 20px;
          text-align: left;
          margin: 0;
        }
        @media (max-width: 768px) {
          text-align: center;
          font-size: 20px;
        }
      }
    }
    &-text {
      color: #ffffff;
      &_item {
        font-weight: 100;
        font-size: 16px;
        letter-spacing: 0.06em;
        margin: 0 auto;

        @media (max-width: 992px) {
          font-size: 14px;
          text-align: left;
          margin: 0;
        }
        @media (max-width: 768px) {
          text-align: center;
          max-width: 534px;
          margin: 0 auto;
        }
      }
    }
  }
  &__left-bg {
    position: absolute;
    bottom: -160%;
    left: -20%;
    width: 43%;

    @media (max-width: 2000px) {
      position: absolute;
      bottom: -120%;
      left: -20%;
      width: 40%;
    }

    @media (max-width: 1850px) {
      bottom: -120%;
    }

    @media (max-width: 1720px) {
      bottom: -110%;
    }

    @media (max-width: 1550px) {
      bottom: -120%;
      left: -25%;
      width: 44%;
    }

    @media (max-width: 1450px) {
      bottom: -115%;
      left: -24%;
      width: 45%;
    }

    @media (max-width: 1350px) {
      bottom: -120%;
      left: -31%;
      width: 50%;
    }

    @media (max-width: 1200px) {
      left: -22%;
      bottom: -70%;
      width: 36%;
    }

    @media (max-width: 992px) {
      bottom: -75%;
    }
    @media (max-width: 768px) {
      bottom: -15%;
    }
    @media (max-width: 360px) {
      bottom: -13%;
      width: 60%;
      left: -40%;
    }
  }
  &__right-bg {
    position: absolute;
    top: -45%;
    right: -10%;
    width: 20%;

    @media (max-width: 1440px) {
      top: -33%;
    }
    @media (max-width: 992px) {
      top: -21%;
    }

    @media (max-width: 768px) {
      position: absolute;
      top: 3%;
      right: -15%;
      width: 30%;
    }
    @media (max-width: 576px) {
      position: absolute;
      top: -7%;
      right: -15%;
    }
    @media (max-width: 360px) {
      right: -25%;
      width: 50%;
      top: -10%;
    }
  }
}
</style>