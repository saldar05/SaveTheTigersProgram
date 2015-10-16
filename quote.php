<?php  



 // configuration
include("config.php");   


 

  

  if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       
      
        
      
        
         if (empty($_POST["symbol"]) || is_numeric($_POST["symbol"]==true))
          {
           apologize("You must enter in a valid stock symbol to lookup");
          }
        
            $stock = lookup($_POST["symbol"]);
        
        
        
        echo " The information gathered:";
        
        
       
 
                                                        
  
        
        
        foreach($stock as $x=>$x_value)
         {
          echo "<br>".  $x . " ". $x_value;
        
        
         } 
      }    
            
      else
      {
        echo "Please enter in a correct symbol";
        exit();
      }  
        
        
        
          
        
  // Header("Location:index.php");

      
         
         
          ?>
         
         
         
        
       



























