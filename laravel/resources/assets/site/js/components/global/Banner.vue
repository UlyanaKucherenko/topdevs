<template>
  <div class="post-banner">
    <div class="post-banner__holder">
      <p class="post-banner__holder-title">{{ bannerTitle }}</p>
      <div class="post-banner__holder-link">
        <a href="/contacts" target="_blank" class="post-banner__holder-link_item btn-default">book a call</a>
      </div>
      <img class="post-banner__holder-background post-banner__holder-background-left" src="/images/site/blog/banner-left-bg.svg" alt="">
      <img class="post-banner__holder-background post-banner__holder-background-right" src="/images/site/blog/banner-right-bg.svg" alt="">
    </div>
  </div>
</template>

<script>
export default {
  name: "Banner",
  props: {
    bannerTitle: {
      type: String,
      required: true,
    }
  }
}
</script>

<style lang="scss">
.post-banner {
  background: linear-gradient(112.42deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
  box-shadow: -15px -15px 40px #FFFFFF, 9px 9px 25px rgba(124, 124, 124, 0.4);
  width: 275px;
  height: max-content;
  border-radius: 15px;
  z-index: 0;

  &__holder {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 100%;

    &-title {
      z-index: 1;
      padding: 10px 15px;
      font-size: 20px;
      color: #000000;
      margin-bottom: 20px;
    }

    &-link {
      display: flex;
      justify-content: center;
      margin-bottom: 10px;
      padding: 0 20px;
      &_item {
        height: 5rem;
      }
    }

    &-background {
      position: absolute;
      z-index: -1;

      &-left {
        left: 0;
        bottom: 0;
      }

      &-right {
        right: 0;
        top: 0;
      }
    }
  }
}

@media only screen and (max-width: 1440px) {
  .post-banner {
    width: 225px;

    &__holder{
      &-title {
        font-size: 18px;
        font-weight: 600;
      }
      &-link_item {
        font-size: 15px;
      }
    }
  }
}

@media only screen and (max-width: 1300px) {
  .post-banner {
    width: 215px;

    &__holder{
      &-title {
        font-size: 14px;
        font-weight: 600;
      }
      &-link_item {
        font-size: 12px;
        height: 4.5rem;
      }
    }
  }
}
</style>