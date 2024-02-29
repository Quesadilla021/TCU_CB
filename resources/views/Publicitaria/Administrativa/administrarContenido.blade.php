@extends('Publicitaria.Administrativa.plantilla')

@section('contenido')
    <div class="container-fluid py-4">


        <div class="col-lg-12 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center h-100">
                                <h2 class="font-weight-bolder mb-0">Agrupacion {{ $agrupacion->nombre }} <img
                                        src="assets/img/logos/LEGO_logo.png" width="15%" alt=""></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid ">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header p-0 position-relative mt-3 mx-3 z-index-2">
                            <div
                                class="d-flex justify-content-between bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h4 class="text-white text-capitalize ps-3" style="order: 1;">Publicaciones Creadas</h4>
                                <a href="{{route('crearPublicacion')}}" class="btn btn-success" style="margin-right: 3%; order: 1;"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>


                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
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
                                        <tr>
                                            <td>
                                                <div class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">Obra 1</h6>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">adadasdadad</h6>
                                                </div>
                                            </td>

                                            <td class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">10-10-2020</h6>
                                            </td>
                                            <td class="d-flex justify-content-center align-middle text-center text-sm">

                                                <a href="" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>

                                                {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                <a  class="btn btn-outline-primary mx-1"><i class="fa-regular fa-eye"></i></a>

                                                <form action="" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                <button class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></button>
                                                </form>
                                            </td>
                                        </tr>

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
