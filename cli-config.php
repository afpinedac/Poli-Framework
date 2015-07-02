<?php

require './app/libraries/doctrine2.php';
var_dump($entityManager);


return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
