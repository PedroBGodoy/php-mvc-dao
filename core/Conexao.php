<?php

namespace PPC\core;

class Conexao implements IConexao
{
    public $pdo;

    public function prepare(string $sql)
    {
    }

    public function execute(): bool
    {
        return false;
    }

    public function fetchAll(): array
    {
        return [];
    }
}
