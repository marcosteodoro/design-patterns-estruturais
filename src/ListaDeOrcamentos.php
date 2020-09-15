<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\EstadoOrcamento;
use Alura\DesignPattern\EstadosOrcamento\Finalizado;

class ListaDeOrcamentos implements \IteratorAggregate, \Countable
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function addOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->orcamentos);
    }

    public function count(): int
    {
        return count($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter($this->orcamentos, function (Orcamento $orcamento) {
            return ($orcamento->estadoAtual instanceof Finalizado);
        });
    }
}
