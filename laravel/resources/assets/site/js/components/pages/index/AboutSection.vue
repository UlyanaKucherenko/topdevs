<template>
  <div class="about-section">
    <div class="container">
      <div class="about-section__content">
        <div class="about-section__text" v-scroll-reveal="{delay: 250}">
          <h1 style="opacity: 0; position: absolute; pointer-events: none">Web And Mobile Application Development Company</h1>
          <div class="about-section__title text-h1">
            <span class="about-section__title-big text-red-light" v-sliding-chars>Web And Mobile Application</span>
            <span class="about-section__title-small">Development Company</span>
          </div>

          <p class="about-section__desc text-lg">
            We are technology inspired guys passionate for all things web and mobile app development to assist startups and enterprises on their digital evolution journey.
          </p>

          <a
            @click="scrollTo('#connect-section')"
            class="about-section__btn btn-default"
          >
            let's talk
          </a>
        </div>

        <div class="about-section__figures">
          <img src="/images/site/icons/abstract/fig-8.svg" alt="" v-cursor-follow="{multiplier: .8}" class="about-section__fig about-section__fig-8">
          <div class="about-section__fig about-section__fig-4 ratio" v-cursor-follow="{multiplier: 1}"/>
          <img src="/images/site/icons/abstract/fig-2.svg" v-cursor-follow="{multiplier: .3, transform: {x: -50}}" alt="" class="about-section__fig-2">
          <img src="/images/site/icons/abstract/fig-3.svg" v-cursor-follow="{multiplier: .4}" alt="" class="about-section__fig about-section__fig-3">
          <div class="about-section__fig about-section__fig-10 ratio" v-cursor-follow="{multiplier: .9}" />
          <img src="/images/site/icons/abstract/fig-9.svg" v-cursor-follow alt="" class="about-section__fig about-section__fig-9">
          <img src="/images/site/index/hero/fig-5.svg" v-cursor-follow="{multiplier: 1.2}" alt="" class="about-section__fig about-section__fig-5">
          <img src="/images/site/icons/abstract/fig-1.svg" v-cursor-follow="{multiplier: .7}" alt="" class="about-section__fig about-section__fig-1">
          <img src="/images/site/icons/abstract/fig-11.svg" v-cursor-follow="{multiplier: 1.4}" alt="" class="about-section__fig about-section__fig-11">
          <img src="/images/site/icons/abstract/fig-12.svg" v-cursor-follow="{multiplier: 1.7}" alt="" class="about-section__fig about-section__fig-12">
          <img src="/images/site/icons/abstract/fig-13.svg" v-cursor-follow="{multiplier: 1.2}" alt="" class="about-section__fig about-section__fig-13">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import gsap from 'gsap'

export default {
  data() {
    return {
      switchersLoaded: false,
      realX: 0,
      delayedX: 0,
      coordInterval: null
    }
  },


  watch: {
    figuresAnimIsAvailable: (next, prev) => {
      if (next == true) {
        let tl = gsap.timeline({defaults: {ease: 'expo.out'}})
        .fromTo('.about-section__fig-2', {scale: 10, autoAlpha: 0}, {autoAlpha: 1, scale: 1, duration: 2.5})
        .fromTo('.about-section__fig', {autoAlpha: 0, scale: 0}, {autoAlpha: 1, scale: 1, duration: 1.5, stagger: .1}, 0)
      }
    }
  },


  computed: {
    figuresAnimIsAvailable() {
      return this.$store.state.loading.pageIsLoaded && this.$store.state.loading.headerAnimIsEnded
    }
  },


  methods: {
    switchersMouseMoveHandler(e) {
      this.realX = (e.clientX - this.windowWidth/2) / 30
    }
  }
}

</script>

<style lang="scss">
  .home {
    .about-section {
      height: 100vh;
      min-height: 55rem;
      padding-top: var(--header-height);
      position: relative;
      overflow: hidden;

      @media (max-width: 767px) {
        max-height: 60rem;
      }

      @media (max-width: 450px) {
        max-height: 100vh;
      }

      &__fig, &__fig-2 {
        opacity: 0;
      }

      &__content {
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        position: relative;
        z-index: 1;
      }

      &__text {
        max-width: 51%;

        @media (max-width: 991px) {
          will-change: transform;
          max-width: 100%;
          text-align: center;
          display: flex;
          flex-direction: column;
          align-items: center;
        }
      }

      &__title {
        margin-bottom: calc(var(--space-unit) * 4);
        letter-spacing: normal;

        &-big {
          display: inline-block;
          line-height: 100%;
        }

        &-small {
          font-size: .7em;
          font-weight: 600;
          display: block;
          color: var(--grey-dark);
          line-height: 110%;
        }
      }

      &__desc {
        margin-bottom: calc(var(--space-unit) * 4);
      }

      &__bg {
        position: absolute;
        top: 0;
        right: 0;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: flex-end;
        overflow: hidden;
        z-index: 0;
      }

      &__switch {
        width: 10vw;
        height: 101%;
        margin-right: 2vw;
        position: relative;
        z-index: 0;

        &:last-child {
          margin-right: 0;
        }

        &--pressed {
          &--top {
            .about-section {
              &__shadow {
                bottom: -10%;
              }
            }
          }

          &--bottom {
            .about-section {
              &__shadow {
                transform: rotate(180deg) translateX(50%);
                top: -10%;
              }
            }
          }
        }
      }

      &__line {
        height: 100%;
        width: 100%;
      }

      &__shadow {
        position: absolute;
        z-index: -1;
        height: 90%;
        left: 0;
        width: 200%;
        transform: translateX(-50%);
        pointer-events: none;
      }

      &__figures {
        position: absolute;
        left: 55%;
        width: 42.5%;
        z-index: -1;

        &:before {
          content: '';
          display: block;
          padding-top: 107%;
        }

        @media (max-width: 991px) {
          display: none;
          // left: 5%;
          // width: 90%;
          // opacity: .1;
        }
      }

      &__fig-8 {
        width: 8.3%;
        position: absolute;
        left: 0;
        top: 0;
      }

      &__fig-4 {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 8.5%;
        border: .7rem solid var(--red-light);
        border-radius: 50%;
      }

      &__fig-10 {
        position: absolute;
        left: 57%;
        top: 25%;
        width: 5%;
        border: .3rem solid var(--red-light);
        border-radius: 50%;
      }

      &__fig-9 {
        width: 23.6%;
        position: absolute;
        left: 53%;
        top: 38%;
        z-index: 5;
      }

      &__fig-2 {
        width: 59.5%;
        position: absolute;
        left: 50%;
        top: 10%;
        transform: translateX(-50%)
      }

      &__fig-3 {
        width: 8.3%;
        position: absolute;
        left: 35%;
        top: 25%;
      }

      &__fig-5 {
        width: 36.6%;
        position: absolute;
        left: 62%;
        top: 35%;
      }

      &__fig-1 {
        width: 8.3%;
        position: absolute;
        left: 48%;
        bottom: 18%;
      }

      &__fig-11 {
        width: 9%;
        position: absolute;
        right: 4%;
        top: 65%;
      }

      &__fig-12 {
        width: 9%;
        position: absolute;
        right: 2%;
        top: 10%;
      }

      &__fig-13 {
        width: 4.5%;
        position: absolute;
        top: 80%;
        right: 15%;
      }
    }
  }
</style>
