<?= view('headprin');?>
    <div>
        <?php foreach ($productos as $producto): ?>
            <div class="precio">
                <a class="remeras2" href=<?php echo base_url()."index2/".$producto['id_producto'] ?>>
                <img class="remeras" src="<?php echo base_url($producto['ruta']);?>" >
                <div class="nombreprod"><h6><?php echo $producto['nombre'];?></h6></div>
                <div><h6><?php echo  $producto['precio'];?></h6></div>
            </div>
            </a>
        <?php endforeach; ?>
            
    </div>

<?= view('footer');?>