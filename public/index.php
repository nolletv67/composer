<?php
/**
 * Created by PhpStorm.
 * User: nollet
 * Date: 02/10/18
 * Time: 14:35
 */

require '../vendor/autoload.php';

$great = new \App\Wcs\Hello();
echo $great->talk().'<hr/>';

$great2 = new \HelloWorld\SayHello();
echo $great2->world();




