<?php  



 // configuration
include("includes/config.php");   

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {

 
    
     if (empty($_POST["Funds"]) || is_numeric($_POST["Funds"]==false))
     {
     apologize("You must enter in funds to continue.");
     }
    
    

     }
    
       $FUNDS =$_POST['Funds'];
     
       
        $FUNDS = floatval(ltrim($FUNDS,"$"));
        (int) $FUNDS;
      $temp33 =query("Update users Set Cash=Cash + $FUNDS WHERE id=".$_SESSION["id"]);
      
     
        
   
        echo"Your deposit has been inserted";
      
       
            
      
        
        
        
          
        
  // Header("Location:index.php");

      
         
         
          ?>
         
         
         
        
       



























