<template>
  <div
    id="contact"
    class="contact-form"
  >
    <div class="container">
      <div class="row">
        <div class="offset-md-1 col-md-10">
          <div class="contact-form__title ">Contact form</div>
          <form class="contact-form__form" @submit.prevent="handleFormSubmit">
            <div class="contact-form__input-wrap">
              <input
                class="contact-form__input"
                name="name"
                placeholder="name*"
                required
                v-model="name"
              >
              <input
                class="contact-form__input"
                name="position"
                placeholder="job position"
                v-model="position"
              >
              <input
                class="contact-form__input"
                name="email" placeholder="contact e-mail*"
                type="email"
                required
                v-model="email"
              >
              <input
                class="contact-form__input"
                name="company"
                placeholder="company name"
                v-model="company"
              >
            </div>

            <div class="contact-form__register">
              <div class="contact-form__register-text">
                Register for a free webinar from TopDevs and learn more about geofencing.
              </div>
              <button
                type="submit"
                class="btn btn--light"
              >
                <span v-if="status !== 'loading'">Register now</span>
                <div v-if="status === 'loading'" class="load"><div></div><div></div></div>
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios'

export default {
  name: 'ContactForm',
  data() {
    return {
      name: '',
      email: '',
      position: '',
      company: '',
      status: 'idle' // 'loading' | fail | success
    }
  },
  methods: {
    handleFormSubmit() {
      let message = `name: ${this.name} | email: ${this.email}`
      if (this.position) message += ` | position: ${this.position}`
      if (this.company) message += ` | company: ${this.company}`

      this.status = 'loading'

      axios.post('/contactUs', {
        name: '_webinar_',
        email: this.email,
        message
      })
      .then(res => {
        document.location.assign('/conf-thank')
        this.status = 'success'
      })
      .catch(err => {
        this.status = 'failed'
      })
    }
  }
}
</script>
<style lang="scss">

.contact-form {
  padding-top: 128px;
  padding-bottom: 120px;
  background-color: #E0615D;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #FFFFFF;

  &__title {
    font-weight: 400;
    font-size: 48px;
    line-height: 140%;
    text-align: left;
    position: relative;
    margin-bottom: 56px;

    &::after {
      content: "";
      width: 61px;
      height: 4px;
      position: absolute;
      display: block;
      background-color: #DCDCDC;
      bottom: 0;
      left: 0px;
    }

    @media (max-width: 767px) {
      font-size: 40px;
    }
  }

  &__form {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  &__input-wrap {
    margin-bottom: 60px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-column-gap: 80px;
    grid-row-gap: 24px;

    @media (max-width: 575px) {
      grid-template-columns: 1fr;
    }
  }

  &__input {
    margin-bottom: 20px;
    display: block;
    width: 100%;
    color: inherit;
    border: none;
    border-bottom: 1px solid white;
    background: transparent;
    outline: none;

    &::placeholder {
      color: #FFFFFF;
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

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }
    to {
      transform: rotate(360deg);
    }
  }


  @-webkit-keyframes rotate {
    from {
      -webkit-transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
    }
  }

  .load {
    width: 30px;
    height: 30px;
    border:solid 2px #8822aa;
    border-radius: 50%;
    border-right-color: transparent;
    border-bottom-color: transparent;
    -webkit-transition: all 0.5s ease-in;
    -webkit-animation-name:             rotate;
    -webkit-animation-duration:         1.0s;
    -webkit-animation-iteration-count:  infinite;
    -webkit-animation-timing-function: linear;

    transition: all 0.5s ease-in;
    animation-name:             rotate;
    animation-duration:         1.0s;
    animation-iteration-count:  infinite;
    animation-timing-function: linear;
  }
}
</style>
