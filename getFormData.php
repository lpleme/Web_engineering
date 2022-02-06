<?php

   //  This function reads the form "query string"
   //  
   // This function handles both an http "get".
   $field1 = $_GET['APR']; 
   $field2 = $_GET['term'];
   $field3 = $_GET['amount'];

   $payment = $field3*(($field1)/(1- pow(1+$field1, $field2)));
?>





<!DOCTYPE html>
<html lang = "en">
  <meta charset = "utf-8" />
  <title>Monthly Payment Calculator</title>
  <body>
    <h3>The APR, term, principal amount, and the monthly payment are: <br />
      <?php
         print "APR: $field1<br />";
         print "Term: $field2<br />";
         print "Amount: $field3<br />";
         print "Montly: $payment<br />";
      ?>  
</body>
</html>

