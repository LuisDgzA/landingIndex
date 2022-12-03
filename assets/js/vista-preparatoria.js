const btnVerRequisitos = document.querySelector(".btn-ver-requisitos");

const requisitosDesplegar = document.querySelector(".requisitos-desplegar");

btnVerRequisitos.addEventListener("click", function () {
    requisitosDesplegar.classList.toggle("mostrar");
});
