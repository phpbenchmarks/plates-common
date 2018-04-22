<?php

require_once(__DIR__ . '/../../autoload.php');

$template = new \League\Plates\Template(
    new \League\Plates\Engine(__DIR__ . '/templates')
);

echo $template->render('helloworld');
