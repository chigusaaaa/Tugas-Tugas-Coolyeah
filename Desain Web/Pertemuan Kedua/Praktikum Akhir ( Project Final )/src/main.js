import './style.css'

document.getElementById('hamburger-btn').addEventListener('click', () => {
  const menu = document.getElementById('mobile-menu')
  menu.classList.toggle('hidden')
  menu.classList.toggle('flex')
})

const waPopup = document.getElementById('wa-popup')
window.addEventListener('scroll', () => {
  const sampaiBawah = window.innerHeight + window.scrollY >= document.body.offsetHeight - 50

  if (sampaiBawah) {
    waPopup.classList.remove('translate-y-24', 'opacity-0')
    waPopup.classList.add('translate-y-0', 'opacity-100')
  } else {
    waPopup.classList.add('translate-y-24', 'opacity-0')
    waPopup.classList.remove('translate-y-0', 'opacity-100')
  }
})
const revealElements = document.querySelectorAll('.reveal')

const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.remove('opacity-0', 'translate-y-10')
      entry.target.classList.add('opacity-100', 'translate-y-0')
    }
  })
}, { threshold: 0.15 })

revealElements.forEach((el) => revealObserver.observe(el))