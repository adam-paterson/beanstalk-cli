<?php
include __DIR__.'/../vendor/autoload.php';

try {
    $application = new \Beanstalk\Application();
    $application->run();
    return $application;
} catch (\Exception $e) {
    echo $e->getMessage();
    exit(1);
}
