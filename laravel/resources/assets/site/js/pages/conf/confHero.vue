<template>
  <div class="hero container">
    <div class="hero__title ">Geofencing:<br> A business rescue you didn't know about.</div>
    <div class="hero__speaker"><span class="hero__text-light">Speaker:</span> Hanna Soloviova, COO TopDevs
      Inc.
    </div>
    <div class="hero__date"><span class="hero__text-light">Data:</span> 20.02.2021</div>
    <a href="#contact" class="btn">Register now</a>
    <img
      class="hero__bg-lines"
      src="/images/site/conf/bg-1.png" alt=""
    >
  </div>

</template>
<script>

export default {
  name: 'ConfHero',
}
</script>
<style lang="scss">

.hero {
  position: relative;
  height: 100vh;
  max-height: 1200px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;

  @media (max-width: 767px) {
    text-align: center;
    height: unset;
    padding-top: calc(var(--header-height) + 50px);
    margin-bottom: 100px;
    align-items: center;
  }

  &__title {
    font-size: 76px;
    line-height: 120%;
    letter-spacing: 0.5px;
    color: #262626;
    margin-bottom: 31px;
    max-width: 922px;

    @media (max-width: 767px) {
      font-size: 40px;
    }
  }

  &__speaker,
  &__date {
    font-size: 24px;
    color: #262626;
    margin-bottom: 6px;
  }

  &__date {
    margin-bottom: 46px;
  }

  &__text-light {
    color: #636363;
  }
  &__bg-lines {
    position: absolute;
    top: 0;
    left: 50%;
    width: 100%;
    height: auto;
    z-index: -1;

    @media (max-width: 991px) {
      opacity: .5;
    }

    @media (max-width: 575px) {
      display: none;
    }
  }

}

</style>
