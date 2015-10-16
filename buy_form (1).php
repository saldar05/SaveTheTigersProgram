 <?php 
 require("config.php"); 
 echo '<img src="img/logo.gif">';
?>
 
 
<form action="buy.php" method="post">
    <fieldset>
        <div class="control-group">
            <input  name="symbol" placeholder="stock symbol" type="text"/>
        </div>
        <div class="control-group">
            <input name="Shares" placeholder="Shares" type="text"/>
        </div>
         
        <div class="control-group">
            <button type="submit" class="btn">Buy some stocks</button>
        </div>
    </fieldset>
</form>

 













 




