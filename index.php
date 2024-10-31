<?php
    $conection = mysqli_connect('localhost','root','shades_mexico'); // Conexión a la base de datos
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <table>
        <!-- La BD cuenta con una tabla con dos columnas -->
        <tr> 
            <td>Id</td>
            <td>Nombre</td>
            <td>Email</td>
        </tr>
        <?php
            $sql_query = "SELECT * from t_User"; // Query para traer todos los elementos de la tabla User
            $result = mysqli_query($conection, $sql_query);

            while ($show = mysqli_fetch_array($result)) { //Ciclo para recorrer la tabla        
        ?>
        <tr>
            <!-- Campos a llenar -->
            <td><?php echo $show['id'] ?></td>
            <td><?php echo $show['name'] ?></td>
            <td><?php echo $show['email'] ?></td>
        </tr>
        <?php
            }
        ?>
    </table>
</body>
</html>