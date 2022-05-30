<template>
  <div class="app-content">
    <h3 class="app-content__title text-center">
      {{ $store.getters['reviewsHandle/formTitle'] }}
    </h3>

    <BtnBack @returnBack="$router.go(-1)"/>

    <LoaderOverlay v-if="!$store.state.reviewsHandle.editedItem"/>
    <v-form
      v-else
      ref="form"
      v-model="formHasErrors"
      lazy-validation
    >
      <v-row>
        <v-col cols="6">
          <v-text-field
            v-model="changeItem.customer_name"
            label="Customer name"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max100]"
            required
            dense
          ></v-text-field>

          <v-text-field
            v-model="changeItem.customer_position"
            label="Customer position"
            outlined
            clearable
            :rules="[rules.required, rules.min3, rules.max100]"
            required
            dense
          ></v-text-field>
        </v-col>
        <v-col cols="6">
          <v-autocomplete
            v-model="changeItem.country"
            :items="_countriesCode"
            label="Country"
            outlined
            clearable
            :rules="[rules.required]"
            required
            dense
          ></v-autocomplete>

          <v-text-field
            v-model="changeItem.link"
            label="Link"
            outlined
            clearable
            dense
          ></v-text-field>
        </v-col>
      </v-row>

      <v-textarea
        v-model="changeItem.text"
        label="Description"
        outlined
        clearable
        :rules="[rules.required, rules.min3]"
        required
        dense
      ></v-textarea>

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

