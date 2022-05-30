<template>
  <div class="post">
    <div class="container">
      <h1 class="post__title text-h2">{{ formattedPost.title }}</h1>

      <div class="post__info">
        <div class="post__info-time">{{ formattedPost.read_time }}</div>
        <div class="post__info-circle"></div>
        <div class="post__info-date">{{ formattedPost.created_at | formatDate }}</div>
      </div>

      <div class="post__content">
        <div
          class="post__content-left"
          ref="left"
        >

          <div class="post__img ratio">
            <img
              class="ratio__inner"
              ref="img"
              :src="formattedPost.picture.image" alt=""
            >
          </div>

          <div
            class="post__social-links post__social-links--row"
            v-if="windowWidth <= 1199"
          >
            <a
              class="post__social-link"
              v-for="(item, index) in socialLinks" :key="index"
              :href="item.url"
              @click="socialOnClick(item.url, $event)"
              target="_blank"
            >
              <SvgKeeper :name="item.name"/>
            </a>
          </div>

          <div class="post__article">
            <div
              class="post__sidebar"
              sticky-container
            >
              <div
                class="post__sidebar-inner"
                ref="sidebar"
                v-sticky
              >
                <div class="post__sidebar-title">Contents</div>
                <div class="post__sidebar-list">
                  <a
                    class="post__sidebar-item"
                    :class="{'post__sidebar-item--active': index == sidebarActiveItemIndex}"
                    v-for="(item, index) in sidebarItems" :key="index"
                    :href="`#goto_${index}`"
                    @click="sidebarItemOnClick"
                  >
                    {{ item.text }}
                  </a>
                </div>
              </div>
            </div>

            <div class="post__article-container ql-snow">
              <div
                class="post__article-inner ql-editor"
                ref="article"
                v-html="formattedPost.description"
              />
            </div>
          </div>
        </div>

        <div
          class="post__content-right"
          :style="{paddingTop: socialPdTop + 'px'}"
          ref="right"
          sticky-container
        >
          <div
            v-if="windowWidth > 1199"
            class="post__social-links"
            ref="social"
            v-sticky
          >
            <a
              class="post__social-link"
              v-for="(item, index) in socialLinks" :key="index"
              :href="item.url"
              @click="socialOnClick(item.url, $event)"
              target="_blank"
            >
              <SvgKeeper :name="item.name"/>
            </a>
            <Banner v-if="formattedPost.is_active_banner && formattedPost.banner_text && windowWidth >= 1199"
                    :bannerTitle="formattedPost.banner_text" />
          </div>
        </div>
      </div>

      <div class="post__after">
        <div class="post__contact">
          <img src="/images/site/blog/post-contact.png" alt="" class="post__contact-img">

          <div class="post__contact-content">
            <div class="post__contact-title text-lg">Your idea - our execution. Let’s create meaningful solutions together!</div>
            <a
              class="post__contact-btn"
              href="/contacts"
            >
              Contact us
            </a>
          </div>
        </div>

        <div class="post__tags">
          <div class="post__tags-title text-lg">
            tags
          </div>

          <div class="post__tags-list">
            <div
              class="post__tags-item tag tag--unclickable"
              v-for="(tag, index) in formattedPost.tags" :key="index"
            >
              {{ tag }}
            </div>
          </div>
        </div>

        <div class="post__suggestions">
          <div class="post__suggestions-title text-lg">You may also like</div>
          <div class="post__suggestions-list">
            <BlogItemOutside
              class="post__suggestions-item"
              v-for="(item) in formattedSuggestions"
              :key="item.id"
              :item="item"
            />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {debounce} from '@/js/mixins/functions'
import BlogItemOutside from '@/js/components/pages/blog/index/BlogItemOutside'
import SvgKeeper from '@/js/components/global/SvgKeeper'
import Banner from "@/js/components/global/Banner.vue";

