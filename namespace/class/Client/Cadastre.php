<?php

namespace Client;

// \ Volta para a pasta anterior 
class Cadastre extends \Cadastre  {
    public function registerSale()
    {
        echo "Foi registrada uma venda para o cliente " . $this->getName();
    }
}