<template>
  <div class="custom-card">
    <div class="custom-card__main">
      <div>
        <div>The Tech Side Is On Us, Entirely</div>
        <div>Even if you are non-technical, we can back you up with all tech-related decisions.</div>
      </div>
      <div class="custom-card__main-right">
        <div>
          <div>Title</div>
          <div>Being optimized for a particular platform, native applications are faster, smarter, and more efficient
            while operating with a huge amount of data.
          </div>
        </div>
        <div>
          <div>Title</div>
          <div>Being optimized for a particular platform, native applications are faster, smarter, and more efficient
            while operating with a huge amount of data.
          </div>
        </div>
        <div>
          <div>Title</div>
          <div>Being optimized for a particular platform, native applications are faster, smarter, and more efficient
            while operating with a huge amount of data.
          </div>
        </div>
        <div>
          <div>Title</div>
          <div>Being optimized for a particular platform, native applications are faster, smarter, and more efficient
            while operating with a huge amount of data.
          </div>
        </div>

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "CustomCard"
}
</script>

<style lang="scss" scoped>
.custom-card {
  background-color: #F7F7F7;
  padding: 50px;

  &__main {
    display: grid;
    grid-template-columns: 0.4fr 0.6fr;
    column-gap: calc(var(--space-unit) * 10);

    &-right {
      display: grid;
      grid-template-columns: 1fr 1fr;
      column-gap: calc(var(--space-unit) * 8);
      row-gap: calc(var(--space-unit) * 6);
    }
  }
}
</style>