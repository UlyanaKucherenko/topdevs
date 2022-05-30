<template>
  <modal name="coding" :maxWidth="700" width="90%" height="auto" adaptive>
    <div class="coding">
      <img src="/images/site/icons/close.svg" alt="" class="coding__close" @click="$modal.hide('coding')">
      <img 
        class="coding__img"
        src="/images/site/coding.png" alt=""
      >
      <div class="coding__text text-lg">
        Sorry, our site is under redesign now.<br> And here you can check 
        <span 
          class="text-blue-light coding__text-link"
          @click="openPortfolio"
        >
          our portfolio.
        </span>
      </div>
    </div>
  </modal>
</template>

<script>
export default {
  methods: {
    openPortfolio() {
      window.open('https://topdevs.org:4343/portfolio', '_blank')
      this.$modal.hide('coding')
    }
  },
}
</script>

<style lang="scss">
  .coding {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    padding: calc(var(--space-unit) * 10) calc(var(--space-unit) * 8);
    font-size: var(--Muli);
    position: relative;
  
    @media (max-width: 500px) {
      padding: 3rem;
    }

    &__img {
      margin-bottom: calc(var(--space-unit) * 3)
    }

    &__close {
      position: absolute;
      right: calc(var(--space-unit) * 3);
      top: calc(var(--space-unit) * 3);
      cursor: pointer;
    }

    &__text {
      @media (max-width: 450px) {
        br {
          display: none;
        }
      }

      &-link {
        cursor: pointer;
        text-decoration: underline;
      }
    }
  }

  .vm--overlay {
    background: rgba(0, 0, 0, 0.329);
  }

  .vm--container {
    z-index: 9999;
  }
</style>