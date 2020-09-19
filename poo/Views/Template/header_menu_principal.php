<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pagina de museos desarrollada por DevCore">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- importante para responsive-->
    <meta name="author" content="Devcore">
    <link rel="shortcut icon" href="<?php echo media();?>/images/favicon.ico">
    <title><?php echo $data['page_tag']?></title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo media(); ?>/css/style.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Remember to include jQuery :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="<?php echo base_url()?>/dashboard">Museo</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
       <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="<?php echo base_url();?>/opciones"><i class="fa fa-cog fa-lg"></i> Configuraciones</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url();?>/perfil"><i class="fa fa-user fa-lg"></i> Perfil</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <?php require_once("nav_Menu_principal.php"); ?>