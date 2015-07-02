<h2>Registrar usuarios</h2>

<form action='index.php?controller=usuario&action=registrar' method='post'>

    <br>
    Nombre: <input name='nombre' type='text'><br>
    Cedula <input name='cedula' type='text'><br>
    Edad: <input name='edad' type='number'>
    <input type="submit" >

</form>

<hr>

<table border="1">
    <?php while ($user = mysqli_fetch_assoc($users)) { ?>

        <tr>
            <td><?php echo $user['cedula'] ?></td>
            <td><?php echo $user['nombre'] ?></td>
            <td><?php echo $user['edad'] ?></td>
        </tr>

    <?php } ?>

</table>
