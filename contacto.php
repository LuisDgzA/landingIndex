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
    <link rel="stylesheet" href="./assets/css/contacto.css">

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
						<!-- <img src="./assets/img/carousel1.jpg" class="d-block w-100" alt="..."> -->
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
						<!-- <img src="./assets/img/carousel2.jpg" class="d-block w-100" alt="..."> -->
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
						<!-- <img src="./assets/img/carousel3.jpg" class="d-block w-100" alt="..."> -->
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
        <section id="aliados" class="w-100">
            <div class="container-aliados">
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Baja California</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Coahuila</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle san luis De Coahuila Punto cometa.</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Chihuahua</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Nuevo León</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">San Luis</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Sonora</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>
                <div class="card-aliados">
                    <div class="card-aliados-text">
                        <h3 class="f-30">Tamaulipas</h3>
                        <div class="divider"></div>
                        <p class="texto-aliados">Calle SN, Col. Centro Baja California. 40890</p>
                        <p class="texto-aliados">Teléfono: 01 789 45 58</p>
                        <p class="texto-aliados">Email: correo@correo.com</p>
                    </div>
                    <div class="card-aliados-img">

                    </div>
                </div>                
            </div>
        </section>        
        <section id="contacto" class="">
            <div class="container-form-contacto">
                <div class="form-contacto">
                    <h2 class="text-center title-form-contacto f-55">Déjanos tu información</h2>
                    <p class="text-center f-20">Nos pondremos en contacto contigo</p>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tu Nombre Completo:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tu Nombre Completo:</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Tu Nombre Completo:</label>
                        <textarea class="form-control" id="" cols="30" rows="6"></textarea>
                    </div>
                    <button class="button-gral" id="btnBuscarCursosFormContacto">Buscar cursos</button>
                </div>
            </div>
            <div class="container-contacto">
                <div class="datos-contacto">
                    <h2 class="f-55">Contacto</h2>
                    <p class="f-18"><span class="me-3"><img class="icono-topbar-top" src="./assets/iconos/contacto-blanco.svg" alt="icono-contacto"></span> contacto@universidad.index</p>
                    <p class="f-18"><span class="me-3"><img class="icono-topbar-top" src="./assets/iconos/llamada-blanco.svg" alt="icono-llamada"></span>+52-123-4567 ó +52-123-4568</p>
                    <div class="d-flex f-18"><span class="me-3"><img class="icono-topbar-top" src="./assets/iconos/ponte-en-contacto.svg" alt="icono-ponte-en-contacto"></span><div>Ponte en contacto con nosotros para Cualquier duda o aclaración.</div></div>
					<div class="mt-4">
						<i class="fab fa-twitter f-20 me-3"></i>
						<i class="fab fa-linkedin f-20"></i>
					</div>
                </div>
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
	<script src="./assets/js/index.js"></script>
  </body>
</html>