<?php

require_once '../vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, array('auto_reload' => true));

$template = $twig -> loadTemplate('showAll.html.twig');


//from user's input:
$car = new stdClass();
$car->Model = $_POST['model'];
$car->Year = $_POST['year'];
$car->Price = $_POST['price'];

$URI = 'http://demosoap.azurewebsites.net/ServiceCarSOAP.svc?wsdl';
$SOAP = new SoapClient($URI);

$params = array('newCar' =>$car);
//print_r($params);

//Call wsdl function
$res = $SOAP -> AddCar($params);

print_r($res);

$twigContent = array("cars" => $res -> AddCarResult -> Car);
print_r($twigContent);

echo $template -> render($twigContent);
