<?php

    // configuration
    require("config.php");




// if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
       {
       
        $text =$_POST["username"];
        $password= $_POST["password"] ; 
        crypt($_POST["password"]);
        $confirmation=$_POST["confirmation"];
        
      
       
      
       
       
       
        if( empty($text) || is_numeric($text==true))
        {
           apologize("You must enter in a user name.");
           
        }
        else if (empty($password))
        {
            
            apologize("You must enter in a password to continue");
           
        }
        
           else if (empty($confirmation))
        {
            
            apologize("You must re-enter your password again for validation purposes .");
           
        }
        
        
         else if ($password!=$confirmation )
        {
            
            apologize("The password and pass word confirmation fields must be the same.Please try agaib");
           
        }
      
        
        
        
        
       query("INSERT INTO users (username, hash, cash) VALUES(?, ?, 10000.00)", $_POST["username"], crypt($_POST["password"])); 
       
        
        $rows = query("SELECT LAST_INSERT_ID() AS id"); $id = $rows[0]["id"];
        
        $_SESSION["userid"]=$id;
        // $
       // query( "SELECT * FROM `Users` "."WHERE `username`='".$_POST["username"]."' ");
         //$_SESSION["userid"] =trim($q["id"]); 

        Header("Location:index.php");
         
        }  
         
        else
        {
         render("register_form.php", ["title" => "Register"]);
        
        
        }
        
      
     






  ?>









