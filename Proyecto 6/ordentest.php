<?php

include_once('conntookan.php');


// User data to send using HTTP POST method in curl
    $meta1 = array(
    "label" => "Price",
                  
    "data" => "100"
  );
  
  $meta2 = array(
    "label" => "Quantity",
                  
    "data" => "100"
  );
  
  $fullmeta = array(
    'meta1' => $meta1,
    'meta2' => $meta2
  );
  
  $data = array(    "api_key" => "5360658df74a0f454841646a104d62471ae2c5f32adf783a5a1e03c4",
  
                    "order_id" => $_POST['id'],
  
                    "job_description" => $_POST['job'],
  
                    "customer_email" => $_POST['email'],
  
                    "customer_username" => $_POST['user'],
  
                    "customer_phone" => $_POST['phone'],
  
                    "customer_address" => $_POST['address'],
  
                    "latitude" => "9.000693",
  
                    "longitude" => "-79.536274",
  
                    "job_delivery_datetime" => $_POST['date'],
  
                    "custom_field_template" => "Template_1",
                    
                    "meta_data" => [
                      
                      $meta1,
  
                      $meta2
                  
                    ],
  
                      "team_id" => "449045",
  
                      "auto_assignment" => "0",
  
                      "has_pickup"=> "0",
  
                      "has_delivery"=> "1",
  
                      "layout_type"=> "0",
  
                      "tracking_link"=> 1,
  
                      "timezone"=> "-330",
  
                      "fleet_id"=> "636",
  
                      "ref_images"=> [
  
                        "http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png",
  
                        "http://tookanapp.com/wp-content/uploads/2015/11/logo_dark.png"
  
                      ],
  
                      "notify"=> 1,
  
                      "tags"=> "",
  
                      "geofence"=> 0
                
                );

// Data should be passed as json format
$data_json = json_encode($data);

// API URL to send data
$url = 'https://api.tookanapp.com/v2/create_task';

// curl initiate
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// SET Method as a POST
curl_setopt($ch, CURLOPT_POST, 1);

// Pass user data in POST command
curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute curl and assign returned data
$response  = curl_exec($ch);

/*$data_decoded = json_decode($response);
echo $data_decoded->data->job_id;
echo '<br>';
var_dump($data_decoded);*/


if ($response){
  echo '<body style = "background-color: black">
    <h2 style= "color:white">Se ha realizado un pedido desde Tookan &#x1F680</h2>
  </body>';
}else{
  echo '<body style = background-color: black>
  <h2 style = "color:white">No Se ha podido realizar el pedido desde Tookan &#x1F614</h2>
  </body>';
}

$nombre = explode(" ", $data['customer_username']);

Guardar($nombre[0], $nombre[1], $data['customer_email'], $data['latitude'], $data['longitude'], $data['customer_phone']);

// Close curl
curl_close($ch);

// See response if data is posted successfully or any error
//print_r ($response);

?>