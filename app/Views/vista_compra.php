<?= view('headprin'); ?>
<div class="container-fp">
        <div class="user-details-container">
            <h1>Finalizar Compra</h1>

            <!-- Datos del Usuario -->
            <?php $session = session()->get('usuario'); ?>
            <h2>Datos del Usuario</h2>
            <p>Nombre: <?= $session['nombre']; ?></p>
            <p>Apellido: <?= $session['apellido']; ?></p>
            <p>Correo: <?= $session['correo']; ?></p>
            <p>Telefono: <?= $session['telefono']; ?></p>
        </div>

        <div class="cart-details-container">
            <!-- Detalles del Carrito -->
            <h2>Detalles del Carrito</h2>
            <?php if (!empty($productosCarrito)) : ?>
                <ul>
                    <?php $totalCarrito = 0; foreach ($productosCarrito as $producto) : ?>
                        <li>
                            <span>Nombre: <?= $producto['nombre']; ?></span><br>
                            <span>Cantidad: <?= $producto['cantidad']; ?></span><br>
                            <?php 
                            $subtotal = $producto['precio'] * $producto['cantidad']; 
                            $totalCarrito += $subtotal;?>
                            <span>Subtotal: <?= $subtotal; ?></span>
                        </li>
                    <?php endforeach; ?>
                    <p >Total del carrito: <?= $totalCarrito; ?></p>
                </ul>
            <?php else : ?>
                <p>No hay productos en el carrito</p>
            <?php endif; ?>
            
        </div>

        <div class="shipping-details-container">
            <!-- Formulario de Datos de Envío -->
            <h2>Datos de Envío</h2>
            <form class="detalles" action="<?= base_url('compra/procesarCompra'); ?>" method="post">
                <?php
                //var_dump($provincias)
                ?>
                <div>
                    <label class="label" for="provincia">Provincia</label>
                    <select class="label" name="provincia" id="provincia">  
                        <?php foreach ($provincias as $provincia): ?>
                            <option value="<?php echo $provincia['id_provincia']; ?>"><?php echo $provincia['nombre']; ?></option>
                        <?php endforeach; ?>
                    </select>  
                </div>

                <label class="label" for="ciudad">Ciudad:
                    <input type="text" name="ciudad" id="ciudad" required>
                </label>

                <label class="label" for="codigo_postal">Codigo_postal:
                    <input type="number" name="codigo_postal" id="codigo_postal" required>
                </label>

                <label class="label" for="calle">Calle:
                    <input type="text" name="calle" id="calle" required>
                </label>


                <label class="label" for="numero">Número:
                    <input type="number" name="numero" id="numero" required>
                </label>

                <label class="label" for="piso">Piso:
                    <input type="number" name="piso" id="piso">
                </label>

                <label class="label" for="observaciones">Observaciones:
                    <textarea name="observaciones" id="observaciones"></textarea>
                </label>
            </form>
        </div>

        <div class="paypal-container">
            <script src="https://www.paypal.com/sdk/js?client-id=AZQBCaHQ4lHq6OI-mMRoxPv8nHioysdo_lnwAWuXxHgD31c5-3Nvw-fs0_WTL_-ghOvt8WeoipePRltE"></script>

            <div id="paypal-button-conteiner"></div>
            <script>
                paypal.Buttons({
                    style: {
                        shape: 'pill',
                        color: 'blue',
                        layout: 'vertical',
                        label: 'pay',
                    },
                    createOrder: function (data, actions) {
                        var totalCarrito = <?= $totalCarrito; ?>;

                        return actions.order.create({
                            purchase_units: [{
                            amount: {
                            value: totalCarrito.toString() // Convierte el valor a cadena
                                    }
                            }]
                        });
                    },
                    onCancel: function (data) {
                        alert('Pago cancelado');
                    },
                    onApprove: function (data, actions) {
                        // Esta es la parte modificada en onApprove
                        var provincia = document.getElementById('provincia').value;
                        var ciudad = document.getElementById('ciudad').value;
                        var calle = document.getElementById('calle').value;
                        var codigo_postal = document.getElementById('codigo_postal').value;
                        var numero = document.getElementById('numero').value;
                        var piso = document.getElementById('piso').value;
                        var observaciones = document.getElementById('observaciones').value;

                        console.log(provincia)
                        console.log(ciudad)
                        console.log(calle)
                        console.log(codigo_postal)
                        console.log(numero)
                        console.log(piso)
                        console.log(observaciones)

                        var redirectURL = "<?= base_url('completado') ?>/" + provincia + "/" + ciudad + "/" + calle + "/" + codigo_postal + "/" + numero + "/" + piso + "/" + observaciones;

                        actions.order.capture().then(function (details) {
                            window.location.href = redirectURL;
                        });
                    }
                }).render('#paypal-button-conteiner');
            </script>
        </div>
    </div>
</script>