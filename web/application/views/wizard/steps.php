<div class="row">
  <div class="span12 center-text">
    <h1 class="rum-raisin text-orange">Como empiezo con mi huerta?</h1>
  </div>
</div>

<div class="well wellwizard">
  <form action="/wizard/resultados" method="post" id="form-wizard">
    <div id="paso-1" class="active pasos">
      <fieldset>
        <legend>Pais</legend>
        <span class="help-block">En este momento solo tenemos datos disponibles para Uruguay</span>
        <input type="hidden" name="pais" value="Uruguay">
        <p class="pull-right">
          <a class="btn btn-info" data-wizard-parent="paso-1" data-wizard-go="paso-2">Siguiente<i class="icon-chevron-right icon-white"></i></a>
        </p>
      </fieldset>
    </div>

    <div id="paso-2" class="pasos">
      <fieldset>
        <legend>Cuando pensas empezar a plantar?</legend>
        <select name="inicio_de_plantado">
          <option value="<?= helper_fecha(date('m')); ?>">Ahora</option>
          <option value="Enero">Enero</option>
          <option value="Febrero">Febrero</option>
          <option value="Marzo">Marzo</option>
          <option value="Abril">Abril</option>
          <option value="Mayo">Mayo</option>
          <option value="Junio">Junio</option>
          <option value="Julio">Julio</option>
          <option value="Agosto">Agosto</option>
          <option value="Setiembre">Setiembre</option>
          <option value="Octubre">Octubre</option>
          <option value="Noviembre">Noviembre</option>
          <option value="Diciembre">Diciembre</option>
        </select>
        <span class="help-block">Hay ciertos vegetales que solo pueden ser plantados en ciertos momentos del año</span>
        <p class="pull-left">
          <a class="btn btn-info" data-wizard-parent="paso-2" data-wizard-go="paso-1">Anterior<i class="icon-chevron-left icon-white"></i></a>
        </p>
        <p class="pull-right">
          <a class="btn btn-info" data-wizard-parent="paso-2" data-wizard-go="paso-3">Siguiente<i class="icon-chevron-right icon-white"></i></a>
        </p>
      </fieldset>
    </div>
    <div id="paso-3" class="pasos">
      <fieldset>
        <legend>Tenes macetas o jardineras para preparar almacigos y trasplantar?</legend>
        <label class="radio">
          <input type="radio" name="almacigos" value="si">
          Si, voy a preparar almacigos
        </label>
        <label class="radio">
          <input type="radio" name="almacigos" value="no">
          No, voy a plantar directamente en la tierra
        </label>
        <span class="help-block">El tener macetas facilita la preparacion de ciertos vegetales, antes de llevarlos a la tierra. <a href="/datos/metodos-de-siembra">Averiguar mas sobre metodos de siembra</a></span>
        <p class="pull-left">
          <a class="btn btn-info" data-wizard-parent="paso-3" data-wizard-go="paso-2">Anterior<i class="icon-chevron-left icon-white"></i></a>
        </p>
        <p class="pull-right">
          <a class="btn btn-info" data-wizard-parent="paso-3" data-wizard-go="paso-4">Siguiente<i class="icon-chevron-right icon-white"></i></a>
        </p>
      </fieldset>
    </div>
    <div id="paso-4" class="pasos">
      <fieldset>
        <legend>Como estas de paciencia?</legend>
        <label class="radio">
          <input type="radio" name="tiempo_de_cosecha" value="90">
          No mas de 90 dias
        </label>
        <label class="radio">
          <input type="radio" name="tiempo_de_cosecha" value="150">
          Creo que hasta 150 dias podria esperar
        </label>
        <label class="radio">
          <input type="radio" name="tiempo_de_cosecha" value="150+">
          Paciencia es mi segundo nombre, espero lo que sea necesario
        </label>
        <span class="help-block">Distintos cultivos tienen distintos tiempos de cosechas y se pueden adaptar los cultivos elegidos de acuerdo a las preferencias y a la posibilidad de esperar de cada persona, grupo o familia</span>
        <p class="pull-left">
          <a class="btn btn-info" data-wizard-parent="paso-4" data-wizard-go="paso-3">Anterior<i class="icon-chevron-left icon-white"></i></a>
        </p>
        <p class="pull-right">
          <input type="submit" class="btn btn-info" value="Finalizar">
        </p>
      </fieldset>
    </div>
  </form>
<br class="clearfix">
</div>
<br class="clearfix">