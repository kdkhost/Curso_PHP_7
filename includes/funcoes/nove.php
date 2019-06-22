<?php

$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
		//Inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados'=>array(
                //Inicio: Gerente de Vendas
                array(
                    'nome_cargo'=>'Gerente de vendas',
                )
                //Termino: Gerente de Vendas
                )
            ),
		//Termino: Diretor comercial 
		//Inicio: Diretor financeiro
                        array(
                            'nome_cargo'=>'Diretor Financeiro',
                            'subordinados'=>array(
                            //Gerente de Contas a Pagar
            array(
                'nome_cargo'=>'Gerente de Contas a Pagar',
                'subordinados'=>array(
                //inicio: Supervisor de Pagamento
                array(
                    'nome_cargo'=>'Supervisor de Pagamento',
                )
                //termino: Supervisor de pagamento
                )
                ),
                            //Termino: Gerente de Contas a Pagar
                            // inicio: Gerente de Compras
            array(
                'nome_cargo'=>'Gerente de Compras',
                'subordinados'=>array(
                //inicio: Supervisor de Suplementos
                array(
                'nome_cargo'=>'Supervisor de Suplementos',
                'subordinados'=>array(
                    array(
                        'nome_cargo'=>'Funcionários'
                    )
                )
                )
                //Termino: Supervisor de Suplementos
                )
                ),
                            //termino: gerente de compras
                        )
                        //Termino: Diretor Financeiro
                        )
	)
)
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo){
        $html .= "<li style='font-family: monospace'>";
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
            $html .= exibe($cargo['subordinados']);
        }
        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);

?>