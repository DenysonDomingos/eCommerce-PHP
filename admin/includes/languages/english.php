<?php

  function lang( $phrase ){
    static $lang = array (
      'BEM VINDO' => 'Welcome',
      'ADMINISTRADOR' => 'Adminitrator'
    );
    return $lang[$phrase];
  }

 ?>
