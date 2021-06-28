<?php
namespace App\Controllers;

use \Core\View;

class Catalog extends \Core\Controller
{
  public function productsAction()
  {
    View:renderTemplate('Catalog/index.html', [
      'products' => User::getAll();
    ]);
  }

}
 ?>
