<template>
  <div class="quick-solutions">
    <div class="container">
      <div class="quick-solutions__content">
        <div class="quick-solutions__text-content">
          <QuickHeader
            class="quick-solutions__header"
            asideDescColor="black"
            :baseOptions="{
            titleText: 'Solutions',
          }"
          />

          <div class="quick-solutions__text-secondary portfolio-desc">
              Our responsibility for this project laid in the backend development of a mobile app. The UI/UX design and the frontend part have been implemented by the other mobile app development company that utilized the cross-platform production approach.
            <br>
          So besides simply developing an app, we made sure to carry out a seamless integration of every app development side into one stable application. For that purpose, we have introduced clean code practices and a smooth collaboration flow between each app development team.

          </div>
          <div class="quick-solutions__text-secondary portfolio-desc">
          Now before buying a t-shirt of some famous brand, let's say Nike, app users can correlate their body measurements with those of other buyers. Each app user has a so-called wardrobe, a history of previous purchases that can be shared with other app users so that all of them could benefit in the future. It will help them determine if the t-shirt will be tight or loose in any part - no matter whether it relates to the width of the shoulders or to the overall clothing's length.
          </div>
        </div>

        <img
          class="quick-solutions__mockup"
          src="/images/site/portfolio/quick/solutions/mockup-phone.png"
        />

      </div>
    </div>
  </div>
</template>

<script>
import QuickHeader from "./global/QuickHeader";
export default {
name: "QuickSolutions",
  components: {QuickHeader}
}
</script>

<style lang="scss">
.quick-solutions {
  position: relative;
  margin-bottom: 22%;

  @media (max-width: 1430px) {
    margin-bottom: 30%;
  }

  &__content {
    position: relative;
    display: flex;
    justify-content: space-between;
    flex-direction: row-reverse;

    @media (max-width: 1200px) {
      display: flex;
      flex-direction: column-reverse;
    }

    @media (max-width: 991px) {
      display: flex;
      flex-direction: column-reverse;
      align-items: center;
    }
  }

  &__text-content {
    width: 55%;
    margin-left: auto;
    margin-top: 100px;

    @media (max-width: 1920px) {
      width: 54%;
    }
    @media (max-width: 1680px) {
      width: 53%;
    }
    @media (max-width: 1570px) {
      margin-top: 85px;
      width: 55%;
    }
    @media (max-width: 1450px) {
      margin-top: 85px;
      width: 60%;
    }

    @media (max-width: 1200px) {
      width: 100%;
      margin-top: -100px;
    }

    @media (max-width: 991px) {
      width: unset;
      margin-left: 0;
      margin-bottom: 3rem;
      margin-top: -100px;
    }

    @media (max-width: 576px) {
      width: 100%;
      margin-top: -130px;
    }

    @media (max-width: 500px) {
      width: 100%;
      margin-top: -120px;
    }

    @media (max-width: 360px) {
      width: 100%;
      margin-top: -50px;
    }
  }

  &__header {
    margin-bottom: 3rem;

    .portfolio-header__title {
      font-weight: 700;
    }

    @media (max-width: 360px) {
      margin-bottom: 1rem;
    }
  }

  &__text-secondary {
    color: var(--case-color-secondary);
    margin-bottom: 4rem;
    font-weight: 100;
    letter-spacing: 0.06em;
    font-size: 1.8rem;

    @media (max-width: 1920px) {
      font-size: 20px;
    }

    @media (max-width: 1430px) {
      font-size: 18px;
    }

    @media (max-width: 1415px) {
      font-size: 16px;
    }

    @media (max-width: 1200px) {
      font-size: 20px;
    }
    @media (max-width: 992px) {
      font-size: 16px;
    }
    @media (max-width: 768px) {
      display: inline-block;
    }
    @media (max-width: 576px) {
      display: inline-block;
    }
  }

  &__mockup {
    width: 42%;
    position: absolute;
    top: -20px;
    left: 0;
    @media (max-width: 1440px) {
      width: 45%;
      left: -75px;
    }
    @media (max-width: 1200px) {
      width: 60%;
      position: relative;
      left: 0;
      transform: translateX(2%);
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      max-width: 100%;
      width: 60%;
      min-width: 388px;
    }

    @media (max-width: 576px) {
      width: 80%;
      margin-top: -80px;
      margin-left: 0;
      margin-right: 0;
    }

    @media (max-width: 360px) {
      width: 80%;
    }
  }
}

</style>
