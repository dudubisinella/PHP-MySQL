<?php

namespace App\Repositorio;

use App\Uteis\Conexao;

abstract class RepositorioBase // base para outros repositorio
{
    protected Conexao $conexao; // Guarda a conexao

    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao; // recebe a conexao na propriedade conexao
    }

    protected function select(string $tabela)
    {
        $sql = "select * from $tabela"; // seleciona a tabela

        $resultado = $this->conexao->query($sql); // o query faz a função de executar
        
        return $resultado->fetchAll(\PDO::FETCH_ASSOC);
    }
}