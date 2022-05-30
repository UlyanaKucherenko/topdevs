import gsap from 'gsap'


export const slidingChars = {
  async bind(el) {
    let chars = []
    let tempWord = []
    let wordsArray = el.textContent.trim().split(' ').map(str => {
      return str.split('').concat([' '])
    })
    el.innerHTML = ''
    el.classList.add('sliding-chars')

    wordsArray.forEach(word => {
      let wordEl = document.createElement('span')
      wordEl.classList.add('sliding-chars__word')

      word.forEach(char => {
        if (char == ' ') {
          let charEl = document.createElement('span')
          charEl.innerHTML = '&nbsp;'
          // charEl.classList.add('sliding-chars__space')
          wordEl.append(charEl)
        }

        let charEl = document.createElement('span')
        charEl.classList.add('sliding-chars__char')

        let charContainer = document.createElement('span')
        charContainer.classList.add('sliding-chars__container')
        chars.push(charContainer)

        let charCenter = document.createElement('span')
        charCenter.classList.add('sliding-chars__center')
        charCenter.textContent = char

        let charLeft = document.createElement('span')
        charLeft.classList.add('sliding-chars__left')
        charLeft.textContent = char

        let charRight = document.createElement('span')
        charRight.classList.add('sliding-chars__right')
        charRight.textContent = char
      
        charContainer.append(charCenter, charLeft, charRight)
        charEl.append(charContainer)
        wordEl.append(charEl)

        charContainer.addEventListener('mouseleave', e => {
          let rect = e.target.getBoundingClientRect()
          let direction = Math.abs(event.clientX - rect.right) < Math.abs(event.clientX - rect.left) ? 'right' : 'left'
          gsap.to(e.target, {x: direction == 'right' ? '100%' : '-100%', duration: 1, ease: 'power3.inOut', clearProps: 'all'})
        })
      })

      el.append(wordEl)
    })

    while(true) {
      await new Promise(resolve => setTimeout(resolve, Math.random() * 10000))
      let randomChar = chars[Math.floor(Math.random() * chars.length)]
      let direction = Math.random > .5 ? 'right' : 'left'
      gsap.to(randomChar, {x: direction == 'right' ? '100%' : '-100%', duration: 1, ease: 'power3.inOut', clearProps: 'all'})
    }
  }
}