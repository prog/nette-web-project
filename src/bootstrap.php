<?php

require __DIR__ . "/../vendor/autoload.php";



return call_user_func(function() {

	$configurator = new Nette\Configurator();

	//$configurator->setDebugMode("23.75.345.200"); // enable for your remote IP
	$configurator->enableDebugger(__DIR__ . "/../logs");
	$configurator->setTempDirectory(__DIR__ . "/../temp");

	$configurator->setTimeZone("Europe/Prague");

	$configurator->addConfig(__DIR__ . "/../config/config.neon");
	$configurator->addConfig(__DIR__ . "/../config/config-local.neon");

	return $configurator->createContainer();
});
