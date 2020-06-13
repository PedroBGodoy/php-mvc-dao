<?php

namespace PPC\modulo_cronograma\view;

use PPC\modulo_processo\model\Processo;

class ProcessoCronogramaView
{

    public function listarProcessos(array $processos)
    {
        $retorno = "";
        foreach ($processos as $processo) {
            $retorno .= "{$processo->getCdProcesso()} - {$processo->getNoProcesso()}<br>";
        }
        return $retorno;
    }
}
