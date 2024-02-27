<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleK.css">
    <title>Iniciar Sesion</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="imgPruebas/iconoTB.jpg"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    {{-- Pedir ayuda --}}
                    <form action="{{route('iniciarsesion')}}" method="get">
                        @csrf
                        <div class="text-center">
                            <H3>Iniciar Sesion</H3>

                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" >Correo Electronico:</label>
                            <input  name="correo" class="form-control form-control-lg"/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <label class="form-label" >Contraseña:</label>
                            <input type="password" name="contrasena" class="form-control form-control-lg"/>

                        </div>

                        <div class="divider d-flex align-items-center my-4">
                        </div>

                        <div
                            class="d-flex justify-content-center text-center text-lg-start mt-4 pt-2 align-items-center">
                            <button class="btn btn-outline-warning btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center text-center">
            <!-- Copyright -->
            <div class="mb-3 mb-md-0">
                Copyright © 2024.
            </div>
            <!-- Copyright -->


        </div>
    </section>
</body>

</html>
