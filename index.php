<?php

   // configuration
    require("config.php"); 






 


 $positions02=[];
 $positions = [];
 $temp = query( "SELECT CASH from users where id=".$_SESSION["id"]);
 $rows=query("SELECT shares,Symbol from tblSymbol where UserID=".$_SESSION["id"] );
 
  
if(!empty($rows))

{
  foreach ($rows as $row)
      {
  
   
    $stock = lookup($row["Symbol"]);
    if ($stock !== false)
       {
        
        
        $positions[] = [
            "name" => $stock["name"],
            "price" => $stock["price"],
            "shares" => $row["shares"],
            "Symbol" => $row["Symbol"],
            
        
        ];
        
      }
  


 
     
           
          foreach($temp as $sets)
        {
        
        $positions02[]=[
        
        "CASH2"=> $sets["CASH"]
        
           ];
        
        }
         
     
      } 
   
   render("portfolio.php", ["positions"=> $positions,"positions02"=>$positions02, "title" => "Portfolio"]);      
 }
    
    
  else
  
  {  
         foreach($temp as $sets)
        {
        
        $positions02[]=[
        
        "CASH2"=> $sets["CASH"]
        
           ];
        
        }
  
  
     
     render("portfolio.php", ["positions"=> $positions,"positions02"=> $positions02, "title" => "Portfolio"]);  

  }




?>


