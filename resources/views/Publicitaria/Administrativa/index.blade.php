@extends('Publicitaria.Administrativa.plantilla')
@section('activoAgrupaciones', 'active')
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
                                    <h2 class="font-weight-bolder mb-0">Agrupaciones</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-5">


                @csrf
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Agregar nueva agrupación</h6>
                        </div>
                    </div>
                    <div class="card-header p-3 pt-2">

                        <div id="formulario">
                            {{-- Agregar Agrupacion --}}
                            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <label for="nombre">Nombre:</label>
                                <input class="form-control" type="text" name="nombre" placeholder="Ingrese su nombre">

                                <div class="mt-3">
                                    <label for="apellido">Descripcion:</label>
                                    <textarea class="form-control" name="descripcion" id="" cols="30" rows="6"
                                        placeholder="Ingrese una descripcion"></textarea>

                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen -Logo-</label>
                                    <input class="form-control" type="file" name="imagenLogo" accept="image/*"
                                        onchange="previewImage(event, 'image-Logo', 'conatainer-Logo', false)">
                                </div>

                                <div id="conatainer-Logo" class="d-flex justify-content-center">
                                    <img id="image-Logo" src="#" alt="Vista previa de la imagen" style="width: 30%;"
                                        hidden>
                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen -Fondo-</label>
                                    <input class="form-control" name="imagenFondo" type="file" accept="image/*"
                                        onchange="previewImage(event, 'image-Fondo', 'conatainer-Fondo', false)">
                                </div>

                                <div id="conatainer-Fondo" class="d-flex justify-content-center">
                                    <img id="image-Fondo" src="#" alt="Vista previa de la imagen" style="width: 30%;"
                                        hidden>
                                </div>

                                <div class="d-flex justify-content-center mt-4">
                                    <button class="btn btn-success">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


            {{-- Tabla Cargar Datos --}}
            <div class="col-7">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                        <h6 class="text-white text-capitalize ps-3">Agrupaciones creadas</h6>
                                    </div>
                                </div>

                                <div class="card-body px-0 pb-2">
                                    <div class="table-responsive p-0">
                                        <table class="align-items-center mb-0" id="datatablesSimple">
                                            <thead>
                                                <tr>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 tabla">
                                                        ID</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 tabla">
                                                        Nombre</th>
                                                    <th
                                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 tabla">
                                                        Acciones</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($agrupaciones as $item)
                                                    <tr>
                                                        <td>

                                                            <h6 class="mb-0 text-sm">{{ $item->id_agrupacion }}</h6>

                                                        </td>
                                                        <td>
                                                            <h6 class="mb-0 text-sm">{{ $item->nombre }}</h6>
                                                        </td>

                                                        <td>

                                                            <div class="d-flex justify-content-center">
                                                                <a href="{{ route('editarAgrupacion', $item->id_agrupacion) }}"
                                                                    class="btn btn-outline-warning"><i
                                                                        class="fa-regular fa-pen-to-square"></i></a>

                                                                {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                                <a class="btn btn-outline-primary mx-1"><i
                                                                        class="fa-regular fa-eye"></i></a>

                                                                <form
                                                                    action="{{ route('admin.destroy', $item->id_agrupacion) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button class="btn btn-outline-danger"><i
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
