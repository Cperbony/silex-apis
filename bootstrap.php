<?php
/**
 * Created by PhpStorm.
 * User: Claus Perbony
 * Date: 28/03/2018
 * Time: 00:32
 */

use Silex\Application;

require_once __DIR__ . './vendor/autoload.php';

$app = new Application();
$app['debug'] = true;