<?php

$url = explode("/", $_SERVER['REQUEST_URI']);

if ($url[1] == "contacts") {
  $content = file_get_contents("pages/contacts.html");
} else if ($url[1] == "sales") {
  $content =  file_get_contents("pages/sales.html");
} else if ($url[1] == "payment-and-delivery") {
  $content = file_get_contents("pages/payment-and-delivery.html");
} else if ($url[1] == "cakes") {
  $content = file_get_contents("pages/cakes.html");
} else if ($url[1] == "3d-cakes") {
  $content = file_get_contents("pages/3d-cakes.html");
} 
// else if ($url[1] == "cupcakes") {
//   $content = file_get_contents("pages/cupcakes.html");
// } else if ($url[1] == "desserts") {
//   $content = file_get_contents("pages/desserts.html");
// } 
else if ($url[1] == "baked_goods") {
  $content = file_get_contents("pages/baked_goods.html");
} 
// else if ($url[1] == "meat-cakes") {
//   $content = file_get_contents("pages/meat-cakes.html");
// } 
else if ($url[1] == "gingerbreads") {
  $content = file_get_contents("pages/gingerbreads.html");
} else {
  $content = file_get_contents("pages/index.html");
} 

if (!empty($content))
  require_once("template.php");