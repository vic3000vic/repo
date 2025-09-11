<?php

//header('Content-Type: текстовый/обычный', true);

function displayString (string $str, int $n)
{
$resultArray = [];
	for($i=0; $i<$n; $i++)
	{
        $resultArray[$i] = $str;
	}

return $resultArray;
}

$resultArray = displayString ( str: 'Test string', n: 3);
//$resultArray = displayString ( 'Test string', 3);

//echo '<pre>';
        foreach ($resultArray as $result)
        {
        echo $result . PHP_EOL;
//        echo $result . '<br>';
//        echo "<pre>" . $result . PHP_EOL;
//            echo "<pre>".'TOO123'.PHP_EOL.'TOO789'.PHP_EOL.'TOO456'."</pre>";

        }
//echo '<pre>';
/*
echo 'TOO'.'TOO'.'TOO'."</br>";
echo 'TOO'.PHP_EOL.'TOO'.PHP_EOL.'TOO';ls -al ~/.ssh
echo "<pre>".'TOO123'.PHP_EOL.'TOO789'.PHP_EOL.'TOO456'."</pre>";
*/

