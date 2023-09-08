

<h1 class="page-header">CLIENTES AL DETALLE </h1>


<a class="btn btn-primary pull-right" href="?c=cliente&a=Crud">Agregar</a>
<br><br><br>

<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
            <th style="width:120px; background-color: #222A3F; color:#fff">Id</th>
            <th style="width:180px; background-color: #222A3F; color:#fff">Cedula de Identidad</th>
            <th style="background-color: #222A3F; color:#fff">Nombre</th>
            <th style="background-color: #222A3F; color:#fff">Apellido Paterno</th>  
            <th style="background-color: #222A3F; color:#fff">Apellido Materno</th> 
            <th style="background-color: #222A3F; color:#fff">Correo</th>
            <th style="background-color: #222A3F; color:#fff">Telefono</th>                   
            <th style="width:60px; background-color: #222A3F; color:#fff"></th>
            <th style="width:60px; background-color: #222A3F; color:#fff"></th>
        </tr>
    </thead>

    <tbody>

    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->ci; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->apellidoP; ?></td>
            <td><?php echo $r->apellidoM; ?></td>
            <td><?php echo $r->correo; ?></td>
            <td><?php echo $r->telefono; ?></td>
            <td>
                <a  class="btn btn-warning" href="?c=cliente&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
            </td>
            <td>
                <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=cliente&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 

</body>
<script  src="vista/assets/js/datatable.js"></script>

</html>
