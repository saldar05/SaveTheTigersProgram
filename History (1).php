<?php  



 // configuration
include("config.php");   


   
  

      $rows=query("Select * FROM tblHistory WHERE UserID =".$_SESSION["id"]) ;
 
 
        foreach($rows as $row)
        {
        
        $positions[]=[
        
        "StockBought"=> $row["StockBought"],
        "SymbolBought" =>$row["SymbolBought"],
        "SharesBought"=>$row["SharesBought"],
        "SharePrice" => $row["SharePrice"],
        "TrDate"=>$row["TrDate"],
        
        
           ];
        
        }
      

 // Header("Location:index.php");

 
 render("history02.php", ["positions"=> $positions, "title" => "history"]);   
         
         
          ?>
 
 
 
 
 
   
         
         
         
        
       



























