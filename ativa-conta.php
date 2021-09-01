<?php 
// recebe o código de ativação pelo método GET	 	
$codigoAtivacao = $_GET['codigoAtivacao'];

include "connection/conexao.php";

$sql = "SELECT * FROM tbl_login 
                 WHERE cod_ativacao=md5('$codigoAtivacao') OR cod_ativacao='$codigoAtivacao' ";

//echo $sql;

$executa_sql = $mysqli->query($sql);

// pega o total de linhas retornado pela consulta
$total_linhas = $executa_sql->num_rows;

// dados do select
$dadosUsuario = $executa_sql->fetch_assoc();

// se linhas for igual a 1, ativamos a conta
if($total_linhas==1){

	//ativar a conta dando o update na tabela de login
	$ativaConta = "UPDATE tbl_login SET 
                                cod_ativacao='',
                                status_login=1 
                            WHERE cod_login='".$dadosUsuario['cod_login']."' ";

	$executa_ativacao = $mysqli->query($ativaConta);

	echo '<p>Conta ativada com sucesso, utilize a tela de login para acessar o sistema.</p>
          
        <meta http-equiv="refresh" content="1;url=login.php"> Redirecionando...</p> ';

}else{

	echo "Código de ativação inválido!";

}

?>	

