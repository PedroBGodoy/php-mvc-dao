<?php

namespace PPC\modulo_processo\dao;

use PPC\core\DAO;
use PPC\core\IConexao;
use PPC\modulo_processo\model\Processo;

class ProcessoDAO extends DAO
{
    public function getProcesso($sqProcesso): Processo
    {
        $sql = "SELECT
                    SQ_PROCESSO,
                    NO_PROCESSO,
                    CD_PROCESSO
                FROM PPC.TB_PROCESSO
                WHERE SQ_PROCESSO = :SQ_PROCESSO";

        $this->conexao->prepare($sql);
        $this->conexao->bind("SQ_PROCESSO", $sqProcesso);
        $this->conexao->execute();

        return $this->conexao->fetchAll();
    }

    public function updateProcesso(Processo $processo): bool
    {
        $sql = "UPDATE PPC.TB_PROCESSO SET
                    NO_PROCESSO = :NO_PROCESSO
                    CD_PROCESSO = :CD_PROCESSO
                WHERE SQ_PROCESSO = :SQ_PROCESSO";

        $this->conexao->prepare($sql);
        $this->conexao->bind("SQ_PROCESSO", $processo->getSqProcesso());

        return $this->conexao->execute();
    }
}
