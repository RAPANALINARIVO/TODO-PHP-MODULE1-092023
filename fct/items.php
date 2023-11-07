<?php

function displayItems($item)
{
    $html= '<li>
                <!-- drag handle -->

                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                <input type="checkbox" value="" name="todo1" id="todoCheck1">
                <label for="todoCheck1"></label>
                </div>
                <!-- todo text -->
                <span class="text">'.$item['item'].'</span>
                <!-- Emphasis label -->
                <!-- General tools such as edit or delete-->
                <div class="tools">
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash"></i>
                </div>
            </li>';
return $html;
}
