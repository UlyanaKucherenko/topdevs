<template>
  <a
    class="more-card hover-card"
    :class="{
      'card-filled': cardFilled,
      'more-card--new-design': newDesign
    }"
    :href="item.link"
    @click="onLinkClick(item.link, $event)"
  >
    <FirstCard
      v-bind="item"
      :link="''"
      :imgWidth="imgWidth"
      :newDesign="newDesign"
    />

    <div :class="{
        'more-card__bottom': true,
        'more-card__bottom--side--left': bottomSide == 'left'
      }"
    >
      <span class="hover-card__text">see more</span>
      <img
        class="hover-card__arrow"
        :src="newDesign ? '/images/site/icons/arrows/11.svg' : '/images/site/icons/arrows/1.svg'" alt=""
      >
    </div>
  </a>
</template>

<script>
import FirstCard from '@/js/components/global/cards/FirstCard'

export default {
  components: {FirstCard},

  props: {
    item: {
      type: Object,
      default: () => ({})
    },

    bottomSide: String,
    imgWidth: String,
    cardFilled: false,
    newDesign: Boolean
  },


  methods: {
    onLinkClick(link, e) {
      if (link == 'coding') {
        e.preventDefault()
        this.$modal.show('coding')
      }
    }
  },
}
</script>

<style lang="scss">
.more-card {
  height: 100%;
  display: flex;
  flex-direction: column;

  &--new-design {
    .hover-card__text {
      font-weight: 400;
      transform: translateY(2px);
    }
  }

  &__bottom {
    margin-top: 2rem;
    display: flex;
    justify-content: flex-end;
    color: var(--red-lighter);
    font-weight: 700;

    span {
      margin-right: 1rem;
    }

    img {
      transition: .3s;
    }

    &--side {
      &--left {
        justify-content: flex-start;
      }
    }
  }
}
</style>
