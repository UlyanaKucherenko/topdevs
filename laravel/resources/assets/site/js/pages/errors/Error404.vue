<template>
  <main class="error-404">
    <div class="container">
      <div class="error-404__content">
        <img src="/images/site/404.svg" alt="" class="error-404__img">
        <div class="error-404__title text-h2">Oops!</div>
        <div class="error-404__desc text-md">It seems like what you're looking for is in a better place. Try starting from the main page, using the search, or contacting us directly.</div>
        <div class="error-404__input">
          <input type="text">
        </div>
        <div class="error-404__nav">
          <a 
            class="error-404__nav-contact btn-default btn-default--inverted"
            href="/contacts"
          >
            contact us
          </a>
          <a 
            class="error-404__nav-back btn-default"
            href="/"
          >
            back to main
          </a>
        </div>
      </div>

    </div>
  </main>
</template>

<script>
export default {

}
</script>

<style lang="scss">
  .error-404 {
    padding-top: var(--header-height);
    height: 100vh;
    background-color: white;
    --children-bottom-padding: 2vh;
    min-height: 70rem;

    @media (max-height: 700px) {
      height: auto;
      padding-top: calc(var(--header-height) * 1.2);
    }

    &__content {
      height: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    &__img {
      max-width: 100%;
      height: 30%;
      margin-bottom: var(--children-bottom-padding);

      @media (max-height: 700px) {
        max-width: 30rem;
        height: auto;
      }
    }

    &__title {
      font-family: var(--Muli);
      font-weight: bold;
      text-transform: uppercase;
      margin-bottom: var(--children-bottom-padding);
    }

    &__desc {
      max-width: 78rem;
      line-height: 160%;
      text-align: center;
      letter-spacing: 0.03em;
      margin-bottom: calc(var(--children-bottom-padding) * 2);
    }

    &__input {
      width: 100%;
      max-width: 67rem;
      position: relative;
      margin-bottom: calc(var(--children-bottom-padding) * 2);

      input {
        width: 100%;
        padding: 1.4rem;
        padding-left: 3rem;
        border-bottom: 1px solid var(--grey-light);
      }

      &:before {
        content: '';
        width: 2rem;
        height: 2rem;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        background: url('/images/site/icons/search.svg');
        background-size: cover;
      }
    }

    &__nav {
      display: flex;
      width: 100%;
      justify-content: center;
      align-items: center;

      @media (max-width: 450px) {
        flex-direction: column;
      }

      &-contact {
        margin-right: calc(var(--space-unit) * 5);

        @media (max-width: 450px) {
          margin-right: 0;
          margin-bottom: 1rem;
        }
      }

      &-contact, &-back {
        @media (max-width: 600px) {
          width: 40%;
        }

        @media (max-width: 450px) {
          width: 90%;
        }
      }
    }
  }
</style>