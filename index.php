<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso; // instancia do Curso
use App\Uteis\Conexao; // instancia da Conexao

try {
    $configBancoDados = require 'config/banco-de-dados.php';
$conexao = new Conexao($configBancoDados); // armazena os dados do banco


$cursoRepositorio = new Curso($conexao);
$cursos = $cursoRepositorio->todos(); // chama o método todos

} catch (\PDOException $e) {
    echo $e->getMessage();
    exit;
}

require_once "exibicao/principal.php";

