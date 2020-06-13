<?php

use PPC\core\Conexao;
use PPC\modulo_processo\dao\ProcessoDAO;
use PPC\modulo_processo\view\ProcessoView;

class ProcessoController
{
    private ProcessoDAO $processoDAO;
    private ProcessoView $processoView;

    public function __construct()
    {
        $this->processoDAO = new ProcessoDAO(new Conexao());
        $this->processoView = new ProcessoView();
    }

    public function getProcesso()
    {
        $sqProcesso = 1;

        $processo = $this->processoDAO->getProcesso($sqProcesso);

        return $this->processoView->mostrarProcesso($processo);
    }
}
