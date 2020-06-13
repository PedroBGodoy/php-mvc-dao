<?php

namespace ppc\modulo_processo\view;

use ppc\modulo_processo\model\Processo;

class ManterProcessoView
{
    public function mostrarProcesso(Processo $processo): string
    {
        return $processo->getNoProcesso();
    }
}
