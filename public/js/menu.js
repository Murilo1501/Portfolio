window.addEventListener("scroll",function(){
    let header = document.querySelector('#header')
    header.classList.toggle('rolagem',window.scrollY > 1)
})

function OpenMenu(){
    let navBar = document.getElementById('navBar')

        if(navBar.style.display == 'flex'){
            navBar.style.display = 'none'
        } else{
            navBar.style.display = 'flex'
        }
        

}