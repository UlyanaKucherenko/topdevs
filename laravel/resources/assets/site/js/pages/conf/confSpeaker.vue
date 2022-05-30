<template>
  <div class="speaker container">
    <div class="row">
      <div class="offset-md-1 col-md-10 text-center">
        <img
          src="/images/site/conf/speaker.png"
          class="speaker__photo"
        />
        <div class="speaker__title title">Speaker</div>
        <div class="speaker__name">Hanna Soloviova, <span class="speaker__company-name">COO TopDevs Inc.</span></div>
        <div class="speaker__text">
          For 12 years TopDevs has focused on the development of native iOS and Android applications, as well as on Web
          development.
          Under the guidance of Anna, the Solocator app was developed and launched. It is included in the top 20
          AppStore in the Navigate App category.
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ConfSpeaker',
}
</script>
<style lang="scss">
.speaker {
  position: relative;
  z-index: 1;
  margin-bottom: calc(var(--space-unit) * 187);

  &__photo {
    margin-bottom: 32px;
  }

  &__title {
    text-align: center;
    margin-bottom: 8px;
  }

  &__name {
    font-weight: 500;
    font-size: 24px;
    line-height: 140%;
    letter-spacing: 0.25px;
    color: #090909;
    margin-bottom: 8px;
  }

  &__company-name {
    color: #E0615D;
  }

  &__text {
    font-weight: 400;
    font-size: 18px;
    line-height: 180%;
    text-align: center;
    letter-spacing: 0.15px;
    color: #353535;
  }
}

</style>
