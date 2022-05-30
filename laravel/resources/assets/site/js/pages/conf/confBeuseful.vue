<template>
  <div class="beuseful container">
    <div class="row">
      <div class="offset-md-1 col-md-10">
        <div class="beuseful__title title">Who will it be useful to?</div>
        <ul class="beuseful__list">
          <li
            class="beuseful__item"
            v-for="item in items"
            :key="item.title"
          >
            <div class="beuseful__item-title">{{ item.title }}</div>
            <div class="beuseful__item-text">{{ item.text }}</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>

export default {
  name: 'ConfBeuseful',
  data() {
    return {
      items: [
        {
          title: 'Business owners',
          text: 'Increase brand awareness and sales using geoposition.'
        },
        {
          title: 'Startup owners',
          text: 'Use geofencing for a more successful start of your project.'
        },
        {
          title: 'Those who plan to create their own traсking app and geoposition tracking',
          text: 'Tracking location of cargo and/or transport.'
        },
        {
          title: 'Marketing specialists',
          text: 'Plan a sales promotion strategy using the geofencing tool.'
        },
        {
          title: 'Those who want to make their APP to enhance offline sales',
          text: 'Go around competitors, intercepting customers more favorable offers.'
        }
      ]

    }
  }
}
</script>

<style lang="scss">

.beuseful {
  margin-bottom: 104px;

  &__title {
    color: #262626;
    margin-bottom: 40px;
  }

  &__list {
    list-style: none;
    margin: 0;
    padding: 0;
  }

  &__item {
    font-weight: 400;
    font-size: 24px;
    line-height: 140%;
    letter-spacing: 0.25px;
    color: #090909;
    margin-bottom: 24px;

    &:last-child {
      margin-bottom: 0;
    }
  }

  &__item-title {
    font-size: 24px;
  }

  &__item-text {
    font-size: 18px;
    color: #353535;
  }


}

</style>
