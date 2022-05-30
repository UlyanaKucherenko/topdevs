<template>
  <div class="default-layout">
    <transition name="fade">
      <AppPreloader v-if="!$store.state.loading.pageIsLoaded"/>
    </transition>
    <TheHeader/>
    <slot></slot>
    <TheFooter/>
    <CodingModal/>
    <ErrorModal/>
    <PrivacyModal/>
  </div>
</template>

<script>
import MobileDetect from 'mobile-detect'

import TheHeader from '@/js/components/global/TheHeader';
import TheFooter from '@/js/components/global/TheFooter';
import CodingModal from '@/js/components/global/modals/CodingModal';
import ErrorModal from '@/js/components/global/modals/ErrorModal';
import PrivacyModal from '@/js/components/global/modals/PrivacyModal'
import AppPreloader from '@/js/components/global/AppPreloader'

export default {
  components: {TheHeader, TheFooter, CodingModal, ErrorModal, PrivacyModal, AppPreloader},

  created() {
    if (new MobileDetect(window.navigator.userAgent).mobile()) this.$store.commit('global/SET_STATE', {deviceIsMobile: true})
    this.$store.dispatch('global/fetchCountries')
  },

  mounted() {
    document.documentElement.style.setProperty('--scrollbar-width', `${window.innerWidth - document.body.clientWidth}px`)
  },
}
</script>

<style lang="scss">
</style>
