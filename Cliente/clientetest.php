<?php 

require_once 'cliente.php'



use PHPUnit\Framework\Testcase;

class Exemplo1Test extends Testcase
{
	public function testCriacaoCliente(){

	$cliente = new Cliente('Felipe');

	$this->assertSame("Felipe", $cliente->getNome());
	}

}