<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Something posted

  if (isset($_GET['btnDelete'])) {
    // btnDelete 
    echo "Deleted<br>";
  } else {
    // Assume btnSubmit 
    echo "Submitted<br>";
  }
}


?>