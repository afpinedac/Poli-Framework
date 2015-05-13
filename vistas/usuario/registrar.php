<h2>Registrar usuarios</h2>

<form action='usuario.php?action=registrar' method='post'>
Departamento: 
  <select name='departamento'>
    <?php  while($departamento = mysql_fetch_assoc($departamentos)){?>
    <option value='<?php echo $departamento['id']?>'><?php echo $departamento['nombre']?></option>
    <?php  }?>
    
    </select>
  
  <br>
 Nombre: <input name='nombre' type='text'><br>
 Cedula <input name='cedula' type='text'><br>
 Edad: <input name='edad' type='number'>
  
</form>