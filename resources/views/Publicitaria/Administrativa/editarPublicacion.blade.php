@extends('Publicitaria.Administrativa.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route('admin.index') }}"><i class="fa-solid fa-reply"></i></i></a>
                                    <h3 class="font-weight-bolder mb-0">Crear Publicación</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">


                @csrf
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3 text-center">Ingrese Datos</h5>
                        </div>
                    </div>
                    <div class="card-header p-3 pt-2">

                        <div id="formulario">
                            {{-- Editar Agrupacion --}}

                            <form action="" method="POST">
                                @csrf
                                <label for="nombre">Nombre:</label>
                                <input class="form-control" type="text" name="nombre">

                                <div class="mt-3">
                                    <label for="apellido">Descripcion:</label>
                                    <input class="form-control" type="text" name="descripcion">
                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen -Logo-</label>
                                    <input class="form-control" name="logo"
                                        type="file" id="imageInput" accept="image/*"
                                        onchange="previewImage(event, 'image-Logo', 'conateiner-Logo')">
                                </div>

                                <div id="conateiner-Logo">
                                    <img id="image-Logo" src="#" alt="Vista previa de la imagen">
                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen -Fondo-</label>
                                    <input class="form-control" name="fondo"
                                        type="file" id="imageInput" accept="image/*"
                                        onchange="previewImage(event, 'image-Logo', 'conateiner-Logo')">
                                </div>

                                <div id="conateiner-Fondo">
                                    <img id="image-Fondo" src="#" alt="Vista previa de la imagen">
                                </div>

                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-success">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
