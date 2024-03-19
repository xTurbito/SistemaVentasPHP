<?php
require("../../config/dbcontext.php");
//NAVBAR
include("../../layout/top.php")
?>
<br>
<div class="card">
    <div class="card-header">
        <a class="btn mt-2 mb-2 btn-hover-gray" href="AltaProducto.php" role="button" style="color: #8000ff">Agregar Producto <i class="fa-solid fa-plus"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table" id="tabla_id">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Stocl</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    <tbody>
                        <?php include("./MostrarProductos.php") ?>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>
<?php include("../../layout/foot.php"); ?>