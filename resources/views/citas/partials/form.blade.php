
    <div class="row">

      <div class="col-md-9 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Nombre *">-->
        {{ Form::text('full_name', null, ['class'=>'form-control has-feedback-left text-capitalize','placeholder'=>'Apellidos Nombre' , 'id'=>'full_name', 'onkeyup'=>'searchCustomer(this.value)']) }}
        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
      </div>

      <div class="col-md-3 col-sm-4 col-xs-12 form-group has-feedback">
        <!--<input type="text" class="form-control has-feedback-left" id="inputSuccess2" placeholder="Folio">-->
        {{ Form::text('folio', null, ['class'=>'form-control has-feedback-left','placeholder'=>'Folio' , 'id'=>'folio', 'onkeyup'=>'searchCustomer(this.value)']) }}
        <span class="fa fa-folder-o form-control-feedback left" aria-hidden="true"></span>
      </div>

    </div>

    <div class="ln_solid"></div>

    <!--<button class="btn btn-primary" type="button">Cancelar</button>-->
    <!--<button class="btn btn-primary" type="reset">Limpiar</button>
    <button type="submit" class="btn btn-success">Buscar</button>-->
