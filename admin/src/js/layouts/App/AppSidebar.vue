<template>
  <v-navigation-drawer
    v-model="_drawer"
    app
    dark
    class="app-sidebar"
  >
    <v-list>

      <v-list-item two-line>
        <v-list-item-avatar color="redMain">
          <v-icon>perm_identity</v-icon>
        </v-list-item-avatar>

        <v-list-item-content>
          <v-list-item-title>Admin</v-list-item-title>
          <v-list-item-subtitle>
            {{ user.info }}
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>
      <v-list-group
        v-for="item in list"
        :key="item.title"
        v-model="item.active"
        :prepend-icon="item.icon"
        :append-icon="!item.path ? 'expand_more' : ''"
        no-action
        color="white"
        class="app-sidebar-list-item"
        @click="item.path ? $router.push(item.path).catch(()=>{}) : null"
      >
        <template v-slot:activator>
          <v-list-item-content>
            <v-list-item-title v-text="item.title"></v-list-item-title>
          </v-list-item-content>
        </template>

        <v-list-item
          v-for="subItem in item.items"
          :key="subItem.title"
          @click="$router.push(subItem.path).catch(()=>{})"
        >
          <v-list-item-content>
            <v-list-item-title v-text="subItem.title"></v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list-group>
    </v-list>

  </v-navigation-drawer>
</template>

<script>
export default {
  name: "AppSidebar",
  props: {
    drawer: Boolean
  },
  computed: {
    _drawer: {
      get() {
        return this.drawer;
      },
      set(val) {
        this.$emit('setDrawer', val);
      }
    }
  },
  data() {
    return {
      list: [
        {
          slugActive: 'main',
          icon: 'house',
          title: 'Main',
          active: false,
          path: '/main'
        },
        {
          slugActive: 'blog',
          icon: 'article',
          title: 'Blog',
          active: false,
          items: [
            {title: 'Posts', path: '/blog/posts'},
            {title: 'Categories', path: '/blog/categories'},
            {title: 'Tags', path: '/blog/tags'},
          ]
        },
        {
          slugActive: 'portfolio',
          icon: 'photo_library',
          title: 'Portfolio',
          active: false,
          items: [
            {title: 'Projects', path: '/portfolio'},
            {title: 'Filter', path: '/portfolio/filter'},
          ]
        },
        {
          slugActive: 'reviews',
          icon: 'rate_review',
          title: 'Reviews',
          active: false,
          items: [
            {title: 'All', path: '/reviews'},
          ]
        },
        {
          slugActive: 'letters',
          icon: 'email',
          title: 'Letters',
          active: false,
          items: [
            {title: 'All', path: '/letters'},
          ]
        }
      ],
      user: {
        info: null
      }
    }
  },
  created() {
    this.forEachList(this.$route.meta.active);
    this.user.info = localStorage.getItem('user_info')
  },
  methods: {
    forEachList(active) {
      this.list.forEach(el => {
        el.active = el.slugActive === active ? true : false;
      })
    }
  },
  watch: {
    $route(to) {
      this.forEachList(to.meta.active);
    }
  },
}
</script>

<style lang="scss">
  .v-list-group--active {
    background-color: #2D2C2C;

    .v-list-item--active {
      background: var(--red-dark);
    }
  }

  .app-sidebar {
    background-image: url(/admin/images/logo-short.svg);
    background-position: right bottom;
    background-repeat: no-repeat;
    background-size: 70% auto;

    &-list-item {
      border-top: 1px solid var(--black-main);
      border-bottom: 1px solid var(--black-dark);
    }
  }
</style>
