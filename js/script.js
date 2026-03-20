
const menu = document.getElementById("Menu");

menu.addEventListener("click", function() {
        this.querySelector(".sous-menu-content").classList.toggle("show");
});


let index = 0;

function move(direction) {
    const rail = document.querySelector('.caroussel-rail');
    const totalCards = document.querySelectorAll('.card').length;

    index += direction;

    if (index >= totalCards) {
        index = 0;
    } else if (index < 0) {
        index = totalCards - 1;
    }
    
    rail.style.transform = `translateX(${-index * 100}%)`;
}