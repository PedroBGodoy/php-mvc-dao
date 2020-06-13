<?php

namespace PPC\modulo_cronograma\controller;

use PPC\core\Conexao;
use PPC\modulo_cronograma\dao\ProcessoCronogramaDAO;
use PPC\modulo_cronograma\model\ProcessoCronograma;
use PPC\modulo_cronograma\view\ProcessoCronogramaView;

class ProcessoCronogramaController
{
    private $processoCronogramaDAO;
    private $view;

    public function __construct()
    {
        $this->processoCronogramaDAO = new ProcessoCronogramaDAO(new Conexao);
        $this->view = new ProcessoCronogramaView();
    }

    public function listarProcessosVinculados(int $sqCronograma)
    {
        $sqCronograma = $sqCronograma ?? $_REQUEST['sq_cronograma'];

        $processos = $this->processoCronogramaDAO->getProcessosPorCronograma($sqCronograma);

        return $this->view->listarProcessos($processos);
    }

    public function vincularProcesso(int $sqProcessoCronograma, int $sqProcesso, int $sqCronograma)
    {
        $sqProcessoCronograma = $sqProcessoCronograma ?? $_REQUEST['sq_processo_cronograma'];
        $sqProcesso = $sqProcesso ?? $_REQUEST['sq_processo'];
        $sqCronograma = $sqCronograma ?? $_REQUEST['sq_cronograma'];


        $processoCronograma = new ProcessoCronograma();
        $processoCronograma->setSqProcessoCronograma($sqProcessoCronograma);
        $processoCronograma->setSqProcesso($sqProcesso);
        $processoCronograma->setSqCronograma($sqCronograma);

        $this->processoCronogramaDAO->createProcessoCronograma($processoCronograma);
    }
}
