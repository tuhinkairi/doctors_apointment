const login_btn = document.getElementById('login_btn')
const signup_btn = document.getElementById('signup_btn')

// items
let log_items = document.getElementsByClassName('_login')
let signup_items = document.getElementsByClassName('_signup')

// toggel func
function toggle_forms(){
    Array.from(signup_items).forEach((element)=>{
        element.classList.toggle('hidden')
    })  
    signup_btn.classList.toggle('hidden')
    
    Array.from(log_items).forEach((element)=>{
        element.classList.toggle('hidden')
    })  
    login_btn.classList.toggle('hidden')
}


signup_btn.addEventListener('click',()=>{
    toggle_forms()
    console.log('g1')
})

login_btn.addEventListener('click',()=>{
    toggle_forms()
    console.log('g')
})