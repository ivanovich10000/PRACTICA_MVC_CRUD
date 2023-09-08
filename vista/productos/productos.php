

        <h1 class="page-header">PRODUCTOS AL DETALLE </h1>


        <a class="btn btn-primary pull-right" href="?c=producto&a=Crud">Agregar</a>
        <br><br><br>

        <table class="table  table-striped  table-hover" id="tabla">
            <thead>
                <tr>
                    <th style="width:120px; background-color: #222A3F; color:#fff">Id</th>
                    <th style="width:180px; background-color: #222A3F; color:#fff">Detalle</th>
                    <th style="background-color: #222A3F; color:#fff">Precio</th>
                    <th style="background-color: #222A3F; color:#fff">Fecha</th>          
                    <th style="width:60px; background-color: #222A3F; color:#fff"></th>
                    <th style="width:60px; background-color: #222A3F; color:#fff"></th>
                </tr>
            </thead>

            <tbody>

            <?php foreach($this->model->Listar() as $r): ?>
                <tr>
                    <td><?php echo $r->id; ?></td>
                    <td><?php echo $r->detalle; ?></td>
                    <td><?php echo $r->precio; ?></td>
                    <td><?php echo $r->fecha; ?></td>
                    <td>
                        <a  class="btn btn-warning" href="?c=producto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                    </td>
                    <td>
                        <a  class="btn btn-danger" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table> 

</body>
<script  src="vista/assets/js/datatable.js"></script>

</html>
