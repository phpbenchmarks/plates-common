<?php

require_once(__DIR__ . '/../../autoload.php');

$templates = new \League\Plates\Engine(__DIR__ . '/templates');

echo $templates->render('helloworld');
