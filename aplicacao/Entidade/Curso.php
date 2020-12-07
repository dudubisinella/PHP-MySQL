<?php

namespace App\Entidade;

class Curso 
{
    private string $nome;

    private string $versaoFerramenta;

    private int $cargaHoraria;

    private bool $status;

    private bool $deletar;

    public static function fromArray(array $dados)
    {
        $curso = new Curso(); // cria a instancia 
        
        $curso->nome = $dados['nome']; // dentro do array é os nomes que vem do banco de dados
        $curso->versaoFerramenta = $dados['versao_ferramenta'];
        $curso->cargaHoraria = $dados['carga_horaria'];
        $curso->status = $dados['status'];
        $curso->deletar = $dados['status'];

        return $curso;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setVersaoFerramenta(string $versaoFerramenta): void
    {
        $this->versaoFerramenta = $versaoFerramenta;
    }

    public function getVersaoFerramenta(): string
    {
        return $this->versaoFerramenta;
    }

    public function setCargaHoraria(int $cargaHoraria): void
    {
        $this->cargaHoraria = $cargaHoraria;
    }

    public function getCargaHoraria(): int
    {
        return $this->cargaHoraria;
    }

    public function setStatus(bool $status): void
    {
        $this->status = $status;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
    
    public function getDeletar(): bool
    {
        if ($status === 1) {
            
        }
    }
}