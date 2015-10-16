<?php  



 // configuration
include("config.php");   

if ($_SERVER["REQUEST_METHOD"] == "POST")
     {
       
  
     if (empty($_POST['FirstName']) || is_numeric($_POST['FirstName']==true))
     {
     apologize("You must enter in a valid First Name.");
     }
    
    
     
      elseif (empty($_POST['LastName']) || is_numeric($_POST['LastName']==true))
     
     {
       apologize("You must enter in a valid Last Name");
     }
    
       elseif (empty($_POST['City']) || is_numeric($_POST['City']==true))
     
     {
       apologize("You must enter in a valid  City Name");
     }
     
       elseif (empty($_POST['Address']) || is_numeric($_POST['Address']==true))
     
     {
       apologize("You must enter in a valid Address");
     }
     
     
       elseif (empty($_POST['State']) || is_numeric($_POST['State']==true))
     
     {
       apologize("You must enter in a valid State Name");
     }
     
     elseif (empty($_POST['ZipCode']) || (is_numeric($_POST['ZipCode']==false)))
     
     {
       apologize("You must enter in a valid Zip Code");
     }
     
      elseif (empty($_POST["Phone"]) || (is_numeric($_POST["Phone"]==false)))
     
     {
       apologize("You must enter in a valid Phone Number");
     }
     
      elseif (empty($_POST['Email']) )
     
     {
       apologize("You must enter in a Email Address");
       
       
       
     }
     
        elseif (empty($_POST['Amount']) || (!is_numeric($_POST['Amount'])))
        
       
     
     {
       apologize("You must enter in a valid dollar amount");
       
       
       
     }
         elseif ($_POST['CardType']=='Select...')
        
       
     
     {
       apologize("You must enter select a credit card type");
       
       
     }  
      
     
   }  
      
      

    
          $positions02=[];
          $positions = [];
          $LastName =  $_POST['LastName'];
          $FirstName =  $_POST['FirstName'];
          $PhysicalAddress=$_POST['Address'];
          $City=$_POST['City'];
          $State=$_POST['State'];
          $ZipCode=$_POST['ZipCode'];
          $PhoneNumber=$_POST['Phone'];
          $Email=$_POST['Email'];
          $Donation=$_POST['Amount'];

     query("INSERT INTO FinalProjectDatabase.tblContact (FirstName,LastName,EmailAddress,DonationAmount) VALUES('$FirstName','$LastName','$Email',$Donation)");
     $rows = query("SELECT LAST_INSERT_ID() AS id"); $id = $rows[0]["id"];
     query("INSERT INTO FinalProjectDatabase.tblAddress (PhysicalAddress,City,State,ZipCode,PhoneNumber,UserID) VALUES('$PhysicalAddress','$City', '$State', $ZipCode, $PhoneNumber,$id)");
     $rows03=query("SELECT FirstName,LastName,EmailAddress,DonationAmount from FinalProjectDatabase.tblContact where UserID= " .$id);
      
     $rows02=query("SELECT PhysicalAddress, PhoneNumber from FinalProjectDatabase.tblAddress where UserID= " .$id);
 if(!empty($rows03))

{
  foreach ($rows03 as $row)
      {
  
   
   
        
        
        $positions[] = [
        
            "FName" =>  $row["FirstName"],
            "LName" =>  $row["LastName"],
            "Email" =>  $row["EmailAddress"],
            "Donation"=>$row["DonationAmount"],
        ];
        
      }
 }
  
if(!empty($rows02))
{
 foreach ($rows02 as $row)
      {
  
   
   
        
        
        $positions02[] = [
        
            "PhAddress" =>$row["PhysicalAddress"],
            "Phone" =>   $row["PhoneNumber"],
             
        
        ];
        
      }
 
     
    
         
       
      } 
   
   
   render("Receipt.php", ["positions"=> $positions,"positions02"=>$positions02, "title" => "Receipt"]);  
        
            
      
        
        
        
          
        
 // Header("Location:Receipt.htm");

      
         
         
          ?>
