<div class="row">
  <div class="ficha">
    <div class="ficha-header">
      <img src="/img/cultivos/<?= $cultivo['foto']; ?>" alt="<?= $cultivo['nombre']; ?>" width="80" class="thumb pull-left">
      <h3><?= $cultivo['nombre']; ?> <small><?= $cultivo['familia']; ?></small></h3>
    </div>
    <br class="clearfix">
    <div class="ficha-body">
      <div class="span3">
        <ul>
          <li><strong>Parte Comestible:</strong> <?= $cultivo['parte_comestible']; ?></li>
          <li><strong>Meses en que se planta:</strong> <?= $cultivo['meses_plantacion']; ?></li>
        </ul>
      </div>
      <div class="span3">
        <ul>
          <li><strong>Parte Comestible:</strong> <?= $cultivo['parte_comestible']; ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>