<?php
$data = "123_Sxtring";    
$whatIWant = substr($data, strpos($data, "_") + 1);    
echo $whatIWant;
?>