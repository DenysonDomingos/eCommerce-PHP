<?php

  function lang( $phrase ){
    static $lang = array (
      // Dashboard Page
      'HOME_ADMIN' => 'Inicio',
      'CATEGORIES' => 'Categorias',
      '' => '',
      '' => '',
    );
    return $lang[$phrase];
  }

 ?>
