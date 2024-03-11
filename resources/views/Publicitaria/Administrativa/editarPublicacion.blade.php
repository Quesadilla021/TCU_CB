@extends('Publicitaria.Administrativa.plantilla')
@section('link')
    <link rel="stylesheet" href="lightboxed/lightboxed.css">
@endsection
@section('script')
    <script src="lightboxed/lightboxed.js"></script>
@endsection
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
                                    <a href="{{ route('vistaAgrupacion', $publicacion->id_agrupacion) }}"
                                        style="margin-right: 2%; margin-top: 1%;"><i class="fa-solid fa-arrow-left"
                                            style="
                                            font-size: 25px;"></i></i></a>


                                    <h3 class="font-weight-bolder mb-0">Editar Publicación {{ $publicacion->titulo }}</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">


            <div class="row d-flex justify-content-center">
                {{-- Informacion de la publicacion --}}
                <div class="col-12">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                <h5 class="text-white text-capitalize ps-3 text-center">Editar Datos</h5>
                            </div>
                        </div>
                        <div class="card-header p-3 pt-2">

                            <div id="formulario">
                                {{-- Editar Pubicacion --}}

                                <form action="{{ route('publicacion.update', $publicacion->id_publicacion) }}"
                                    method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-5">
                                            <label for="nombre">Titulo:</label>
                                            <input class="form-control" type="text" value="{{ $publicacion->titulo }}"
                                                name="titulo" required>

                                            <div class="mt-3">
                                                <label for="nombre">Link:</label>
                                                <input class="form-control" type="text" value="{{ $publicacion->link }}"
                                                    name="link" required>
                                            </div>

                                            <div class="mt-3">
                                                <label for="apellido">Fecha:</label>
                                                <input class="form-control" type="date" value="{{ $publicacion->fecha }}"
                                                    name="fecha" required>
                                            </div>

                                        </div>
                                        <div class="col-7">
                                            <div class="">
                                                <label for="apellido">Descripcion:</label>
                                                <textarea class="form-control" name="descripcion" id="" cols="30" rows="8" required>{{ $publicacion->descripcion }}</textarea>
                                            </div>
                                        </div>
                                    </div>






                                    <div class="d-flex justify-content-center mt-4">
                                        <button class="btn btn-outline-primary">Editar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row d-flex justify-content-center mt-5">

                <div class="col-12">
                    <div class="row">
                        <div class="col-7">

                            {{-- CARD IMAGENES --}}
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                        <h5 class="text-white text-capitalize ps-3 text-center">Editar Imagenes</h5>
                                    </div>
                                </div>
                                <div class="card-header p-3 pt-2">

                                    <div id="formulario">

                                        <form enctype="multipart/form-data"
                                            action="{{ route('guardarImg', $publicacion->id_publicacion) }}" method="POST">
                                            @csrf

                                            <div class="mt-3">
                                                <input type="text" name="tipo" value="1" hidden>
                                                <label for="email">Imagenes -Publicación-</label>
                                                <div class="custom-file">
                                                    <input type="file" name="imagenes[]" multiple id="inputImage"
                                                        class="form-control custom-file-input @error('image') is-invalid @enderror"
                                                        id="imgs" required id="imageInput">
                                                </div>
                                            </div>

                                            <button type="submit" id="add_img"
                                                class="btn btn-outline-info my-3">SUBIR</button>
                                        </form>

                                        <div class="row d-flex justify-content-center">
                                            @foreach ($publicacion->imagenes as $img)
                                                <div class="col-sm-3 my-3 mx-2">
                                                    <a href="{{ $img->imagen }}" data-lightbox="gallery"
                                                        style="position: relative; display: inline-block;">
                                                        <a href="{{ route('eliminarImgE', $img->id_imagen) }}"
                                                            class="btn-danger btn-sm"
                                                            style="position: relative; top: 25px; left: 0; z-index: 1; border-radius: 50%;"><i
                                                                class="fa-solid fa-xmark"></i></a>
                                                        <img src="{{ $img->imagen }}" alt=""
                                                            style="width: 120%;border-radius: 12%;">
                                                    </a>

                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-5">

                            {{-- CARD VIDEO --}}
                            <div class="card">
                                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                    <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                        <h5 class="text-white text-capitalize ps-3 text-center">Editar Videos</h5>
                                    </div>
                                </div>
                                <div class="card-header p-3 pt-2">

                                    <div id="formulario">

                                        <form enctype="multipart/form-data"
                                            action="{{ route('guardarVideo', $publicacion->id_publicacion) }}"
                                            method="POST">
                                            @csrf

                                            <div class="mt-3">
                                                <input type="text" name="tipo" value="1" hidden>
                                                <label for="email">Imagen -Miniatura-</label>
                                                <div class="custom-file">
                                                    <input class="form-control" type="file" name="imagenMiniatura"
                                                        accept="image/*"
                                                        onchange="previewImage(event, 'image-Miniatura', 'conatainer-Miniatura', false)">
                                                </div>
                                            </div>

                                            <div id="conatainer-Miniatura" class="d-flex justify-content-center">
                                                <img id="image-Miniatura" src="#" alt="Vista previa de la imagen"
                                                    style="width: 30%;" hidden>
                                            </div>

                                            <div class="mt-3">
                                                <label for="email">Video -Publicación-</label>
                                                <div class="custom-file">
                                                    <input type="file" name="video" multiple id="inputImage"
                                                        class="form-control" id="imgs" required id="imageInput">
                                                </div>
                                            </div>

                                            <button type="submit" id="add_img"
                                                class="btn btn-outline-info my-3">SUBIR</button>
                                        </form>
                                        <div class="row d-flex justify-content-center">
                                            @foreach ($publicacion->videos as $video)
                                                <a href="{{ $video->miniatura }}" data-lightbox="gallery"
                                                    style="position: relative; display: inline-block;" class="mt-2">
                                                    <input type="text" name="tipo" value="1" hidden>
                                                    <a href="{{ route('eliminarVideEditado', $video->id_video) }}"
                                                        class="btn-danger btn-sm"
                                                        style="position: relative;top: 6px;left: 47px;z-index: 1;width: 7%;height: 10%;border-radius: 50%;"><i
                                                            class="fa-solid fa-xmark"></i></a>
                                                    <img class="lightboxed" rel="group1" src="{{ $video->miniatura }}"
                                                        data-link="{{ $video->video }}"
                                                        style="width: 60%; border-radius: 14%;" />
                                                </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-center mt-4">
                        {{-- <form action="{{ route('vistaAgrupacionMensaje', $publicacion->id_agrupacion) }}" method="POST">
                            @csrf
                            @method('put')

                            <input type="text" name="tipo" value="2" id="" hidden>
                            <button class="btn btn-success">Editar</button>
                        </form> --}}
                        <a href="{{ route('vistaAgrupacion', $publicacion->id_agrupacion) }}"
                            class="btn btn-success">Editar</a>
                    </div>
                </div>
            </div>

        </div>
    @endsection
