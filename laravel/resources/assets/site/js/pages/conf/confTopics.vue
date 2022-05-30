<template>
  <div
    id="about"
    class="topics"
  >
    <div class="container">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="topics__title title">What topics <br> will be covered in our webinar</div>

          <div class="topics__wrap ">
            <div class="topics__text">Geofencing Definition</div>
            <ul class="topics__list ">
              <li v-for="item in firstList" :key="item" class="topics__list-item"> {{ item }}</li>
            </ul>
          </div>
          <div class="topics__wrap">
            <div class="topics__text ">How to use Geofencing?</div>
            <ul class="topics__list ">
              <li v-for="item in secondList" :key="item" class="topics__list-item"> {{ item }}</li>
            </ul>
          </div>
          <div class="topics__wrap ">
            <div class="topics__text">Geofencing & Business</div>
            <ul class="topics__list">
              <li v-for="item in thirdList" :key="item" class="topics__list-item"> {{ item }}</li>
            </ul>
          </div>

          <div class="topics__register">
            <div class="topics__register-text">
              Register for a free webinar from TopDevs and learn more about geofencing.
            </div>
            <a href="#contact" class="btn">Register now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'ConfTopics',
  data() {
    return {

      firstList: [
        'What is geofencing? What is its purpose? Who needs it?',
        'What kind of specialists are needed to implement geofencing into your application?',
        'What to do if there is no application yet?',
        'How geofencing will help you increase your arrivals and target your audience?'
      ],
      secondList: [
        'What specialists do you need?',
        'What technologies are important?',
        'How to optimize your advertising budget?'
      ],
      thirdList: [
        'What specialists do you need?',
        'What technologies are important?',
        'How to optimize your advertising budget?'
      ],
    }
  }

}
</script>

<style lang="scss">
.topics {
  margin-bottom: calc(var(--space-unit) * 170);
  font-size: 18px;
  line-height: 140%;
  letter-spacing: 0.15px;
  color: #353535;

  &__title {
    margin-bottom: 32px;
  }

  &__wrap {
    display: flex;
    align-items: flex-start;
    margin-bottom: 42px;
    justify-content: space-between;

    @media (max-width: 991px) {
      flex-direction: column;
    }
  }

  &__text {
    font-size: 44px;
    line-height: 140%;
    color: #262626;
    width: 30%;

    @media (max-width: 1199px) {
      font-size: 35px;
    }

    @media (max-width: 991px) {
      width: unset;
    }
  }

  &__list {
    padding: 0;
    margin: 0;
    margin-top: 15px;
    width: 60%;

    @media (max-width: 991px) {
      width: unset;
    }
  }

  &__list-item {
    font-size: 18px;
    line-height: 140%;
    letter-spacing: 0.15px;
    color: #353535;

    @media (max-width: 575px) {
      list-style-type: none;
    }
  }

  &__register {
    display: flex;
    justify-content: space-between;
    align-items: center;

    @media (max-width: 991px) {
      flex-direction: column;
      align-items: flex-start;
    }
  }

  &__register-text {
    margin-right: 5%;

    @media (max-width: 991px) {
      margin-right: 0;
      margin-bottom: 20px;
    }
  }
}
</style>
