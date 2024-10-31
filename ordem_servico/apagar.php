<?php
include("conexao.php");

$id=$_GET['id'];

$excluir= $conexao->prepare("DELETE FROM ordem_servico WHERE id=?");
$excluir->execute([$id]);

header('Location: index.php')
?>
