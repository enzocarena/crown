<?= view('headprin');?>
    
<div>
    <h2>Pantalones</h2>
    <?php foreach ($productos as $producto) :
        if ($producto['tipo'] == "pantalon") : ?>
            <div class="precio">
                <a class="remeras2" href="<?php echo base_url()."index2/".$producto['id_producto'] ?>">
                    <img class="remeras" src="<?php echo base_url($producto['ruta']); ?>" >
                    <div class="nombreprod"><h6><?php echo $producto['nombre']; ?></h6></div>
                    <div><h6><?php echo $producto['precio']; ?></h6></div>
                </a>
            </div>
        <?php endif;
    endforeach; ?>
</div>

<?= view('footer');?>