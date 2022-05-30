<template>
  <modal name="error" :maxWidth="700" width="90%" height="auto" adaptive>
    <div class="error">
      <img src="/images/site/icons/close.svg" alt="" class="error__close" @click="$modal.hide('error')">
      <img 
        class="error__img"
        src="/images/site/modals/error.svg" alt=""
      >
      <div class="error__text text-lg text-red-light">Oops, something went wrong.<br>Please try again.</div>
    </div>
  </modal>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .error {
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
      margin-bottom: calc(var(--space-unit) * 3);
      width: 28rem;
    }

    &__close {
      position: absolute;
      right: calc(var(--space-unit) * 3);
      top: calc(var(--space-unit) * 3);
      cursor: pointer;
    }

    &__text {
      text-align: center;
    }
  }

  .vm--overlay {
    background: rgba(0, 0, 0, 0.329);
  }

  .vm--container {
    z-index: 9999;
  }
</style>