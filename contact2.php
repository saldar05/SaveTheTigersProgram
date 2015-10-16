<?php  



 // configuration
include("config.php");   



if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       
  
     if (empty($_POST['Email']) || is_numeric($_POST['Email']==true))
     {
     apologize("You must enter in a valid Email Address.");
     }
    
  }
        $EmailAddy= $_POST['Email'];
        $positions02=[];
        query("INSERT INTO FinalProjectDatabase.tblContactForm (EmailAddress) VALUES('$EmailAddy')");
        $row = query("SELECT LAST_INSERT_ID() AS id"); $id = $row[0]["id"];  
        $rows=query("SELECT EmailAddress from FinalProjectDatabase.tblContactForm where ContactID=".$id );
        
       
       
        foreach($rows as $result)
        {
        $positions02[]=[
        
        "Email"=> $result["EmailAddress"]
        
           ];
        
        }
      
  
  
     
     render("contact.php", ["positions02"=> $positions02, "title" => "Contact"]);  

 
  
           
      
  
  
  
  ?> 
