<?php
function getShapeCornersCount(string ...$shapeName){
    $res ='';
    foreach ($shapeName as $name){
        switch ($name){
            case 'square':
                $res .= 'square - 4 ';
                break;
            case 'circle':
                $res .= 'circle - 4 ';
                break;
            default:
                $res .= $name.' - not defined ';
                break;
        }
    }
    echo $res;
}
getShapeCornersCount('square', 'circle', 'triangle');
?>