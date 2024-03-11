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
                                    <a href="{{ route('vistaServicios') }}" style="margin-right: 2%; margin-top: 1%;"><i
                                            class="fa-solid fa-arrow-left"
                                            style="
                                            font-size: 25px;"></i></i></a>

                                    <h3 class="font-weight-bolder mb-0">Editar Servicio {{ $servicio->nombre }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="row mb-5">
                @if (session('mensaje'))
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="">{{ session('mensaje') }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <i class="fa-regular fa-circle-xmark text-white"
                                style="
                        font-size: x-large;
                    "></i>
                        </button>
                    </div>
                @endif
            </div>
            <div class="col-1"></div>
            <div class="col-10">


                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                            <h5 class="text-white text-capitalize ps-3 text-center">Editar Datos</h5>
                        </div>
                    </div>
                    <div class="card-header p-3 pt-2">

                        <div id="formulario">
                            {{-- Editar Agrupacion --}}

                            <form action="{{ route('servicio.update', $servicio->id_servicio) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="row">
                                    <div class="col-6">
                                        <label for="nombre">Nombre:</label>
                                        <input class="form-control" type="text" name="titulo"
                                            value="{{ $servicio->titulo }}">

                                        <div class="mt-3">
                                            <label for="apellido">Descripcion:</label>

                                            <textarea name="descripcion" class="form-control" id="" cols="30" rows="7"
                                                placeholder="Ingrese una descripcion">{{ $servicio->descripcion }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-1"></div>
                                    <div class="col-5">
                                        <div class="">
                                            <label for="email">Imagen:</label>
                                            <input value="{{ $servicio->img }}" class="form-control" name="imagen"
                                                type="file" id="imageInput" accept="image/*"
                                                onchange="previewImage(event, 'image-Logo', 'conateiner-Logo',true, 'image-Logo-actual')">
                                        </div>


                                        <div id="conateiner-Logo" class="d-flex justify-content-center">
                                            <img id="image-Logo" src="#" alt="Vista previa de la imagen"
                                                style="width: 40%;" hidden>
                                            <img id="image-Logo-actual" src="{{ $servicio->img }}"
                                                alt="Vista previa de la imagen" style="width: 40%;">
                                        </div>
                                    </div>
                                </div>




                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-success">Editar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-1"></div>

        </div>
    @endsection
