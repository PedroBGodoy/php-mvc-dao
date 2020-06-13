<?php

use ppc\core\Conexao;
use ppc\modulo_processo\dao\ProcessoDAO;
use ppc\modulo_processo\view\ManterProcessoView;

class ProcessoController
{
    private ProcessoDAO $processoDAO;
    private ManterProcessoView $processoView;

    public function __construct()
    {
        $this->processoDAO = new ProcessoDAO(new Conexao());
        $this->processoView = new ManterProcessoView();
    }

    public function getProcesso()
    {
        $sqProcesso = 1;

        $processo = $this->processoDAO->getProcesso($sqProcesso);

        return $this->processoView->mostrarProcesso($processo);
    }
}
