<template>
  <div class="mobile-design">
    <TechList :techList="list" />
  </div>
</template>

<script>
import TechList from "./TechList";
export default {
  name: "MobileDesign",
  components: {TechList},
  data() {
    return {
      list: ['Figma', 'Figmotion']
    }
  }
}
</script>
