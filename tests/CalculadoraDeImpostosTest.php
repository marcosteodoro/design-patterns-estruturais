<?php

namespace Tests;

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icpp;
use Alura\DesignPattern\Impostos\Ikcv;
use Alura\DesignPattern\Orcamento;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\DesignPatterns\CalculadoraDeImpostos
 */
class CalculadoraDeImpostosTest extends TestCase
{
    /**
     * @test
     */
    public function testaCalculoImpostoIcms()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 100;

        $this->assertEquals(10, $calculadora->calcula($orcamento, new Icms()));
    }

    /**
     * @test
     */
    public function testaCalculoImpostoIss()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 100;

        $this->assertEquals(6, $calculadora->calcula($orcamento, new Iss()));
    }

    /**
     * @test
     */
    public function testaCalculoImpostoIcpp()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 600;

        $this->assertEquals(18, $calculadora->calcula($orcamento, new Icpp()));

        $orcamento->valor = 500;

        $this->assertEquals(10, $calculadora->calcula($orcamento, new Icpp()));
    }

    /**
     * @test
     */
    public function testaCalculoImpostoIkcv()
    {
        $calculadora = new CalculadoraDeImpostos();
        $orcamento = new Orcamento();

        $orcamento->valor = 400;
        $orcamento->quantidadeItens = 4;

        $this->assertEquals(16, $calculadora->calcula($orcamento, new Ikcv()));

        $orcamento->valor = 200;

        $this->assertEquals(5, $calculadora->calcula($orcamento, new Ikcv()));
    }
}
