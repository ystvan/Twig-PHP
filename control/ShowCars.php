<?php

require_once '../vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../view');
$twig = new Twig_Environment($loader, array('auto_reload' => true));

$template = $twig -> loadTemplate('showAll.html.twig');

$URI = 'http://demosoap.azurewebsites.net/ServiceCarSOAP.svc?wsdl';
$SOAP = new SoapClient($URI);
$results = $SOAP -> GetAllCars();

//print_r($SOAP);

$twigContent = array("cars" => $results -> GetAllCarsResult -> Car);
//print_r($twigContent);

echo $template -> render($twigContent);

