	<?php 

	$hierarquia =  array(
		array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Diretor Comercial',
			    'subordinados'=>array(
				'nome_cargo'=>'Geremte de Vendas'
				)
			
				)
			),
	array(
		'nome_cargo'=>'Diretor Financeiro',
		'subordinados'=>array(
			array(
				'nome_cargo'=>'Gerente de contas a pagar',
				'subordinados'=>array(
				array(
				'nome_cargo'=>'supervisor de pagamentos'
				)	
					)
				),
			array(
				'nome_cargo'=>'Gerente de Compras',
				'subordinados'=>array(
					array(
						'nome_cargo'=>'Supervisor de suprimentos'
						)
					)
				)
			)
		)
	);

	function exibe($cargos){

		$html = '<ul>';

		foreach ($cargos as  $cargo) {

		$html .= "<li>";

		$html .= $cargo['nome_cargo'];

		if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

			$html .= exibe($cargo['subordinados']);

		}

		$html .= "</li>";

		}

		$html .= "</ul>";

		return  $html;

	}
	echo exibe($hierarquia);

	 ?>