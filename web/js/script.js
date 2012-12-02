jQuery(document).ready(function() {
  /* Wizard */
  $('#form-wizard a[data-wizard-go]').click(function(){
    $('#'+$(this).attr('data-wizard-parent')).toggleClass('active');
    $('#'+$(this).attr('data-wizard-go')).toggleClass('active');
  });
});


function load_modal_ficha(url) {
  if($('#modal-ficha')) {
    $('#modal-ficha .modal-body').load(url);
    $('#modal-ficha').modal('show');
  }
}