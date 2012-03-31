<?php



require_once('isPrime.php');

function find_3_prime($arr)
{
    $counter = 3;
    foreach($arr as $value)
    {
        if(isPrime($value))
        {
            $counter--;
        }
        if($counter == 0)
        {
        echo "The third prime number in the array is : $value";
        break;
        }
    }
}
function check_exists($arr)
{
if(in_array(146, $arr))
{
    echo "146 is in the array! ";
}
else
{
    echo "146 is not in the array! ";
}
if(in_array(284, $arr))
{
    echo "284 is in the array! ";
}
else
{
    echo "284 is not in the array! ";
}

if(in_array(871, $arr))
{
    echo "871 is in the array! ";
}
else
{
    echo "871 is not in the array! ";
}
}
?>

