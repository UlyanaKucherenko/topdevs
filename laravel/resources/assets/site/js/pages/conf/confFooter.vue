<template>
  <div class="footer">
    <div class="footer__container container">
      <a
        class="footer__logo"
        href="#"
      >
        <IconLogo color="#FFFFFF"/>
      </a>
      <div class="footer__menu">
        <a class="footer__menu-item" href="#">Home</a>
        <a class="footer__menu-item" href="#about">About</a>
        <a class="footer__menu-item" href="#contact">Contact us</a></div>
      <div class="footer__menu-item footer__copyright">© 2021 All rights reserved</div>

      <img
        class="footer__bg-lines"
        src="/images/site/conf/bg-3.png" alt=""
      >
    </div>
  </div>
</template>
<script>
import IconLogo from "./icon/Logo"

export default {
  name: 'ConfFooter',
  components: {
    IconLogo
  }
}

</script>

<style lang="scss">
.footer {
  background-color: #E0615D;

  &__container {
    position: relative;
    display: flex;
    align-items: center;
    padding-bottom: 26px;
    z-index: 0;

    @media (max-width: 575px) {
      flex-direction: column;
      align-items: flex-start;
    }
  }

  &__logo {
    margin-right: 48px;

    @media (max-width: 575px) {
      margin-bottom: 10px;
    }
  }

  &__menu {
    display: flex;
    flex-direction: column;

    @media (max-width: 575px) {
      margin-bottom: 10px;
    }
  }

  &__menu-item {
    font-weight: 500;
    font-size: 18px;
    line-height: 140%;
    letter-spacing: 0.15px;
    color: white;

    &:hover {
      color: white;
      text-decoration: unset;
    }
  }

  &__copyright {
    margin-left: auto;

    @media (max-width: 575px) {
      margin-left: unset;
    }
  }

  &__bg-lines {
    position: absolute;
    bottom: 0;
    right: -40%;
    width: 90%;
    height: auto;
    z-index: -1;
    pointer-events: none;

    @media (max-width: 991px) {
      opacity: .2;
      width: 170%;
    }

    @media (max-width: 575px) {
      display: none;
    }
  }
}
</style>
