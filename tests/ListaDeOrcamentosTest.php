<?php

namespace Tests;

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;
use PHPUnit\Framework\TestCase;

/**
 * @covers \Alura\DesignPatterns\ListaDeOrcamentos
 */
class ListaDeOrcamentosTest extends TestCase
{
    /**
     * @test
     */
    public function testaInstanciaClasse()
    {
        $listaDeOrcamentos = new ListaDeOrcamentos();
        $this->assertInstanceOf(\IteratorAggregate::class, $listaDeOrcamentos);
    }

    /**
     * @test
     */
    public function testaIteracaoDaListaDeOrcamentos()
    {
        $orcamentoUm = new Orcamento();
        $orcamentoUm->quantidadeItens = 5;
        $orcamentoUm->valor = 100.20;
        $orcamentoUm->aprova();

        $orcamentoDois = new Orcamento();
        $orcamentoDois->quantidadeItens = 3;
        $orcamentoDois->valor = 50.89;
        $orcamentoDois->reprova();

        $listaDeOrcamentos = new ListaDeOrcamentos();

        $listaDeOrcamentos->addOrcamento($orcamentoUm);
        $listaDeOrcamentos->addOrcamento($orcamentoDois);

        $this->assertCount(2, $listaDeOrcamentos);
    }

    /**
     * @test
     */
    public function testaRetornoDeOrcamentosFinalizados()
    {
        $orcamentoUm = new Orcamento();
        $orcamentoUm->quantidadeItens = 5;
        $orcamentoUm->valor = 100.20;
        $orcamentoUm->aprova();

        $orcamentoDois = new Orcamento();
        $orcamentoDois->quantidadeItens = 3;
        $orcamentoDois->valor = 50.89;
        $orcamentoDois->reprova();

        $orcamentoTres = new Orcamento();
        $orcamentoTres->quantidadeItens = 6;
        $orcamentoTres->valor = 589.89;
        $orcamentoTres->aprova();
        $orcamentoTres->finaliza();

        $orcamentoQuatro = new Orcamento();
        $orcamentoQuatro->quantidadeItens = 4;
        $orcamentoQuatro->valor = 20.89;
        $orcamentoQuatro->reprova();

        $listaDeOrcamentos = new ListaDeOrcamentos();

        $listaDeOrcamentos->addOrcamento($orcamentoUm);
        $listaDeOrcamentos->addOrcamento($orcamentoDois);
        $listaDeOrcamentos->addOrcamento($orcamentoTres);
        $listaDeOrcamentos->addOrcamento($orcamentoQuatro);

        $this->assertCount(1, $listaDeOrcamentos->orcamentosFinalizados());
    }
}