export default {
  name: "ReviewsHandle",
  components: {
    BtnBack
  },
  data() {
    return {
      slug: this.$route.params.slug || null,
      changeItem: {
        slug: '',
        customer_name: '',
        customer_position: '',
        text: '',
        country: '',
        link: '',
      },
      btnLoading: false,
      isoCountries: {
        'AF': 'Afghanistan',
        'AX': 'Aland Islands',
        'AL': 'Albania',
        'DZ': 'Algeria',
        'AS': 'American Samoa',
        'AD': 'Andorra',
        'AO': 'Angola',
        'AI': 'Anguilla',
        'AQ': 'Antarctica',
        'AG': 'Antigua And Barbuda',
        'AR': 'Argentina',
        'AM': 'Armenia',
        'AW': 'Aruba',
        'AU': 'Australia',
        'AT': 'Austria',
        'AZ': 'Azerbaijan',
        'BS': 'Bahamas',
        'BH': 'Bahrain',
        'BD': 'Bangladesh',
        'BB': 'Barbados',
        'BY': 'Belarus',
        'BE': 'Belgium',
        'BZ': 'Belize',
        'BJ': 'Benin',
        'BM': 'Bermuda',
        'BT': 'Bhutan',
        'BO': 'Bolivia',
        'BA': 'Bosnia And Herzegovina',
        'BW': 'Botswana',
        'BV': 'Bouvet Island',
        'BR': 'Brazil',
        'IO': 'British Indian Ocean Territory',
        'BN': 'Brunei Darussalam',
        'BG': 'Bulgaria',
        'BF': 'Burkina Faso',
        'BI': 'Burundi',
        'KH': 'Cambodia',
        'CM': 'Cameroon',
        'CA': 'Canada',
        'CV': 'Cape Verde',
        'KY': 'Cayman Islands',
        'CF': 'Central African Republic',
        'TD': 'Chad',
        'CL': 'Chile',
        'CN': 'China',
        'CX': 'Christmas Island',
        'CC': 'Cocos (Keeling) Islands',
        'CO': 'Colombia',
        'KM': 'Comoros',
        'CG': 'Congo',
        'CD': 'Congo, Democratic Republic',
        'CK': 'Cook Islands',
        'CR': 'Costa Rica',
        'CI': 'Cote D\'Ivoire',
        'HR': 'Croatia',
        'CU': 'Cuba',
        'CY': 'Cyprus',
        'CZ': 'Czech Republic',
        'DK': 'Denmark',
        'DJ': 'Djibouti',
        'DM': 'Dominica',
        'DO': 'Dominican Republic',
        'EC': 'Ecuador',
        'EG': 'Egypt',
        'SV': 'El Salvador',
        'GQ': 'Equatorial Guinea',
        'ER': 'Eritrea',
        'EE': 'Estonia',
        'ET': 'Ethiopia',
        'FK': 'Falkland Islands (Malvinas)',
        'FO': 'Faroe Islands',
        'FJ': 'Fiji',
        'FI': 'Finland',
        'FR': 'France',
        'GF': 'French Guiana',
        'PF': 'French Polynesia',
        'TF': 'French Southern Territories',
        'GA': 'Gabon',
        'GM': 'Gambia',
        'GE': 'Georgia',
        'DE': 'Germany',
        'GH': 'Ghana',
        'GI': 'Gibraltar',
        'GR': 'Greece',
        'GL': 'Greenland',
        'GD': 'Grenada',
        'GP': 'Guadeloupe',
        'GU': 'Guam',
        'GT': 'Guatemala',
        'GG': 'Guernsey',
        'GN': 'Guinea',
        'GW': 'Guinea-Bissau',
        'GY': 'Guyana',
        'HT': 'Haiti',
        'HM': 'Heard Island & Mcdonald Islands',
        'VA': 'Holy See (Vatican City State)',
        'HN': 'Honduras',
        'HK': 'Hong Kong',
        'HU': 'Hungary',
        'IS': 'Iceland',
        'IN': 'India',
        'ID': 'Indonesia',
        'IR': 'Iran, Islamic Republic Of',
        'IQ': 'Iraq',
        'IE': 'Ireland',
        'IM': 'Isle Of Man',
        'IL': 'Israel',
        'IT': 'Italy',
        'JM': 'Jamaica',
        'JP': 'Japan',
        'JE': 'Jersey',
        'JO': 'Jordan',
        'KZ': 'Kazakhstan',
        'KE': 'Kenya',
        'KI': 'Kiribati',
        'KR': 'Korea',
        'KW': 'Kuwait',
        'KG': 'Kyrgyzstan',
        'LA': 'Lao People\'s Democratic Republic',
        'LV': 'Latvia',
        'LB': 'Lebanon',
        'LS': 'Lesotho',
        'LR': 'Liberia',
        'LY': 'Libyan Arab Jamahiriya',
        'LI': 'Liechtenstein',
        'LT': 'Lithuania',
        'LU': 'Luxembourg',
        'MO': 'Macao',
        'MK': 'Macedonia',
        'MG': 'Madagascar',
        'MW': 'Malawi',
        'MY': 'Malaysia',
        'MV': 'Maldives',
        'ML': 'Mali',
        'MT': 'Malta',
        'MH': 'Marshall Islands',
        'MQ': 'Martinique',
        'MR': 'Mauritania',
        'MU': 'Mauritius',
        'YT': 'Mayotte',
        'MX': 'Mexico',
        'FM': 'Micronesia, Federated States Of',
        'MD': 'Moldova',
        'MC': 'Monaco',
        'MN': 'Mongolia',
        'ME': 'Montenegro',
        'MS': 'Montserrat',
        'MA': 'Morocco',
        'MZ': 'Mozambique',
        'MM': 'Myanmar',
        'NA': 'Namibia',
        'NR': 'Nauru',
        'NP': 'Nepal',
        'NL': 'Netherlands',
        'AN': 'Netherlands Antilles',
        'NC': 'New Caledonia',
        'NZ': 'New Zealand',
        'NI': 'Nicaragua',
        'NE': 'Niger',
        'NG': 'Nigeria',
        'NU': 'Niue',
        'NF': 'Norfolk Island',
        'MP': 'Northern Mariana Islands',
        'NO': 'Norway',
        'OM': 'Oman',
        'PK': 'Pakistan',
        'PW': 'Palau',
        'PS': 'Palestinian Territory, Occupied',
        'PA': 'Panama',
        'PG': 'Papua New Guinea',
        'PY': 'Paraguay',
        'PE': 'Peru',
        'PH': 'Philippines',
        'PN': 'Pitcairn',
        'PL': 'Poland',
        'PT': 'Portugal',
        'PR': 'Puerto Rico',
        'QA': 'Qatar',
        'RE': 'Reunion',
        'RO': 'Romania',
        'RU': 'Russian Federation',
        'RW': 'Rwanda',
        'BL': 'Saint Barthelemy',
        'SH': 'Saint Helena',
        'KN': 'Saint Kitts And Nevis',
        'LC': 'Saint Lucia',
        'MF': 'Saint Martin',
        'PM': 'Saint Pierre And Miquelon',
        'VC': 'Saint Vincent And Grenadines',
        'WS': 'Samoa',
        'SM': 'San Marino',
        'ST': 'Sao Tome And Principe',
        'SA': 'Saudi Arabia',
        'SN': 'Senegal',
        'RS': 'Serbia',
        'SC': 'Seychelles',
        'SL': 'Sierra Leone',
        'SG': 'Singapore',
        'SK': 'Slovakia',
        'SI': 'Slovenia',
        'SB': 'Solomon Islands',
        'SO': 'Somalia',
        'ZA': 'South Africa',
        'GS': 'South Georgia And Sandwich Isl.',
        'ES': 'Spain',
        'LK': 'Sri Lanka',
        'SD': 'Sudan',
        'SR': 'Suriname',
        'SJ': 'Svalbard And Jan Mayen',
        'SZ': 'Swaziland',
        'SE': 'Sweden',
        'CH': 'Switzerland',
        'SY': 'Syrian Arab Republic',
        'TW': 'Taiwan',
        'TJ': 'Tajikistan',
        'TZ': 'Tanzania',
        'TH': 'Thailand',
        'TL': 'Timor-Leste',
        'TG': 'Togo',
        'TK': 'Tokelau',
        'TO': 'Tonga',
        'TT': 'Trinidad And Tobago',
        'TN': 'Tunisia',
        'TR': 'Turkey',
        'TM': 'Turkmenistan',
        'TC': 'Turks And Caicos Islands',
        'TV': 'Tuvalu',
        'UG': 'Uganda',
        'UA': 'Ukraine',
        'AE': 'United Arab Emirates',
        'GB': 'United Kingdom',
        'US': 'United States',
        'UM': 'United States Outlying Islands',
        'UY': 'Uruguay',
        'UZ': 'Uzbekistan',
        'VU': 'Vanuatu',
        'VE': 'Venezuela',
        'VN': 'Viet Nam',
        'VG': 'Virgin Islands, British',
        'VI': 'Virgin Islands, U.S.',
        'WF': 'Wallis And Futuna',
        'EH': 'Western Sahara',
        'YE': 'Yemen',
        'ZM': 'Zambia',
        'ZW': 'Zimbabwe'
      },

      // validation
      rules: {
        required: value => !!value || 'This field is required.',
        min2: v => (v && v.length >= 1) || 'This field must be more than 2 characters',
        min3: v => (v && v.length >= 3) || 'This field must be more than 3 characters',
        max100: v => (v && v.length <= 100) || 'This field must be less than 100 characters'
      },
      formHasErrors: true
    }
  },
  computed: {
    _countriesCode() {
      return Object.keys(this.isoCountries)
    }
  },
  mounted() {
    this.getData()
  },
  methods: {
    getData() {
      if (this.slug) {
        this.$store.commit('reviewsHandle/SET_SLUG', this.slug)
        this.$store.dispatch('reviewsHandle/getItem').catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else {
        this.$store.commit('reviewsHandle/SET_ITEM', this.changeItem)
      }
    },

    async saveProject() {
      await this.$refs.form.validate()
      if (this.formHasErrors) await this.submit()
    },

    async submit() {
      this.btnLoading = true

      let {slug, ...data} = this.changeItem;

      if (this.slug) { // update
        let fd = getFormData(data, true)
        await this.$store.dispatch('reviewsHandle/updateItem', fd).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Review successfully updated'
            })
            setTimeout(() => {
              this.$router.go(-1)
            }, this.$store.state.snackbar.timeout)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      } else { // create
        await this.$store.dispatch('reviewsHandle/createItem', data).then(res => {
          if (res.data.status === 'ok') {
            this.$store.commit('snackbar/OPEN_SNACKBAR', {
              type: 'success',
              text: 'Review successfully created'
            })
            setTimeout(() => {
              this.$router.go(-1)
            }, this.$store.state.snackbar.timeout)
          }
        }).catch(err => {
          this.$store.commit('snackbar/OPEN_SNACKBAR', {
            type: 'error',
            text: err
          })
        })
      }

      this.btnLoading = false
    }
  },
  watch: {
    '$store.state.reviewsHandle.editedItem': function () {
      this.changeItem = {...this.$store.state.reviewsHandle.editedItem}
    }
  },

  beforeRouteLeave(to, from, next) {
    setTimeout(() => {
      this.$store.commit('reviewsHandle/RESET_ITEM')
    }, 500)
    next()
  }
}
</script>

<style scoped>

</style>
