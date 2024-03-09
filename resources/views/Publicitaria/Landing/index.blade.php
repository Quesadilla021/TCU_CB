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
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                            </div>
                            <img class="img-fluid"
                                style="
                            height: 300px;
                            width: 365px;"
                                src="{{$item->img_logo}}" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><a href="{{ route('agrupacion', $item) }}">{{$item->nombre}}</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Fin Agrupacion Foreach-->

            </div>
        </div>
    </section>
    <!-- FIN Agrupaciones---------------------------------------------------------------------->

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
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>

            <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Name input-->
                            <input class="form-control" id="name" type="text" placeholder="Your Name *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su nombre.</div>
                        </div>
                        <div class="form-group">
                            <!-- Email address input-->
                            <input class="form-control" id="email" type="email" placeholder="Your Email *"
                                data-sb-validations="required,email" />
                            <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese su email.
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Phone number input-->
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *"
                                data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese su numero de
                                telefono.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Message input-->
                            <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <!---->
                <!-- This is what your users will see when the form-->
                <!-- has successfully submitted-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        To activate this form, sign up at
                        <br />
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <!-- Submit error message-->
                <!---->
                <!-- This is what your users will see when there is-->
                <!-- an error submitting the form-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Send Message</button></div>
            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start"><b>Siganos en:</b></div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Agrupaciones Modals-->
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
                                <h2 class="text-uppercase">Teatro Barcos</h2>
                                <img class="imagenesModales mt-4" src="/imgPruebas/img3.jpg" alt="..." style="
                                border-radius: 15%;"/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>¿Quieres saber mas sobre nosotros?</strong>
                                    </li>
                                </ul>
                                <a href="{{ route('agrupaciones') }}" class="btn btn-primary btn-xl">
                                    Saber mas
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
