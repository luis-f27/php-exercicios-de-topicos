<?php

$usuario = $_POST["usuario"];

$senha = $_POST["senha"];

if ( $usuario== "adm" and $senha == "123") {

 echo "Bem-vindo, $usuario , seu cargo é Administrador.";

}
 
elseif ( $usuario == "funcionario" and $senha == "abc") {

echo "Bem vindo, $usuario, seu cargo é Funcionario ";
}

else {

echo "Erro. Nome ou senha incorretos. ";
}

?>
