<?php
function getitem(){
    return unserialize(file_get_contents(FILE_NAME));
}