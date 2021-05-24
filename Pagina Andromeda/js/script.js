const art_nav = document.getElementById('art_nav');

addEventListener('DOMContentLoaded',  ()  => {
    const btn_menu = document.querySelector('.btn_menu')
    if (btn_menu){
        btn_menu.addEventListener('click', ()  => {
            const art_nav  =  document.querySelector('.art_nav')
            art_nav.classList.toggle('show')
        })
    }
})

window.addEventListener('resize',() => {
    if(art_nav.classList.contains('show')){
        art_nav.classList.remove('show');
    }
})

