<div class="modal fade" id="modal-configuracion" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title"><?php echo $mensaje['titulo']; ?></h4>
      </div>
      <div class="modal-body text-center">
        <?php echo $mensaje['cuerpo']; ?>
      </div>
      <div class="modal-footer">
        <a href="<?php echo $redireccion;?>">
          <button type="button" class="btn btn-primary">Cerrar</button>
        </a>
      </div>
    </div>
  </div>
</div>
