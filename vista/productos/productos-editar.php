<h1 class="page-header">
    <?php echo $producto->id != null ? $producto->Detalle : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=producto">Producto</a></li>
  <li class="active"><?php echo $producto->id != null ? $producto->Detalle : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-producto" action="?c=producto&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $producto->id; ?>" />

    <div class="form-group">
        <label>Detalle</label>
        <input type="text" name="Detalle" value="<?php echo $producto->Detalle; ?>" class="form-control" placeholder="Ingrese el detalle" required>
    </div>
    
    <div class="form-group">
        <label>Precio</label>
        <input type="number" name="Precio" value="<?php echo $producto->Precio; ?>" class="form-control" placeholder="Ingrese el precio" required>
    </div>
    
    <div class="form-group">
        <label>Fecha</label>
        <input type="date" name="Fecha" value="<?php echo $producto->Fecha; ?>" class="form-control" placeholder="Ingrese la fecha" required>
    </div>
   
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-producto").submit(function(){
            return $(this).validate();
        });
    })
</script>