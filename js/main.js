let menu = document.getElementById('menu')
let hamburger = document.getElementById('hamburger')
let close = document.getElementById('close')


hamburger.addEventListener('click', function () {
    menu.classList.remove('display_none_Mobile')
   
})

close.addEventListener('click', function() {
    menu.classList.add('display_none_Mobile')
})