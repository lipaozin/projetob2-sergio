<?php       
        session_start();

        include ("model/Db.php");
        include ("model/Usuario.php");

// Verifica se os dados estão certos.
if(empty($_POST['login']) || empty($_POST['senha'])) {
	header('Location: index.php');
	exit();
}
$existe = 0;
// Conectando ao banco de dados
$banco = new Db();
$banco->conectar();
$banco->setTabela("usuarios");

$usuario = new Usuario();

$login=$_POST['login'];
$senha= md5($_POST['senha']);

$campo='login';
$conteudo = $login;

$existe= consultaLogin($usuario,$banco, $campo, $conteudo);
        // Verifica se o dados estão corretos
        file_put_contents("registro","$existe");
        if ($existe == 1) {

            header('Location: restrita.php');
        } else
        {
            header('Location: index.php');
        }

function consultaLogin($usuario,
                       $banco,
                       $campo,
                       $conteudo)
{
    $verCampos ="login,senha";
    $where = "$campo = "."'$conteudo'";
    $registro = $usuario->consultar($banco,
                                   $verCampos,
                                   $where);
    $existe = 0;


    foreach($registro as $linha)
    {   echo "<br>login: " .$login = $linha["login"];

        echo "<br>Senha: " .$senha = $linha["senha"];
        $existe++;
return $existe;
    }
}

