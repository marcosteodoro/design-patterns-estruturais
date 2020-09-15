<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    private $valorOrcamento;

    private $numeroDeItens;

    private $nomeCliente;

    public function __construct(
        float $valorOrcamento,
        int $numeroDeItens,
        string $nomeCliente
    )
    {
        $this->$valorOrcamento = $valorOrcamento;
        $this->$numeroDeItens = $numeroDeItens;
        $this->$nomeCliente = $nomeCliente;
    }

    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }

    public function getNumeroDeItens()
    {
        return $this->numeroDeItens;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }
}
