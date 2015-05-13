<h2>Edición de departamentos</h2>

<form action='departamento.php?action=update' method='post'>
 
  <input readonly="" name='id' type='text' value='<?php echo $departamento['id'] ?>' ><br/>
  <input name='nombre' type='text' value='<?php echo $departamento['nombre'] ?>' >
    
  <input type='submit'>
 </form>