<?php

/**
 * retur les items
 *
 * @param string $item
 * @return string
 */
function displayItems($item)
{
    $html= '<li>
                <!-- drag handle -->

                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                <a href="toggleItem.php?item='.$item['id'].'"';
    if($item['checked']){

        $html.='<i class="far fa-check-square"></i>';
    }else{
        
        $html.='<i class="far fa-square"></i>';
    }
        $html.='</a></div>
                <!-- todo text -->
                <span class="text">'
                .$item['id']
                .$item['item'].
                '</span>
                <!-- Emphasis label -->
                <!-- General tools such as edit or delete-->
                <div class="tools">
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash"></i>
                </div>
            </li>';
return $html;
}

?>