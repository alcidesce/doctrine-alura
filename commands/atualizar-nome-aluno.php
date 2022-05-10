<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();
$alunoRepository = $entityManager->getRepository(Aluno::class);

$id = 2; // $argv[1];
$novoNome = "Alcides Alcoforado"; // $argv[2];

$aluno = $entityManager->find(Aluno::class, $id);
$aluno->setNome($novoNome);

$entityManager->flush();