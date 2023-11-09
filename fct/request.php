<?php
/**
 * verifier les donnees entrer par les users
 *
 * @param string $data
 * @return string
 */
function validate($data,$default=null)
{
    if ($data!==null) {
        $data=htmlentities($data);
        $data=htmlspecialchars($data);
        return $data;
    }else{
        return $default;
    }
   
}
