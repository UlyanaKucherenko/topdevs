<template>
  <div class="android">
    <TechList :techList="list" />
  </div>
</template>

<script>
import TechList from "./TechList";
export default {
  name: "Android",
  components: {TechList},
  data() {
    return {
      list: ['Java', 'Kotlin']
    }
  }
}
</script>