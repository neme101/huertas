<?php
function helper_fecha($numeric_month) {
  $months = array(
    1 => 'Enero',
    2 => 'Febrero',
    3 => 'Marzo',
    4 => 'Abril',
    5 => 'Mayo',
    6 => 'Junio',
    7 => 'Julio',
    8 => 'Agosto',
    9 => 'Setiembre',
    10 => 'Octubre',
    11 => 'Noviembre',
    12 => 'Diciembre',
    );
  if(!array_key_exists($numeric_month, $months)) {
    return false;
  }

  return $months[$numeric_month];
}