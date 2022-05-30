export default {
  methods: {
    parseError(err) {
      const errorObject = JSON.parse(err.request.responseText).errors
      const errorString = Object.values(errorObject).join(' ')
      return errorString
    }
  },
}
