<?php
session_start();
include ("config.php");
if(isset($_SESSION['user']))
{
    $select = "SELECT * FROM chat ORDER BY id DESC";
    $query= mysqli_query($conex, $select);
    $rows = mysqli_num_rows($query);
    if ($rows > 0)
    {
        while ($rows = mysqli_fetch_array($query))
                {     
            ?>
            <strong><?php echo $rows['user'].":"?></strong>
            <?php echo $rows['mensaje'] ?>
          <?php
    if(isset($_SESSION['user']) && ($_SESSION['rango'] == '2' ))
      {
          $Id=$rows['0'];
         echo "<a href=borrar.php?id=$Id><font color=red>Borrar</font></a>"; 
       echo "<br>";
          
       /* echo "<form action='borrar.php' method='GET'>";
        echo "<input type='hidden' name='id' value=$Id>";
        echo "<input type='submit' value='Borrar'></form><td>";*/
          
      } else {
      ?>
        
          <?php 
           echo "<br>";
                    }
            ?>
        
            <?php
        }
        ?>
        
    
<?php }
     header('refresh:2; mensajes.php');
}
?>