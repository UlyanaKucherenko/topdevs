<template>
  <a
    class="portfolio-case hover-card"
    :href="'/portfolio/' + item.link"
    :class="{'portfolio-case--reversed': reversed}"
    :style="{background: item.color}"
    @click="caseOnClick($event, item.link)"
  >
    <div class="portfolio-case__bookmark" v-if="_getParseCaseIndustry.length">
      <div class="portfolio-case__bookmark-item"></div>
      <div class="portfolio-case__bookmark-title">
        {{ _getParseCaseIndustry }}
      </div>
    </div>
    <span class="portfolio-case__info">
      <h2 class="portfolio-case__title">{{ item.title }}</h2>
      <p class="portfolio-case__subtitle">{{ item.subtitle }}</p>
      <p class="portfolio-case__desc">{{ item.desc }}</p>
      <div
        class="portfolio-case__link text-red-light"
      >
        <span class="portfolio-case__link-text">See Full Case</span>
        <img class="portfolio-case__link-arrow hover-card__arrow" src="/images/site/icons/arrows/9.svg" alt="">
      </div>
    </span>

    <img
      class="portfolio-case__img"
      :src="item.imgURL"
    >
  </a>
</template>

<script>
export default {
  props: {
    item: Object,
    reversed: Boolean
  },

  computed: {
    _getParseCaseIndustry() {
      if (this.item.case_industry) {
        return this.item.case_industry.replaceAll(",", " • ");
      }
      return [];
    }
  },

  methods: {
    caseOnClick(e, link) {
      if (link == '---') {
        this.$modal.show('coding')
        e.preventDefault();
      }
    }
  },
}
</script>

<style lang="scss">
  .portfolio-case {
    display: flex;
    align-items: center;
    position: relative;

    @media (max-width: 901px) {
      .portfolio-case {
        &__bookmark {
          left: calc(var(--space-unit) * 4);
        }
      }
    }

    @media (max-width: 576px) {
      .portfolio-case {
        &__bookmark-item {
          border-width: 23px 16px 16px;
        }
      }
    }

    &--reversed {
      flex-direction: row-reverse;

      @media (min-width: 901px) {
        .portfolio-case {
          &__img {
            padding-left: 0;
            padding-right: 7.5%;
          }
          &__bookmark {
            flex-direction: row-reverse;
            &-title {
              margin: 0 15px 0 0;
            }
          }
        }
      }
      @media (max-width: 901px) {
        .portfolio-case {
          &__bookmark {
            left: calc(var(--space-unit) * 4);
          }
        }
      }
    }

    &__bookmark {
      position: absolute;
      top: 0;
      display: flex;
      align-items: center;
      &-item {
        width: 0;
        height: 0;
        border-width: 33px 18px 16px;
        border-style: solid;
        border-color: #021D44 #021D44 transparent;
      }
      &-title {
        margin-left: 15px;
        font-family: var(--ProximaNova);
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0.05em;
        color: #021D44;
      }
    }

    &__info {
      width: 40%;
      padding: calc(var(--space-unit) * 4) 0;
    }

    &__title {
      color: var(--blue-main);
      letter-spacing: .03em;
      font-weight: 600;
      // margin-bottom: var(--space-unit);
      margin-bottom: 1.5rem;
    }

    &__subtitle {
      font-weight: 600;
      letter-spacing: .05em;
      font-size: 16px;
      // margin-bottom: var(--space-unit);
      margin-bottom: 1.5rem;
    }

    &__desc {
      font-size: 16px;
      letter-spacing: .03em;
      // margin-bottom: calc(var(--space-unit) * .75);
      margin-bottom: 1.5rem;
    }

    &__link {
      display: flex;
      cursor: pointer;

      &:hover {
        .portfolio-case__link-arrow {
          @include arrow-hover;
        }
      }

      &-text {
        margin-right: 1rem;
        font-weight: 600;
        letter-spacing: 1px;
      }

      &-arrow {
        width: 3rem;
      }
    }

    &__img {
      width: 60%;
      padding-left: 7.5%;
    }

    @media (max-width: 900px) {
      flex-direction: column;

      &__info {
        width: 100%;
      }

      &__img {
        width: 100%;
        padding: 0;
        max-width: 40rem;
      }

      &:hover {
        .portfolio-case__link-arrow {
          @include arrow-hover;
        }
      }
    }
  }
</style>
