const navlinkEmpresasParticipantes = document.getElementById(
    "navlinkEmpresasParticipantes"
);

navlinkEmpresasParticipantes.addEventListener("mouseover", () => {
    document.querySelector(".menu-empresas-participantes").style.display =
        "block";
});

navlinkEmpresasParticipantes.addEventListener("mouseout", () => {
    document.querySelector(".menu-empresas-participantes").style.display =
        "none";
});
