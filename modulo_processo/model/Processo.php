<?php

namespace ppc\modulo_processo\model;

class Processo
{
    private $sqProcesso;
    private $noProcesso;
    private $cdProcesso;

    public function __construct($sqProcesso, $noProcesso, $cdProcesso)
    {
        $this->setSqProcesso($sqProcesso);
        $this->setNoProcesso($noProcesso);
        $this->setCdProcesso($cdProcesso);
    }

    public function getSqProcesso()
    {
        return $this->sqProcesso;
    }
    public function setSqProcesso($sqProcesso)
    {
        $this->sqProcesso = $sqProcesso;
    }
    public function getNoProcesso(): string
    {
        return $this->noProcesso;
    }
    public function setNoProcesso($noProcesso)
    {
        $this->noProcesso = $noProcesso;
    }
    public function getCdProcesso()
    {
        return $this->cdProcesso;
    }
    public function setCdProcesso($cdProcesso)
    {
        $this->cdProcesso = $cdProcesso;
    }
}
