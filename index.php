<?php
//phpinfo();


echo date (format: 'r')  . PHP_EOL;
//echo '<pre>';
echo '<br>';
echo 'PHP version:  ' .  phpversion()  . PHP_EOL;
echo '<br>';

echo "Hello" . (php_sapi_name() === 'cli' ? PHP_EOL : '<br>') . "World";
echo '<br>';
echo '<br>';
echo '<br>';


echo "GOODBY" . (php_sapi_name() === 'cli' ? PHP_EOL : '<br>') . "World!";

