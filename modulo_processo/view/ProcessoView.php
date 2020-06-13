<?php

namespace PPC\modulo_processo\view;

use PPC\modulo_processo\model\Processo;

class ProcessoView
{
    public function mostrarProcesso(Processo $processo): string
    {
        return $processo->getNoProcesso();
    }
}
