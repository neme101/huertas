<div class="row">
  <div class="span12 center-text">
    <h1 class="rum-raisin text-orange">Con esto podrias empezar</h1>
  </div>
</div>
<div class="row">
  <div class="well span9">
    <?php if(!$sugerencias): ?>
      <p>
        Ugh! No tenemos resultados para tus condiciones. A lo mejor podrias probar de nuevo cambiando un poco las condiciones.
      </p>
      <a href="/wizard" class="btn btn-primary">Volver a intentar</a>
    <?php else: ?>
      <?php foreach($sugerencias as $cultivo): ?>
      <?php $this->load->view('wizard/ficha_resultado',array('cultivo' => $cultivo)); ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>

  <div class="well sidebar span3"></div>
</div>