
@extends('layouts.template_base')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count">179</div>
                  <h3>Clientes</h3>
                  <p>Actualmente estan registrados</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-stethoscope"></i></div>
                  <div class="count">9</div>
                  <h3>Doctores</h3>
                  <p>Laborando en Goodental</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">179</div>
                  <h3>Tratamientos</h3>
                  <p>En el catalogo</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list"></i></div>
                  <div class="count">19</div>
                  <h3>Inventario</h3>
                  <p>Elementos dentro de las instalaciones</p>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Citas para hoy <small>detalle de las citas agendadas para hoy</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Hora</th>
                          <th>Nombre</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>09:00 - 10:00</td>
                          <td>Alicia Galvez Reyes</td>
                          <td> <label class="label label-success">Completado</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>10:00 - 11:00</td>
                          <td>Rosa Acien Zurita</td>
                          <td> <label class="label label-success">Completado</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>11:00 - 12:00</td>
                          <td>Juan Castillo Oller</td>
                          <td> <label class="label label-danger">No llego</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>14:00 - 15:00</td>
                          <td>Eliel Hernandez Hernandez</td>
                          <td> <label class="label label-success">Completada</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>15:00 - 16:00</td>
                          <td>Sandra Diaz Segura</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>16:00 - 17:00</td>
                          <td>Edgar Perez Montiel</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Citas para mañana<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Hora</th>
                          <th>Nombre</th>
                          <th>Estado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>09:00 - 10:00</td>
                          <td>Alicia Galvez Reyes</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>10:00 - 11:00</td>
                          <td>Rosa Acien Zurita</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>11:00 - 12:00</td>
                          <td>Juan Castillo Oller</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>14:00 - 15:00</td>
                          <td>Eliel Hernandez Hernandez</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>15:00 - 16:00</td>
                          <td>Sandra Diaz Segura</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>  
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>16:00 - 17:00</td>
                          <td>Edgar Perez Montiel</td>
                          <td> <label class="label label-primary">Pendiente</label> </td>
                          <td>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-pencil"></i> Eliminar </a>
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
        <!-- /page content -->


@endsection