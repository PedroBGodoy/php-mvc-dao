<?php

namespace PPC\modulo_cronograma\model;

use PPC\modulo_processo\model\Processo;

class ProcessoCronograma extends Processo
{
    public const SQ_PROCESSO_CRONOGRAMA = "SQ_PROCESSO_CRONOGRAMA";
    public const SQ_CRONOGRAMA = "SQ_CRONOGRAMA";

    private $sqProcessoCronograma;
    private $sqProcesso;
    private $sqCronograma;

    public function __construct($sqProcessoCronograma = null, $sqProcesso = null, $sqCronograma = null)
    {
        $this->setSqProcessoCronograma($sqProcessoCronograma);
        $this->setSqProcesso($sqProcesso);
        $this->setSqCronograma($sqCronograma);
    }

    public function getSqProcessoCronograma()
    {
        return $this->sqProcessoCronograma;
    }
    public function setSqProcessoCronograma($sqProcessoCronograma)
    {
        $this->sqProcessoCronograma = $sqProcessoCronograma;
    }

    public function getSqProcesso()
    {
        return $this->sqProcesso;
    }
    public function setSqProcesso($sqProcesso)
    {
        $this->sqProcesso = $sqProcesso;
    }

    public function getSqCronograma()
    {
        return $this->sqCronograma;
    }
    public function setSqCronograma($sqCronograma)
    {
        $this->sqCronograma = $sqCronograma;
    }
}
