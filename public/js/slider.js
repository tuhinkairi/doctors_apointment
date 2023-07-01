// for md 
const container = document.getElementById('doc_slider')
const lbtn = document.getElementById('lbtn')
const rbtn = document.getElementById('rbtn')
// used in mobile
const doc_cards = document.getElementsByClassName('card_slider')

// parameters for sm<
let tw = container.scrollWidth - window.innerWidth
let scroll_width = 0
let sw
if (window.innerWidth>=640) {

    sw = tw * 25 / 100
}
else {
    sw = window.innerWidth
}

// parameters for sm>



lbtn.addEventListener('click', () => {

    scroll_width = scroll_width + sw;
    if (scroll_width > tw) {
        scroll_width = 0
    }
    container.style.transform = `translateX(-${scroll_width}px)`;
    console.log('scrollwidth->', scroll_width, 'separation', tw, 'counter', sw)

})
rbtn.addEventListener('click', () => {

    scroll_width = scroll_width - sw;
    if (scroll_width < 0) {
        scroll_width = tw
    }

    container.style.transform = `translateX(-${scroll_width}px)`;
    console.log('scrollwidth->', scroll_width, 'separation', tw, 'counter', sw)

})