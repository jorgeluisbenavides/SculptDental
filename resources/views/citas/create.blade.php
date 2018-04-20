
@extends('layouts.template_base')

@section('content')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Citas</h3>
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
                    <!--<h4>Campos obligatorios<small> </small></h4>-->
                    <div>
                      Realiza la busqueda para seleccionar el paciente a agendar.
                    </div>
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

                    {!!Form::open(['route'=>'buscar_paciente','files' => true])!!}
                      @include('citas.partials.fecha')
                    {!!Form::close()!!}

                  </div>
                </div>

              </div>
            </div>


            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="x_panel" id="table-citas" style="display: none">
                  <div class="x_title">
                    <h2>Citas <small> Ingresa la informacion solicitada</small></h2>
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

                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">Hora</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Paciente</th>
                          <th scope="col">Contrato</th>
                          <th scope="col">Tratamiento</th>
                          <th scope="col">Observacion</th>
                          <th scope="col">Doctor</th>
                          <th scope="col">Disponibilidad</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody id="table-body">
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>


              </div>
            </div>

          <!-- Modal -->
          <div class="modal fade" id="modalDate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Olvido llenar campos</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Sleccione una fecha para la cita.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                  <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modalQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Nueva cita</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="modal-date">
                    </div>                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Tratamiento</label>
                      <input type="text" class="form-control" id="modal-treatment">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Observation</label>
                      <textarea class="form-control" id="modal-observation"></textarea>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary" onclick="saveQuote()">Agregar</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="editQuote" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Editar cita</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group">
                      <input type="hidden" class="form-control" id="edit-id">
                    </div>                    
                    <div class="form-group">
                      <label for="recipient-name" class="col-form-label">Tratamiento</label>
                      <input type="text" class="form-control" id="edit-treatment">
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label">Observation</label>
                      <textarea class="form-control" id="edit-observation"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="message-text" class="col-form-label" >Estado</label>
                      <select class="form-control" id="sel-estado">
                        <!--<option value="Disponible">Disponible</option>-->
                        <option value="Atendido">Atendido</option>
                        <option value="En espera">En espera</option>
                        <option value="Reagendo">Reagendo</option>
                        <option value="No asistio">No asistio</option>                        
                      </select>
                    </div>                    
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary" onclick="updateQuote()">Guardar cambios</button>
                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
        <!-- /page content -->

        <script type="text/javascript">

          $(document).ready(function(){
              
              $("#btn-disponibilidad").click(function(e){
                  e.preventDefault();

                  if( $("#fecha_cita").val() == '' ){

                    $("#modalDate").modal('show');
                    $("#table-citas").hide();

                  }else{                    

                    $("#table-citas").show();

                    searchData();


                  }

              });

          });       

          function searchData(){
                    var fecha           = $("#fecha_cita").val();
                    var doctor_sel  = $("#doctor_sel").val();
                    var horas_quote     = [];
                    //var result = null;
                    var cont            = 0;

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });     

                    $.ajax({ 
                        url: ' {{ url('search_cita') }} ', 
                        method: 'post', 
                        data: { 
                            date : fecha,
                            doctor : doctor_sel,
                        }, 
                        success: function(result){ 

                          console.log( result );

                          if( result.length>0 ){

                            $.each(result, function (index, value) {
                              horas_quote[cont] = value['hour'] ;
                              cont++;
                            });                            

                            console.log( horas_quote );

                          }  

                          createTable( horas_quote, result);    

                        } 
                    });            
          }


          function createTable(horas_quote, result){

            var bodytable = null;
            var fecha = $("#fecha_cita").val();
            var arr_horas = [ "09-00", "10-00", "11-00", "12-00", "13-00", "15-00", "16-00", "17-00", "18-00", "19-00"];


                    if( horas_quote.length > 0 ){

                        for (i = 0; i < 10; i++){

                          var id_href = arr_horas[i] + "-" + fecha;
                          var pos_arr = horas_quote.indexOf( arr_horas[i] );
                          var status_class=null;

                          if(  pos_arr >= 0 ){

                            var url       = '{{ route("clientes.show", ":id") }}';
                            url           = url.replace(':id', result[pos_arr]['customer_id']);  

                            switch( result[pos_arr]['status'] ){
                              case 'Disponible': 
                                status_class = '<span class="label label-primary">'+result[pos_arr]['status']+'</span>';
                                break;
                              case 'En espera': 
                                status_class = '<span class="label label-warning">'+result[pos_arr]['status']+'</span>'; 
                                break;
                              case 'Atendido': 
                                status_class = '<span class="label label-success">'+result[pos_arr]['status']+'</span>';
                                break;
                              case 'No asistio': 
                                status_class = '<span class="label label-danger">'+result[pos_arr]['status']+'</span>';
                                break;
                              case 'Reagendo': 
                                status_class = '<span class="label label-default">'+result[pos_arr]['status']+'</span>';
                                break;
                            }

                            bodytable = bodytable + '<tr>' ;
                            bodytable = bodytable + ' <td>' + arr_horas[i] + '</td>' ;
                            bodytable = bodytable + ' <td>' + fecha + '</td>' ;
                            bodytable = bodytable + ' <td><a href="'+url+'" target="_blank" onclick="saluda(this.id)">'+result[pos_arr]['customer']+' </a></td>' ;
                            bodytable = bodytable + ' <td>'+result[pos_arr]['contract']+' </td>' ;
                            bodytable = bodytable + ' <td> '+result[pos_arr]['treatment']+'</td>' ;
                            bodytable = bodytable + ' <td> ' +result[pos_arr]['observation']+ '</td>' ;
                            bodytable = bodytable + ' <td>' + result[pos_arr]['doctor'] + ' </td>' ;
                            bodytable = bodytable + ' <td>' + status_class + '</td>' ;
                            bodytable = bodytable + ' <td><a id="edit.'+id_href+'" onclick="editQuote(this.id)" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> </a> <a id="del.'+id_href+'" onclick="deleteQuote(this.id)" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> </a></td>';
                            bodytable = bodytable + '</tr>' ; 
                          }else{
                            bodytable = bodytable + '<tr>' ;
                            bodytable = bodytable + ' <td>' + arr_horas[i] + '</td>' ;
                            bodytable = bodytable + ' <td>' + fecha + '</td>' ;
                            bodytable = bodytable + ' <td> </td>' ;
                            bodytable = bodytable + ' <td> </td>' ;
                            bodytable = bodytable + ' <td> </td>' ;
                            bodytable = bodytable + ' <td> </td>' ;
                            bodytable = bodytable + ' <td> </td>' ;
                            bodytable = bodytable + ' <td> <span class="label label-primary"> Disponible </span> </td>' ;
                            bodytable = bodytable + ' <td><a id="'+id_href+'" onclick="addQuote(this.id)" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> </a> </td>';
                            bodytable = bodytable + '</tr>' ;                            
                          }
                     
                        }
                    }else{
                      for (i = 0; i < 10; i++){
                        var id_href = arr_horas[i] + "-" + fecha;
                        bodytable = bodytable + '<tr>' ;
                        bodytable = bodytable + ' <td>' + arr_horas[i] + '</td>' ;
                        bodytable = bodytable + ' <td>' + fecha + '</td>' ;
                        bodytable = bodytable + ' <td></td>' ;
                        bodytable = bodytable + ' <td> </td>' ;
                        bodytable = bodytable + ' <td> </td>' ;
                        bodytable = bodytable + ' <td> </td>' ;
                        bodytable = bodytable + ' <td> </td>' ;
                        bodytable = bodytable + ' <td> <span class="label label-primary"> Disponible </span> </td>' ;
                        bodytable = bodytable + ' <td><a id="'+id_href+'" onclick="addQuote(this.id)" class="btn btn-primary btn-xs"><i class="fa fa-check"></i> </a> </td>';
                        bodytable = bodytable + '</tr>' ;                      
                      }                      
                    }
                    
                    $("#table-body").html( bodytable );                       
          }

          function addQuote(id){
            $("#modal-date").val( id );
            $("#modalQuote").modal('show');
          }

          function saveQuote(){
            var id = $("#modal-date").val();
            var fecha = $("#fecha_cita").val();
            var cus = $("#customer_id").val();
            var doc = $("#doctor_sel").val();
            var m_treatment = $("#modal-treatment").val();
            var m_observation = $("#modal-observation").val();

            if( m_observation=='' || m_treatment=='' ){
              alert("Por favor llene los campos");
            }else{
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });     

                    $.ajax({ 
                        url: ' {{ url('add_cita') }} ', 
                        method: 'post', 
                        data: { 
                            info : id,
                            customer_id : cus,
                            doctor: doc,
                            treatment : m_treatment,
                            observation : m_observation,
                        }, 
                        success: function(result){ 

                          //console.log( result ); 

                        } 
                    });

                    $("#modalQuote").modal('hide');

                    searchData();              
            }

          }

          function editQuote(id){

            $("#edit-id").val( id );

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });     

                    $.ajax({ 
                        url: ' {{ url('edit_cita') }} ', 
                        method: 'post', 
                        data: { 
                            info : id,
                        }, 
                        success: function(result){ 

                          //console.log( result ); 
                          $("#edit-treatment ").val( result.treatment );
                          $("#edit-observation").val( result.observation );
                          $("#sel-estado").val( result.status );
                          $("#editQuote").modal('show');

                        } 
                    });

            
          }

          function updateQuote(){
            var observation = $("#edit-observation").val();
            var treatment   = $("#edit-treatment").val();
            var status = $("#sel-estado").val();
            var id = $("#edit-id").val();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });     

                    $.ajax({ 
                        url: ' {{ url('update_cita') }} ', 
                        method: 'post', 
                        data: { 
                            observation : observation,
                            treatment : treatment,
                            status : status,
                            id: id,
                        }, 
                        success: function(result){ 

                          //console.log( result ); 
                          $("#editQuote").modal('hide');
                          searchData();

                        } 
                    });

          }

          function deleteQuote(id){

            if(confirm("¿Esta seguro que desea eliminar la cita?")){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });     

                    $.ajax({ 
                        url: ' {{ url('del_cita') }} ', 
                        method: 'post', 
                        data: { 
                            info : id,
                        }, 
                        success: function(result){ 

                          //console.log( result ); 

                        } 
                    });

                    searchData();
            }
    
          }
  
        </script>

@endsection