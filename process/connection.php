<?php

$conn = new mysqli('localhost', 'root', '' , 'task');

// Checking the connection 
if(!$conn){
  echo 'Connection error';
}