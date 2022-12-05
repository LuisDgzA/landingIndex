const btnVerRequisitos = document.querySelector(".btn-ver-requisitos");

const requisitosDesplegar = document.querySelector(".requisitos-desplegar");

btnVerRequisitos.addEventListener("click", function () {
    btnVerRequisitos.classList.toggle("btn-requisitos-desplegado");
    requisitosDesplegar.classList.toggle("mostrar");
});
