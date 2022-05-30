<template>
  <div class="geofencing container">
    <div class="title geofencing__title">What is Geofencing?</div>
    <div class="row">
      <div class="offset-md-1 col-md-10 geofencing__text">
        Geofencing is a feature in native apps, and mostly business owners don't know about its benefits.
        Thanks to this function, you can reach your target audience with a smart use of your budget. We will talk in
        more detail about what it is and how to use it at the webinar.
      </div>
    </div>
  </div>
</template>
<script>

export default {
  name: 'ConfGeofencing'
}
</script>

<style lang="scss">
.geofencing {
  display: flex;
  align-items: center;
  //justify-content: center;
  flex-direction: column;

  &__title {
    text-align: center;
    margin-bottom: 8px;
  }

  &__text {
    font-size: 18px;
    line-height: 140%;
    text-align: center;
    letter-spacing: 0.15px;
    color: #353535;
    margin-bottom: 88px;
  }
}

</style>
