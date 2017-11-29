<?php 

require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;

	public function setUp(){
		$this->estoque = new Estoque();
	}



	public function testAddItem(){
		$item = "Blusa X";
		$quantidade = 10;

		
		$this->estoque->addItem($item,$quantidade);

		$this->assertSame($quantidade,$this->estoque->getItem($item));

	}
	public function testSomaQuantidade(){
		$item = "Blusa X";
		
		$this->estoque->addItem($item,1);
		$this->estoque->addItem($item,2);
		$this->estoque->addItem($item,3);

		$this->assertSame(6,$this->estoque->getItem($item));
	}

	/**
	* @expectedException InvalidArgumentException
	* @expectedExceptionMessage Item não existe no estoque!
	*/
	public function testItemInvalido()
	{
		$this->estoque->getItem('blusa Y');
	}

	public function testRemoveQuantidade(){
		$this->estoque->addItem("Blusa A", 10);
		$this->estoque->removeItem("Blusa A", 4);
		$this->assertSame(6,$this->estoque->getItem("Blusa A"));
	}
}






 ?>