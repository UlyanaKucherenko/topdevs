<template>
  <div
    class="header"
    :class="{'header--inverted': windowIsScrolled}"
  >
    <div class="header__container container">
      <a href="#" class="header__logo">
        <IconLogo :color="windowIsScrolled ? 'white' : 'black'"/>
      </a>
      <nav>
        <ul class="header__list">
          <li
            class="header__list-item"
            v-for="item in headerItems"
          >
            <a
              class="header__link"
              :class="{'header__link--inverted': windowIsScrolled}"
              :href="item.path"
            >
              {{item.text}}
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</template>

<script>
import IconLogo from "../conf/icon/Logo";

export default {
  components: {
    IconLogo
  },

  data() {
    return {
      scrollY: 0,
      headerItems: [
        {path: '#', text: 'Home'},
        {path: '#about', text: 'About'},
        {path: '#contact', text: 'Contact us'}
      ]
    }
  },

  computed: {
    windowIsScrolled() {
      return this.scrollY !== 0
    }
  },

  mounted() {
    document.addEventListener('scroll', () => {
      this.scrollY = window.scrollY
    })
  }
}
</script>

<style lang="scss">
.header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 100;
  transition: .3s;

  &--inverted {
    background: #E0615D;
  }

  &__container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    min-height: var(--header-height);
    margin: 0 auto;
  }

  &__logo {
    cursor: pointer;
  }

  &__list {
    list-style: none;
    display: flex;
    justify-content: space-between;
    padding: 0;
    margin: 0;

    @media (max-width: 575px) {
      flex-direction: column;
      text-align: right;
    }
  }

  &__list-item {
    margin-right: 30px;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    letter-spacing: 0.5px;
    text-transform: uppercase;

    @media (max-width: 575px) {
      font-size: 14px;
      margin-right: 0;
    }

    &:last-child {
      margin-right: 0;
    }
  }

  &__link {
    color: #262626;
    cursor: pointer;

    &:hover {
      color: #262626;
      text-decoration: unset;
    }

    &--inverted {
      color: white;

      &:hover {
        color: white;
      }
    }
  }
}
</style>
