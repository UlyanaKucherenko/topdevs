<template>
  <div class="tech-list">
    <div
        class="tech-list__item"
        v-for="(item, idx) in techList"
        :key="item"
        ref="tech-item"
        v-scroll-reveal="{delay: 100}"
    >
      {{ item }}
    </div>
  </div>
</template>

<script>
import gsap from "gsap";

export default {
  name: "TechList",
  props: {
    techList: {
      type: Array,
    },
  },
  mounted() {
    const techItem = this.$refs.techItem;
    gsap.fromTo(techItem, {autoAlpha: 0, scaleX: .3},{opacity:0,direction:1,delay:1})


  }
}
</script>

<style lang="scss" scoped>
.tech-list {
  display: grid;
  grid-template-columns: repeat(7, max-content);
  column-gap: calc(var(--space-unit) * 7);
  row-gap: calc(var(--space-unit) * 4);
  min-height: 10rem;
}

</style>