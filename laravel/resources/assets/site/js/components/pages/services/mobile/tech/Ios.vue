<template>
  <div class="ios">
    <TechList :techList="list" />
  </div>
</template>

<script>
import TechList from "./TechList";
export default {
  name: "Ios",
  components: {TechList},
  data() {
    return {
      list: ['Objective-C', 'Realm', 'RxSwift', 'Swift UI', 'Apollo', 'SwiftMessage', 'Automatic Layout', 'Mix Swift', 'UI Kit', 'Map Kit', 'MVVM', 'Swift', 'XCode', 'Custom UI']
    }
  }
}
</script>