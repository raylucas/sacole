<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_sacole';

// Conecta ao bd
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);

// Exibe erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());


$pilha = "";
$celular = "";
$cartucho = "";



/*
// Deleta
$sql = "DELETE FROM `tb_ponts` WHERE `id` = $id";
$query = $mysqli->query($sql);
echo 'Registros afetados: ' . $query->affected_rows;
*/


$operacao = $_POST ["operacao"];


switch ($operacao) {
    case "enviar":

    	//echo "<script>alert('Email enviado com Sucesso!);</script>";

    //	echo "teste";

    	$categoria	= $_POST ["categoria"];
    	$qnt = $_POST ["qnt"];
    	$ra = $_POST ["ra"];

    	$jose = $categoria;
			// Insere
				if($categoria != ""){
					$sql = "INSERT INTO tb_deposito (id, categoria, qnt, ra)
					VALUES ('', '$categoria', '$qnt', '$ra')";

					$mysqli->query($sql);
					$mysqli->close();

				
					if($jose != "" ){
						echo "Enviado com sucesso!";
					} else {
						echo "Preencha o formulario";
					}
				}
			//header('location: index_test.php');

        break;

    case 'inserirComponente':

        $categoria	= $_POST ["categoria"];
  	    $ponts = $_POST ["ponts"];


		$sql = "INSERT INTO tb_ponts (id, categoria, ponts)	VALUES ('', '$categoria', '$ponts')";

        $mysqli->query($sql);
		$mysqli->close();

        break;
        
    case 'consultarDespositos':

    //	echo "teste 2";

    	
			// Consulta 
			$sql = "SELECT `categoria`, `qnt` FROM `tb_deposito` ";
			$query = $mysqli->query($sql);

			$depositos = array();
			while ($dados = @$query->fetch_array()) {
			
				$json["categoria"] = $dados[0];
				$json["qnt"] = $dados[1];

				array_push($depositos, $json); 
			}     
		
			echo json_encode($depositos);

        break;
        
    case 'consultarPontuacao':

    	$sql = "SELECT ra, qnt, ponts FROM  tb_deposito A INNER JOIN tb_ponts B WHERE A.categoria = B.categoria AND A.ra = '140001789' ORDER BY 1";
        
        $query = $mysqli->query($sql);
       
        $pontucao = array();
        while ($dados = @$query->fetch_array()) {
            $json["ra"] = $dados[0];
            $json["quant"] = ($dados[1]);
            $json["ponto"] = ($dados[2]);
            $json["pontos"] = ($dados[1] * $dados[2]);
            array_push($pontucao, $json); 
        }
        
        
        echo json_encode($pontucao);

        break;

    default:

}







function get_post_action($name)
{
    $params = func_get_args();

    foreach ($params as $name) {
        if (isset($_POST[$name])) {
            return $name;
        }
    }
}


?>







