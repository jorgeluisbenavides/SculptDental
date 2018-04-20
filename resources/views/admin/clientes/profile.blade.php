

@extends('layouts.template_base')

@section('css')
  

@endsection

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Perfil de cliente</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Apellidos...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <!-- add customer -->
                @if( session('info') )
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>Proceso completo</h2>
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
                        <div class="alert alert-success">
                          <h4><i class="fa fa-check"></i> {{ session('info') }} </h4>
                        </div>
                    </div>
                  </div>
                @endif
                <!-- end add customer -->


                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reporte <small>Detalle completo</small></h2>
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
                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src=" {{ asset($customer->img_name) }} " alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3> {{ $customer->name . ' ' . $customer->last_name_one }} </h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-tag user-profile-icon"></i> {{ $customer->civil_state }}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{ $customer->occupation->title }}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-thumb-tack user-profile-icon"></i>
                          {{ $customer->sex }}
                        </li>
                      </ul>

                      <a href=" {{ route('clientes.edit', $customer->id ) }} " class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar perfil</a>
                      <br />
                      <!-- end of skills -->

                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Historial de tratamientos</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Cuestionarios</a>
                          </li>
                          <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Perfil</a>
                          </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            @if(isset($numTreatments))
                              <h2>{{$numTreatments}} Tratamientos Agregados</h2>
                            @else
                              <h2>Sin Tratamientos Agregados</h2>
                            @endif


                            <!-- start recent activity -->
                            <ul class="messages">
                              <li>
                                <a href="{{ route('tratamientos.index') }}" class="label label-primary"> Agregar nuevo tratamiento </a>
                              </li>
                              <!--Aqui va el siclo que mostrara los tratamientos del paciente-->
                               @if(isset($treatments))
                                    @foreach ($treatments as $treatment)
                                        
                                        <li>
                                          <!-- <img src=" {{ asset('images/img.jpg') }} " class="avatar" alt="Avatar"> -->
                                          <div class="message_date">
                                            <h3 class="date text-info"><small>$</small>{{$treatment->amount}}</h3>
                                            <!--<p class="month">May</p>-->
                                          </div>
                                          <div class="message_wrapper">
                                            <h4 class="heading">{{$treatment->name}}</h4>
                                            <blockquote class="message">{{$treatment->description}}</blockquote>
                                            <br />
                                            <p class="url">
                                              <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                              <a href="#"><i class="fa fa-user"></i> {{$treatment->username}} </a>
                                            </p>
                                          </div>
                                        </li>
                                    @endforeach
                                @else
                                    <h2>No existen Tratamientos<small> Registre alguno.</small></h2>
                                @endif 

                            </ul>
                            <!-- end recent activity -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Nombre</th>
                                  <th class="hidden-phone">No. preguntas</th>
                                  <th>Estado</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Valoracion</td>
                                  <td class="hidden-phone">18</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="100"></div>
                                    </div>
                                  </td>
                                </tr>
                                <!--<tr>
                                  <td>2</td>
                                  <td>New Partner Contracts Consultanci</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">13</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td>Partners and Inverstors report</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">30</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td>New Company Takeover Review</td>
                                  <td>Deveint Inc</td>
                                  <td class="hidden-phone">28</td>
                                  <td class="vertical-align-mid">
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                    </div>
                                  </td>
                                </tr>-->
                              </tbody>
                            </table>
                            <!-- end user projects -->

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            <!-- title row -->
                            <div class="row">
                              <div class="col-xs-12 invoice-header">
                                <h1>
                                                <i class="fa fa-folder-o"></i> Folio {{ $customer->folio }}
                                                <small class="pull-right">Agregado: {{ $customer->created_at }} </small>
                                            </h1>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                              <div class="col-sm-12 invoice-col">
                                
                                <address>
                                                <strong> {{ $customer->name .' '. $customer->last_name_one .' ' .$customer->last_name_two }} </strong>
                                                <br> {{ $customer->address }} 
                                                <br> {{ $customer->references }}
                                                <br> {{ ($customer->cell_phone) ? 'Movil: ' . $customer->cell_phone : '' }}
                                                <br> {{ ($customer->home_phone) ? 'Casa: '  . $customer->home_phone : '' }}
                                                <br> {{ ($customer->age) ? 'Edad: '  . $customer->age : '' }}
                                            </address>
                              </div>
                              <!-- /.col -->
                            </div>
                            <!-- /.row -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('js')
   

@endsection