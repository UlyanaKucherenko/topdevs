<template>
  <div class="other">
    <TechList :techList="list" />
  </div>
</template>

<script>
import TechList from "./TechList";
export default {
  name: "Other",
  components: {TechList},
  data() {
    return {
      list: ['CoreLocation', 'CoreData', 'In-App Purchases', 'Firebase', 'Pure Sql', 'SIP Framework', 'SqlCipher',  'AFNetworking', 'Stripe', 'Facebook', 'Google Analytics', 'Mixpanel Analytics', 'Misfit SDK', 'REST API', 'KML', 'KMZ']
    }
  }
}
</script>
