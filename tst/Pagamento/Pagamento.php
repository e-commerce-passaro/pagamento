<?php
namespace Ecompassaro\Test\Pagamento;

use Ecompassaro\Pagamento\Pagamento as Unidade;

class Pagamento extends PHPUnit_Framework_TestCase
{

  function testToArrayIsArray()
  {
      $unidade = new Unidade();
      $this->assertTrue(is_array($unidade->toArray()));
  }
}
