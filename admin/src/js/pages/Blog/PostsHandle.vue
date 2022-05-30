<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">
      {{ $store.getters['postsHandle/formTitle'] }}
    </h3>

    <BtnBack @returnBack="$router.go(-1)"/>

    <LoaderOverlay v-if="!$store.state.postsHandle.editedItem"/>
    <v-form
      v-else
      ref="form"
      v-model="formHasErrors"
      lazy-validation
    >
      <v-row>
        <v-col cols="7">
          <v-text-field
            :value="$store.state.postsHandle.editedItem.title"
            @input="changeItem.title = $event"
            label="Title"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max100]"
            required
            dense
          ></v-text-field>

          <v-row>
            <v-col cols="6" class="py-0">
              <v-text-field
                :value="$store.state.postsHandle.editedItem.meta_title"
                @input="changeItem.meta_title = $event"
                label="Meta title"
                outlined
                clearable
                :rules="[rules.required, rules.min3, rules.max90]"
                required
                dense
              ></v-text-field>
            </v-col>
            <v-col cols="6" class="py-0">
              <v-text-field
                :value="$store.state.postsHandle.editedItem.slug"
                @input="changeItem.slug = $event"
                label="Slug"
                outlined
                clearable
                :rules="[rules.required, rules.min3, rules.max100]"
                required
                dense
              ></v-text-field>
            </v-col>
          </v-row>

          <v-textarea
            :value="$store.state.postsHandle.editedItem.meta_description"
            @input="changeItem.meta_description = $event"
            label="Meta description"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max160]"
            required
            dense
            counter
          ></v-textarea>

          <v-text-field
            :value="$store.state.postsHandle.editedItem.keywords"
            @input="changeItem.keywords = $event"
            label="Keywords"
            outlined
            clearable
            :rules="[rules.required, rules.min3]"
            required
            dense
          ></v-text-field>
          <!-- ===== -->

          <v-row>
            <v-col cols="4" class="py-0">
              <v-select
                label="Status"
                :value="$store.state.postsHandle.editedItem.status"
                :items="$store.getters['postsFilter/statusesList']"
                @input="changeItem.status = $event"
                outlined
                :loading="!$store.getters['postsFilter/statusesList']"
                :rules="[rules.required]"
                required
                append-icon="expand_more"
                dense
                :color="_setStatus"
                :background-color="_setStatus + ' lighten-4'"
                class="posts__sel-status text-capitalize"
              ></v-select>
            </v-col>
            <v-col cols="4" class="py-0">
              <v-select
                label="Show to main page"
                :value="$store.state.postsHandle.editedItem.is_show_to_main_page"
                :items="$store.getters['postsHandle/showToMainPage']"
                item-text="name"
                item-value="show"
                @input="changeItem.is_show_to_main_page = $event"
                outlined
                :loading="!$store.getters['postsHandle/showToMainPage']"
                append-icon="expand_more"
                dense
              ></v-select>
            </v-col>
            <v-col cols="4" class="py-0">
              <v-text-field
                :value="$store.state.postsHandle.editedItem.read_time"
                @input="changeItem.read_time = $event"
                label="Read time"
                outlined
                clearable
                :rules="[rules.required, rules.min3]"
                required
                dense
              ></v-text-field>
            </v-col>
          </v-row>

          <v-row v-if="changeItem.status === 'future'">
            <v-col cols="6" class="py-0">
              <v-dialog
                ref="dialogDate"
                v-model="modalCalendar"
                persistent
                width="290px"
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-text-field
                    v-model="dateFormatted"
                    @focus="changeItem.publish_date = parseDate(dateFormatted)"
                    label="Publish date"
                    prepend-icon=""
                    prepend-inner-icon="event"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                    outlined
                    clearable
                    dense
                    :rules="[rules.required]"
                    required
                  ></v-text-field>
                </template>
                <v-date-picker
                  v-model="changeItem.publish_date"
                  scrollable
                  first-day-of-week="1"
                  :min="new Date().toISOString().substr(0, 10)"
                  color="redMain"
                >
                  <v-spacer></v-spacer>
                  <v-btn
                    text
                    color="grey darken-1"
                    @click="modalCalendar = false"
                  >
                    Cancel
                  </v-btn>
                  <v-btn
                    text
                    color="green darken-1"
                    @click="$refs.dialogDate.save(changeItem.publish_date)"
                  >
                    OK
                  </v-btn>
                </v-date-picker>
              </v-dialog>
            </v-col>
            <v-col cols="6" class="py-0">
              <v-dialog
                ref="dialogTime"
                v-model="modalTime"
                persistent
                width="320px"
              >
                <template v-slot:activator="{ on, attrs }">
                  <v-text-field
                    v-model="timeFormatted"
                    @change="changeItem.publish_time = timeFormatted"
                    label="Publish time"
                    prepend-icon=""
                    prepend-inner-icon="access_time"
                    readonly
                    v-bind="attrs"
                    v-on="on"
                    outlined
                    clearable
                    dense
                    :rules="[rules.required]"
                    required
                  ></v-text-field>
                </template>
                <v-time-picker
                  v-if="modalTime"
                  v-model="changeItem.publish_time"
                  use-seconds
                  ampm-in-title
                  format="24hr"
                  flat
                  color="redMain"
                  :min="_minTime"
                >
                  <v-spacer></v-spacer>
                  <v-btn
                    text
                    color="grey darken-1"
                    @click="modalTime = false"
                  >
                    Cancel
                  </v-btn>
                  <v-btn
                    text
                    color="green darken-1"
                    @click="$refs.dialogTime.save(changeItem.publish_time)"
                  >
                    OK
                  </v-btn>
                </v-time-picker>
              </v-dialog>
            </v-col>
          </v-row>

          <div class="vue-editor">
            <vue-editor
              v-model="changeItem.description"
              :editorToolbar="editorToolbar"
              class="mb-2"
              :class="{'vue-editor__field--required': !descriptionHasErrors}"
            ></vue-editor>
            <div
              v-if="!descriptionHasErrors"
              class="px-2 mb-2 text-xs text-red"
            >
              This field must be more than 3 characters
            </div>
          </div>
        </v-col>

        <v-col cols="5">
          <div
            :style="`background: ${changeItem.background_color}`"
            class="project-image mb-6"
          >
            <v-img
              :src="changeItem.pictureDemo"
              max-width="420px"
              class="mx-auto"
            ></v-img>
          </div>

          <v-file-input
            label="Download picture"
            outlined
            clearable
            prepend-icon=""
            prepend-inner-icon="attach_file"
            :rules="[
              rules.required,
              value => !value || value.size < 5000000 || 'Image should be less than 5 MB!',
            ]"
            required
            accept="image/*"
            :value="$store.state.postsHandle.editedItem.picture"
            @change="loadPicture"
            dense
          ></v-file-input>

          <v-text-field
            label="Picture meta alt"
            outlined
            clearable
            :value="$store.state.postsHandle.editedItem.picture_meta_alt"
            @input="changeItem.picture_meta_alt = $event"
            dense
          ></v-text-field>

          <v-text-field
            label="Picture meta title"
            outlined
            clearable
            :value="$store.state.postsHandle.editedItem.picture_meta_title"
            @input="changeItem.picture_meta_title = $event"
            dense
          ></v-text-field>

          <v-select
            label="Categories"
            :value="$store.getters['postsHandle/categoriesListSelected']"
            :items="$store.getters['postsFilter/categoriesList']"
            item-text="name"
            @input="changeItem.categories = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['postsFilter/categoriesList']"
            :rules="[rules.required, rules.min1]"
            required
            append-icon="expand_more"
          ></v-select>

          <v-select
            label="Industries"
            :value="$store.getters['postsHandle/industriesListSelected']"
            :items="$store.getters['postsFilter/industriesList']"
            item-text="name"
            @input="changeItem.industries = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['postsFilter/industriesList']"
            append-icon="expand_more"
          ></v-select>

          <v-select
            label="Tags"
            :value="$store.getters['postsHandle/tagsListSelected']"
            :items="$store.getters['postsFilter/tagsList']"
            item-text="name"
            @input="changeItem.tags = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['postsFilter/tagsList']"
            :rules="[rules.required, rules.min1]"
            required
            append-icon="expand_more"
          ></v-select>

          <v-text-field
              label="Banner text"
              outlined
              clearable
              :value="$store.state.postsHandle.editedItem.banner_text"
              @input="changeItem.banner_text = $event"
              :rules="[rules.required, rules.min3, rules.max60]"
              dense
              counter
          ></v-text-field>

          <v-checkbox
              :input-value="$store.state.postsHandle.editedItem.is_active_banner"
              @change="isShowBanner"
              label="Show Banner"
          ></v-checkbox>
        </v-col>
      </v-row>

      <div class="text-center">
        <v-btn
          class="px-16 mt-4 mb-8"
          color="redMain"
          dark
          :elevation="4"
          @click="savePost"
          :loading="btnLoading"
        >
          Save
        </v-btn>
      </div>
    </v-form>

  </div>
