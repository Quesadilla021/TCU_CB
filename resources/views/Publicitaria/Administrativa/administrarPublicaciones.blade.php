@extends('Publicitaria.Administrativa.plantilla')
{{-- @section('activoAgrupacion', 'active') --}}
@section('contenido')
    <div class="container-fluid py-4">


        <div class="col-lg-12 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center h-100">
                                <h2 class="font-weight-bolder mb-0">Agrupación {{ $agrupacion->nombre }} <img
                                        src="{{ $agrupacion->img_logo }}" width="15%" alt=""
                                        style="border-radius: 50%;"></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- <div class="container-fluid ">
            <div class="row mb-2 mt-4">
                @if ($mensaje)
                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                        <span class="">{{ $mensaje }}</span>
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                            aria-label="Close">
                            <i class="fa-regular fa-circle-xmark text-white"
                                style="
                        font-size: x-large;
                    "></i>
                        </button>
                    </div>
                @endif
            </div> --}}
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header p-0 position-relative mt-3 mx-3 z-index-2">
                            <div
                                class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3" style="order: 1;">Publicaciones Creadas</h4>
                                <a title="Crear Nueva" href="{{ route('crearPublicacion', $agrupacion->id_agrupacion) }}"
                                    class="btn btn-success" style="margin-right: 3%; order: 1;"><i
                                        class="fa-solid fa-plus"></i></a>
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
                                                Titulo</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Descripcion</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Fecha</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($publicaciones as $item)
                                            @if ($item->id_agrupacion == $agrupacion->id_agrupacion)
                                                <tr>
                                                    <td>
                                                        <h6 class="mb-0 text-sm">{{ $item->titulo }}</h6>
                                                    </td>
                                                    <td>
                                                        <h6 class="mb-0 text-sm">{{ $item->descripcion }}</h6>

                                                    </td>

                                                    <td>
                                                        <h6 class="mb-0 text-sm">{{ $item->fecha }}</h6>
                                                    </td>
                                                    <td>

                                                        <div class="d-flex justify-content-center align-middle text-center text-sm mt-2">
                                                            <a title="Editar" href="{{ route('editarPublicacion', $item->id_publicacion) }}"
                                                                class="btn btn-outline-warning"><i
                                                                    class="fa-regular fa-pen-to-square"></i></a>

                                                            {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                            <a title="Ver" class="btn btn-outline-primary mx-1" target="_blank" href="{{ route('agrupacion', $item->id_agrupacion) }}"><i
                                                                    class="fa-regular fa-eye"></i></a>

                                                            <form
                                                                action="{{ route('publicacion.destroy', $item->id_publicacion) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button title="Eliminar" class="btn btn-outline-danger"><i
                                                                        class="fa-regular fa-trash-can"></i></button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
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
@endsection
