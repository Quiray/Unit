<?php 

require_once 'Calculadora.php';


use PHPUnit\Framework\Testcase;

// class CalculadoraTest extends Testcase
// {

// 	public function testSoma(){
// 		$calculadora = new Calculadora(4,3);

// 		$this->assertSame(7,$calculadora->somar());
// 	}


// 	public function testSub(){
// 		$calculadora = new Calculadora(4,3);

// 		$this->assertSame(1,$calculadora->sub());
// 	}

// 	public function testDiv(){
// 		$calculadora= new Calculadora(10,2);

// 		$this->assertSame(5,$calculadora->div());
// 	}


// 	public function testMult(){
// 		$calculadora = new Calculadora(4,3);

// 		$this->assertSame(12,$calculadora->mult());
// 	}

// }



class CalculadoraTest extends Testcase
{

	private $calculadora;

	public function setUp(){
		$this->calculadora = new Calculadora(5,5);
	}
	

	public function testSoma(){
		$this->assertSame(10,$this->calculadora->somar());
	}


	public function testSub(){
		$this->assertSame(0,$this->calculadora->sub());
	}

	public function testDiv(){
		$this->assertSame(1,$this->calculadora->div());
	}


	public function testMult(){
		
		$this->assertSame(25,$this->calculadora->mult());
	}

}