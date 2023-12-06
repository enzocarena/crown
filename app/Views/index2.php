<?= view('headprin'); ?>

<div class="producto-container">
    <?php if (isset($producto)) : ?>
        <?php foreach ($producto as $prod) : ?>
            <img class="producto-imagen" src="<?= base_url() . $prod['ruta'] ?>" alt="">
            <div class="producto-detalles">
                <div class="producto-nombre"><?= $prod['nombre'] ?></div>
                <div class="producto-precio">Precio: <?= $prod['precio'] ?></div>
                <div class="producto-tipo">Tipo: <?= $prod['tipo'] ?></div>
                <div class="producto-color">Color: <?= $prod['color'] ?></div>
                <form action="<?= base_url('carrito/agregar') ?>" method="post">
                    <input type="hidden" name="producto_id" value="<?= $prod['id_producto'] ?>">
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" name="cantidad" id="cantidad" value="1" max="10">
                    <button type="submit" class="btn btn-primary" data-producto-id="<?= $prod['id_producto'] ?>">Agregar al carrito</button>
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

<?= view('footer'); ?>
