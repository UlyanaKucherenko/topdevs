<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">
      {{ $store.getters['portfolioHandle/formTitle'] }}
    </h3>

    <BtnBack @returnBack="$router.go(-1)"/>

    <LoaderOverlay v-if="!$store.state.portfolioHandle.editedItem"/>
    <v-form
      v-else
      ref="form"
      v-model="formHasErrors"
      lazy-validation
    >
      <v-row>
        <v-col cols="6">
          <v-text-field
            :value="$store.state.portfolioHandle.editedItem.title"
            @input="changeItem.title = $event"
            label="Title"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max255]"
            required
            dense
          ></v-text-field>

          <v-text-field
            :value="$store.state.portfolioHandle.editedItem.slug"
            @input="changeItem.slug = $event"
            label="Slug"
            outlined
            dense
            required
            :rules="[rules.required, rules.min3, rules.max255]"
          ></v-text-field>

          <v-text-field
            label="Subtitle"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max255]"
            required
            :value="$store.state.portfolioHandle.editedItem.sub_title"
            @input="changeItem.sub_title = $event"
            dense
          ></v-text-field>

          <v-text-field
            label="Link"
            outlined
            clearable
            :rules="[rules.required, rules.min3]"
            required
            :value="$store.state.portfolioHandle.editedItem.link"
            @input="changeItem.link = $event"
            dense
          ></v-text-field>

          <v-textarea
            label="Description"
            outlined
            clearable
            counter
            :rules="[rules.required, rules.min3]"
            required
            :value="$store.state.portfolioHandle.editedItem.description"
            @input="changeItem.description = $event"
            dense
          ></v-textarea>

          <v-select
            label="Services"
            :value="$store.getters['portfolioHandle/servicesListSelected']"
            :items="$store.getters['portfolioFilter/servicesList']"
            item-text="name"
            @input="changeItem.services = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['portfolioFilter/servicesList']"
            :rules="[rules.required, rules.min1]"
            required
            append-icon="expand_more"
          ></v-select>

          <v-select
            label="Industries"
            :value="$store.getters['portfolioHandle/industriesListSelected']"
            :items="$store.getters['portfolioFilter/industriesList']"
            item-text="name"
            @input="changeItem.industries = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['portfolioFilter/industriesList']"
            :rules="[rules.required, rules.min1]"
            required
            append-icon="expand_more"
          ></v-select>

          <v-select
            label="Technologies"
            :value="$store.getters['portfolioHandle/technologyListSelected']"
            :items="$store.getters['portfolioFilter/technologyList']"
            item-text="name"
            @input="changeItem.technologies = $event.map(el => el.id)"
            return-object
            multiple
            clearable
            outlined
            chips
            small-chips
            deletable-chips
            :loading="!$store.getters['portfolioFilter/technologyList']"
            :rules="[rules.required, rules.min1]"
            required
            append-icon="expand_more"
          ></v-select>

        </v-col>

        <v-col cols="6">
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
            :value="$store.state.portfolioHandle.editedItem.picture"
            @change="loadPicture"
            dense
          ></v-file-input>

          <v-text-field
            label="Picture background color"
            outlined
            clearable
            :rules="[rules.required, rules.min3]"
            required
            :value="$store.state.portfolioHandle.editedItem.background_color"
            @input="changeItem.background_color = $event"
            dense
          ></v-text-field>

          <v-text-field
            label="Picture meta alt"
            outlined
            clearable
            :value="$store.state.portfolioHandle.editedItem.picture_meta_alt"
            @input="changeItem.picture_meta_alt = $event"
            dense
          ></v-text-field>

          <v-text-field
            label="Picture meta title"
            outlined
            clearable
            :value="$store.state.portfolioHandle.editedItem.picture_meta_title"
            @input="changeItem.picture_meta_title = $event"
            dense
          ></v-text-field>

          <v-combobox
              v-model="changeItem.case_industry"
              outlined
              clearable
              light
              append-icon="expand_more"
              class="v-input v-input--is-label-active theme--light v-text-field v-text-field--is-booted v-select"
              multiple
              label="Case industry"
          >
            <template v-slot:selection="{ attrs, item, select, selected }">
              <v-chip
                  v-bind="attrs"
                  :input-value="selected"
                  close
                  small
                  @click="select"
                  @click:close="removeIndustryWord(item)"
              >
                <span>{{ item }}</span>&nbsp;
              </v-chip>
            </template>
          </v-combobox>

          <v-combobox
              v-model="changeItem.location"
              outlined
              clearable
              light
              append-icon="expand_more"
              class="v-input v-input--is-label-active theme--light v-text-field v-text-field--is-booted v-select"
              multiple
              label="Case location"
          >
            <template v-slot:selection="{ attrs, item, select, selected }">
              <v-chip
                  v-bind="attrs"
                  :input-value="selected"
                  close
                  small
                  @click="select"
                  @click:close="removeLocation(item)"
              >
                <span>{{ item }}</span>&nbsp;
              </v-chip>
            </template>
          </v-combobox>

        </v-col>
      </v-row>

      <div class="text-center">
        <v-btn
          class="px-16 mb-8"
          color="redMain"
          dark
          :elevation="4"
          @click="saveProject"
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
import parseError from "@/js/mixins/parseError";

