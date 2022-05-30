<template>
  <section class="connect-section" id="connect-section">
    <div class="container">
      <SectionHeader
        :title="headerTitle"
        :desc="headerDesc"
        :options="{color: 'inverse', lines: false}"
        mode="center"
      />

      <ConnectForm class="connect-section__form"/>
    </div>

    <img src="/images/site/icons/abstract/6.svg" alt="" class="connect-section__circle" v-cursor-follow="{multiplier: .4}">
    <img src="/images/site/icons/abstract/2.svg" alt="" class="connect-section__dots" v-cursor-follow="{multiplier: .4}">
  </section>
</template>

<script>
import SectionHeader from '@/js/components/global/SectionHeader'
import ConnectForm from '@/js/components/pages/services/ConnectForm/ConnectForm'

export default {
  components: {SectionHeader, ConnectForm},

  props: {
    headerTitle: {
      type: [Array, String],
      default: 'Connect with Experts'
    },
    headerDesc: {
      type: [Array, String],
      default: () => ['Your idea - our execution. Let\'s create', 'meaningful solutions together!']
    }
  },

  data() {
    return {
    }
  }
}
</script>

<style lang="scss">
  .connect-section {
    padding: var(--section-pd-y-small) 0;
    background: #2D2C2C;
    background-image: url('/images/site/logo-short.svg');
    background-position: right 3% bottom;
    background-repeat: no-repeat;
    background-size: 52% auto;
    overflow: hidden;
    position: relative;

    .section-header__title {
      padding-left: 0;
    }

    &__form {
      max-width: 83.5rem;
      margin: 0 auto;

      @media (max-width: 767px) {
        width: 100%;
      }

      @media (max-width: 575px) {
        .connect-form__btn {
          width: 100%;
        }
      }
    }

    &__circle {
      width: 25%;
      position: absolute;
      right: -4%;
      top: -4%;

      @media (max-width: 767px) {
        display: none;
      }
    }

    &__dots {
      position: absolute;
      left: 5%;
      bottom: 20%;

      @media (max-width: 1380px) {
        display: none;
      }
    }
  }
</style>
