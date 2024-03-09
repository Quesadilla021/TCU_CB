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
            <a class="navbar-brand" href="{{ route('inicio') }}"><img src="{{ $inicio->logo }}"
                style="
                width: 5%;
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
                    <li class="nav-item"><a class="nav-link btn btn-outline-dark" href="{{ route('inicio') }}">Inicio</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead" style="background-image: url('{{$agrupacion->img_fondo}}');">
    </header>

    <section class="page-section" id="tituloAgrupacion">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-2 text-center">
                    <img id="img" src="{{$agrupacion->img_logo}}" class="img-fluid" alt="...">
                </div>
                <div class="col-8 text-center">
                    <h2 class="text-center mb-4">{{$agrupacion->nombre}}</h2>
                    <p style="margin-left: 5%; text-align: justify;">{{$agrupacion->descripcion}}</p>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </section>



    <section class="bg-light">

        <div class="container">
            <div class="row">
                <h2 class="section-heading text-uppercase text-center mb-5">PRESENTACIONES</h2>
            </div>
        </div>
        <!-- Presentacion de estructura de publicacion con 4 imagenes max y un video max -->
        <div class="container" style="margin-bottom: 100px">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body bg-gray">
                            <div class="row" style="padding: 5%">
                                <div class="col-6">
                                    <div class="container-fluid" style="padding-right: 3%">
                                        <h3 class="mt-3">Titulo ------ August 21,2023</h3>
                                        <p class="mt-5" style="text-align: justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="col-6" id="columnasImagenesYvideos" style="display: flex;justify-content: center;align-items: center;">
                                    <div class="row" style="padding-left: 3%">
                                        <div class="col-6" id="columnasImagenes" style="display: flex;justify-content: center;align-items: center;">
                                            <div class="contenedor_imagenes_publicacion">
                                                <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                                data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 45%;border-radius: 15px;"/>
                                                
                                                <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                                data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 45%;border-radius: 15px;"/>
                                                
                                                <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                                data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 45%;border-radius: 15px;"/>
                                                
                                                <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                                data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 45%;border-radius: 15px;"/>
                                            </div>
                                        </div>
                                        <div class="col-6" id="columnasVideos">
                                            {{-- Colcoar video --}}
                                            <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                                            data-link="/imgPruebas/Historia de instagram.mp4"
                                            style="border: solid 7px;border-radius: 15px;width: 100%;"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Presentacion de estructura de publicacion con 8 imagenes max y 3 videos max -->
        <div class="container" style="margin-bottom: 100px">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body bg-gray">
                            <div class="row" style="padding: 5%">
                                <div class="col-6">
                                    <div class="container-fluid" style="padding-right: 3%">
                                        <h3 class="mt-3">Titulo ------ August 21,2023</h3>
                                        <p class="mt-5" style="text-align: justify">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                                <div class="col-6" id="columnaVideos" style="display: flex;justify-content: center;align-items: center;">
                                    <div class="row" style="padding-left: 3%">
                                        <div class="col-12" id="columnasImagenes" style="display: flex;justify-content: center;align-items: center;">
                                            <div class="contenedor_videos_publicacion" style="display: flex;justify-content: center;align-items: center;">
                                                {{-- Colcoar video --}}
                                                <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                                                data-link="/imgPruebas/Historia de instagram.mp4"
                                                style="border: solid 7px;border-radius: 15px;width: 30%;"/>

                                                {{-- Colcoar video --}}
                                                <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                                                data-link="/imgPruebas/Historia de instagram.mp4"
                                                style="border: solid 7px;border-radius: 15px;width: 30%;margin: 0 2% 0 2% "/>

                                                {{-- Colcoar video --}}
                                                <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                                                data-link="/imgPruebas/Historia de instagram.mp4"
                                                style="border: solid 7px;border-radius: 15px;width: 30%;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="contenedorImagenes" style="padding: 0 5% 5% 5%">
                                <div class="col-12">
                                    <div class="contenedor_imagenes_publicacion text-center">
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>

                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                        data-link="/imgPruebas/H1.png" alt="Image Alt 2" style="width: 11%;border-radius: 15px;"/>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{-- Foreach por cada publicacion --}}
        {{-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center">
                            <h3 class="mt-1">Titulo y fecha</h3>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p class="card-text">Descripcion: Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit.
                                    Corporis voluptate explicabo enim, velit rerum repellat corrupti distinctio
                                    iste harum natus facere necessitatibus molestias similique et voluptas tempore!
                                    Consectetur, neque magnam!</p>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <img class="lightboxed imagenes" rel="group1" src="/imgPruebas/H1.png"
                                            data-link="/imgPruebas/H1.png" alt="Image Alt 2" />
                                       
                                        <img class="lightboxed" rel="group1" src="/imgPruebas/iconoTB.jpg"
                                            data-link="/imgPruebas/Historia de instagram.mp4"
                                            style="width: 15%;"/>

                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <h5></h5>
                </div>
            </div>

        </div> --}}
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
