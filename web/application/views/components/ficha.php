<div class="ficha">
  <div class="ficha-header">
    <img src="/img/cultivos/<?= $cultivo['foto']; ?>" alt="<?= $cultivo['nombre']; ?>" width="80" class="thumb pull-left">
    <h4><?= $cultivo['nombre']; ?> <small><?= $cultivo['familia']; ?></small></h3>
  </div>
  <br class="clearfix">
  <div class="ficha-body">

    <?php if($cultivo->Precios): ?>
      <p>
        <strong>Precio promedio:</strong> $U <?= $cultivo->Precios['precio'] ?> (<?= date('d/M',strtotime($cultivo->Precios['fecha'])) ?>)
        <small class="help-block">Por kg, atado o unidad segun corresponda</small>
      </p>
    <?php endif; ?>
    <ul>
      <li><strong>Parte Comestible:</strong> <?= $cultivo['parte_comestible']; ?></li>
      <li><strong>Meses en que se planta:</strong> <?= $cultivo['meses_plantacion']; ?></li>
      <li><strong>Profundidad de las raices:</strong> <?= $cultivo['profundidad_raices']; ?></li>
      <li><strong>Forma de siembra:</strong> <?= $cultivo['forma_siembra']; ?></li>
      <li><strong>Distancia entre plantas:</strong> <?= $cultivo['distancia_entre_plantas_min']; ?> - <?= $cultivo['distancia_entre_plantas_max']; ?> cm</li>
      <li><strong>Distancia entre surcos:</strong> <?= $cultivo['distancia_entre_surcos_min']; ?> - <?= $cultivo['distancia_entre_surcos_max']; ?> cm</li>
      <li><strong>Plantas en surco de 10m:</strong> <?= $cultivo['plantas_en_10m']; ?></li>
      <li><strong>Germinacion:</strong> <?= $cultivo['germinacion']; ?> dias</li>
      <li><strong>Edad para transplante:</strong> <?= $cultivo['transplante']; ?> dias</li>
      <li><strong>Tiempo para poder cosechar:</strong> <?= $cultivo['tiempo_hasta_cosecha_min']; ?> - <?= $cultivo['tiempo_hasta_cosecha_max']; ?> dias</li>
      <li><strong>Indicador para cosechar:</strong> <?= $cultivo['indicador_cosecha']; ?></li>
      <li><strong>Rendimiento en surco de 10m (por cosecha):</strong> <?= $cultivo['rendimiento_en_10m']; ?></li>
      <?php if($cultivo['semillas_por_gramo']): ?><li><strong>Cantidad (aprox) de semillas por gramo:</strong> <?= $cultivo['semillas_por_gramo']; ?></li><?php endif; ?>
    </ul>
  </div>
</div>