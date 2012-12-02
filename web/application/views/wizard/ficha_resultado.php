<div class="ficha span4">
  <div class="ficha-header">
    <img src="/img/cultivos/<?= $cultivo['foto']; ?>" alt="<?= $cultivo['nombre']; ?>" width="80" class="thumb pull-left">
    <h4><a href="#" onclick="load_modal_ficha('/cultivos/<?= $cultivo['id']; ?>/<?= url_title($cultivo['nombre']); ?>')"><?= $cultivo['nombre']; ?></a> <small><?= $cultivo['familia']; ?></small></h4>
  </div>
</div>