<?php
session_start();
session_destroy();
header("Location: DashAcessoClientes.php");
exit();
?>
