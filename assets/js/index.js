const navlinkEmpresasParticipantes = document.getElementById("navlinkEmpresasParticipantes");

const menuEmpresasParticipantes = document.querySelector(".container-menu-empresas-participantes");

const quitarMenu = document.querySelectorAll(".quitar-menu");

navlinkEmpresasParticipantes.addEventListener("mouseover", () => {
    document.querySelector(".menu-empresas-participantes").style.display = "block";
    // document.querySelector(".topbar-menu").addEventListener("mouseout", function(e){
    //     e.stopPropagation();
    //     if (document.querySelector(".menu-empresas-participantes").style.display == "block") {
    //         document.querySelector(".menu-empresas-participantes").style.display = "none";
    //     }
    // })
});

menuEmpresasParticipantes.addEventListener("mouseleave", function(e){
    e.stopPropagation();
    document.querySelector(".menu-empresas-participantes").style.display = "none";
});

quitarMenu.forEach((quitarMenuItem) => {
    quitarMenuItem.addEventListener("mouseover", function (e) {
        e.stopPropagation();
        if (document.querySelector(".menu-empresas-participantes").style.display == "block") {
            document.querySelector(".menu-empresas-participantes").style.display = "none";
        }
    });
});
