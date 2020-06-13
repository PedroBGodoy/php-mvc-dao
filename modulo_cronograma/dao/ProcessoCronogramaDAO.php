<?php

namespace PPC\modulo_cronograma\dao;

use PPC\core\DAO;
use PPC\modulo_cronograma\model\ProcessoCronograma;
use PPC\modulo_processo\model\Processo;

class ProcessoCronogramaDAO extends DAO
{
    public function getProcessosPorCronograma(int $sqCronograma)
    {
        $sql = "SELECT
                    PRO.SQ_PROCESSO,
                    PRO.CD_PROCESS,
                    PRO.NO_PROCESSO
                FROM PPC.TB_PROCESSO PRO
                INNER JOIN PPC.TB_PROCESSO_CRONOGRAMA PCR ON PCR.SQ_CRONOGRAMA = :SQ_CRONOGRAMA AND PCR.SQ_PROCESSO = PRO.SQ_PROCESSO";

        $this->conexao->prepare($sql);
        $this->conexao->bind("SQ_CRONOGRAMA", $sqCronograma);
        $this->conexao->execute();
        $dados = $this->conexao->fetchAll();

        foreach ($dados as $dado) {
            $processosCronograma[] = new Processo($dado[Processo::SQ_PROCESSO], $dado[Processo::CD_PROCESSO], $dado[Processo::NO_PROCESSO]);
        }
        return $processosCronograma;
    }

    public function getProcessosCronogramaPorCronograma(int $sqCronograma)
    {
        $sql = "SELECT
                    SQ_PROCESSO_CRONOGRA,
                    SQ_PROCESSO,
                    SQ_CRONOGRAMA
                FROM PPC.TB_PROCESSO_CRONOGRAMA
                WHERE SQ_CRONOGRAMA = :SQ_CRONOGRAMA";

        $this->conexao->prepare($sql);
        $this->conexao->bind(ProcessoCronograma::SQ_CRONOGRAMA, $sqCronograma);
        $this->conexao->execute();
        $dados = $this->conexao->fetchAll();

        foreach ($dados as $dado) {
            $processosCronograma[] = new ProcessoCronograma($dado[ProcessoCronograma::SQ_PROCESSO_CRONOGRAMA], $dado[ProcessoCronograma::NO_PROCESSO], $dado[ProcessoCronograma::SQ_CRONOGRAMA]);
        }
        return $processosCronograma;
    }

    public function createProcessoCronograma(ProcessoCronograma $processoCronograma)
    {
        $sql = "INSERT INTO PPC.TB_PROCESSO_CRONOGRAMA (
                    SQ_PROCESSO_CRONOGRAMA,
                    SQ_PROCESSO,
                    SQ_CRONOGRAMA
                ) VALUES (
                    :SQ_PROCESSO_CRONOGRAMA,
                    :SQ_PROCESSO,
                    :SQ_CRONOGRAMA
                )";

        $this->conexao->prepare($sql);
        $this->conexao->bind(ProcessoCronograma::SQ_PROCESSO_CRONOGRAMA, $processoCronograma->getSqProcessoCronograma());
        $this->conexao->bind(ProcessoCronograma::SQ_PROCESSO, $processoCronograma->getSqProcesso());
        $this->conexao->bind(ProcessoCronograma::SQ_CRONOGRAMA, $processoCronograma->getSqCronograma());

        return $this->conexao->execute();
    }
}
