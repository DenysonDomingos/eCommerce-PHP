<?php
  include 'connect.php';

  //Routes
   $tpl = 'includes/templates/'; //Template Directory
   $css = 'layout/css/'; //CSS Directory
   $js = 'layout/js/'; //JS Directory
   $lang = 'includes/languages/'; //Language Directory

  //Include the important files
  include $lang . 'portugues.php';
  include $tpl . 'header.php';

  //Includ NavBar on all pages expect the one with $noNavbar variable
  if (!isset($noNavbar)){ include $tpl . 'navbar.php'; }
 ?>
