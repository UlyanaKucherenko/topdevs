<template>
  <div class="divided-tech-table">
    <div class="divided-tech-table__title">
      <img :src="imgURL" alt="">
      <span class="text-lg">{{ title }}</span>
    </div>

    <div class="divided-tech-table__techs">
      <div 
        class="divided-tech-table__tech"
        v-for="(tech, index) in items" :key="index"
      >
        <img :src="tech.imgURL" alt="">
        <span class="text-lg">{{ tech.title }}</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    imgURL: String,
    items: Array
  }
}
</script>

<style lang="scss">
  .divided-tech-table {
    // width: 37.15%;
    width: 50rem;
    padding: calc(var(--space-unit) * 6);
    background: linear-gradient(115.01deg, #F8F7F7 -6.06%, #F8F7F7 23.63%, #F8F7F7 47.92%, #F8F8F8 71.11%);
    box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.2), -1.5rem -1.5rem 4rem #FFFFFF, -1rem -1rem 3rem #FFFFFF;
    border-radius: 3rem;

    @media (max-width: 1350px) {
      width: 45%;
    }

    @media (max-width: 900px) {
      width: 90%;
      max-width: 40rem;
      margin-bottom: calc(var(--space-unit) * 4);
    }

    &__title {
      display: flex;
      align-items: center;
      padding: 1.6rem 3rem;
      background: linear-gradient(159.45deg, #FBFBFB 20.2%, #F8F8F8 78.85%);
      box-shadow: 0rem 0.8rem 2.4rem rgba(65, 65, 65, 0.16), -0.8rem -0.8rem 2.4rem #FFFFFF, -0.5rem -0.5rem 1.5rem #FFFFFF;
      border-radius: 2rem;
      font-weight: 600;
      font-size: 2.4rem;
      line-height: 120%;
      text-transform: uppercase;
      margin-bottom: calc(var(--space-unit) * 5);
      width: fit-content;

      img {
        width: 3.6rem;
        margin-right: 1.6rem;
      }

      @media (max-width: 450px) {
        width: 100%;
      }
    }

    &__techs {
      display: flex;
      justify-content: space-between;
    }

    &__tech {
      width: 42.5%;
      font-size: 2.4rem;
      line-height: 120%;
      color: var(--black-main);

      img {
        padding: calc(var(--space-unit) * 3);
        margin-bottom: calc(var(--space-unit) * 2);
        width: 100%;
        background: linear-gradient(131.23deg, #F9F9F9 20.2%, #F8F8F8 78.85%);
        box-shadow: 0rem 1.5rem 3rem rgba(124, 124, 124, 0.15), -1.5rem -1.5rem 4rem #FFFFFF, -1rem -1rem 3rem #FFFFFF;
        border-radius: 3rem;
      }
    }
  }
</style>