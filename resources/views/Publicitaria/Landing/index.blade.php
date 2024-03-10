<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Compania Barcos</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">

            <a class="navbar-brand" href="#page-top"><img src="{{ $inicio->logo }}"
                    style="
                    width: 10%;
                    height: 40%;
                    border-radius: 50%;"
                    alt="..." /></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="#portfolio">Agrupaciones</a>
                    </li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="#services">Servicios</a>
                    </li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="#about">Historia</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="#team">Equipo</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="#contact">Contactenos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('{{ $inicio->fondo }}');"> {{-- Fondo Inicio --}}
        <div class="container">
            <div class="masthead-heading text-uppercase">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10"
                        style="
                    backdrop-filter: blur(5px);
                    padding: 3%;
                    border-radius: 10%;
                ">
                        {{ $inicio->titulo }}</div>
                    <div class="col-1"></div>
                </div>
            </div>
            {{-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Sobre Nosotros</a> --}}
        </div>
    </header>

    <!-- Agrupaciones---------------------------------------------------------------------->
    <section class="page-section" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Agrupaciones</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center d-flex justify-content-center">

                <!-- Agrupacion Roreach-->
                @foreach ($agrupaciones as $item)
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1"
                                onclick="mostrarModalAgrupacion(@json($item->id_agrupacion))">
                                <div class="portfolio-hover">
                                </div>
                                <img class="img-fluid"
                                    style="
                            height: 280px;
                            width: 330px;"
                                    src="{{ $item->img_logo }}" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">
                                    <a href="{{ route('agrupacion', $item) }}">{{ $item->nombre }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Fin Agrupacion Foreach-->

            </div>
        </div>
    </section>
    <!-- FIN Agrupaciones---------------------------------------------------------------------->

    <!-- Modal Agrupacion -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase" id="nombre"></h2>
                                <img id="logo" class="imagenesModales mt-4" alt="..."
                                    style="
                                border-radius: 15%;
                                height: 20%;
                                width: 40%;" />
                                <p id="descripcion"></p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>¿Quieres saber mas sobre nosotros?</strong>
                                    </li>
                                </ul>
                                <a id="verMas" href="" class="btn btn-primary btn-xl">
                                    Saber mas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Fin Modal Agrupaciones --}}

    <!-- Servicios---------------------------------------------------------------------->
    <section class="page-section bg-light" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Servicios</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center d-flex justify-content-center">

                @foreach ($servicios as $item)
                    {{-- Foreach para los servicios --}}
                    <div class="col-md-4 mt-5">
                        <span class="fa-stack fa-4x mb-4">
                            <img src="{{ $item->img }}" alt=""
                                style="border-radius: 50%; width: 100%; height: 120%;">
                        </span>
                        <h4 class="my-3">{{ $item->titulo }}</h4>
                        <p class="text-muted">{{ $item->descripcion }}</p>
                    </div>
                @endforeach

                {{-- Foreach para los servicios --}}

            </div>
        </div>
    </section>
    <!-- FIN Servicios-->


    <!-- Historia-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Historia</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>2009-2011</h4>
                            <h4 class="subheading">Our Humble Beginnings</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">An Agency is Born</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Transition to Full Service</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero
                                unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- FIN Historia---------------------------------------------------------------------->

    <!-- Team TalVez-->
    <section class="page-section bg-light" id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Twitter Profile"><i class="fa-brands fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Twitter Profile"><i class="fa-brands fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt="..." />
                        <h4>Parveen Anand</h4>
                        <p class="text-muted">Lead Designer</p>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Twitter Profile"><i class="fa-brands fa-whatsapp"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"
                            aria-label="Parveen Anand LinkedIn Profile"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                        laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contacto">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contactenos</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-5">
                        <div class="text-center mt-3 text-muted">
                            <h5><i class="fa-brands fa-whatsapp"></i> Whatsapp</h5>
                        </div>
                        <h6 class="mt-4">Ingrese su nombre y apellidos:</h6>
                        <input type="text" class="form-control" name="">
                        <h6 class="mt-4">Escriba un mensaje:</h6>
                        <input type="text" class="form-control" name="">
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-primary">
                                Enviar Mensaje
                            </button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div
                            style="
                            border-left: 1px solid gray;
                            height: 100%;
                            margin-left: 50%;">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="row">
                            <div class="text-center mt-3 text-muted">
                                <h5><i class="fa-regular fa-envelope"></i> Correo</h5>
                            </div>

                            <div class="col-6 mt-3">
                                <h6>Ingrese su nombre y apellido:</h6>
                                <input type="text" class="form-control" name="">
                            </div>
                            <div class="col-6 mt-3">
                                <h6>Ingrese su correo electronico:</h6>
                                <input type="text" class="form-control" name="">
                            </div>


                        </div>
                        <h6 class="mt-4">Escriba un mensaje:</h6>
                        <input type="text" class="form-control" name="">
                        <div class="d-flex justify-content-center mt-4">
                            <button class="btn btn-primary">
                                Enviar Correo
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">

            </div>
            <div class="col-3"></div>
        </div>
        </div>

        </div>
    </section>

    <!-- Footer-->
    <section class="footer py-5 bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-3">
                    <img src="{{ $inicio->logo }}" alt=""
                        style="
                    height: 50%;
                    width: 50%;
                    border-radius: 50%;
                ">
                    <p class="mt-2">¡Somos Una Compañía Conformada por Agrupaciones Artistica!</p>
                    <div class="row">
                        <div class="col-6" style="
                        margin-left: -42px;
                    ">
                            <div class="badge bg-warning text-dark pt-2">
                                <h6
                                    style="
                                font-size: small; 
                            ">
                                    <i class="fa-solid fa-phone"></i> 8791-3227</h6>
                            </div>
                        </div>
                        <div class="col-6"
                            style="
                        margin-left: inherit;
                    ">
                            <div class="badge bg-warning text-dark pt-2">
                                <h6
                                    style="
                                font-size: small;
                            ">
                                    <i class="fa-solid fa-envelope"></i>
                                    teatrobarkos@gmail.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
                <div class="col-3 mt-5">
                    <h4>Compañía</h4>
                    <div>
                        <a class="nav-link" href="#portfolio">Agrupaciones</a>
                        <a class="nav-link" href="#services">Servicios</a>
                        <a class="nav-link" href="#about">Historia</a>
                        <a class="nav-link" href="#team">Equipo</a>
                        <a class="nav-link" href="#contact">Contactenos</a>
                    </div>

                </div>
                <div class="col-3 mt-5">
                    <h4>Siguenos</h4>

                    <a href="https://www.facebook.com/teatro.barcos"><i class="fa-brands fa-facebook"
                            style="font-size: 210%"></i></a>
                    <a href="https://www.instagram.com/compania_barcos/"><i class="fa-brands fa-instagram"
                            style="font-size: 210%"></i></a>
                </div>
            </div>
            <hr>
            <div class="row mt-5">
                <div class="col-4"></div>
                <div class="col-4">
                    <p class="text-gray">Reservados todos los derechos © 2024</p>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>


    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    @include('Publicitaria.Landing.ajax_modal')
</body>

</html>
