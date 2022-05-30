<template>
  <div class="feedback-card">
    <div class="feedback-card__inner">
      <div class="feedback-card__title">
        <div class="feedback-card__title-left">
          <span class="feedback-card__title-text">
            {{ item.title }}
          </span> 
          <gb-flag :code="item.country" iconPath="/images/site/flags" size="small" />
        </div>
          <div class="feedback-card__title-right">
            <a 
              class="feedback-card__logo"
              :href="logoHref" 
              target="_blank"
            >
            <img :src="logoImgSrc">
            </a>
          </div>
      </div>

      <div class="feedback-card__desc">
        {{ item.desc }}
      </div>

      <div class="feedback-card__quote">
        {{ item.quote }}
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    item: {
      type: Object,
      required: true
    }
  },


  computed: {
    logoImgSrc() {
      let url = this.item.link
      if (!url) return null

      let names = ['goodfirms', 'clutch']
      let match = names.find(name => url.includes(name))
      if (match) return `/images/site/icons/logos/reviews/${match}.png`
      else return null
    },

    logoHref() {
      let url = this.item.link
      return url?.includes('http') ? url : `https://${url}`
    }
  }
}
</script>

<style lang="scss">
  .feedback-card {
    &__inner {
      position: relative;
      padding: 0 18%;

      @media (max-width: 500px) {
        padding: 0 10%;
      }
    }

    &__title {
      font-weight: bold;
      margin-bottom: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;

      @media (max-width: 767px) {
        flex-direction: column;
        align-items: flex-start;
      }

      &-text {
        color: var(--blue-main);
        margin-right: 1rem;
      }

      &-left {
        display: flex;
        align-items: center;

        @media (max-width: 767px) {
          margin-bottom: .6rem;
        }

        @media (max-width: 575px) {
          flex-direction: column;
          align-items: flex-start;
        }
      }
    }

    &__desc {
      line-height: 160%;
      margin-bottom: 3rem;
      color: var(--grey-dark);
    }

    &__quote {
      color: var(--black-main);
      font-size: 2rem;
      line-height: 160%;
      text-align: center;

      @media (max-width: 575px) {
        font-size: 1.5rem;
        text-align: center;
      }
    }

    &__logo {
      img {
        max-height: 2.5rem;
      }

      @media (max-width: 767px) {
        max-height: 1.5rem;
      }
    }
  }
</style>