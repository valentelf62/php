<?php

#string

$str = "abc";

echo $str . "123<br>";

echo $str[2] . "<br>";
echo $str{1} . "<br>";

$len = strlen($str);
for($i=0; $i < $len; $i++){
	echo $str[$i] . "<br>";
}