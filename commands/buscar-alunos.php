<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/**
 * #var Aluno[] $alunoList
 */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}<br>";
}

$nico = $alunoRepository->find(5);
echo "<br>".$nico->getNome()."<br>";

$sergioLopes = $alunoRepository->findBy([
    'nome' => 'Olivia Alcoforado'
]);

echo "<br>";

var_dump($sergioLopes);