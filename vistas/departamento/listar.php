<h2>Lista de departamentos registrados</h2>

<a href="departamento.php?action=registrar">Registrar</a>


<table border="1">
  <tr>
    <td>ID</td>
    <td>NOMBRE</td>
  </tr>
  
  <?php  while($departamento = mysql_fetch_assoc($departamentos)){  ?>
  <tr>
    <td><?php echo $departamento['id'] ?></td>
    <td><?php echo $departamento['nombre'] ?></td>
    <td><a href="departamento.php?action=delete&id=<?php echo $departamento['id'] ?>">[Eliminar]</a></td>
    <td><a href="departamento.php?action=update&id=<?php echo $departamento['id'] ?>">[Editar]</a></td>
  </tr>
  
  <?php } ?>
  
</table>


