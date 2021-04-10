<?php

$EMAIL=$_POST["email"];
$SENHA=$_POST["password"];

if($EMAIL=="lfernandotrab@hotmail.com" && $SENHA=="1913961794") {
    echo "<h1>Parabéns, você conseguiu entrar!!!</h1>";
}
else {
    header("Location: atividade.php?erro=1");
}