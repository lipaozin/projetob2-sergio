<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Cadastro realizado com sucesso!</title>
</head>
<body>
    
<?php
include(__DIR__ . "\model\Db.php");
include(__DIR__ . "\model\Usuario.php");

session_start();

$nome    = ($_POST["nome"]);
$login   = ($_POST["login"]);
$senha   = (md5($_POST["senha"]));
$cpf     = ($_POST["cpf"]);
$celular = ($_POST["celular"]);
$email   = ($_POST["email"]);

$banco  = new Db();
$banco->conectar();
$banco->setTabela("Usuarios");

$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setLogin($login);
$usuario->setSenha($senha);
$usuario->setCpf($cpf);
$usuario->setCelular($celular);
$usuario->setEmail($email);

$usuario->gravar($banco);

header("location: local.php");

?>