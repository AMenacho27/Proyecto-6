<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Pedidos</title>
    <link href="/css/estilo.css" rel="stylesheet"/>
    <link href="https://bmacademiaonline.com/payaproyecto1/Proyecto%206/css/estilos2.css" rel="stylesheet">
</head>
<body>
<div class="form-box">

    <div class="order-box">
    <h2> Registro de Pedidos </h2>
    <img src="https://bmacademiaonline.com/payaproyecto1/Proyecto%206/css/Tookan.png" width=50% height=50% class="center">
    <form method="POST" action="ordentest.php">
    </div>

    <div class = "order-box">
    <label for="id">Order Id:</label><br>
    <input type="text" id="fname" name="id"><br>
    </div>

    <div class = "order-box">
    <label for="job">Job Description:</label><br>
    <input type="text" id="job" name="job"><br>
    </div>

    <div class = "order-box">
      <label for="fname">Customer Username:</label><br>
      <input type="text" id="user" name="user"><br>
    </div>

  <div class = "order-box">
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  </div>

  <div class = "order-box">
  <label for="phone">Telefono:</label><br>
  <input type="text" id="phone" name="phone"><br>
  </div>

  <div class = "order-box">
  <label for="address">Direccion:</label><br>
  <input type="text" id="address" name="address"><br>
  </div>

  <div class = "order-box">
  <label for="restaid">Restaurante ID:</label><br>
  <input type="text" id="restaid" name="restaid"><br>
  </div>

  <div class = "order-box">
  <label for="date">Job delivery datetime:</label><br>
  <input type="datetime-local" id="date" name="date"><br><br>
  </div>

  <div class="boton-box">
  <input type="submit" value="Submit"><br>
  </div>

</form>
</div>
</body>
</html>
