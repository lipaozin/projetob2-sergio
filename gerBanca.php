<?php

session_start();

$valbanca      = $_POST['valBanca'];
$porcbanca     = $_POST["porcBanca"];

$porc1 = 100;
$calc1;
$i = 0;
$msgInfo;
$msgPront;

/*
* Descobrir qual e o valor em $ da porcentagem da banca
* Calcular quantas jogadas é possivel realizar com a banca atual (com contador)
* Exibir estatisticas e informações importantes pro jogador
*/

// Descobrir qual e o valor em $ da porcentagem da banca
$calc1 = ($valbanca) / $porc1;
$totaldabanca = $calc1 * $porcbanca;
$msgInicio = "Total de $totaldabanca$ <br>";

// Calcular quantas jogadas é possivel realizar com a banca atual (com contador)

$i = $totaldabanca;
$msgAlert = "Nos abstemos de qualquer perda obtida por voce.";
$z = 50;
$z1 = 100;
$z2 = 350;
$z3 = 890;
$z4 = 1500;
$z5 = 3700;
$z6 = 8900;
$z7 = 15000;

////////
$d = 14;
$d1 = 19;
$d2 = 24;
$d3 = 32;
$d4 = 40;
$d5 = 46;
$d6 = 57;
$d7 = 65;


if ($i <= $z) { 
    $resu = $i / $d;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta em $d chances com o valor de $resu. <br><br> $msgAlert";
} elseif ($i > $z and $i <= $z1) {
    $resu = $i / $d1;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta em $d1 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z1 and $i <= $z2) {
    $resu = $i / $d2;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta em $d2 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z2 and $i <= $z3) {
    $resu = $i / $d3;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta entre $d3 e 40 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z3 and $i <= $z4) {
    $resu = $i / $d4;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta entre $d4 e 46 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z4 and $i <= $z5) {
    $resu = $i / $d5;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta entre $d5 e 57 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z5 and $i <= $z6) {
    $resu = $i / $d6;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta entre $d6 e 65 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i > $z6 and $i <= $z7) {
    $resu = $i / $d7;
    $msgId = "Com o seu valor de  $i$, o recomendado é dividir suas aposta entre $d7 e 74 chances com o valor de $resu. <br><br> $msgAlert";  
} elseif ($i >= $z7) {
    
    $msgId = "Com o seu valor de  $i$, o plano de gerenciamento de banco se reserva de recomendar 
    qualquer tipo de gerenciamento a voce, por favor apostes valores menor que $z7$. <br><br> $msgAlert";  
}  


//Exibir estatisticas e informações importantes pro jogador

$msgInfo = "<script> 
alert('Algumas informações importantes pra voce:'); 
</script>"; 

$msgPront = "$msgInfo
$msgId<br><br><br><br>
1º Nunca aposte mais do que esta disposto a perder <br><br>
2º Bom jogadores nunca se deixam ser dominados pelas emoções <br><br>
3º Depois de algumas ondas de aposta, LEMBRE-SE de descançar, 
tomar um bom gole de agua ou whisky antes da proxima aposta <br><br>

4º Apos bater suas metas diarias com seu valor de $i$ caia fora, não de chance a sorte <br><br>
E claro, tenha um bom jogo <br><br>";

$menu    = file_get_contents("banca.html");
$pagina  = str_replace("<!-- #nao tire esse comentario -->",$msgPront, $menu);

echo $pagina;
?>