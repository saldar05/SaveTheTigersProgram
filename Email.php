<?php  



 // configuration
include("config.php");   

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       
  
     if (empty($_POST['SubscribeEmail']) || is_numeric($_POST['SubscribeEmail']==true))
     {
     apologize("You must enter in a valid Email Address.");
     }
    
  }
  
       if($_POST['SubscribeEmail']) {
                
         
          $to = $_POST['SubscribeEmail'];
          $subject = "hello! Thank you for signing up to our monthly newsletter \n";
          $body = "This is a confirmation for you subscription to our newsletter. Our newsletter will contain information such as how your money is
          making a difference in maintaining these beautiful creatures";
          if (mail($to, $subject, $body)) {
            echo("<p>Message successfully sent!</p>");
            } 
            
            else {
                 echo("<p>Message delivery failed...</p>");
                }
        
           } 
      
  
  
  
  ?>  
