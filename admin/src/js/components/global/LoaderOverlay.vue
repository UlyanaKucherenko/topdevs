<template>
    <v-row
      class="loader-overlay"
      align-content="center"
      justify="center"
    >
      <v-progress-circular
        :size="80"
        :width="3"
        color="redMain"
        indeterminate
      >
        <v-img
          src="/admin/images/logo-big.svg"
          :width="50"
          :height="50"
          class="loader-logo"
        ></v-img>
      </v-progress-circular>

      <v-col
        class="font-weight-bold text-center"
        cols="12"
      >
        Getting your files
      </v-col>

    </v-row>
</template>

<script>
export default {
  name: "LoaderOverlay"
}
</script>

<style lang="scss">
.loader {
  &-overlay {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  &-logo {
    animation: loaderLogo 1s ease-in-out infinite;
  }
}

  @keyframes loaderLogo {
    0% {
      opacity: 1;
    }
    50% {
      opacity: .2;
    }
    100% {
      opacity: 1;
    }
  }
</style>