export default {
  components: {
    Banner,
    BlogItemOutside,
    SvgKeeper
  },

  props: {
    post: Object,
    suggestions: Array
  },


  data() {
    return {
      stickyOffset: 0,
      sidebarItems: [],
      sidebarActiveItemIndex: -1,
      socialPdTop: 0,
      socialLinks: [
        {
          name: 'linkedin-black',
          url: `https://www.linkedin.com/sharing/share-offsite/?url=${window.location.href}`
        },
        {
          name: 'fb-black',
          url: `https://www.facebook.com/sharer/sharer.php?u=${window.location.href}`
        },
        {
          name: 'twitter-black',
          url: `https://twitter.com/intent/tweet?url=${window.location.href}`
        },
        {
          name: 'pocket-black',
          url: `https://getpocket.com/edit?url=${window.location.href}`
        }
      ]
    }
  },


  computed: {
    listenedItems() {
      let i = this.sidebarActiveItemIndex
      let items = this.sidebarItems.map(item => item.el)
      return {
        prev: items[i-1],
        current: items[i],
        next: items[i+1]
      }
    },

    formattedPost() {
      return {
        ...this.post,
        // description: this.post.description.replaceAll('rel="noopener noreferrer"', ''),
        tags: this.post.tags.map(tag => tag.name)
      }
    },

    formattedSuggestions() {
      return this.suggestions.map(post => {
        let rubrics = []
        if (post.categories?.length) rubrics = rubrics.concat(post.categories.map(el => el.name))
        if (post.industries?.length) rubrics = rubrics.concat(post.industries.map(el => el.name))
        return {
          id: post.id,
          title: post.title,
          imgURL: post.picture.image,
          date: post.created_at,
          slug: post.slug,
          rubrics,
        }
      })
    },
  },


  async mounted() {
    this.setSocialPdTop()
    this.parseSidebarItems()
    await this.$nextTick()
    this.setStickyOffset()

    window.addEventListener('resize', debounce(this.setSocialPdTop, 100))
    window.addEventListener('resize', debounce(this.setStickyOffset, 100))

    document.addEventListener('scroll', () => {
      let next = this.listenedItems.next
      let current = this.listenedItems.current

      let rectNext, rectCurrent

      if (next) rectNext = next.getBoundingClientRect()
      if (current) rectCurrent = current.getBoundingClientRect()
      if (rectCurrent?.y > 150) this.sidebarActiveItemIndex -= 1
      else if (rectNext?.y < 150) this.sidebarActiveItemIndex += 1
    })
  },


  methods: {
    parseSidebarItems() {
      this.$refs.article.querySelectorAll("a[href*='sidebar']").forEach((el, index) => {
        let alternateText
        let domText = el.textContent
        let href = el.getAttribute('href')
        if (href.includes('|')) alternateText = href.split('|')[1]

        let parent = el.parentElement
        this.sidebarItems.push({
          el: parent,
          text: alternateText || domText
        })

        parent.textContent = domText
        parent.style.position = 'relative'

        let anchor = document.createElement('span')
        anchor.id = `goto_${index}`
        anchor.classList.add('post-anchor')

        parent.append(anchor)
        // parent.id = `goto_${index}`
      })
    },

    socialOnClick(item, e) {
      if (!item) {
        e.preventDefault()
      }
    },

    setStickyOffset() {
      if (this.windowWidth <= 1199) return

      let headerHeight = document.querySelector('header').offsetHeight
      let newStickyOffset = headerHeight * 1.5
      if (this.stickyOffset == newStickyOffset) return
      this.stickyOffset = newStickyOffset
      this.$refs['sidebar']['@@vue-sticky-directive'].options.topOffset = newStickyOffset;
      this.$refs['social']['@@vue-sticky-directive'].options.topOffset = newStickyOffset;
    },

    setSocialPdTop() {
      if (this.windowWidth <= 1199) return

      let imgHeight = this.$refs.img.clientHeight
      let socialHeight = this.$refs.social.clientHeight
      this.socialPdTop = imgHeight / 2 - socialHeight / 2
    },

    sidebarItemOnClick() {
      this.$store.commit('global/SET_STATE', {headerAnimationIsDisabled: true})
      setTimeout(() => {
        this.$store.commit('global/SET_STATE', {headerAnimationIsDisabled: false})
      }, 1000);
    }
  },
}
</script>

