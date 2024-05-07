<?php

require_once 'vendor/autoload.php'; // Carrega o autoload do Composer
use Faker\Factory;

// Criando uma instância do Faker
$faker = Factory::create();

// Gerando dados aleatórios
$nome = $faker->name;
$email = $faker->email;

// Exibindo os dados gerados
echo "Nome: $nome\n";
echo "Email: $email\n";

?>
