<?php 
//dito need natin gumawa ng another user account para sa pagconnect sa database nitong code.

//CONNECT TO DATABASE------------------------------

$conn = mysqli_connect('localhost', 'mina', 'test1234', 'form'); //>>>> ito yung sa phpmyadmin kapag nag create ka ng user account

//CHECK CONNECTION----------------------------------

if(!$conn){
   echo 'Connection error: ' . mysqli_connect_error();
}

?>