<?php

$conn = new mysqli('localhost', 'root', '' , 'crud');

// Checking the connection 
if(!$conn){
  echo 'Connection error';
}