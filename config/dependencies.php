<?php

$builder = new \DI\ContainerBuilder();

/** @var \Psr\Container\ContainerInterface $container */
$container = $builder->build();

return $container;
