<?php

require_once 'vendor/autoload.php'; // Carrega o autoload do Composer

use PHPUnit\Framework\TestCase;

class ExemploFakerTest extends TestCase {
    public function testGeracaoDeDadosAleatorios() {
        // Captura a saída do buffer de impressão
        ob_start();
        require 'exemplo-faker.php';
        $output = ob_get_clean();

        // Verifica se os dados gerados foram exibidos corretamente
        $this->assertStringContainsString('Nome:', $output);
        $this->assertStringContainsString('Email:', $output);

        // Imprime os dados gerados
        echo "\nDados gerados:\n$output\n";
    }
}

?>