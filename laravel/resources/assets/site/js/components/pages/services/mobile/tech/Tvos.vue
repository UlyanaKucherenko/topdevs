<template>
  <div class="tvos">
    <TechList :techList="list" />
  </div>
</template>

<script>
import TechList from "./TechList";
export default {
  name: "Tvos",
  components: {TechList},
  data() {
    return {
      list: ['Focus Engine', 'Core Media', 'AVFoundation', 'Cocoa Touch']
    }
  }
}
</script>
