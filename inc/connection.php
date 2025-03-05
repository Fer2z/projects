<?php

$connection = mysqli_connect('localhost','root','','project');
if(!$connection){
echo 'Erorr' . mysqli_connect_error(); }
