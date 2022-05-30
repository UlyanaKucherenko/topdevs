export default {
  bind(el, binding, vnode) {
  },

  inserted(el, binding, vnode) {
    let words = el.textContent.split(' ').map(word => word.split(''))
    el.innerHTML = ''

    words.forEach(word => {
      let wordEl = document.createElement('span')
      wordEl.classList.add('split-chars__word')

      word.forEach(char => {
        let charEl = document.createElement('span')
        charEl.classList.add('split-chars__char')
        charEl.textContent = char
        wordEl.append(charEl)
      })

      el.append(wordEl)

      let spaceChar = document.createElement('span')
      spaceChar.innerHTML = ' '
      el.append(spaceChar)
    })
  }
}