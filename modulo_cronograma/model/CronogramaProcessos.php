<?php

namespace PPC\modulo_cronograma\model;

class CronogramaProcessos extends Cronograma
{
    public array $processosCronograma;

    public function __construct(Cronograma $cronograma, array $processosCronograma)
    {
        $this->setCronograma($cronograma);
        $this->processosCronograma = $processosCronograma;
    }
}
