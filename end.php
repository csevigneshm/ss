<?php
error_reporting(0);


$result=$_POST['companylists'];

if ($result=action="companylists") {

if ($result=fetch="search") 
{
    $val = file_get_contents("Hiox.txt");
    $array = (explode("\n", $val));
    $result = preg_grep("/^$postingvalue/i", $array);
    json_encode($result);
    $string = implode("#", $result);
    $output = explode("#", $string);
    echo json_encode($output);
}
}


// elseif($result=="companyname") 
// {

//     $a = file_get_contents("profit.txt");
//     $array = (explode("\n", $a));
//     $res = json_encode($array);
//     echo $res;
	
// }
// elseif($result=="topname") 
// {
//     $a = file_get_contents("profit.txt");
//     $array = (explode("\n", $a));
//     $res = json_encode($array);
//     echo $res;

// }















?>
