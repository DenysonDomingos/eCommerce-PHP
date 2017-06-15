<?php

  function lang($phrase){
    static $lang = array (

      // Navbar links
      'HOME_ADMIN'    => 'Inicio',
      'CATEGORIES'    => 'Categorias',
      'ITEMS'         => 'Itens',
      'MEMBERS'       => 'Membros',
      'STATISTICS'    => 'Estatisticas',
      'LOGS'          => 'Logs',
    );
    return $lang[$phrase];
  }

 ?>
