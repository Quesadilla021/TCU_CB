@extends('Publicitaria.Administrativa.plantilla')

@section('contenido')
    <!-- End Navbar -->

    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <h2 class="font-weight-bolder mb-0">Servicios</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
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
            <div class="col-5">

                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Agregar nuevo</h6>
                        </div>
                    </div>
                    <div class="card-header p-3 pt-2">

                        <div id="formulario">
                            <form action="{{ route('servicio.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="nombre">Titulo:</label>
                                <input class="form-control" type="text" name="titulo"
                                    placeholder="Ingrese un titulo para el servicio">

                                <div class="mt-3">
                                    <label for="apellido">Descripcion:</label>
                                    <textarea name="descripcion" class="form-control" id="" cols="30" rows="8"
                                        placeholder="Ingrese una descripcion"></textarea>
                                    {{-- <input class="form-control" type="text" name="descripcion"> --}}
                                </div>

                                <div class="mt-3 mb-2">
                                    <label for="email">Imagen -Icono-</label>
                                    <input class="form-control" name="imagen" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'image', 'conateiner')">
                                </div>

                                <div id="conateiner" class="d-flex justify-content-center">
                                    <img id="image" src="#" alt="Vista previa de la imagen" style="width: 30%;"
                                        hidden>
                                </div>


                                <div class="d-flex justify-content-center mt-4">
                                    <button type="submit" class="btn btn-success">Agregar</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            {{-- Tabla --}}
            <div class="col-7">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Servicios creados</h6>
                                    </div>
                                </div>

                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="table table-light table-striped align-items-center mb-0"
                                            id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        ID</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Nombre</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                        Acciones</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($servicios as $item)
                                                    <tr>
                                                        <td>
                                                            <h6 class="mb-0 text-sm">{{ $item->id_servicio }}</h6>
                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0 text-sm">{{ $item->titulo }}</h6>
                                                        </td>

                                                        <td>
                                                            <div
                                                                class="d-flex justify-content-center align-middle text-sm mt-2">
                                                                <a href="{{ route('editarServicio', $item->id_servicio) }}"
                                                                    class="btn btn-outline-warning" style="
                                                                    height: 21%;" title="Editar"><i
                                                                        class="fa-regular fa-pen-to-square"></i></a>

                                                                {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                                <a class="btn btn-outline-primary mx-1" target="_blank" style="
                                                                height: 21%;" href="{{ route('inicio') }}" title="Ver"><i
                                                                        class="fa-regular fa-eye"></i></a>

                                                                <form
                                                                    action="{{ route('servicio.destroy', $item->id_servicio) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button title="Eliminar" class="btn btn-outline-danger"><i
                                                                            class="fa-regular fa-trash-can"></i></button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    s
