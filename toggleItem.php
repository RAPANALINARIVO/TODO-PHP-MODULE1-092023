<?php
include('fct/items.php');
include('fct/request.php');
include('fct/getItem.php'); 
include('config/app.php');
$items=getitem();

$id=validate($_GET['itemId']);

$items[$id]['checked']=!$items[$id]['checked'];


saveItems($items);

header('location:index.php');