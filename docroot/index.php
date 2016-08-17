<?php

/** @var Nette\DI\Container $container */
$container = (require __DIR__ . "/../src/bootstrap.php");

/** @var Nette\Application\Application $application */
$application = $container->getByType(Nette\Application\Application::class);



$application->run();
