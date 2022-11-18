<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

</head>
<body>
   <h1> My Page </h1>
   <a href="<?php echo site_url('hello/index2');?>">
   link to hello fn index2 </a>
   <br>
   <a href="<?php echo site_url('welcome');?>">
   link to Welcome </a>

   <br>
   <img src="<?php echo base_url('img');?>/cat.JPG" 
   alt="" width="300px">

</body>
</html>
