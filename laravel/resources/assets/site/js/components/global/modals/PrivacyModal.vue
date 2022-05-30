<template>
  <transition name="privacy">
    <div
      class="privacy-modal"
      v-if="modalIsVisible"
    >
      <div class="privacy-modal__text">
        TopDevs uses cookies to provide you with the best experience on our website.
        Learn more on how we value your <a class="text-blue-light" href="/policy/cookies">privacy.</a>
      </div>

      <div
        class="privacy-modal__btn"
        @click="acceptPrivacy"
      >
        Accept
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  data() {
    return {
      modalIsVisible: false
    }
  },


  watch: {
    '$store.state.loading.pageIsLoaded': function(next, prev) {
      if (next) this.checkPrivacy()
    }
  },


  methods: {
    checkPrivacy() {
      if (localStorage.getItem('cookiesAreAccepted') === 'true') return
      else setTimeout(() => {
        this.modalIsVisible = true
      }, 1000);
    },

    acceptPrivacy() {
      this.modalIsVisible = false
      localStorage.setItem('cookiesAreAccepted', true)
    }
  },
}
</script>

<style lang="scss">
  .privacy-modal {
    position: fixed;
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: auto;
    padding: 1.5rem 2.5rem;
    bottom: 0;
    left: 0;
    right: 0;
    background: var(--white-main);
    box-shadow: 0 0 10px 2px #0000000d;
    z-index: 999;

    &__text {
    }

    &__btn {
      padding: 1.5rem 2.5rem;
      border: 2px solid var(--red-main);
      margin-left: calc(var(--space-unit) * 3);
      color: var(--red-main);
      letter-spacing: 1px;
      font-weight: 700;
      text-transform: uppercase;
      cursor: pointer;
      box-shadow: 0 0 10px 2px #00000014;
    }

    @media (max-width: 600px) {
      flex-direction: column;

      &__text {
        margin-bottom: 1.5rem;
      }

      &__btn {
        margin-left: 0;
      }
    }
  }

  .privacy-enter-active, .privacy-leave-active {
    transition: opacity .5s;
  }

  .privacy-enter, .privacy-leave-to /* .privacy-leave-active до версии 2.1.8 */ {
    opacity: 0;
  }

  .privacy-top-enter-active, .privacy-top-leave-active {
    transition: .5s;
  }

  .privacy-top-enter, .privacy-top-leave-to {
    transform: translateY(-100%);
    opacity: 0;
  }
</style>
