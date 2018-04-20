
  <div class="row">

	<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
	  {{ Form::text('name', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Nombre *' , 'id'=>'name']) }}
	  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	</div>

	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	  {{ Form::text('last_name_one', null, ['class'=>'form-control','placeholder'=>'Apellido Paterno *' , 'id'=>'last_name_one']) }}
	</div> 

	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	  {{ Form::text('last_name_two', null, ['class'=>'form-control','placeholder'=>'Apellido Materno *' , 'id'=>'last_name_two']) }}
	</div>

	<div class="col-md-4 col-sm-12 col-xs-12 form-group">
	  {{ Form::number('professional_license', null, ['class'=>'form-control','placeholder'=>'Cedula Profecional *' , 'id'=>'professional_license']) }}
	</div>  

	<div class="col-md-8 col-sm-12 col-xs-12 form-group">
	  {{ Form::textarea('speciality', null, ['size' => '30x2','class'=>'form-control', 'id'=>'has-feedback-left', 'placeholder' => 'Especialidad *' ]) }}
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 form-group">
	  {{ Form::textarea('graduate_university', null, ['size' => '30x2','class'=>'form-control', 'id'=>'has-feedback-left', 'placeholder' => 'Escuela de procedencia *' ]) }}
	</div>                        

	<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
	  {{ Form::text('home_phone', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Teléfono de casa *' , 'id'=>'home_phone']) }}
	  <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
	  {{ Form::text('cell_phone', null, ['class'=>'form-control','placeholder'=>'Teléfono Movil *' , 'id'=>'cell_phone']) }}
	</div> 

	<div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
	  {{ Form::select('sex', ['MALE' => 'MASCULINO', 'FEMALE' => 'FEMENINO'],  '', ['class' => 'form-control', 'id'=>'sex']) }}
	</div>                                                                    

	<div class="col-md-12 col-sm-12 col-xs-12 form-group">
	  {{ Form::label('file', 'Fotograf&iacute;a (jpeg, jpg, png)') }}
      {!! Form::file('img_name', null, ['class'=>'form-control-file', 'id'=>'img_name']) !!}
	</div>

	
  </div>


  <div class="ln_solid"></div>

  <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
  <button class="btn btn-primary" type="reset">Limpiar</button>
  <button type="submit" class="btn btn-success">Agregar</button>