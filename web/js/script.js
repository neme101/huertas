jQuery(document).ready(function() {
  /* Wizard */
  $('#form-wizard a[data-wizard-go]').click(function(){
    $('#'+$(this).attr('data-wizard-parent')).toggleClass('active');
    $('#'+$(this).attr('data-wizard-go')).toggleClass('active');
  });
});
