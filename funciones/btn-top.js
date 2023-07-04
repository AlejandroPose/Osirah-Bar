var btnTop = document.getElementById("btn-top");

//DETECTAR SCROLL EN WEB
window.addEventListener("scroll", function () {

    var scroll = document.documentElement.scrollTop;

    if (scroll > 50) {
        btnTop.classList.add("show");
    } else {
        btnTop.classList.remove("show");
    }

});

//EVENTO CLICK
btnTop.addEventListener("click", function () {
    window.scrollTo(0,0);
});