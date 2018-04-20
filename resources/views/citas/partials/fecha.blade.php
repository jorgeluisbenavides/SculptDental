
    <div class="row">

      <div class="col-md-12 col-sm-4 col-xs-12 form-group has-feedback">
        {{ Form::text('customer', $customer->full_name ,['class'=>'form-control has-feedback-left text-capitalize','disabled'=>'disabled', 'id'=>'name']) }}
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
        <!--<input type="text" placeholder="Apellido Paterno *" class="form-control">-->
        {{ Form::date('fecha_cita', null, ['class'=>'form-control', 'id'=>'fecha_cita', 'required' => 'required']) }}
      </div>                                   

      <div class="col-md-12 col-sm-4 col-xs-12 form-group">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Folio">-->
        {{ Form::select('doctor', $doctors ,null, ['class'=>'form-control', 'id'=>'doctor_sel']) }}
      </div>

      {{ Form::hidden('customer_id', $customer->id, array('id' => 'customer_id')) }}

    </div>

    <div class="ln_solid"></div>

    <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
    <!--<button class="btn btn-primary" type="reset">Limpiar</button>-->
    <button type="submit" class="btn btn-success" id="btn-disponibilidad">Ver disponibilidad</button>
