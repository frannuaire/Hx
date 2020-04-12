<?php
require __DIR__ . '/vendor/autoload.php';

use kfhx\Hx;

$site = new Hx("https://winatou.fr");
echo $site->getH1();