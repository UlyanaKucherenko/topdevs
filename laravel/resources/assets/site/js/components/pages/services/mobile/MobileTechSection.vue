<template>
  <section class="mobile-tech-section">
    <div class="container">
        <ServicesSectionHeader
            :title="headerTitle"
            :desc="headerDesc"
            mode="left"
        />

      <div class="mobile-tech-section__tabs">
        <VTabs :tabs="tabs" :selected-tab="selectedTab" @click="handleTabClick"/>
      </div>
      <component :is="selectedTab"></component>
    </div>


    <slot name="cursor-follow"/>
  </section>
</template>

<script>
import ServicesSectionHeader from "./global/ServicesSectionHeader";
import VTabs from "./component/VTabs";
import Ios from "./tech/Ios";
import Android from "./tech/Android";
import MobileDesign from "./tech/MobileDesign";
import Tvos from "./tech/Tvos";
import Other from "./tech/Other";

export default {
  name: 'MobileTechSection',
  components: {Other, Tvos,MobileDesign, Android, Ios, ServicesSectionHeader, VTabs},

  props: {
    headerTitle: [Array, String],
    headerDesc: [Array, String],
    headerIcon: String,
    blocks: Array,
    type: {
      type: String,
      default: 'single'
    }
  },

  data() {
    return {
      tabs: [
        {title: 'iOS', component: 'ios'},
        {title: 'Android', component: 'android'},
        {title: 'Mobile Design', component: 'MobileDesign'},
        {title: 'Tvos', component: 'Tvos'},
        {title: 'Other', component: 'other'},
      ],
      selectedTab: 'ios'
    }
  },
  methods: {
    handleTabClick(tab) {
      this.selectedTab = tab.component;
    }
  }
}
</script>

<style lang="scss">
.mobile-tech-section {
  position: relative;
  padding: var(--section-pd-y-small) 0;

  &__tabs {
    margin-bottom: 64px;
  }

  &__tables {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
  }

  &__table {
    padding: 0 calc(var(--space-unit) * 5);
    border-radius: 3rem;
  }
}
</style>
