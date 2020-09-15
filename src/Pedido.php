<?php

namespace Alura\DesignPattern;

class Pedido
{
    public string $cliente;

    public \DateTimeInterface $dataFinalizacao;

    public Orcamento $orcamento;
}
