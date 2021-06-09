<?php
function getCountItem($arr, $number)
{
    $count=0;
    for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i]==$number){
                $count++;
            }
    }
    return $count;
}
$arr1=[1,3,5,7,9,4,2,5,4,31,3,6,4,8,9,2,1,3,6,6,9,9,45,2,0,3,6,5,45,9,3,6,3];
echo getCountItem($arr1,6);
?>