<?php

namespace PPC\modulo_processo\model;

class Processo
{
    public const SQ_PROCESSO = "SQ_PROCESSO";
    public const NO_PROCESSO = "NO_PROCESSO";
    public const CD_PROCESSO = "CD_PROCESSO";

    private $sqProcesso;
    private $noProcesso;
    private $cdProcesso;

    public function __construct(int $sqProcesso = null, string $noProcesso = null, int $cdProcesso = null)
    {
        $this->setSqProcesso($sqProcesso);
        $this->setNoProcesso($noProcesso);
        $this->setCdProcesso($cdProcesso);
    }

    public function getSqProcesso(): int
    {
        return $this->sqProcesso;
    }
    public function setSqProcesso(int $sqProcesso)
    {
        $this->sqProcesso = $sqProcesso;
    }
    public function getNoProcesso(): string
    {
        return $this->noProcesso;
    }
    public function setNoProcesso(string $noProcesso)
    {
        $this->noProcesso = $noProcesso;
    }
    public function getCdProcesso(): int
    {
        return $this->cdProcesso;
    }
    public function setCdProcesso(int $cdProcesso)
    {
        $this->cdProcesso = $cdProcesso;
    }

    protected function setProcesso(Processo $processo)
    {
        $this->setSqProcesso($processo->getSqProcesso);
        $this->setNoProcesso($processo->getNoProcesso);
        $this->setCdProcesso($processo->getCdProcesso);
    }
}
