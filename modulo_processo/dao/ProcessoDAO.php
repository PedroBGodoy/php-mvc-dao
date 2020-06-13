<?php

namespace ppc\modulo_processo\dao;

use ppc\core\IConexao;

class ProcessoDAO
{
    private $conexao;

    public function __construct(IConexao $conexao)
    {
        $this->conexao = new $conexao();
    }

    public function getProcesso($sqProcesso)
    {
        $sql = "SELECT
                    SQ_PROCESSO,
                    NO_PROCESSO,
                    CD_PROCESSO
                FROM PPC.TB_PROCESSO
                WHERE SQ_PROCESSO = :SQ_PROCESSO";

        $this->conexao->execute($sql);
        $this->conexao->bind("SQ_PROCESSO", $sqProcesso);
        return $this->conexao->fetchAll();
    }
}
