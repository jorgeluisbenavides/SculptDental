
@extends('layouts.template')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Doctores</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Apellidos..." disabled>
                    <span class="input-group-btn">
                      <button class="btn btn-default" onclick="window.location.href='search.html'" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Recomendaciones</h2>
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
                    <h4>Campos obligatorios<small> </small></h4>
                    <div>
                      Los campos marcados con <strong>*</strong> son obligatorios, sin ellos no podras agregar el cliente.
                    </div>
                    <p>En caso que se ingrese algun dato erroneo se puede editar, sin necesidad de volver a crear otro registro.</p>
                  </div>
                </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Datos <small> Ingresa la informacion solicitada</small></h2>
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
                    <br />

                    {!!Form::open(['route'=>'doctores.store','files' => true])!!}
                      @include('doctores.partials.form')
                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>

            <div class="x_panel">
                  <div class="x_title">
                    <h2>Listado de Doctores</h2>
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
                      <table>
                        <th>A. Paterno</th><th>A. Materno</th><th>Nombre</th><th>Acci&oacute;n</th>
                        <tbody>
                          @foreach($doctors as $doctor)
                          <tr>
                            <td> {{$doctor->last_name_one}} </td>
                            <td> {{$doctor->last_name_two}} </td>
                            <td> {{$doctor->name}} </td>
                            <td> <a href=" {{route( 'doctores.edit', $doctor->id )}} " class="btn btn-sm btn-primary">Editar</a></td>
                            <td> <a href=" {{route( 'doctores.show', $doctor->id )}} " class="btn btn-sm btn-success">Ver</a> </td>
                          </tr>
                        @endforeach
                      
                      </tbody>
                      </table>
                  </div>
                </div>
          </div>
        </div>
        <!-- /page content -->

@endsection