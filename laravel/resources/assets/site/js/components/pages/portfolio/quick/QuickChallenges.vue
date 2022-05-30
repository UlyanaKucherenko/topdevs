<template>
  <div class="quick-challenges">
    <div class="container">
      <div class="quick-challenges__content">
        <div class="quick-challenges__text-content">
          <QuickHeader
            class="quick-challenges__header"
            innerMaxWidth="81rem"
            asideDescColor="black"
            :baseOptions="{
            titleText: 'Challenges',
          }"
          />


          <div class="quick-challenges__text-secondary portfolio-desc">
          A touchy subject for fashion retailers is goods returns. No matter how detailed a sizing description is provided on a store web page, the fit problem stays a kind of a tricky one to solve. Retailers give a full picture of clothes' proportions by specifying the size and height of each model. However, it continues to be a bit of a gamble due to a huge difference between the sizing of various clothing brands.
          <br>
          Financial losses are often overwhelming and comprise up to several millions of dollars. No wonder various fashion companies come up with innovative solutions to beat the issue.
          </div>
          <div class="quick-challenges__text-secondary portfolio-desc">
          The Quick Size app is meant to be a universal solution for any fashion retailer that helps buyers to make better-informed decisions. It should provide a clear picture of how clothes look like on real people, not the brand's models.
          <br>
          The client asked us to implement the main part of a mobile app, in other words, to create the "brain" of a virtual fitting room by performing the backend development.
          </div>
          <div class="quick-challenges__text-secondary portfolio-desc">
            The notion is not new, however, it required us to create an MVP, or a proof of concept, to validate the idea and pitch it successfully to potential investors. So we had to make sure that the measurements are accurate and the app works smoothly while matching the sizes from various brands.
          </div>
        </div>

        <img
          class="quick-challenges__mockup"
          src="/images/site/portfolio/quick/challenges/mockup-phone.png"
        />

      </div>
    </div>
  </div>
</template>

<script>
import QuickHeader from "./global/QuickHeader";

export default {
  name: "QuickChallenges",
  components: {QuickHeader}
}
</script>

<style lang="scss">
.quick-challenges {
  position: relative;

  @media (max-width: 992px) {
    margin-bottom: 0;
  }

  &__content {
    position: relative;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;

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

    @media (max-width: 1920px) {
      width: 54%;
    }
    @media (max-width: 1680px) {
      width: 53%;
    }
    @media (max-width: 1570px) {
      margin-top: 85px;
      width: 56%;
    }
    @media (max-width: 1520px) {
      width: 58%;
    }
    @media (max-width: 1478px) {
      width: 60%;
    }
    @media (max-width: 1430px) {
      width: 55%;
    }
    @media (max-width: 1415px) {
      width: 50%;
    }
    @media (max-width: 1200px) {
      width: 100%;
      margin-top: -120px;
    }

    @media (max-width: 991px) {
      width: unset;
      margin-bottom: 3rem;
    }

    @media (max-width: 768px) {
      margin-top: -80px;
    }

    @media (max-width: 576px) {
      margin-top: -40px;
    }

    @media (max-width: 360px) {
      margin-top: 0;
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
    letter-spacing: 0.06em;
    font-weight: 100;

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
      br {
        display: none;
      }
    }
    @media (max-width: 576px) {
      br {
        display: block;
      }
    }
  }

  &__mockup {
    width: 50%;
    position: absolute;
    top: -15%;
    right: 1%;
    z-index: -1;
    @media (max-width: 1920px) {
      width: 57%;
      right: -3%;
    }
    @media (max-width: 1570px) {
      width: 57%;
      right: -5%;
      top: -2%;
    }
    @media (max-width: 1450px) {
      right: -6%;
      top: 8%;
    }

    @media (max-width: 1415px) {
      top: -1%;
      width: 55%;
    }

    @media (max-width: 1200px) {
      position: relative;
      width: 75%;
      margin-top: -125px;
      height: 100%;
      display: block;
      transform: translateX(36px);
    }

    @media (max-width: 991px) {
      max-width: 650px;
      margin-top: -93px;
      width: 80%;
      margin-bottom: 50px;
      right: unset;
      transform: translateX(-3%);
    }
    @media (max-width: 768px) {
      width: 100%;
      max-width: 518px;
      min-width: 518px;
      margin-top: -20px;
    }
    @media (max-width: 576px) {
      width: 100%;
      margin-top: 30px;
      margin-bottom: -40px;
    }
    @media (max-width: 360px) {
      width: 100%;
      margin-top: -47px;
    }
  }
}

</style>
