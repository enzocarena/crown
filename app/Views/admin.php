<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Agregar Producto</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
        margin: 0;
      }

      .container {
        background-color: #fff;
        margin: 20px auto;
        padding: 20px;
        max-width: 400px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }

      h1 {
        text-align: center;
      }

      .product-form label {
        display: block;
        margin-top: 10px;
        font-weight: bold;
      }

      .product-form input[type="text"],
      .product-form input[type="number"],
      .product-form textarea {
          width: 100%;
          padding: 10px;
          margin: 5px 0;
          border: 1px solid #ccc;
          border-radius: 4px;
      }

      .product-form button {
          background-color: #007BFF;
          color: #fff;
          padding: 10px 20px;
          border: none;
          border-radius: 4px;
          cursor: pointer;
          margin-top: 10px;
      }

      .product-form button:hover {
          background-color: #0056b3;
      }
    </style>
</head>
<body>
  <div>
  <li class="nav-item"><a href="http://localhost/crown/public/">volver</a></li>
  </div>
  <form method="post" action="<?= base_url('insertarProd') ?>" enctype="multipart/form-data">
    <div class="container">
        <h1>Agregar Producto</h1>
        <div>
            <div>
                <label for="nombre">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" required><br><br>
            </div>

            <div>
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" required><br><br>
            </div>

            <div>
                <label for="tipo">Tipo</label>
                <select name="tipo">  
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?php echo $tipo['id'];?>"><?php echo $tipo['tipo'];?></option>
                    <?php endforeach; ?>
                </select>  
            </div>

            <div>
                <label for="color">Color</label>
                <select name="color">  
                    <?php foreach ($color as $color): ?>
                        <option value="<?php echo $color['id'];?>"><?php echo $color['color'];?></option>
                    <?php endforeach; ?>
                </select>  
            </div>

            <div>
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" accept="imagen/*" required><br><br>
            </div>

            <div class="dVolver">
                <input type="submit" value="subir" id="submitt" class="btn">
            </div>
        </div>
    </div>
</form>
</body>
</html>