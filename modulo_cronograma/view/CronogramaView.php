<?php

namespace PPC\modulo_cronograma\view;

class CronogramaView
{

    public function listartCronogramasProcessos(array $cronogramasProcessos)
    {
        $retorno = "";
        foreach ($cronogramasProcessos as $cronogramaProcesso) {

            $retorno .= "{$cronogramaProcesso->getNoCronograma()}<br>";
            foreach ($cronogramaProcesso->processosCronograma as $processoCronograma) {
                $retorno .= " - {$processoCronograma->getNoProcesso()}<br>";
            }
        }

        return $retorno;
    }
}
