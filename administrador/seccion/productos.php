<?php include("../template/cabecera.php");?>

<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"vacio";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"vacio";

$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"vacio";

$txtAccion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br/>";
echo $txtNombre."<br/>";
echo $txtImagen."<br/>";
echo $txtAccion."<br/>";
$host="localhost";
$bd="crud";
$usuario="root";
$contrasenia="";
try {
    $conexion=new PDO("mysql:host=$host;bdname=$bd",$usuario,$contrasenia);
    if($conexion){echo "conectando ...a sistema";}
} catch (Exception $ex) {
    echo $ex->getMessage();
    //throw $th;
}


switch($txtAccion){
    //INSERT INTO `libros` (`id`, `nombre`, `imagen`) VALUES (NULL, 'Libro de php', 'imagen.jpg')
    case "agregar":
        echo "Preciono el boton agregar";
        break;

    case "modificar":
        echo "Preciono el boton modificar";
        break;

    case "cancelar":
        echo "Preciono el boton cancelar";
        break;

}


?>

<div class="col-md-5">
    <div class="card">
        <div class="card-header">
            Datos del libro
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="txtImagen">Archivo</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Imagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>

    </div>


</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende Php</td>
                <td>Imgen.jpg</td>
                <td>Seleccionar! borrar</td>
            </tr>

        </tbody>
    </table>
</div>

<?php include("../template/pie.php");?>