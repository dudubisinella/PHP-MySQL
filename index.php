<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

try {
    $configBancoDados = require 'config/banco-de-dados.php';
$conexao = new Conexao($configBancoDados);


$cursoRepositorio = new Curso($conexao);
$cursos = $cursoRepositorio->todos();
} catch (\PDOException $e) {
    echo $e->getMessage();
    exit;
}

require_once "exibicao/principal.php";

