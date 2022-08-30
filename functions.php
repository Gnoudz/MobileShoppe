<?php
//<!-- require MySql Connection-->
require "./database/DBController.php";

// require Product class
require "./database/Product.php";

// DBController object
$db = new DBController();

// product object
$product = new Product($db);
