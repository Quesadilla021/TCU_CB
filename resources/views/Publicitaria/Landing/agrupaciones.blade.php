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
    <link href="css/styleK.css" rel="stylesheet" />

    {{-- Lightbox --}}
    <link rel="stylesheet" href="lightboxed/lightboxed.css">

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Regresar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead">
    </header>

    <section class="page-section" id="tituloAgrupacion">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-3">
                    <img id="img" src="/imgPruebas/H1.png" class="img-fluid" alt="...">
                </div>
                <div class="col-9">
                    <h1 class="text-center mb-4">Nombre</h1>
                    <h4 style="margin-left: 5%">Descripcion: Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Assumenda nemo voluptate adipisci recusandae fugit facere omnis enim aliquid?
                        Expedita officia quas suscipit quod odit reiciendis ex nobis consequatur?
                        Explicabo, porro!</h4>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light">

        {{-- Foreach por cada publicacion --}}
        <div class="container">
            <div class="row">
                <div class="col-7">

                    {{-- Foreach imagenes de esa publicacion --}}

                    {{-- <a href="/imgPruebas/H1.png" class="lightboxed">
                        <img src="/imgPruebas/H1.png" alt="image" data-caption="Caption 1">
                    </a>

                    <a href="/imgPruebas/iconoTB.jpg" class="lightboxed">
                        <img src="/imgPruebas/iconoTB.jpg" alt="image" data-caption="Caption 2">
                    </a> --}}

                    <img class="lightboxed" rel="group1" src="/imgPruebas/H1.png" data-link="/imgPruebas/H1.png"
                        alt="Image Alt 1" />
                    <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                        data-link="/imgPruebas/iconoTB.jpg" alt="Image Alt 2" />
                        {{-- Colcoar video --}}
                    <img class="lightboxed" rel="group3" src="/imgPruebas/iconoTB.jpg"
                        data-link="http://www.youtube.com/embed/Rix_3b9ThLI?list=PL8zglt-LDl-iwBHEl3Pw1IhWGp9cfgMrc"
                        data-width="560" data-height="315" />

                    {{-- Fin del foreach imagenes de esa publicacion --}}

                </div>
                <div class="col-5">
                    <h1>titulo y fecha</h1>
                    <h5>Descripcion: Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Corporis voluptate explicabo enim, velit rerum repellat corrupti distinctio
                        iste harum natus facere necessitatibus molestias similique et voluptas tempore!
                        Consectetur, neque magnam!</h5>
                </div>
            </div>
        </div>
        {{-- Final de foreach por cada publicacion --}}
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



    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    {{-- Lightbox --}}
    <script src="lightboxed/lightboxed.js"></script>

</body>


</html>
