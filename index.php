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

</head>
<body>
    <?php include_once("./header.php"); ?>

    <main>
		<section id="carousel">
			<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<!-- <img   src="./assets/img/carousel1.jpg" class="d-block w-100" alt="..."> -->
						<div id="imgCarousel1">
						</div>
						<div class="carousel-caption d-none d-lg-block carousel-custom-container">
							<h3 class="title-carousel">1r item</h3>
							<div class="section-info-carousel mt-4">
								Información 1 aquí
							</div>
							<button class="btn-carousel-formar-parte mt-4">Quiero formar parte</button>
						</div>
					</div>
					<div class="carousel-item">
						<div id="imgCarousel2">
						</div>
						<div class="carousel-caption d-none d-lg-block carousel-custom-container">
							<h3 class="title-carousel">1r item</h3>
							<div class="section-info-carousel mt-4">
								Información 2 aquí
							</div>
							<button class="btn-carousel-formar-parte mt-4">Quiero formar parte</button>
						</div>
					</div>
					<div class="carousel-item">
						<div id="imgCarousel3">
						</div>
						<div class="carousel-caption d-none d-lg-block carousel-custom-container">
							<h3 class="title-carousel">1r item</h3>
							<div class="section-info-carousel mt-4">
								Información 3 aquí
							</div>
							<button class="btn-carousel-formar-parte mt-4">Quiero formar parte</button>
						</div>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
			<div class="menu-empresas-participantes">
				<div class="container-menu-empresas-participantes">
					<div class="d-flex">
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Baja California</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Nuevo León</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Chihuahua</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Tamaulipas</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
					</div>
					<div class="d-flex">
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Coahuila</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes">
							<p class="bold">Sonora</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes">
							<p class="bold">San Luis Potosí</p>
							<p>Organizaciones y empresas</p>
							<p>Educación Superior</p>
							<p>Educación Ejecutiva</p>
							<p>Especiales</p>
						</div>
						<div class="col-3 col-empresas-participantes ">
							<div class="col-background-empresas-participantes">

							</div>
						</div>						
					</div>
				</div>
			</div>
		</section>
		<section id="intro" class="w-100">
			<div class="intro-container">
				<div class="intro__servicios">
					<div class="servicio-intro col-12 col-lg-3">
						<div class="servicio-intro__icon">
							<img src="./assets/iconos/servicio-comunidad.svg" alt="icono-comunidad">
						</div>
						<div class="servicio-intro__text">
							<div class="servicio-intro__title">Comunidad estudiantil</div>
							<div class="servicio-intro__description">
							A través de la Sala de conversación en plataforma.
							</div>
						</div>
					</div>
					<div class="servicio-intro col-12 col-lg-3">
						<div class="servicio-intro__icon">
							<img src="./assets/iconos/servicio-vida.svg" alt="icono-vida">
						</div>
						<div class="servicio-intro__text">
							<div class="servicio-intro__title">Vida estudiantil</div>
							<div class="servicio-intro__description">
							Master Classes, talleres y comunidades de aprendizaje.
							</div>
						</div>
					</div>
					<div class="servicio-intro col-12 col-lg-3">
						<div class="servicio-intro__icon">
							<img src="./assets/iconos/servicio-biblioteca.svg" alt="icono-biblioteca">
						</div>
						<div class="servicio-intro__text">
							<div class="servicio-intro__title">Biblioteca digital</div>
							<div class="servicio-intro__description">
							Biblioteca Virtual Pearson reconocida a nivel global.
							</div>
						</div>
					</div>
					<div class="servicio-intro col-12 col-lg-3">
						<div class="servicio-intro__icon">
							<img src="./assets/iconos/servicio-acompanamiento.svg" alt="icono-acompanamiento">
						</div>
						<div class="servicio-intro__text">
							<div class="servicio-intro__title">Acompañamiento</div>
							<div class="servicio-intro__description">
							Atención y servicio al alumno(CASA).
							</div>
						</div>
					</div>
				</div>
				<div class="intro__imagenes">
					<div class="intro__imagenes-izquierda col-6">

					</div>
					<div class="intro__imagenes-text col-12 col-md-6">
					<h2 class="bold">Transforma tu futuro</h2>
					<h4>a traves de la educacion</h4>

					<p class="mt-3">
						En index hemos creado para ti la Universidad index que será el
						mejor medio para que desarolles las competencias que te permitan
						desempeñar con éxito tus actividades laborales y crecer de
						manera personal y profesional.
					</p>
					<button class="button-gral" id="btnQuieroInscribirme">
						Quiero inscribirme
					</button>
					</div>
				</div>
			</div>
		</section>
		<section id="acerca" class="">
			<div class="col-5 d-none d-lg-block">
				<div class="logo-texto-acerca">
					<img src="./assets/iconos/icono-home.svg" alt="" />
					<h4 class="bold">Acerca de la</h4>
					<h4 class="bold">Universidad Index</h4>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<h5>Forma parte de la universidad corporativa</h5>
				<h5>más grande de Latinoamerica.</h5>
				<p class="mt-4 mb-3">
					En la Universidad Corporativa Index nos sentimos muy orgullosos de colaborar para que continúes tu desarrollo profesional a través de nuestros programas académicos de bachillerato, Licenciatura en Desarrollo Gerencial, Ingeniería en Desarrollo de Software y Maestría en dirección de negocios que, a través de AG College y la Universidad México Internacional, tienen reconocimiento de validez oficial de estudios por la Secretaría de Educación Pública. Te invitamos a que conozcas nuestros nuevos programas y te mantengas siempre informado(a), ya que nuestro propósito es seguir incrementando nuestra oferta académica para que siempre continúes aprendiendo.
				</p>				
				<button class="button-gral">Descubre la Universidad Index</button>
			</div>
		</section>
		<section id="acercaBottom">
			<div class="container d-flex contenedor-acerca">
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column card-items-acerca">
				<div class="animation-down">
					<img class="icono-acerca-bottom" src="./assets/iconos/modelo-andragogico-blanco.svg" alt="icono-modelo-andragogico">
				</div>
				<div class="title-about-bottom bold">
				<div class="animation-down">
					<p class="m-0">Modelo</p>
					<p class="m-0">andragógico</p>
				</div>
				</div>
				<div class="text-about-bottom animation-up">
				Creado para adultos que trabajan.
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column card-items-acerca">
				<div class="animation-down">
					<img class="icono-acerca-bottom" src="./assets/iconos/contenido-practico-blanco.svg" alt="icono-contenido-practico">
				</div>
				<div class="title-about-bottom bold">
				<div class="animation-down">
					<p class="m-0">Contenido</p>
					<p class="m-0">práctico</p>
				</div>
				</div>
				<div class="text-about-bottom animation-up">
				Asignaturas y cursos relevantes y actualizados desarrollados por
				docentes especializados.
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column card-items-acerca">
				<div class="animation-down">
					<img class="icono-acerca-bottom" src="./assets/iconos/recursos-didacticos-blanco.svg" alt="icono-recursos-didacticos">
				</div>
				<div class="title-about-bottom bold">
				<div class="animation-down">
					<p class="m-0">Recursos</p>
					<p class="m-0">didácticos</p>
				</div>
				</div>
				<div class="text-about-bottom animation-up">
				Accede a videos, casos, lecturas, foros de discusión y actividades
				integradoras que facilitan el aprendizaje.
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3 d-flex flex-column card-items-acerca">
				<div class="animation-down">
					<img class="icono-acerca-bottom" src="./assets/iconos/modelo-flexible-blanco.svg" alt="icono-modelo-flexible">
				</div>
				<div class="title-about-bottom bold">
				<div class="animation-down">
					<p class="m-0">Modelo flexible</p>
					<p class="m-0">asíncronico</p>
				</div>
				</div>
				<div class="text-about-bottom animation-up">
				Cada estudiante decide las horas y días de estudio y de
				presentación de exámenes.
				</div>
			</div>
			</div>
		</section>      
        <section id="eventos" class="">
            <div class="container contenedor-eventos">
                <div class="d-flex w-100 container-eventos-top">
                    <div class="col-12 col-xl-4 card-eventos-top">
                        <div class="text-center">
                            <span class="f-20 bold">Estudios oficiales</span>
                            <div class="mt-3">Comienza o revalida con nosotros tus estudios superiores oficiales.</div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 card-eventos-top">
                        <div class="text-center">
                            <span class="f-20 bold">Programas ejecutivos</span>
                            <div class="mt-3">Conoce nuestra oferta educativa y profundiza con estudios avanzados.</div>
                        </div>                        
                    </div>
                    <div class="col-12 col-xl-4 card-eventos-top">
                        <div class="text-center">
                            <span class="f-20 bold">Másters</span>
                            <div class="mt-3">Desarrolla tu potencial en nuestras másters especializadas.</div>
                        </div>                        
                    </div>
                </div>

                <div class="d-flex cards-eventos-bottom">
                    <div class="col-12 col-xl-4 eventos-left">
                        <div class="eventos-left__img">

                        </div>
                        <div class="mt-3">
                            <span class="f-20 bold">Inscribe a tu empresa</span>
                            <p class="mt-3">Forma parte de las empresas e instituciones que a través de Grupo Index se suman a este esfuerzo por fortalecer la industria a través de la educación.</p>
                            <button class="button-gral">Hablar con un asesor</button>
                        </div>
                        <div></div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="f-20 bold header-proximos-eventos"><p>Próximos Eventos</p></div>
                            <div class="eventos-header-divider"></div>
                        </div>
                        <div class="evento">
                            <div class="d-flex flex-column container-fecha-evento">
								<span class="font-green-light">
                                	07
								</span>
								<span class="font-green-light">
									ENE
								</span>
                            </div>
                            <div>
                                <div class="title-evento">Plática de Inducción Bachillerato</div>
                                <div class="d-flex">
                                    <div class="me-3"><i class="far fa-clock me-2 font-green-light"></i> 7:00 am - 11:30 pm</div>
                                    <div><i class="fas fa-map-marker-alt me-2 font-green-light"></i> CEDIS TIJUANA</div>
                                </div>
                            </div>
                        </div>
                        <div class="evento">
                            <div class="d-flex flex-column container-fecha-evento">
								<span class="font-green-light">
                                	07
								</span>
								<span class="font-green-light">
									ENE
								</span>
                            </div>
                            <div>
                                <div class="title-evento">Plática de Inducción Bachillerato</div>
                                <div class="d-flex">
                                    <div class="me-3"><i class="far fa-clock me-2 font-green-light"></i> 7:00 am - 11:30 pm</div>
                                    <div><i class="fas fa-map-marker-alt me-2 font-green-light"></i> CEDIS TIJUANA</div>
                                </div>
                            </div>
                        </div>
                        <div class="evento">
                            <div class="d-flex flex-column container-fecha-evento">
								<span class="font-green-light">
                                	07
								</span>
								<span class="font-green-light">
									ENE
								</span>
                            </div>
                            <div>
                                <div class="title-evento">Plática de Inducción Bachillerato</div>
                                <div class="d-flex">
                                    <div class="me-3"><i class="far fa-clock me-2 font-green-light"></i> 7:00 am - 11:30 pm</div>
                                    <div><i class="fas fa-map-marker-alt me-2 font-green-light"></i> CEDIS TIJUANA</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            Ver todos los eventos <i class="far fa-arrow-right"></i>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 eventos-right">
                        <div class="eventos-right__img">

                        </div>
                    </div>
                </div>
              </div>
            </div>
        </section>
        <section id="encuentraOferta" class="">
			<div class="container-imagenes-fondo">
				<div class="encuentra-oferta-izquierda">
				
				</div>
				<div class="encuentra-oferta-derecha">
				
				</div>
			</div>
            <div class="containerOferta">
                <div class="container-form-oferta">
                    <h3 class="title-oferta">Oferta académica por empresa participante</h3>
                    <h2 class="description-oferta bold">Encuentra la oferta académica que ofrece tu institución.</h2>
                    <form>
                        <div class="d-flex mb-4 fila-select-oferta">
                            <div class="col">
                                <select class="form-select select-oferta" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select select-oferta" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex mb-5 fila-select-oferta">
                            <div class="col">
                                <select class="form-select select-oferta" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select select-oferta" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <button class="button-gral" type="button" id="btnBuscarCursos">Buscar cursos</button>
                    </form>
                </div>
            </div>
        </section>
        <section id="ofertaAcademicaEmpresas" class="d-flex flex-column">
			<div class="mt-50">
				<h2 class="text-center f-55 bold">Oferta académica por</h2>
				<h2 class="text-center f-55 bold">empresa participante</h2>
			</div>
			<div class="container-img-oferta-academica">
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
				<div class="card-oferta-academica">
					<div class="card-oferta-academica__img">
					</div>
					<div class="card-oferta-academica__buttons d-flex justify-content-between">
						<div>
							<p class="bold m-0">Baja California</p>
							<p class="f-color-black-light m-0">Sector 1</p>
						</div>
						<div class="container-ver-cursos">
							<button class="btn-styless"><div class="btn-ver-cursos bold">Ver cursos</div></button>
						</div>						
					</div>
				</div>
			</div>
        </section>
		<section id="estudiaAcademiaGlobal" class="">
			<div class="col-5 d-none d-lg-block">
				<div class="logo-texto-acerca">
					<img src="./assets/img/logo-academia-global.png" alt="" />
					<h4 class="bold">Estudia a través de</h4>
					<h4 class="bold">Academia Global</h4>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<h5>Aliados expertos en crear Instituciones Educativas</h5>
				<h5>orientados al desarrollo de competencias.</h5>
				<p class="my-5">
					Academia Global crea escuelas de formación directiva, gerencial y operativa con temática relacionada al liderazgo, calidad, servicio, ejecución, alta dirección, toma de decisiones, trabajo en equipo, innovación, inteligencia emocional, comunicación, entre otros temas de capacitación, a través de modelos virtuales, mixtos y presenciales.
				</p>				
				<button class="button-gral">Descubre la Universidad Index</button>
			</div>
		</section>
		<section id="empresas">
			<img src="./assets/img/logo-academia-global.png" alt="" />
			<img src="./assets/img/logo-umi.png" alt="" />
			<img src="./assets/img/logo-ag-college.png" alt="" />
			<img src="./assets/img/logo-global-alumni.png" alt="" />
			<img src="./assets/img/logo-chicago.png" alt="" />
		</section>
		
    </main>
    
    <?php include_once("./footer.php"); ?>

	<div id="whatsappIcon">
		<img src="./assets/iconos/icono-whatsapp.svg" alt="icono-whatsapp">
	</div>
    

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
	<script src="./assets/js/index.js?v=1"></script>
  </body>
</html>
