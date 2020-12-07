<?php

namespace App\Repositorio;

use App\Entidade\Curso as CursoEntidade;

class Curso extends RepositorioBase
{
    public function todos()
    {
        $cursosArray = $this->select('cursos'); // chama o nome da tabela

        $cursosObjeto = []; 

        foreach ($cursosArray as $curso) {
            $cursosObjeto[] = CursoEntidade::fromArray($curso);
        }

        return $cursosObjeto;
    }
}