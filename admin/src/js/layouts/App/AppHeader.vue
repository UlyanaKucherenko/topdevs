<template>
  <v-app-bar
    app
    color="redMain"
    dark
  >
    <v-app-bar-nav-icon @click.stop="$emit('drawer')"></v-app-bar-nav-icon>
    <v-toolbar-title>
      <router-link
        to="/admin/main"
        class="app-bar__title-link"
      >
        Topdevs
      </router-link>
    </v-toolbar-title>
    <v-menu
      left
      top
    >
      <template v-slot:activator="{ on, attrs }">
        <v-btn
          icon
          v-bind="attrs"
          v-on="on"
        >
          <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
      </template>

      <v-list
        dense
      >
        <v-list-item
          v-for="item in list"
          :key="item.title"
          @click="listItemClick(item.slug)"
        >
          <v-list-item-icon>
            <v-icon v-text="item.icon"></v-icon>
          </v-list-item-icon>
          <v-list-item-title v-text="item.title"></v-list-item-title>
        </v-list-item>
      </v-list>
    </v-menu>
  </v-app-bar>
</template>

<script>
import api from '@/js/api/index'

export default {
  name: "AppHeader",
  data: () => ({
    list: [
      {
        slug: 'logout',
        icon: 'logout',
        title: 'Logout'
      }
    ]
  }),
  methods: {
    async listItemClick(slug) {
      await api.auth.logout().then(res => {
        localStorage.removeItem('token')
        localStorage.removeItem('user_info');
        this.$store.commit('auth/RESET_TOKEN')
        this.$router.push({name: 'login'})
      }).catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    }
  }
}
</script>

<style lang="scss">
.app-bar {
  &__title-link {
    font-family: var(--Audiowide);
    color: #fff !important;
    text-decoration: none;
  }
}
</style>
