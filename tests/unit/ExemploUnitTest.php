<?php
require_once 'src/exemplo-unit.php';
use PHPUnit\Framework\TestCase;

class ExemploUnitTest extends TestCase {

    public function testDobro() {
        $this->assertEquals(4, dobro(2));
        $this->assertEquals(10, dobro(5));
        $this->assertEquals(0, dobro(0));
        // Teste para verificar se a função retorna o dobro de um número negativo
        $this->assertEquals(-6, dobro(-3));
        // Teste para verificar se a função retorna o dobro de um número decimal
        $this->assertEquals(6.8, dobro(3.4));
    }

    public function testTriplo() {
        // Teste para verificar se a função retorna o triplo de 3
        $this->assertEquals(9, triplo(3));
        // Teste para verificar se a função retorna o triplo de -2
        $this->assertEquals(-6, triplo(-2));
        // Teste para verificar se a função retorna o triplo de 0
        $this->assertEquals(0, triplo(0));
    }
}
?>