<style lang="scss">
  .post {
    padding-top: calc(var(--header-height) * 1.5);

    &__title {
      font-family: var(--Muli);
      max-width: 85%;
      line-height: 120%;
      font-weight: 700;
      margin-bottom: calc(var(--space-unit) * 3);
    }

    &__content {
      display: flex;

      &-left {
        width: 85%;
      }

      &-right {
        width: 15%;
        margin-bottom: calc(var(--space-unit) * 6);
      }
    }


    &__img {
      --height-percentage: calc(100% / 2.2);
      width: 100%;
      margin-bottom: calc(var(--space-unit) * 6);

      img {
        object-fit: cover;
      }
    }

    &__social {
      &-links {
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        justify-content: center;
        align-items: flex-start;
        margin-bottom: calc(var(--space-unit) * 10);
        margin-left: calc(var(--space-unit) * 2);

        &--row {
          flex-direction: row;
          margin-bottom: calc(var(--space-unit) * 6);

          .post__social-link {
            margin-bottom: 0;
          }
        }
      }

      &-link {
        width: 3rem;
        height: 3rem;
        margin-bottom: calc(var(--space-unit) * 3);

        g path:first-child, circle {
          transition: .25s;
        }

        &:hover {
          g path:first-child, circle {
            fill: var(--red-light);
          }
        }


        &:last-child {
          margin-bottom: 0;
        }

        img {
          width: 3rem;
        }
      }
    }

    &__info {
      display: flex;
      align-items: center;
      margin-bottom: calc(var(--space-unit) * 5);

      &-circle {
        width: .5rem;
        height: .5rem;
        background: #FB475D;
        margin: 0 1.25rem;
      }
    }

    &__sidebar {
      width: 24rem;
      // position: sticky;
      // margin-bottom: calc(var(--space-unit) * 10);

      &-inner {
        height: fit-content;
      }

      &-title {
        font-weight: 600;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        line-height: 160%;
        letter-spacing: 0.03em;
        color: var(--black-dark);
      }

      &-item {
        display: block;
        position: relative;
        line-height: 150%;
        letter-spacing: 0.03em;
        padding-left: 1.2rem;
        margin-bottom: 1rem;

        &:last-child {
          margin-bottom: 0;
        }

        &:before {
          content: '';
          position: absolute;
          left: 0;
          top: 0;
          height: 100%;
          width: 0.3rem;
          transition: .5s;
        }

        &--active {
          &:before {
            background: var(--red-light);
          }
        }
      }
    }

    &__article {
      display: flex;
      justify-content: space-between;
      margin-bottom: calc(var(--space-unit) * 6);

      h2 {
        font-size: 2rem;
        // padding-top: 2rem;
        // margin-bottom: 2rem;
      }

      p {
        font-size: 16px;
        line-height: 160%;
        // margin-bottom: 2rem;
      }

      .ql-align-center {
        img {
          margin: 0 auto;
        }
      }

      &-container {
        width: calc(100% - 30rem);

        .ql-editor {
          padding: 0;

          a {
            text-decoration: none;
          }

          p, li {
            line-height: 1.85;
          }

          ul li {
            padding-left: 2em;
          }

          li:not(.ql-direction-rtl)::before {
            margin-left: -2em;
          }

          li::before {
            margin-right: .8em;
          }
        }
      }
    }

    &__after {
      // width: calc(100% - 30rem);
      // margin-left: auto;

      width: calc(85% - 30rem);
      margin-left: auto;
      margin-right: 15%;
    }

    &__contact {
      position: relative;
      margin-bottom: calc(var(--space-unit) * 6);

      &-img {
        width: 100%;
      }

      &-content {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
      }

      &-title {
        font-weight: 600;
        line-height: 150%;
        letter-spacing: 0.03em;
        color: var(--black-main);
        margin-bottom: calc(var(--space-unit) * 2.5);
      }

      &-btn {
        color: var(--red-light);
        font-weight: 700;
        text-transform: uppercase;
        border-bottom: 2px solid var(--red-light);
        width: fit-content;
        margin: 0 auto;
      }
    }

    &__tags {
      margin-bottom: calc(var(--space-unit) * 6);

      &-title {
        text-transform: uppercase;
        margin-bottom: var(--space-unit);
      }

      &-list {
        display: flex;
        flex-wrap: wrap;
      }

      &-item {
        margin-right: 1.5rem;
      }
    }

    &__suggestions {
      margin-bottom: calc(var(--space-unit) * 10);

      &-title {
        font-family: var(--Muli);
        font-weight: 700;
        line-height: 120%;
        letter-spacing: 0.05em;
        color: var(--black-dark);
        margin-bottom: 2.5rem;
      }

      &-list {
        display: flex;
        justify-content: space-between;
      }

      &-item {
        width: 30%;
      }
    }

    @media (max-width: 1199px) {
      .post {
        &__title {
          max-width: 100%;
        }

        &__content {
          &-left {
            width: 100%;
          }

          &-right {
            width: 0;
          }
        }

        &__sidebar {
          display: none;
        }

        &__article-container {
          width: 100%;
        }

        &__after {
          width: 100%;
        }
      }
    }

    @media (max-width: 767px) {
      .post {
        &__suggestions {
          &-list {
            flex-wrap: wrap;
            justify-content: center;
          }

          &-item {
            width: 90%;
            margin-bottom: 2rem;

            .blog-item-outside__thumb {
            }
          }
        }

        &__contact {
          &-img {
            display: none;
          }

          &-content {
            position: static;
            background: url(/images/site/blog/post-contact.png);
            background-size: cover;
            transform: translate(0, 0);
            padding: calc(var(--space-unit) * 20) 20%;
          }
        }
      }
    }

    &-anchor {
      position: absolute;
      top: calc(var(--header-height) * -1.2);
    }
  }
</style>
