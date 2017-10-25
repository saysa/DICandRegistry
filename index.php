<?php

include 'Letter.php';
include 'Container.php';
include 'Registry.php';

$container = new Container();

$letters = [];
$letters[] = $container->getLetter();
$letters[] = $container->getLetter();

$letter = new Letter();
Registry::set('letter', $letter);

$letters[] = Registry::get('letter');
$letters[] = Registry::get('letter');

var_dump($letters);
