<?php
include('fct/items.php');
include('fct/request.php');
include('fct/getItem.php'); 
include('config/app.php');
$items=getitem();

$id=validate($_GET['itemId']);

//supprime un id
unset($items[$id]);

saveItems($items);

 header('location:index.php');