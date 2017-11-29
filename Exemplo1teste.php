<?php 

use PHPUnit\Framework\Testcase;

class Exemplo1Test extends Testcase
{

	public function testSoma(){
		
		$soma = 2+3;
//Teste se é idêntico.
		$this->assertSame(5, $soma);
	}


	public function testTrue(){
		
		$verdadeiro = true;

		$this->assertTrue($verdadeiro);
	}


	public function testFalse(){
		
		$verdadeiro = false;

		$this->assertfalse($verdadeiro);
	}


	public function testCount(){
		
		$array = [0,1,2];

		$this->assertCount(3, $array);
	}


	public function testEmpty(){
		
		$vazio = null;

		$this->assertEmpty($vazio);
	}



	public function testNull(){
		
		$vazio = null;

		$this->assertNull($vazio);
	}



	public function testEqual(){
		
		$a = "1";
		$b = 1;

		$this->assertEquals($a,$b);
	}
}