<?php 
// arquivo de conexao com a base de dados "agenda"

$servidor_bd = "localhost"; // endereço do servidor de banco de dados
$usuario_bd = "root"; // usuario do banco de dados
$senha_bd = ""; // senha do usuario
$banco = "bd_anuncios"; // nome da base de dados

// função de conexao com o mysql
@$mysqli = new mysqli($servidor_bd,$usuario_bd,$senha_bd,$banco);

/* alguns métodos do mysqli
mysqli
   -> connect_errno   // retorno o número do erro da conexao
   -> connect_error   // retorna uma mensagem de erro de conexao
   -> query           // executa uma query no banco
   -> error           // retorna um erro sql
*/

// verificar erros de conexao
if ($mysqli->connect_errno) {
	
	echo "FALHA AO CONECTAR ".$mysqli->connect_error;

}else{

	// função para reconhecimento de caracteres especiais (~ , ç ´)
    mysqli_set_charset($mysqli,"utf8");

}

 ?>