//MENU RESPONSIVE
var btnMenuOpen = document.getElementById("btnMenuOpen"),
    btnMenuClose = document.getElementById("btnMenuClose"),
    menuResponsive = document.getElementById("menuBar"),
    enlaces = document.getElementById("enlaces"),
    logo = document.getElementById("logo");

//CLICK ABRIR (MENU RESPONSIVE)
btnMenuOpen.addEventListener("click", function () {
    menuResponsive.classList.add("active");
});

//CLICK CERRAR (MENU RESPONSIVE)
btnMenuClose.addEventListener("click", function () {
    menuResponsive.classList.remove("active");
});

//CLICK ENLACES (CIERRA MENU RESPONSIVE)
enlaces.addEventListener("click", function () {
    menuResponsive.style.transitionDelay = "0.3s";
    menuResponsive.classList.remove("active");
});

logo.addEventListener("click", function () {
    window.location.replace("inicio.php");
});