const btnMenu = document.getElementById('topBarButtonMenu');
const _fade = document.querySelector('.menu__movil__fade');
const _menu = document.querySelector('.menu__movil');

btnMenu.addEventListener('click', () => {
    _menu.classList.toggle('__show');
    _fade.classList.toggle('__show');
    document.body.style.overflowY = 'hidden';
});

_fade.addEventListener('click', () => {
    _menu.classList.toggle('__show');
    _fade.classList.toggle('__show');
    document.body.style.overflowY = 'auto';
});

let eventos = [
    {
        dia: '07',
        mes: 'ENE',
        titulo: 'Plática de Inducción Bachillerato',
        fechas: '7:00 am - 11:30 pm',
        cede: 'CEDIS TIJUANA'
    },
    {
        dia: '07',
        mes: 'ENE',
        titulo: 'Plática de Inducción Bachillerato',
        fechas: '7:00 am - 11:30 pm',
        cede: 'CDMX'
    },
    {
        dia: '07',
        mes: 'ENE',
        titulo: 'Plática de Inducción Bachillerato',
        fechas: '7:00 am - 11:30 pm',
        cede: 'PACHUCA'
    }
]

let ulSidebar = document.querySelector(".proximosEventos")

eventos.map(itemSidebar => {
    console.log(itemSidebar)
    let nodoSidebar = `
    <div class="evento">
        <div class="d-flex flex-column container-fecha-evento">
            <span class="font-green-light">${itemSidebar.dia}</span>
            <span class="font-green-light">${itemSidebar.mes}</span>
        </div>
        <div>
            <div class="title-evento">${itemSidebar.titulo}</div>
            <div class="d-flex">
                <div class="me-3"><i class="far fa-clock me-2 font-green-light"></i>${itemSidebar.fechas}</div>
                <div><i class="fas fa-map-marker-alt me-2 font-green-light"></i>${itemSidebar.cede}</div>
            </div>
        </div>
	</div>`

    ulSidebar.insertAdjacentHTML("afterend", nodoSidebar);

})

console.log(ulSidebar)