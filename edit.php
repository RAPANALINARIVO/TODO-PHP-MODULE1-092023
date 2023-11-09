<?php
include('fct/items.php');
include('fct/request.php');
include('fct/getItem.php'); 
include('config/app.php');

$items=getitem();

$id=validate($_GET['itemId']);

$items[$id]['item']=validate($_POST['editItem']);//assign new items

saveItems($items);//save items
header('location:index.php');