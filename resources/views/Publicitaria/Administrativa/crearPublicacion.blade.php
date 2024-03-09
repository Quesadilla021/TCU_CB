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

                                    {{-- Id agrupacion --}}
                                    <a href="{{ route('vistaAgrupacion', $agrupacion->id_agrupacion) }}"
                                        style="margin-right: 2%; margin-top: 1%;"><i class="fa-solid fa-arrow-left"
                                            style="
                                            font-size: 25px;"></i></i></a>


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

                            <form action="{{ route('publicacion.store') }}" method="POST">
                                @csrf
                                <input type="text" name="id_agrupacion" value="{{ $agrupacion->id_agrupacion }}" hidden>
                                <label for="nombre">Titulo:</label>
                                <input class="form-control" type="text" name="titulo" required>

                                <div class="mt-3">
                                    <label for="apellido">Descripcion:</label>
                                    <textarea class="form-control" name="descripcion" id="" cols="30" rows="5" required></textarea>
                                </div>

                                <div class="mt-3">
                                    <label for="nombre">Link:</label>
                                    <input class="form-control" type="text" name="link" required>
                                </div>

                                <div class="mt-3">
                                    <label for="apellido">Fecha:</label>
                                    <input class="form-control" type="date" name="fecha" required>
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
