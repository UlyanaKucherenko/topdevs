<template>
  <div class="geonumbers container">
    <div class="geonumbers__title title">Geofencing Numbers You’ll like</div>

    <div class="row">
      <div class="offset-md-2 col-md-8">
        <div class="geonumbers__text">
          People shop and return to the establishment 2x more often when setting up geofencing.
        </div>
      </div>
    </div>

    <ul class="geonumbers__list row">
      <li class="geonumbers__item col-12 col-md-6 offset-lg-2 col-lg-4">
        <div class="geonumbers__item-progress">
          <img src="/images/site/conf/progress-left.png"/>
        </div>
        <div class="geonumbers__item-text">
          60% of users are looking for information about local establishments on mobile devices.
        </div>
      </li>

      <li class="geonumbers__item col-12 col-md-6 col-lg-4">
        <div class="geonumbers__item-progress">
          <img src="/images/site/conf/progress-right.png"/>
        </div>
        <div class="geonumbers__item-text">
          70% of consumers are willing to share their location with you for something in return.
        </div>
      </li>
    </ul>

    <img
      class="geonumbers__bg-lines"
      src="/images/site/conf/bg-2.png" alt=""
    >
  </div>
</template>
<script>

export default {
  name: 'ConfGeonumbers',
  data() {
    return {
      statistics: [
        {
          percent: '/images/site/conf/progress-left.png',
          text: '60% of users are looking for information about local establishments on mobile devices.'
        },
        {
          percent: '/images/site/conf/progress-right.png',
          text: '70% of consumers are willing to share their location with you for something in return.'
        }
      ]
    }
  }
}
</script>

<style lang="scss">

.geonumbers {
  position: relative;
  text-align: center;
  margin-bottom: calc(var(--space-unit) * 229);

  &__title {
    margin-bottom: 8px;
  }

  &__text {
    font-weight: 400;
    font-size: 24px;
    line-height: 140%;
    letter-spacing: 0.25px;
    color: #353535;
    margin-bottom: 65px;
  }

  &__list {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  &__item {
    @media (max-width: 767px) {
      &:first-child {
        margin-bottom: 20px;
      }
    }
  }

  &__item-progress {
    margin-bottom: 16px;
  }

  &__item-text {
    font-weight: 400;
    font-size: 18px;
    line-height: 140%;
    text-align: center;
    letter-spacing: 0.15px;
    color: #353535;
  }

  &__bg-lines {
    position: absolute;
    top: 0;
    left: -20%;
    width: 90%;
    height: auto;
    z-index: -1;

    @media (max-width: 991px) {
      opacity: .4;
    }

    @media (max-width: 575px) {
      display: none;
    }
  }
}
</style>
