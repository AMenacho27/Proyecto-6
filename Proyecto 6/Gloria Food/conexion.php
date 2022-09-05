<?php

    function Guardar($nombre , $apellido, $email, $latitude, $longitude, $telefono){
        $dbhost = 'localhost';
        $dbuser = 'dajtrwmy_paya';
        $dbpass = 'PayA*2022';
        $db = "dajtrwmy_paya";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        // VER REGISTROS

       $sql = "INSERT INTO tookan_order_sent (Nombre, Apellido, Email, Latitud, Longitud, Telefono) VALUES ('$nombre', '$apellido', '$email', '$latitude', '$longitude', '$telefono')";

        if($conn->query($sql)){
            //echo "El registro se ha realizado<br>";
            $file = fopen('registro.txt','w');
            fwrite($file, 'El registro se ha realizado');
        }else{
            //echo "El registro no se ha hecho<br>";
            $file = fopen('registro.txt','w');
            fwrite($file, 'El registro no se ha realizado');
        }       

        $conn->close();

    }

?>