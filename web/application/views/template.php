<?php $this->load->view('inc/header'); ?>

<!-- Content -->
<?php if (isset($page) && $page) $this->load->view($page); ?>
<!-- End of Content -->

<?php $this->load->view('inc/footer'); ?>