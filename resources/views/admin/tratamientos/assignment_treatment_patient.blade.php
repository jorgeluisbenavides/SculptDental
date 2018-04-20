
@extends('layouts.template_base')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Asignación de Tratamientos a Pacientes</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="searchpatient" placeholder="Apellidos..." autofocus>
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

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tratamiento: {{$treatment->name}}</h2>
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
                    <h4>Costo: ${{$treatment->amount}}.00<small> </small></h4>
                    <div>
                      Descripción del tratamiento: 
                    </div>
                    <p><strong>{{$treatment->description}}</strong></p>
                    <div class="hidden" id="idTreatment">{{$treatment->id}}</div>
                    <div class="hidden" id="idUser">{{ Auth::user()->id }}</div>
                  </div>
                </div>

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Asignar Tratamiento<small>a Paciente</small></h2>
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
                    <p>Busque y seleccione un paciente de la lista *</p>
                      <div id="patientToassign" class="title-color" style="padding-top:50px; text-align:center;" >
                        <b>La información se listará aquí...</b>
                      </div>
                      <button type="button" id="AssignToPatient" class="btn btn-success"> Asignar</button>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function(){
              
                $("#searchpatient").keyup(function(){
                   var str=  $("#searchpatient").val();
                   if(str == "") {
                           $( "#patientToassign" ).html("<b>La información se listará aquí...</b>"); 
                   }else {
                           $.get( "{{ url('livesearchpatient?id=') }}"+str, function( data ) {
                               $( "#patientToassign" ).html( data );  
                        });
                   }
               });

               $("#AssignToPatient").click(function(){
                      var idCustomer = $('input:radio[name=idCusomer]:checked').val()
                      var idTreatment = $("#idTreatment").text();
                      var idUser = $("#idUser").text();
                    //console.log("C:"+idCustomer+", T:"+idTreatment+", U:"+idUser);

                      if(idCustomer==undefined){
                          alert("Seleccione un Paciente...");
                      }else { 
                         $.ajax({
                            type: 'GET',
                            url: '/tratamiento_cliente',
                            data:{
                              'idCustomer':idCustomer,
                              'idTreatment':idTreatment,
                              'idUser':idUser
                              },
                              dataType: 'json',
                            success: function (response) {
                              
                              $('input[type="text"]').val('');
                              
                              $("#patientToassign").empty();
                              alert(response);
                            }
                        });
                      }
                      
                   
               })  
            }); 
    </script>
        <!-- /page content -->

@endsection