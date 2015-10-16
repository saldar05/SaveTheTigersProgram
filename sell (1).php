<?php  



 // configuration
include("config.php");   

     if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
       
        if (empty($_POST['stock']) || is_numeric($_POST['stock']==true))
        {
        apologize("You must enter in a symbol to buy.");
        }
      } 
        
          $stock =lookup($_POST["stock"]);
          
        
       
          
          
         
          foreach($stock as $x=>$x_value)
         {
           
            $x . " ". $x_value; 
            $positions[]=[
           "symbol"=>$stock["symbol"],
           "name" => $stock["name"],
           "price" => $stock["price"], 
          ];
          
        }  
      
      
        $PersonID=  $_SESSION["id"];
       
        $StockPrice = $stock["price"];
        $Symbol=$stock["symbol"];
        $Symbol=strtoupper($Symbol);
        $Shares = query("SELECT  shares FROM tblSymbol where UserID = $PersonID AND Symbol= '$Symbol'");
        $valuer=array_shift( $Shares);
        $Shares02=0;
        foreach( $valuer as $rows)
         {
         $Shares02=  $rows;
         }
        
        $tempvalue02= query("DELETE FROM tblSymbol WHERE UserID =$PersonID AND Symbol= '$Symbol'" );

        $tempvalue= query( "UPDATE users SET cash = cash + $StockPrice WHERE id=".$_SESSION["id"]);
        
        $tempvalue22 =query("INSERT INTO tblHistory (StockBought,SymbolBought,SharesBought,SharePrice, TrDate, UserID) VALUES('SOLD','$Symbol',$Shares02,$StockPrice, NOW(),$PersonID)");
       
        echo"Your stock has been sold";
     
        
     
         
            
      
        
        
        
          
        
 // Header("Location:index.php");

      
         
         
          ?>
         
         
         
        
       



























