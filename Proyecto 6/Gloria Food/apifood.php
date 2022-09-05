<?php

    include_once('conexion.php');


    header('Content-Type: application/json');

    $message = file_get_contents('php://input'); 
    $idtrans = "";
    $metodo  = "";
    $usuario_no= "";
    $file = '';


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = fopen('Gloria_Api.txt','w');
        fwrite($file, 'REGISTROS DE PAGOS');
        //fwrite( $file ,  $message );
        $obj = json_decode($message);
        $count = $obj->count;
        $orders =$obj->orders;
        $status = $orders[0]->status;
        if($status == "accepted"){
            // INFORMACION DEL CLIENTE 
            $nombre=$orders[0]-> client_first_name;
            $apellido = $orders[0]->client_last_name;
            $email = $orders[0]-> client_email;
            $telefono = $orders[0]-> client_phone;
            $latitude=$orders[0]->latitude;
            $longitude=$orders[0]->longitud;

            //INFORMACION DEL RESTAURANTE 
            $nombre_restaurante = $orders[0]-> restaurant_name;
            $id_restaurante = $orders[0]-> restaurant_id;
            $telefono_restaurante = $orders[0]-> restaurant_phone;

            //INFORMACION DE LA ORDEN 
            $id=$orders[0]->id;
            $price=$orders[0]->total_price;
            $tipo =$orders[0]->type;
            $tipo_pago = $orders[0]-> payment;
        
            //$type = $orders[0]['tax_list'][1]['type'];
                fwrite($file, "INFORMACION DEL CLIENTE: \n");
                fwrite($file, "El nombre del cliente es: ".$nombre."\n");
                fwrite($file, "El apellido del cliente es: ". $apellido."\n");
                fwrite($file, "El email del cliente es: ". $email."\n");
                fwrite($file, "El telefono del cliente es: ". $telefono."\n");
                fwrite($file, "La localizacion del cliente es: lalitud: ".$latitude." longitud: ". $longitude."\n");
                fwrite($file, "\n INFORMACION DEL RESTAURANTE: \n");
                fwrite($file, "El nombre del restaurante es: ". $nombre_restaurante."\n");
                fwrite($file, "El ID del restaurante es: ". $id_restaurante."\n");
                fwrite($file, "El telefono del restaurante es: ". $telefono_restaurante. "\n");
                fwrite($file, "\n INFORMACION DE LA ORDEN: \n");
                fwrite($file, "El ID de la orden es: ".$id."\n");
                fwrite($file, "El precio es: ".$price."\n");
                fwrite($file, "El tipo de la orden es: ". $tipo."\n");
                fwrite($file, "El metodo de pago es: ".$tipo_pago);
                //fwrite($file, gettype($cliente_info));

                Guardar($nombre, $apellido, $email, $latitude, $longitude, $telefono);
            }
            else {
                $file = fopen('Gloria_Api.txt','w');
                fwrite($file, 'La Orden fue:'.$status);

             }

    }

?>