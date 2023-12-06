<?= view('headprin');?>
    
    
    <div class="imgg">
        <img class="shirt" src="./imagenes/pantalonBordoMora.jpg" id="imgchange" alt="">
    </div>
    <div class="paquete"> 
        <h1 class="titulo">Jogger Regular Super Soft Frisado</h1>
        <h2 class="cash">$4.000</h2>
        <div class="tallee" >
            <span>Talle:</span>  <br>
            <select class="selec" name="Talle" id="tal">
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
            </select>
            <br>
            <span>Cantidad:</span>  <br>
                <input type="number" class="cant" min="1">
        </div>
        <div class="single_variation_wrap">
            <div class="woocommerce-variation" style="display: none;"></div>
            <div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
            <div class="quantity">
            <label class="screen-reader-text" for="quantity_64dd5e5e3e2d1">Hoodie Super Soft Frisado cantidad</label>
            <input type="number" id="quantity_64dd5e5e3e2d1" class="input-text qty text" name="quantity" value="1" title="Qty" size="4" min="1" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off"></div><button type="submit" class="single_add_to_cart_button button alt wp-element-button disabled wc-variation-selection-needed">Agregar al carrito</button>
            <input type="hidden" name="add-to-cart" value="338379">
            <input type="hidden" name="product_id" value="338379">
            <input type="hidden" name="variation_id" class="variation_id" value="0"></div>
        </div>
    </div>  
        <div id="reme1">
            <img class="re1" src="./imagenes/remera1.jpg" alt="">
        </div>
        <div id="reme2">
            <img class="re2" src="./imagenes/remera1.1.jpg" alt="">
        </div>
        <div id="reme3">
            <img class="re3" src="./imagenes/remera1.2.jpg" alt="">
        </div>
    <script src="java/index.js"></script> 

<?= view('footer');?>