export default {
  name: "PortfolioHandle",
  components: {
    BtnBack
  },
  mixins: [
    parseError
  ],
  data() {
    return {
      slug: this.$route.params.slug || null,
      changeItem: {
        title: '',
        slug: '',
        sub_title: '',
        link: '',
        picture: '',
        background_color: '',
        pictureDemo: '',
        picture_meta_alt: '',
        picture_meta_title: '',
        description: '',
        services: '',
        industries: '',
        technologies: '',
        case_industry: [],
        location: [],
      },
      btnLoading: false,

      // validation
      rules: {
        required: value => !!value || 'This field is required.',
        min1: v => (v && v.length >= 1) || 'This field must be not less than 1 tag',
        min3: v => (v && v.length >= 3) || 'This field must be more than 3 characters',
        max255: v => (v && v.length <= 255) || 'This field must be less than 255 characters'
      },
      formHasErrors: true
    }
  },
  async mounted() {
    await this.getData()
    await this.getFilters()
  },
  methods: {
    getData() {
      if (this.slug) {
        this.$store.commit('portfolioHandle/SET_SLUG', this.slug)
        this.$store.dispatch('portfolioHandle/getItem').catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else {
        this.$store.commit('portfolioHandle/SET_ITEM', this.changeItem)
      }
    },

    removeIndustryWord(item) {
      this.changeItem.case_industry = this.changeItem.case_industry.filter(industry => industry !== item);
    },

    removeLocation(item) {
      this.changeItem.location = this.changeItem.location.filter(location => location !== item);
    },

    getFilters() {
      this.$store.dispatch('portfolioFilter/getList').catch(err => {
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

    async saveProject() {
      await this.$refs.form.validate()
      if (this.formHasErrors) await this.submit()
    },

    async submit() {
      this.btnLoading = true
      let {pictureDemo, slug, ...data} = this.changeItem;
      data.case_industry = data.case_industry.toString();
      data.location = data.location.toString();

      if (slug.toLowerCase() !== this.$store.state.portfolioHandle.editedItem.slug.toLowerCase()) data.slug = slug

      if (this.slug) { // update
        let fd = getFormData(data, true)
        await this.$store.dispatch('portfolioHandle/updateItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Project successfully updated'
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
        await this.$store.dispatch('portfolioHandle/createItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Project successfully created'
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
  },
  watch: {
    'changeItem.case_industry': function () {
      if (this.changeItem.case_industry.length > 3) {
        this.changeItem.case_industry.pop();
      }
    },
    '$store.state.portfolioHandle.editedItem': function () {
      let item = this.$store.state.portfolioHandle.editedItem;
      this.changeItem = {
        ...item,
        services: item && item.services ? item.services.map(el => el.id) : '',
        industries: item && item.industries ? item.industries.map(el => el.id) : '',
        technologies: item && item.technologies ? item.technologies.map(el => el.id) : '',
        case_industry: item && item.case_industry ? item.case_industry.split(',') :  [],
        location: item && item.location ? item.location.split(',') :  [],
      }
    }
  },

  beforeRouteLeave(to, from, next) {
    setTimeout(() => {this.$store.commit('portfolioHandle/RESET_ITEM')}, 500)
    next()
  }
}
</script>

<style lang="scss">
.project {
  &-image {
    border-radius: 8px;
    overflow: hidden;
    background-color: #F5F5F5;
  }
}
</style>
