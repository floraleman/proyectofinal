<section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">nuestros productos</h3>
                  </div>
                </div>
                  <?php foreach ($productos as $producto) {?>
                  <div class="row align-items-end">
                    <div class="col-xl-3 col-6 mt-4">
                      <div class="producto text-center p-4">
                       
                        <img src="img/<?php echo $producto['imagen']; ?>" />
                        <h4 class="text-left"><?php echo $producto['nombre']; ?></h4>
                        <h5 class="text-left">$<?php echo $producto['precio']; ?></h5>
                        
                        <button data-id="<?php echo $producto['id'];?>" data-precio="<?php echo $producto['precio'];?>" data-nombre="<?php echo $producto['nombre'];?>" data-imagen="<?php echo $producto['imagen'];?>" class="btn btn-agregar">Agregar</button>
                      </div>
                    </div>
                    <?php } ?>
              </div>
            </div>
        </section>