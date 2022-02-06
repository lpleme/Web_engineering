<?php

// Get the values needed
$FName= $_POST["fname"]; 
$LName = $_POST["lname"];
$Address = $_POST["addy"];
$Phone = $_POST["pnumber"]; 
$Items = $_POST["product"];
$Total = $_POST["ttl"];
$Type = $_POST["cc"]; 
$Exp = $_POST["exp"];

?>

<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Purchase Page</title>
  <body>
    <h3>Purchase Selection <br />
      <?php
         print "Name: $FName $LName<br />";
         print "Address: $Address<br />";
         print "Phone Number: $Phone<br />";
         print "Selected Items: $Items<br />";
         print "Total Cost: $Total<br />";
         print "Credit Card Type: $Type<br />";
         print "Credit Card Expiration Date: $Exp<br />";
      ?>  
<form onsubmit="return submit()" action="assign11_a.php" method="GET">
    <input type="submit" name="btnSubmit" value="Save Changes"/>
    <input type="submit" name="btnDelete" value="Delete"/>
</form>
</body>
<script>
function submit(){
      $.ajax({
           type: "GET",
           url: 'assign11_a.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }
      });
 }
</script>
</html>
