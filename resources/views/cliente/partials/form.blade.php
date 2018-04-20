<div class="row">

      <div class="col-md-12 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Folio">-->
        {{ Form::text('folio', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Folio' , 'id'=>'folio']) }}
        <span class="fa fa-folder-o form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombre *">-->
        {{ Form::text('name', null, ['class'=>'form-control has-feedback-left text-capitalize','placeholder'=>'Nombre *' , 'id'=>'name']) }}
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
      </div>

      <!--<div class="col-md-4 col-sm-12 col-xs-12 form-group">
        <input type="text" placeholder="Nombre" class="form-control">
      </div>-->

      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
        <!--<input type="text" placeholder="Apellido Paterno *" class="form-control">-->
        {{ Form::text('last_name_one', null, ['class'=>'form-control text-capitalize','placeholder'=>'Apellido Paterno *' , 'id'=>'last_name_one']) }}
      </div> 

      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
        <!--<input type="text" placeholder="Apellido Materno *" class="form-control">-->
        {{ Form::text('last_name_two', null, ['class'=>'form-control text-capitalize','placeholder'=>'Apellido Materno *' , 'id'=>'last_name_two']) }}
      </div>  

      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
        <!--<textarea class="form-control" placeholder="Direccion *"></textarea>-->
        {{ Form::text('address', null, ['class'=>'form-control text-capitalize','placeholder'=>'Direccion' , 'id'=>'address']) }}
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
        <!--<textarea class="form-control" placeholder="Referencias de domicilio" rows="4"></textarea>-->
        {{ Form::textarea('references', null, ['size' => '30x2','class'=>'form-control', 'id'=>'has-feedback-left', 'placeholder' => 'Referencias de domicilio' ]) }}
      </div>                        

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Telefono casa">-->
        {{ Form::text('cell_phone', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Teléfono movil' , 'id'=>'cell_phone']) }}
        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control" id="inputSuccess2" placeholder="Telefono celular">-->
        {{ Form::text('home_phone', null, ['class'=>'form-control','placeholder'=>'Teléfono de casa' , 'id'=>'home_phone']) }}
      </div> 

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Edad">-->
        {{ Form::number('age', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Edad' , 'id'=>'age']) }}
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
      </div>       

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
    	{{ Form::select('sex', ['Masculino' => 'Masculino', 'Femenino' => 'Femenino'],  '', ['class' => 'form-control', 'id'=>'sex']) }}
      </div>                                           

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
       {{ Form::select('occupation_id', $occupations, null, ['class' => 'form-control', 'id'=>'occupation_id']) }} 
      </div>   

      <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback">
         {{ Form::select('civil_state', ['Soltero' => 'Soltero', 'Casado' => 'Casado', 'Viudo' => 'Viudo'],  '', ['class' => 'form-control', 'id'=>'civil_state']) }}
      </div>                           

      @if( !isset($customer) )
        <div class="col-md-12 col-sm-12 col-xs-12 form-group">
          <!--<label>Foto del cliente</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="archivitos">-->
          {{ Form::label('img_nam', 'Fotograf&iacute;a (jpeg, jpg, png)') }}
          {!! Form::file('img_name', null, ['class'=>'form-control-file', 'id'=>'img_name']) !!}
        </div>
      @endif
      
    </div>

    <div class="ln_solid"></div>

    <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
    <button class="btn btn-primary" type="reset">Limpiar</button>
    <button type="submit" class="btn btn-success">Guardar</button>