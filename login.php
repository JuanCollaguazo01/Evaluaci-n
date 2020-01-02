<?php

$user =$_POST["txtuser"];
$pass =$_POST["txtpass"];

$handle = fopen("registros.txt ", "r");
$todo = fread($handle, filesize("registros.txt"));
$lineas = explode(chr(13).chr(10), $todo);

for($i=0; $i < count($lineas); $i++){
    $palabras =explode("|",$lineas[$i]);


    if($user ==$palabras[0]&& $pass==$palabras[1]){
        echo "usuaroo encontrado <br><br>" ;
        $bandera =1;
        header('Location:https://www.youtube.com/watch?v=8-3yghuG-Gw&list=RDQXDzLTf8wK8&index=12');
    break;
     
    }else{
        $bandera =0;
    }
}
if($bandera==0){
    echo "no existe esta cuenta ";
}

?>