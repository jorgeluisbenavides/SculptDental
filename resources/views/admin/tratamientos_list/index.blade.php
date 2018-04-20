

@extends('layouts.template_base')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tratamientos <small>Lista de todos los tratamientos</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for..." disabled="">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    @if(isset($numTreatments))

                      <h2>{{$numTreatments}} Tratamientos</h2>
                    @else
                      <h2>Sin Tratamientos</h2>
                    @endif
                    
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

                    <p>Puedes agregar un nuevo tratamiento o editar los elementos listados</p>
                    @if(isset($treatments))
                        <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Tratamiento</th>
                          <th style="width: 9%">Precio</th>
                          <th style="width: 50%">Descripción Breve</th>
                          <th style="width: 20%">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                          
                        @foreach ($treatments as $treatment)
                        <tr>
                          <td>{{$treatment->id}}</td>
                          <td>{{$treatment->name}}</td>
                          <td>${{$treatment->amount}}</td>
                          <td>{{$treatment->description}}</td>
                          <td>
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> Ver </a> -->
                            <a href="{{ route('tratamientos.edit', $treatment->id) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="{{ route('tratamientos.show', $treatment->id) }}" class="btn btn-info btn-xs"><i class="fa fa-check"></i> Asignar </a>
                          </td>
                        </tr>
                        @endforeach
                      
                      </tbody>
                    </table>  
                    <!-- end project list -->
                    @else
                        <h2>No existen Tratamientos<small> Registre alguno.</small></h2>
                    @endif

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection