<?php

namespace PPC\modulo_cronograma\dao;

use PPC\core\DAO;
use PPC\modulo_cronograma\model\Cronograma;

class CronogramaDAO extends DAO
{
    public function getCronogramas(): Cronograma
    {
        $sql = "SELECT
                    SQ_CRONOGRAMA,
                    NO_CRONOGRAMA
                FROM PPC.TB_CRONOGRAMA_PROCESSO_RISCO";

        $this->conexao->prepare($sql);
        $this->conexao->execute();
        $dado = $this->conexao->fetchFirst();

        return new Cronograma($dado[Cronograma::SQ_CRONOGRAMA], $dado[Cronograma::NO_CRONOGRAMA]);
    }

    public function getCronograma(int $sqCronograma)
    {
        $sql = "SELECT
                    SQ_CRONOGRAMA,
                    NO_CRONOGRAMA
                FROM PPC.TB_CRONOGRAMA_PROCESSO_RISCO
                WHERE SQ_CRONOGRAMA = :SQ_CRONOGRAMA";

        $this->conexao->prepare($sql);
        $this->conexao->bind(Cronograma::SQ_CRONOGRAMA, $sqCronograma);
        $this->conexao->execute();
        $dados = $this->conexao->fetchAll();

        foreach ($dados as $dado) {
            $cronogramas[] = new Cronograma($dado[Cronograma::SQ_CRONOGRAMA], $dado[Cronograma::NO_CRONOGRAMA]);
        }
        return $cronogramas;
    }

    public function createCronograma()
    {
    }
}
