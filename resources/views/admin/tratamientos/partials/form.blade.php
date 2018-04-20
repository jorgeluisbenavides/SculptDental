<div class="row">

      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Folio">-->
        {{ Form::text('name', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Nombre de Tratamiento *' , 'id'=>'name']) }}
        <span class="fa fa-eyedropper form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombre *">-->
        {{ Form::number('amount', null, ['class'=>'form-control has-feedback-left text-capitalize','placeholder'=>'Precio *' , 'id'=>'amount']) }}
        <span class="fa fa-money form-control-feedback left" aria-hidden="true"></span>
      </div> 

      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
        <!--<textarea class="form-control" placeholder="Referencias de domicilio" rows="4"></textarea>-->
        {{ Form::textarea('description', null, ['size' => '30x2','class'=>'form-control', 'id'=>'has-feedback-left', 'placeholder' => 'Descripción *' ]) }}
      </div>                        

      
    </div>

    <div class="ln_solid"></div>

    <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
    <button class="btn btn-primary" type="reset">Limpiar</button>
    <button type="submit" class="btn btn-success">Guardar</button>