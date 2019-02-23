<?php
  require "Security.php";

  $encrypted = Security::encrypt("SECRET_DATA");
  echo $encrypted . "\n";
  /* Result: aldQdHdGR0dHZ3NNc1BVclJ1MDdYQT09 */

  $decrypted = Security::decrypt($encrypted);
  echo $decrypted . "\n";
  /* Result: SECRET_DATA */
?>
