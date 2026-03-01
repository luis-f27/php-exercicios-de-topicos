<?php


$mf = $_POST['mf'];

 echo   "<h2>Resultado:</h2>";


 if  ($mf <= 1.7) {
    echo "Você não pode realizar o exame.";}


 elseif ($mf >= 7.0) {
    

echo "Você está APROVADO!";
}


else {
      $ne = (50 - (6 * $mf)) / 4;

      echo "Você precisa tirar " . number_format($ne, 2) .  " no exame para ser aprovado.";}


    



?>