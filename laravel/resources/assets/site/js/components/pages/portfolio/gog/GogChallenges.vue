<template>
  <div class="gog-challenges">
    <div class="container">
      <div class="gog-challenges__content">
        <GogHeader
          class="gog-challenges__header"
          dividerColor="#DDE3E9"
          innerMaxWidth="81rem"
          :baseOptions="{
            titleText: 'Challenges',
            titleTextColor: 'var(--case-color-primary)',
            descText: [ 
              'Our client was puzzled with an idea to understand their customers better. So we had to brainstorm and develop a one-of-a-kind solution. It is meant to be incorporated into an application so that our client\'s customers who used the app could provide an app owner with extensive information on how they spend their day: where do they go, how much time they spend at the same location, what transport is at their disposal.',
              'All this and much more information should ease the marketing efforts and future provision of more personalized services.'
            ]
          }"
          :breakpoints="{
            1199: {innerMaxWidth: '68.2rem'}
          }"
        />
      </div>
    </div>
  </div>
</template>

<script>
import GogHeader from '@/js/components/pages/portfolio/gog/global/GogHeader'

export default {
  components: {GogHeader}
}
</script>

<style lang="scss">
  .gog-challenges {
    position: relative;
    margin-bottom: calc(var(--challenges-offset-bottom) * -1);

    &__content {
      padding: 10rem 7.5rem 15rem;
      background: #FFFFFF;
      box-shadow: 40px 40px 80px rgba(123, 135, 147, 0.1);
      border-radius: 20px;

      @media (max-width: 1400px) {
        padding: 10rem 7rem 13rem;
      }

      @media (max-width: 1199px) {
        padding: 8rem 6rem 11rem;
      }

      @media (max-width: 991px) {
        padding: 8rem 4.5rem 10rem;
      }

      @media (max-width: 575px) {
        padding: 5rem 2rem;
      }
    }
  }
</style>