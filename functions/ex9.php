<?php

$hierarchy = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Início Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    //Início Gerente de vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    //Término Gerente de vendas
                )
            ),
            //Término Diretor Comercial
            //Início Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    //Início Gerente de contas a pagar
                    array(
                        'nome_cargo' => 'Gerente de Contas a pagar',
                        'subordinados' => array(
                            //Início Supervisor de Pagamentos
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            //Término Supervisor de Pagamentos
                        )
                    ),
                    //Término Gerente de contas a pagar
                    //Início Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de compras',
                        'subordinados' => array(
                            //Início Supervisor de suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de suprimentos',
                                'subordinados' => array(
                                    //Início Funcionário
                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                    //Término Funcionário
                                )
                            )
                            //Término Supervisor de suprimentos
                        )
                    )
                    //Término Gerente de Compras
                )
            )
            //Término Diretor Financeiro
        )
    )
);

function show($positions){
    $html = "<ul>";
    foreach($positions as $position){
        $html .= "<li>";
        $html .= $position['nome_cargo'];
        //Count conta a quantidade de itens dentro do array
        if(isset($position['subordinados']) && count($position['subordinados']) > 0){
            //Exemplo de chamada recursiva
            $html .= show($position['subordinados']);
        }
        $html .= "</li>";
    };
    $html .= "</ul>";
    return $html;
}

echo show($hierarchy);