</template>

<script>
import BtnBack from "@/js/components/global/BtnBack";
import getFormData from "@/js/global/get_form_data";
import editorToolbar from "@/js/mixins/vue-editor";
import parseError from "@/js/mixins/parseError";

export default {
  name: "PostsHandle",
  components: {
    BtnBack
  },
  mixins: [
    editorToolbar,
    parseError
  ],
  data() {
    return {
      slug: this.$route.params.slug || null,
      changeItem: {
        title: '',
        slug: '',
        meta_title: '',
        meta_description: '',
        keywords: '',

        description: '',

        read_time: '',
        status: 'draft',

        publish_date: '',
        publish_time: '',
        is_show_to_main_page: 0,

        picture: '',
        pictureDemo: '',
        picture_meta_alt: '',
        picture_meta_title: '',

        categories: '',
        industries: '',
        tags: '',

        banner_text: '',
        is_active_banner: 0,
      },
      btnLoading: false,
      statusIcon: 'mdi-minus',

      modalCalendar: false,
      modalTime: false,
      dateFormatted: '',
      timeFormatted: '',

      // validation
      rules: {
        required: value => !!value || 'This field is required.',
        min1: v => (v && v.length >= 1) || 'This field must be not less than 1 tag',
        min3: v => (v && v.length >= 3) || 'This field must be more than 3 characters',
        max60: v => (v && v.length <= 60) || 'This field must be less than 60 characters',
        max90: v => (v && v.length <= 90) || 'This field must be less than 90 characters',
        max100: v => (v && v.length <= 100) || 'This field must be less than 100 characters',
        max160: v => (v && v.length <= 160) || 'This field must be less than 160 characters',
      },
      formHasErrors: true,
      descriptionHasErrors: true
    }
  },
  computed: {
    _setStatus() {
      switch (this.changeItem.status) {
        case 'future':
          return 'blue'
        case 'publish':
          return 'green'
        case 'draft':
          return 'blue-grey'
        case 'auto-draft':
          return 'orange'
        case 'trash':
          return 'red'
        default:
          return 'grey'
      }
    },
    _minTime() {
      if (this.changeItem.publish_date <= new Date().toISOString().substr(0, 10)){
        return new Date().toTimeString().substr(0, 8)
      } else {
        return '00:00:00'
      }
    }
  },
  async mounted() {
    await this.getData()
    await this.getFilters()
  },
  methods: {
    getData() {
      if (this.slug) {
        this.$store.commit('postsHandle/SET_SLUG', this.slug)
        this.$store.dispatch('postsHandle/getItem').catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else {
        this.$store.commit('postsHandle/SET_ITEM', this.changeItem)
      }
    },

    isShowBanner(value) {
      if (value) {
        return this.changeItem.is_active_banner = 1;
      }

      return  this.changeItem.is_active_banner = 0;
    },

    getFilters() {
      this.$store.dispatch('postsFilter/getList').catch(err => {
        this.$store.commit('snackbar/OPEN_SNACKBAR', {
          type: 'error',
          text: err
        })
      })
    },

    loadPicture(file) {
      if (file?.size > 5000000) {
        if (!this.slug) this.changeItem.pictureDemo = '/admin/images/photo-download-default.png'
        return
      }

      this.changeItem.picture = file
      if (file) this.changeItem.pictureDemo = URL.createObjectURL(file)
    },

    async savePost() {
      await this.$refs.form.validate()

      if (!this.changeItem.description.length) {
        this.formHasErrors = false
        this.descriptionHasErrors = false
      }

      if (this.formHasErrors) await this.submit()
    },

    async submit() {
      this.btnLoading = true

      let {pictureDemo, publish_date, publish_time, slug, ...data} = this.changeItem;
      if (data.status === 'future') {
        data.publish_at = publish_date + ' ' + publish_time;
        data.timezone_offset = (new Date).getTimezoneOffset();
      }
      if (slug.toLowerCase() !== this.$store.state.postsHandle.editedItem.slug.toLowerCase()) data.slug = slug

      if (this.slug) { // update
        let fd = getFormData(data, true)
        await this.$store.dispatch('postsHandle/updateItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Post successfully updated'
            })
            setTimeout(() => {this.$router.go(-1)}, this.$store.state.snackbar.timeout)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else { // create
        let fd = getFormData(data)
        console.log({fd})
        await this.$store.dispatch('postsHandle/createItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Post successfully created'
            })
            setTimeout(() => {this.$router.go(-1)}, this.$store.state.snackbar.timeout)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: this.parseError(err)
          })
        })
      }

      this.btnLoading = false
    },

    async formatDateDefault(d) {
      if (d) {
        const [date, time] = this.formattedTimeZone(d).split(' ')

        this.dateFormatted = date
        this.timeFormatted = time
      }
    },

    formattedTimeZone(d) {
      const [date, time] = d.split(' ')
      const [year, month, day] = date.split('-')
      const [hour, minute, second] = time.split(':')
      let timeUTC = new Date(Date.UTC(year, +month - 1, day, hour, minute, second))

      let yearUTC = +timeUTC.getFullYear(),
        monthUTC = +timeUTC.getMonth() + 1,
        dayUTC = +timeUTC.getDate(),
        hourUTC = timeUTC.getHours(),
        minuteUTC = timeUTC.getMinutes(),
        secondUTC = timeUTC.getSeconds();

      if (monthUTC < 10) monthUTC = '0' + monthUTC
      if (dayUTC < 10) dayUTC = '0' + dayUTC
      if (hourUTC < 10) hourUTC = '0' + hourUTC
      if (minuteUTC < 10) minuteUTC = '0' + minuteUTC
      if (secondUTC < 10) secondUTC = '0' + secondUTC

      return `${yearUTC}-${monthUTC}-${dayUTC} ${hourUTC}:${minuteUTC}:${secondUTC}`;
    },

    formatDate(d) {
      if (!d) return null
      const [year, month, day] = d.split('-')
      return `${day}/${month}/${year}`
    },

    formatTime(date) {
      if (!date) return null
      return date
    },

    parseDate(date) {
      if (!date) return null
      const [day, month, year] = date.split('/')
      return `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`
    }
  },
  watch: {
    '$store.state.postsHandle.editedItem': function () {
      let {publish_at, ...item} = this.$store.state.postsHandle.editedItem;

      this.formatDateDefault(publish_at)

      this.changeItem = {
        ...item,
        publish_date: this.dateFormatted,
        publish_time: this.timeFormatted,
        categories: item && item.categories ? item.categories.map(el => el.id) : '',
        industries: item && item.industries ? item.industries.map(el => el.id) : '',
        tags: item && item.tags ? item.tags.map(el => el.id) : ''
      }
    },
    'changeItem.publish_date': function (val) {
      this.dateFormatted = this.formatDate(val)
    },
    'changeItem.publish_time': function (val) {
      this.timeFormatted = this.formatTime(val)
    },
    'changeItem.description': function (val) {
      if (!val.length) {
        this.descriptionHasErrors = false
        this.formHasErrors = false
      } else {
        this.descriptionHasErrors = true
        this.formHasErrors = true
      }
    }
  },

  beforeRouteLeave(to, from, next) {
    setTimeout(() => {this.$store.commit('postsHandle/RESET_ITEM')}, 500)
    next()
  }
}
</script>

<style lang="scss">
.posts {
  &__sel-status {
    .v-input__slot {
      &.blue-grey {
        fieldset {
          border: 2px solid var(--vuetify-blue-grey);
        }
      }
      &.orange {
        fieldset {
          border: 2px solid var(--vuetify-orange);
        }
      }
      &.red {
        fieldset {
          border: 2px solid var(--vuetify-red);
        }
      }
      &.green {
        fieldset {
          border: 2px solid var(--vuetify-green);
        }
      }
      &.blue {
        fieldset {
          border: 2px solid var(--vuetify-blue);
        }
      }
    }
  }
}
</style>
