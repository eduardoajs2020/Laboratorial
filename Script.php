
<?php

include "servicos/servicoMensagemSessao.php";
include "servicos/servicoValidacao.php";
include "servicos/servicoCategoriaCompetidor.php";

$nome=$_POST['nome'];
$idade=$_POST['idade'];

//var_dump($nome=$_POST['nome']);
//var_dump($idade=$_POST['idade']);

defineCategoriaCompetidor($nome, $idade);

header('location: Index.php');

?>
