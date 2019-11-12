<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
       /* $segundos =  date("s");

        echo $segundos;
        
        if ($segundos >30) {
            echo "Estamos en el final del minuto";
        } else {
            echo "Estamos en el principio del minuto";
        }*/

     /*   $tipos = NULL;
       var_dump($tipos);*/


       /*--------------------- ARRAYYS--------------*/
      /* $miArray= [];
       $miArray[]="Dario";
       $miArray[]="Carlos";
       $miArray[]=23;*/

     /*  $miArray =[
           32 => "lucho",
           65 => "camila",
           90 => ["Amarillo", "rojo"]
       ];
       var_dump($miArray);
        */


        
        /*-----Array asociativos--------*/
       $miArray =[
        "nombre" => "lucho",
        "apellido" => "camila",
        "colores" => ["Amarillo", "rojo"]
    ];
    var_dump($miArray);
    $nota= 0;
    switch ($nota) {
        case $nota < 4:

                echo $nota . " : " . "desaprobado";
            break;
            case ($nota == 4 || $nota ==5):

                 echo $nota . " : " . "zafamos";
            break;
            case ($nota >=6 && $nota <=8):

           echo $nota . " : " . "bien";
            break;
            case $nota ==9:

           echo $nota . " : " . "Muy bien";
            break;
            case $nota ==10:

           echo $nota . " : " . "Excelente";
            break;
        
        default:
                echo $nota . " : " . "El número no es válido";
            break;
    }
    ?>



</body>
</html>