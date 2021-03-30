let menu=document.getElementById('menu') //  Setting a block with content for menu   
let hamburger=document.getElementById('hamburger') // Setting the burger button   
let close=document.getElementById('close') // Setting the menu close button
hamburger.addEventListener('click',function(){menu.classList.remove('display_none_Mobile')}) // Opening the menu when you click the burger button
close.addEventListener('click',function(){menu.classList.add('display_none_Mobile')}) // Closing the menu when you click the cross button