<?php 
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$termos = $_POST['termos'];

$_SESSION['dadosForm'] = $_POST;
$_SESSION['mensagemErro'] = array();

include("connection/conexao.php");

// verificar se o usuário já existe
$consultaUsuario = "SELECT email FROM tbl_login WHERE email='$email'";
$executaConsultaUsuario = $mysqli->query($consultaUsuario);
$totalConsultaUsuario = $executaConsultaUsuario->num_rows;

if($totalConsultaUsuario>0){
    $_SESSION['mensagemErro'][] = "Este e-mail já está em uso. Tente outro.";
}
if(strlen($nome)<1){
   $_SESSION['mensagemErro'][] = "O campo nome é obrigatório";
}
if(strlen($email)<1){
   $_SESSION['mensagemErro'][] = "O campo e-mail obrigatório";
}
if(strlen($senha)<6){
   $_SESSION['mensagemErro'][] = "O campo senha deve ter no mínico 6 caracteres";
}
if($senha<>$confirmaSenha){
   $_SESSION['mensagemErro'][] = "Senhas não conferem";
}
if(!isset($termos)){
   $_SESSION['mensagemErro'][] = "Você deve aceitar os temos para criar a conta";
}


if(sizeof($_SESSION['mensagemErro'])>0){
    header("location:registro.php?erro=1");
}else{
    // destruir a session com as mensagens de erro e dados do formulário
    unset($_SESSION['mensagemErro']);
    unset($_SESSION['dadosForm']);

// gravar os dados do usuario
$sqlGravaUsuario = "INSERT INTO tbl_login (nome,email,senha,tipo_usuario,status_login)
                                 VALUES   ('$nome','$email',md5('$senha'),'user',0)";
$executaGravaUsuario = $mysqli->query($sqlGravaUsuario);

// se o usuario foi criado, vamos criar o codigo de ativacao da conta

// obter o ultimo codigo gerado 
$codLogin=$mysqli->insert_id;

// gerar o código de ativação
$codigoAtivacao=time().$codLogin; 

// adicionar o código de ativação na tabela de login

 $atualizaCodAtivacao = "UPDATE tbl_login SET cod_ativacao = md5('$codigoAtivacao') 
                                         WHERE cod_login=$codLogin";

 $executaAtualizaCodAtivacao = $mysqli->query($atualizaCodAtivacao);

echo '<div class="alert alert-info">
      <p>Conta criada com sucesso!</p>
      <p>Agora você deve <a href="ativa-conta.php?codigoAtivacao='.$codigoAtivacao.'">Ativar</a> sua conta para começar a usar o sistema</p>
      </div>';

}

?>