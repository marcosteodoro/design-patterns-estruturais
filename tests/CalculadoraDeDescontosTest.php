<?php

namespace Tests;

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\DesignPatterns\CalculadoraDeDescontos
 */
class CalculadoraDeDescontosTest extends TestCase
{
    /**
     * @test
     */
    public function testaOrcamentoSemDesconto()
    {
        $calculadora = new CalculadoraDeDescontos();
        $orcamento = new Orcamento();
        $orcamento->valor = 50;
        $orcamento->quantidadeItens = 2;
        $this->assertEquals(0, $calculadora->calculaDescontos($orcamento));
    }

    /**
     * @test
     */
    public function testaOrcamentoDescontoMaisDe500Reais()
    {
        $calculadora = new CalculadoraDeDescontos();
        $orcamento = new Orcamento();
        $orcamento->valor = 600;
        $orcamento->quantidadeItens = 2;
        $this->assertEquals(30, $calculadora->calculaDescontos($orcamento));
    }

    /**
     * @test
     */
    public function testaOrcamentoDescontoMaisDeCincoItens()
    {
        $calculadora = new CalculadoraDeDescontos();
        $orcamento = new Orcamento();
        $orcamento->valor = 100;
        $orcamento->quantidadeItens = 6;
        $this->assertEquals(10, $calculadora->calculaDescontos($orcamento));
    }
}
