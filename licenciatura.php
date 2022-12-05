<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing index</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/programas.css">

</head>
<body>

    <?php include_once("./header.php"); ?>

    <main>
        <section id="hero">
            <div class="container text-center container-hero">
                <img class="icono-hero" src="./assets/iconos/preparatoria.svg" alt="">
                <h2 class="text-center title-hero bold">¿Qué es Prepa Index?</h2>
                <p class="text-center texto-hero">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam aliquam esse itaque nisi! Repudiandae temporibus corporis illo tempore ea voluptatem accusamus beatae corrupti quae impedit ipsam est sequi a commodi, maiores optio recusandae culpa fugit deserunt eum consequuntur quo blanditiis.</p>
            </div>
        </section>
        <section id="mockup">
            <div class="container-beneficios-programa">
                <div class="beneficios-programa">
                    <h2>Beneficios</h2>
                    <h2>Prepa Index</h2>
                    <div class="item-beneficio-programa">
                        <div class="icono-beneficio-programa"><img src="./assets/iconos/beneficios1.svg" alt=""></div>
                        <div><p class="f-20">Estudia en tus tiempos libres desde una computadora, tableta o celular con acceso a internet.</p></div>
                    </div>
                    <div class="item-beneficio-programa">
                        <div class="icono-beneficio-programa"><img src="./assets/iconos/beneficios2.svg" alt=""></div>
                        <div><p class="f-20">Estudia en tus tiempos libres desde una computadora, tableta o celular con acceso a internet.</p></div>
                    </div>
                    <div class="item-beneficio-programa">
                        <div class="icono-beneficio-programa"><img src="./assets/iconos/beneficios3.svg" alt=""></div>
                        <div><p class="f-20">Estudia en tus tiempos libres desde una computadora, tableta o celular con acceso a internet.</p></div>
                    </div>
                    <div class="item-beneficio-programa">
                        <div class="icono-beneficio-programa"><img src="./assets/iconos/beneficios4.svg" alt=""></div>
                        <div><p class="f-20">Estudia en tus tiempos libres desde una computadora, tableta o celular con acceso a internet.</p></div>
                    </div>
                    <div class="item-beneficio-programa">
                        <div class="icono-beneficio-programa"><img src="./assets/iconos/beneficios5.svg" alt=""></div>
                        <div><p class="f-20">Estudia en tus tiempos libres desde una computadora, tableta o celular con acceso a internet.</p></div>
                    </div>
                </div>                
            </div>
            <div class="mockup-programa">

            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="text-center f-55 bold">Requisitos</h2>
                <p class="text-center f-20 mt-5">Un gran equipo de personal operativo y académico se encuentra involucrado en Prepa Index para ofercerte estudios de bachillerato flexibles y de alta calidad académica que te ayudarán a cursar tu preparatoria a tu propio ritmo y con la disponibilidad que esté en tus manos.</p>

                <div class="container-ver-requisitos mt-5">
                    <div class="btn-ver-requisitos">
                        Ver requisitos
                    </div>
                    <div class="requisitos-desplegar">
                        <p class="item-requisito">a) Acta de nacimiento original.</p>
                        <p class="item-requisito">b) Certificado de secundaria original.</p>
                        <p class="item-requisito">c) Llenar la solicitud de preinscripción.
                            La persona Encargada de Recursos Humanos (ERH)
                            podrá proporcionártela.
                        </p>
                        <p class="item-requisito">d) Antigüedad mínima de 3 meses como
                            colaborador de index para tus propios estudios y 1
                            año de antigüedad para estudios de familiares.
                        </p>
                        <p class="item-requisito">e) Leer y aceptar el reglamento interno y las normas de control escolar</p>

                    </div>
                </div>
            </div>
        </section>
        <section id="" class="d-flex flex-column align-items-center descarga-materiales">
            <h2 class="f-55 bold">Ficha técnica</h2>
            <h2 class="f-55 bold">y mapa curricular</h2>
            <p class="f-20 mt-4 bold">Descarga estos materiales</p>
            <div class="d-flex container-iconos-descarga-materiales">
                <div class="col-6">
                    <img class="w-100" src="./assets/iconos/mapa-curricular.svg" alt="icono-mapa-curricular">
                    <p class="text-center mt-4 bold f-20">Mapa Curricular</p>
                </div>
                <div class="col-6">
                    <img class="w-100" src="./assets/iconos/ficha-tecnica.svg" alt="icono-ficha-tecnica">
                    <p class="text-center mt-4 bold f-20">Ficha técnica</p>
                </div>
            </div>
        </section>
    </main>

    <?php include_once("./footer.php"); ?>


    <script src="./assets/js/vista-preparatoria.js"></script>
</body>
</html>