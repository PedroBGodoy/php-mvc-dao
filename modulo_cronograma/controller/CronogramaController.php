<?php

namespace PPC\modulo_cronograma\controller;

use PPC\core\Conexao;
use PPC\modulo_cronograma\dao\CronogramaDAO;
use PPC\modulo_cronograma\dao\ProcessoCronogramaDAO;
use PPC\modulo_cronograma\model\Cronograma;
use PPC\modulo_cronograma\model\CronogramaProcessos;
use PPC\modulo_cronograma\view\CronogramaView;
use PPC\modulo_processo\dao\ProcessoDAO;

class CronogramaControlle
{
    private CronogramaDAO $cronogramaDAO;
    private ProcessoCronogramaDAO $processoCronogramaDAO;

    private CronogramaView $cronogramaView;

    public function __construct()
    {
        $this->cronogramaDAO = new CronogramaDAO(new Conexao);
        $this->processoCronogramaDAO = new ProcessoCronogramaDAO(new Conexao);
        $this->processoDAO = new ProcessoDAO(new Conexao);

        $this->cronogramaView = new CronogramaView();
    }

    public function listarCronogramas()
    {
        $cronogramas = $this->cronogramaDAO->getCronogramas();
        foreach ($cronogramas as $cronograma) {
            $processosCronograma = $this->processoCronogramaDAO->getProcessosPorCronograma($cronograma[Cronograma::SQ_CRONOGRAMA]);
            $cronogramasProcesso[] = new CronogramaProcessos($cronograma, $processosCronograma);
        }

        return $this->cronogramaView->listartCronogramasProcessos($cronogramasProcesso);
    }
}
