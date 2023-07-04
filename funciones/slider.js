var contenedor = document.querySelector(".slider"),
    btnIzquierdo = document.getElementById("btn-izquierda"),
    btnDerecho = document.getElementById("btn-derecha");

//CLICK BOTÓN DERECHO
btnDerecho.addEventListener("click", function () {
    contenedor.scrollLeft += contenedor.offsetWidth;
});

//CLICK BOTÓN IZQUIERDO
btnIzquierdo.addEventListener("click", function () {
    contenedor.scrollLeft -= contenedor.offsetWidth;
});