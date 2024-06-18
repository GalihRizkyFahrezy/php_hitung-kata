<?php
$test01 = "halo, nama saya adalah galih homina.";

$counter = 1;

for($i=0;$i<strlen($test01);$i++)
{
    if($test01[$i]==" ")
    {
        $counter++;
    }
}

echo "jumlah kata adalah : ".$counter;
?>