 <?php 
 require("config.php"); 

 echo '<form action="sell.php" method="post">';
 echo '<fieldset>';
 
 

 
$temp = query( "SELECT Symbol,UserID from tblSymbol where UserID=".$_SESSION["id"]);

echo '<p> <select name ="stock"> \n';
echo '<option value="Choose"> Please select stock</option>';

foreach ($temp as $row) {
$stockvalue=$row['Symbol'];

echo "<option value='".$stockvalue."' >\n";
echo $stockvalue;
echo "</option>";
 } 
 echo "</select>";
?>
<div class="control-group">
            <button type="submit" class="btn">Submit</button>
        </div>
    </fieldset>
</form>

