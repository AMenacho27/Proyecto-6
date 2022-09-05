<?php

    function Guardar($nombre , $apellido, $email, $latitude, $longitude, $telefono){
        $dbhost = 'localhost';
        $dbuser = 'dajtrwmy_paya';
        $dbpass = 'PayA*2022';
        $db = "dajtrwmy_paya";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        // INSERTAR REGISTROS
        $sql = "INSERT INTO tookan_order_sent (Nombre, Apellido, Email, Latitud, Longitud, Telefono) VALUES ('$nombre', '$apellido', '$email', '$latitude', '$longitude', '$telefono')";

        if($conn->query($sql)){
            $file = fopen('registro.txt','w');
            fwrite($file, 'El registro se ha realizado');
        }else{
            $file = fopen('registro.txt','w');
            fwrite($file, 'El registro no se ha realizado');
        }

        // CERRAR CONEXION
        $conn->close();

    }

    // VER TABLAS DE REGISTRO

    function Tablas(){
        $dbhost = 'localhost';
        $dbuser = 'dajtrwmy_paya';
        $dbpass = 'PayA*2022';
        $db = "dajtrwmy_paya";

        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        $sql = "SELECT id, nombre, apellido, email, latitud, longitud, telefono FROM tookan_order_sent";
        $result = $conn->query($sql);

        echo '<html>
        <head>
            <link href="https://bmacademiaonline.com/payaproyecto1/Proyecto%206/css/estilos3.css" rel="stylesheet">
        </head>
        <body style="background-color:#F9E79F;">
            <h1 style="text-align:center; font-family: sans-serif;">Tabla de Pedidos</h1>
            
            <table class="styled-table" style="margin: 0 auto;">
            <thead>
                <tr>

                <th>Id</th>
        
                <th>Nombre</th>
        
                <th>Apellido</th>
        
                <th>email</th>
        
                <th>Latitud</th>
        
                <th>Longitud</th>
        
                <th>Telefono</th>
        
                </tr>
            </thead>
            ';
            while($row = mysqli_fetch_array($result))

            {
            
            echo "<tbody>";
            echo "<tr>";
    
                echo "<td>" . $row['id'] . "</td>";
        
                echo "<td>" . $row['nombre'] . "</td>";
        
                echo "<td>" . $row['apellido'] . "</td>";
        
                echo "<td>" . $row['email'] . "</td>";
        
                echo "<td>" . $row['latitud'] . "</td>";
        
                echo "<td>" . $row['longitud'] . "</td>";
        
                echo "<td>" . $row['telefono'] . "</td>";
    
            echo "</tr>";

            echo "</tbody>";
            
        }

        echo "</table>";

        /*echo '<table style="box-shadow: 0 0 20px rgba(0, 0, 0, 0.15); min-width: 400px; font-family: sans-serif;
        border-collapse: collapse; margin: 25px 0; font-size: 0.9em;">

        <tr>

        <th>Id</th>

        <th>Nombre</th>

        <th>Apellido</th>

        <th>email</th>

        <th>Latitud</th>

        <th>Longitud</th>

        <th>Telefono</th>

        </tr>';     

        while($row = mysqli_fetch_array($result))

        {
        echo "<tr>";

        echo "<td>" . $row['id'] . "</td>";

        echo "<td>" . $row['nombre'] . "</td>";

        echo "<td>" . $row['apellido'] . "</td>";

        echo "<td>" . $row['email'] . "</td>";

        echo "<td>" . $row['latitud'] . "</td>";

        echo "<td>" . $row['longitud'] . "</td>";

        echo "<td>" . $row['telefono'] . "</td>";

        echo "</tr>";

        }

        echo "</table>";*/

    }
?>