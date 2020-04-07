<?php

$file=fopen("test.txt", "r");

var_dump(fgets($file));

fclose($file);