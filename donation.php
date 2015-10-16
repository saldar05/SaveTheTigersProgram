<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to the Donation Site</title>
<style type="text/css">
body {
	background-color: #000;
}
</style>
</head>

<body>
<table width="750" border="1" cellpadding="5" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#574021"><table width="100%" border="0">
      <tr>
        <td width="76%"><img src="tiger.jpg" width="556" height="124" alt="Tiger" /></td>
        <td width="24%" align="center"><img src="save-tiger.jpg" width="150" height="124" alt="Save the Tiger" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td width="150" valign="top" bgcolor="#BA8A42"><a href="home.htm"><img src="home.jpg" width="150" height="30" alt="Home" /></a><br>
      <a href="donation.htm"><img src="donate.jpg" width="150" height="30" alt="Donate" /></a><br>
      <a href="contact.htm"><img src="contact-us.jpg" width="150" height="30" alt="Contact Us" /></a><br></td>
    <td width="605" valign="top" bgcolor="#FFFFFF"><h2>Donations</h2>
      <p> Please enter in the information below to make a donation.</p>
      <form action="donate.php" method="post" name="form1" id="form1">
        <table width="100%" border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td width="33%">First Name:<br>
            <input type="text" name="FirstName" id="FirstName"></td>
            <td width="67%">Last Name:<br>
            <input type="text" name="LastName" id="LastName"></td>
          </tr>
        </table>
        <table width="100%" border="0" cellspacing="0" cellpadding="4">
          <tr>
            <td>Address:<br>
            <input name="Address" type="text" id="Address" size="35"></td>
            <td>City:<br>
            <input type="text" name="City" id="City"></td>
            <td>State:<br>
            <input name="State" type="text" id="State" size="2"></td>
            <td>Zip:<br>
            <input name="ZipCode" type="text" id="ZipCode" size="5"></td>
          </tr>
        </table>
        <table width="100%" border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td width="33%">Phone:<br>
              <input type="text" name="Phone" id="Phone"></td>
            <td width="67%">&nbsp;</td>
          </tr>
          <tr>
            <td>Email:<br>
            <input type="text" name="Email" id="Email"></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <hr>
        <table width="100%" border="0" cellpadding="4" cellspacing="0">
          <tr>
            <td>Donation Amount:<br>
            $
            <input name="Amount" type="text" id="textfield9" size="14"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td width="33%">Credit Card Type:<br>
              <select name="CardType" id="CardType">
                <option value="Visa">Visa</option>
                <option value="Mastercard">Mastercard</option>
                <option value="Discover">Discover</option>
                <option value="American Express">American Express</option>
                <option selected>Select...</option>
            </select></td>
            <td width="67%">&nbsp;</td>
          </tr>
          <tr>
            <td>Credit Card Number:<br>
              <input type="text" name="CardNumber" id="textfield10"></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>Expiration Date:<br>
              <select name="ExpireMonth" id="ExpireMonth">
                <option value="1" selected>January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
          </select> <select name="ExpireYear" id="ExpireYear">
            <option value="2020">2020</option>
            <option value="2019">2019</option>
            <option value="2018">2018</option>
            <option value="2017">2017</option>
            <option value="2016">2016</option>
            <option value="2015">2015</option>
            <option value="2014">2014</option>
            <option value="2013" selected>2013</option>
</select></td>
            <td>&nbsp;</td>
          </tr>
        </table>
        <p>
          <input type="submit" name="button" id="button" value="Submit">
        </p>
      </form>
    <p>&nbsp;</p></td>
  </tr>
</table>
</body>
</html>
