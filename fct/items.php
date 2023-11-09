<?php

/**
 * retur les items
 *
 * @param string $item
 * @return string
 */
function displayItems($key, $item)
{

    $editItem=validate($_GET['itemId']);
    if ($editItem===$key) {
        $html='<form action="edit.php" method="post">';
            $html.='<input type="hidden" name="editItem" value="'.$key.'">';
            $html.='<input type="text" name="editItem" id="" value="'.$item['item'].'">';
        $html= '</form>';
    } else {
    $html= '<li class="'.($item['checked'] ? 'done': '').'">
                <!-- drag handle -->

                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                <a href="toggleItem.php?itemId='.$key.'"';
    if($item['checked']){

        $html.='<i class="far fa-check-square"></i>';
    }else{
        
        $html.='<i class="far fa-square"></i>';
    }
        $html.='</a></div>
                <!-- todo text -->
                <span class="text">'
                .$item['item'].
                '</span>
                <!-- Emphasis label -->
                <!-- General tools such as edit or delete-->
                <div class="tools">
                <a href="index.php?itemId='.$key.'"<i class="fas fa-edit"></i></a>
                <a href="delete.php?itemId='.$key.'"><i class="fas fa-trash"></i></a>
                </div>
            </li>';
}
return $html;
}

function saveItems($items){
    return unserialize(file_get_contents(FILE_NAME,serialize($items)));
}
?>