<?php 

require __DIR__.'/vendor/autoload.php';

use   \App\Session\Login;

Login::requireLogin();

if (isset($_POST['clientes_id'])) {
              
    if (isset($_POST['id'])) {
  
      foreach ($_POST['id'] as $id) {
      
      }
    }
}

include __DIR__.'/includes/layout/header.php';
include __DIR__.'/includes/layout/top.php';
include __DIR__.'/includes/layout/menu.php';
include __DIR__.'/includes/layout/content.php';
include __DIR__.'/includes/cliente/cliente-form-insert.php';
include __DIR__.'/includes/layout/footer.php';