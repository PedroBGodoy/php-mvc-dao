<?php

namespace PPC\core;

class DAO
{
    protected $conexao;

    public function __construct(IConexao $conexao)
    {
        $this->conexao = new $conexao();
    }
}
