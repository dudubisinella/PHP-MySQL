<?php 

namespace App\Uteis;

class Conexao extends \PDO // PDO extensão para acesso a banco de dados
{
    public function __construct(array $dados)
    {
        $opcoes = [
            \PDO::ATTR_PERSISTENT => $dados['conexao-persistente'],
            \PDO::ATTR_ERRMODE => $dados['modo-de-erro']
        ];

        $dns = \vsprintf('%s:host=%s;dbname=%s', $dados);
        // dns = sistema de nomes de dominio
         // recebe os dados do banco de dado; %s= string substituida
        

        parent::__construct($dns, $dados['usuario'], $dados['senha'], $opcoes); // passa os dados
    }
}