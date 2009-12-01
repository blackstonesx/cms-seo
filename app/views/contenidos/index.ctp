<h2>Contenidos</h2>
<?php if(empty($contenidos)): ?>
   No hay elementos en la tabla
<?php else: ?>
   <table>
      <tr>
         <th>Menu</th>
      </tr>
      <?php foreach ($contenidos as $contenido): ?>
         <tr>
            <td>
               <a href="view/<?php echo $contenido['Contenido']['id'] ?>"> <?php echo $contenido['Contenido']['titulo'] ?> </a>
			   
            </td>
          
         </tr>
      <?php endforeach; ?>
   </table>
<?php endif; ?> 
			
			