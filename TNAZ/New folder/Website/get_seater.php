<?php
include('includes/pdoconfig.php');
    if(!empty($_POST["roomid"])) 
    {	
    $id=$_POST['roomid'];
    $stmt = $DB_con->prepare("SELECT * FROM `vehicle` WHERE `veh_reg` = $id");
    $stmt->execute(array('$id' => $id));
    
   // while($row=$stmt->fetch(PDO::FETCH_ASSOC))
     {
           //   echo $row['Brand'] .",";
     }
    }
    
    if(!empty($_POST["rid"])) 
    {	
        $id=$_POST['rid'];
        $stmt = $DB_con->prepare("SELECT * FROM vehicle WHERE veh_reg = $id");
        $stmt->execute(array('$id' => $id));
    
     if($row=$stmt->fetch(PDO::FETCH_ASSOC))
     {
         echo htmlentities($row['veh_type']);
     }
    }
    ?>
    
    


