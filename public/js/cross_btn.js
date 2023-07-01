const one = document.getElementById('one_line')
const two = document.getElementById('two_line')
const three = document.getElementById('three_line')

// mini menu
const short_menu = document.getElementById('mini_nav')

// creating animation
function cross(){
    two.classList.toggle('absolute')
    three.classList.toggle('absolute')
    one.classList.toggle('opacity-0')
    short_menu.classList.toggle('translate-x-[100vw]')
    two.classList.toggle('rotate-[120deg]')
    three.classList.toggle('rotate-[60deg]')
}
