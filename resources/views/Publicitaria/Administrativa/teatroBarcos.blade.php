@extends('Publicitaria.Administrativa.plantilla')

@section('contenido')
<div class="container-fluid py-4">


  <div class="col-lg-12 position-relative z-index-2">
      <div class="card card-plain mb-4">
          <div class="card-body p-3">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="d-flex flex-column h-100">
                          <h2 class="font-weight-bolder mb-0">Agrupaciones > Teatro Barcos <img src="assets/img/logos/LEGO_logo.png" width="50px" alt=""></h2>
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
                      <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3" style="        display: flex;
                      justify-content: space-between;
                      align-items: center;">
                        <h6 class="text-white text-capitalize ps-3" style="order: 1;">Publicaciones Creadas</h6>
                          <h6 class="text-white text-capitalize ps-3" style="order: 2;">Agregar nueva <button type="button" class="btn btn-success mt-2"><i class="fa-solid fa-plus"></i></button></h5>                
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
                                      <td class="align-middle text-center text-sm">
                                        <span><button type="button" class="btn btn-secondary"><i class="fa-regular fa-eye"></i></button> <button type="button" class="btn btn-warning"><i class="fa-regular fa-pen-to-square"></i></button> <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></span>
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