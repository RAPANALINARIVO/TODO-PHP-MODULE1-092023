<?php
function validate($data)
{
    $data=htmlentities($data);
    $data=htmlspecialchars($data);
    return $data;
}