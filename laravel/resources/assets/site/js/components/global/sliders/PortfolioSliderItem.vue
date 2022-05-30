<template>
  <a
    class="portfolio-slider-item block"
    :href="`/portfolio/${item.link}`"
  >
    <div class="portfolio-slider-item__img">
      <img class="portfolio-slider-item__img-front" :src="'/storage/' + item.picture.path" alt="" ref="img">
    </div>
    <div class="portfolio-slider-item__text">
      <div class="portfolio-slider-item__title" ref="title">
        {{ item.title }}
      </div>
      <div class="portfolio-slider-item__subtitle">
        {{ item.sub_title }}
      </div>
<!--      <div class="portfolio-slider-item__techs" ref="techs">-->
<!--        {{ item.technologies.map(tech => tech.name).join(', ') }}-->
<!--      </div>-->
      <div class="portfolio-slider-item__tags">
        <div class="portfolio-slider-item__tags-item">
          <div class="portfolio-slider-item__tags-item_label">
            Industry:
          </div>
          <div class="portfolio-slider-item__tags-item_value">
            {{ item.case_industry | addSpacing }}
          </div>
        </div>
        <div class="portfolio-slider-item__tags-item">
          <div class="portfolio-slider-item__tags-item_label">
            Location:
          </div>
          <div class="portfolio-slider-item__tags-item_value">
            {{ item.location | addSpacing }}
          </div>
        </div>
      </div>
    </div>
  </a>
</template>

<script>
export default {
  props: {
    item: Object
  },
  filters: {
    addSpacing(values) {
      if (values !== null) {
        return values.replaceAll(",", ", ");
      }

      return "";
    },
  }
}
</script>

<style lang="scss">
.portfolio-slider-item {
  &__img {
    position: relative;
    //max-width: 40rem;
    margin: 0 auto;

    &-front {
      width: 100%;
      pointer-events: none;
    }

    &-back {
      position: absolute;
      left: 24%;
      top: 11%;
      width: 70%;
      height: 90%;
      z-index: -1;
      object-fit: contain;

      svg {
        transform: translateX(7%);
      }
    }
  }

  &__text {
    max-width: 35rem;
    margin: 0 auto;
    padding-bottom: 2.5rem;

    @media (max-width: 1150px) {
      text-align: center;
    }
  }
  &__subtitle {
    color: var(--blue-main);
    font-size: 1.6rem;
    letter-spacing: 0.05em;
    font-style: italic;
    font-family: var(--ProximaNova);
    line-height: 130%;
    text-align: left;
  }

  &__title {
    font-family: var(--ProximaNova);
    letter-spacing: 0.05em;
    text-transform: uppercase;
    font-size: 2.4rem;
    line-height: 120%;
    font-weight: 600;
    margin-bottom: 1rem;
    margin-top: 20px;
    text-align: left;
  }

  &__techs {
    line-height: 140%;
  }
  &__tags {
    display: flex;
    align-items: center;
    margin-top: 15px;
    flex-wrap: wrap;
    gap: 10px;
    &-item {
      display: flex;
      align-items: center;
      &:first-child {
        margin-right: 10px;
      }
      &_label {
        font-family: var(--ProximaNova);
        font-weight: 600;
        font-size: 1.6rem;
        line-height: 120%;
        letter-spacing: 0.05em;
      }
      &_value {
        font-family: var(--ProximaNova);
        font-size: 1.6rem;
        line-height: 120%;
        letter-spacing: 0.05em;
        margin-left: 5px;
      }
    }
  }
}
</style>
