<?php  



 // configuration
include("../includes/config.php");   

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       
  
     if (empty($_POST['symbol']) || is_numeric($_POST['symbol']==true))
     {
     apologize("You must enter in a symbol to buy.");
     }
    
    elseif (empty($_POST['Shares']) || is_numeric($_POST['Shares']==false))
     
     {
       apologize("You must enter in a valid share amount to buy.");
     }
    
    
       $stock =lookup($_POST['symbol']);
     
     }
       


    if (empty($stock))
    {
    apologize("You must enter in a valid stock symbol");
    }  
    
    
    
        foreach($stock as $x=>$x_value)
         {
          
          $x . " ". $x_value; 
          $positions[]=[
           "symbol"=>$stock["symbol"],
           "name" => $stock["name"],
           "price" => $stock["price"],
          ];
          
          
        
         } 
       
      $StockPrice =$stock["price"];
 

  

  
       
        $LoginID=  $_SESSION["id"];
        $Shares=  $_POST["Shares"];
        $Symbol = $_POST["symbol"];
        $Symbol=strtoupper($Symbol);
     
      $temp33 =query("INSERT INTO tblSymbol (UserID, Symbol,shares) VALUES($LoginID,'$Symbol',$Shares)  ON DUPLICATE KEY UPDATE shares = shares + VALUES(shares)");
      
      $temp44 = query("INSERT INTO tblHistory (UserID,StockBought,SymbolBought,SharesBought,SharePrice,TrDate) VALUES($LoginID,'BUY','$Symbol', $Shares,$StockPrice,NOW()) ON DUPLICATE KEY UPDATE SharesBought= SharesBought + VALUES(SharesBought)");                                              
      $tempvalue= query("UPDATE users SET CASH = CASH - $StockPrice WHERE id=".$_SESSION["id"]);
        
 
        echo"Your stock has been bought";
      
     
            
      
        
        
        
          
        
  // Header("Location:index.php");

      
         
         
          ?>
         
         
         
        
       



























