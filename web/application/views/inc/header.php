<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Tené tu huerta</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href='http://fonts.googleapis.com/css?family=Rum+Raisin&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="/css/bootstrap.css" rel="stylesheet">
  <style type="text/css">
    body { padding-top: 60px; padding-bottom: 40px; }
  </style>
  <link href="/css/styles.css" rel="stylesheet">
  <link href="/css/home.css" rel="stylesheet">
  <link href="/css/wizard.css" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Le fav and touch icons -->
  <link rel="shortcut icon" href="">
  <link rel="apple-touch-icon" href="">
  <link rel="apple-touch-icon" sizes="72x72" href="">
  <link rel="apple-touch-icon" sizes="114x114" href="">
</head>
<body class="<?= isset($body_class) ? $body_class : ''; ?>">
<?php if($has_top_navbar) $this->load->view('components/top_navbar'); ?>
  <div class="container-fluid">