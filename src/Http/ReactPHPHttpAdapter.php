<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        // instancia React PHP
        // Prepara os dados
        // Faz requisição
        echo "ReactPHP";
    }
}
