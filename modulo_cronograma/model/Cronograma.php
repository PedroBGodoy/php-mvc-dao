<?php

namespace PPC\modulo_cronograma\model;

class Cronograma
{
    private $sqCronograma;
    private $noCronograma;

    public const SQ_CRONOGRAMA = "SQ_CRONOGRAMA";
    public const NO_CRONOGRAMA = "NO_CRONOGRAMA";

    public function __construct(int $sqCronograma = null, string $noCronograma = null)
    {
        $this->setSqCronograma($sqCronograma);
        $this->setNoCronograma($noCronograma);
    }

    public function getSqCronograma(): int
    {
        return $this->sqCronograma;
    }
    public function setSqCronograma(int $sqCronograma)
    {
        $this->sqCronograma = $sqCronograma;
    }

    public function getNoCronograma(): string
    {
        return $this->noCronograma;
    }
    public function setNoCronograma(string $noCronograma)
    {
        $this->noCronograma = $noCronograma;
    }

    protected function setCronograma(Cronograma $cronograma)
    {
        $this->setSqCronograma($cronograma->getSqCronograma());
        $this->setNoCronograma($cronograma->getNoCronograma());
    }
}
