<?php
require 'view/load.php';
require 'model/model.php';
require 'controller/controller.php';
$pageURI =$_SERVER['REQUEST_URI'];
$indexPos = strrpos($pageURI, 'index.php');
$pageURI =substr($pageURI,$indexPos+10);
if ($indexPos===false) {
    header('Location: index.php');
    exit();
} 
if (!$pageURI) {
    new Controller('home'); 
}
else
    new Controller($pageURI);
?>