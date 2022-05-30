<template>
  <v-row>
    <v-col
      v-for="card in cards"
      :key="card.title"
      :cols="card.col"
    >
      <v-card
        class="main-card"
        @click="$router.push(card.path)"
        elevation="4"
      >
        <div class="main-card-overlay">
          <v-icon
            x-large
            color="white"
          >
            east
          </v-icon>
        </div>
        <v-img
          :src="card.src"
          class="main-card__img white--text align-end"
          gradient="to bottom, rgba(0,0,0,.2), rgba(206,7,55,.2)"
          height="250px"
        >
          <v-card-title
            class="text-sm"
          >
            <div class="main-card-title">{{ card.title }}</div>
          </v-card-title>
        </v-img>
      </v-card>
    </v-col>
  </v-row>
</template>

<script>
export default {
  name: "Main",
  data() {
    return {
      cards: [
        {
          title: 'Blog',
          src: '/admin/images/blog.jpg',
          col: 7,
          path: '/blog/posts'
        },
        {
          title: 'Portfolio',
          src: '/admin/images/portfolio.jpg',
          col: 5,
          path: '/portfolio'
        },
        {
          title: 'Reviews',
          src: '/admin/images/reviews.jpg',
          col: 5,
          path: '/reviews'
        },
        {
          title: 'Letters',
          src: '/admin/images/letters.jpg',
          col: 7,
          path: '/letters'
        },
      ]
    }
  }
}
</script>

<style lang="scss">
.main-card {
  position: relative;
  overflow: hidden;
  transition: .25s ease-in-out;

  &:hover {
    box-shadow: 0 4px 16px rgba(0,0,0,.5) !important;
  }

  &-overlay {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0,0,0,.3);
    z-index: 2;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: .25s ease-in-out;
  }

  &:hover .main-card-overlay {
    opacity: 1;
  }

  &-title {
    padding: 6px 12px;
    background-color: rgba(0,0,0,.2);
  }
}
</style>
