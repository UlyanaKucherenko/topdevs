export default {
  methods: {
    scrollTo(el, options) {
      let defaultOptions = {x: 0, y: 0}
      options = {...defaultOptions, ...options}

      if (typeof el == 'string') el = document.querySelector(el)   
      let rect = el.getBoundingClientRect()
      let yOffset = rect.top + window.pageYOffset
      window.scrollTo(
        0 + options.x, yOffset + options.y
      )
    }
  },
}

export const handlePropsBreakpoints = {
  methods: {
    handlePropsBreakpoints(options) {
      let {breakpoints, ...baseOptions} = options
      let width = this.windowWidth
      
      if (!breakpoints) return baseOptions

      Object.keys(breakpoints).sort((a,b) => b-a).forEach(breakpoint => {
        if (width <= breakpoint) baseOptions = {...baseOptions, ...breakpoints[breakpoint]}  
      })

      return baseOptions
    }
  },
}