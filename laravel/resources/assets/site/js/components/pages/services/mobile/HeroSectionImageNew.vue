<template>
  <div class="hero-img">
    <div class="hero-img__mobile">
      <img src="/images/site/services/mobile/hero-new.svg" alt="">
      <div class="hero-img__mobile-item1">
        <img src="/images/site/services/mobile/detail-1.png" alt="" v-cursor-follow="{ multiplier: 0.9 }">
      </div>
      <div class="hero-img__mobile-item2">
        <img src="/images/site/services/mobile/detail-2.svg" alt="" v-cursor-follow="{ multiplier: 0.9 }">
      </div>
      <div class="hero-img__mobile-item3">
        <img src="/images/site/services/mobile/detail-3.svg" alt="" v-cursor-follow="{ multiplier: 0.9 }">
      </div>
    </div>

  </div>


</template>

<script>

export default {
  mounted() {

  }
}
</script>

<style lang="scss" scoped>
.hero-img {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  position: relative;

  &:after {
    content: '';
    width: 100%;
    height: 100px;
    position: absolute;
    bottom: -10%;
    background-color: #fafafa;
    border-top: 1px solid rgba(0, 0, 0, 0.04);
  }

  &__mobile {
    position: relative;

    img {
      width: 100%;
    }
  }

  &__mobile-item1 {
    position: absolute;
    top: 41%;
    right: 0;
  }
  &__mobile-item2 {
    position: absolute;
    top: 50%;
    left: 8%;
  }
  &__mobile-item3 {
    position: absolute;
    top: 57%;
    right: 5%;
  }
}
</style>
