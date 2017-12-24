<?php

use App\Events\SomeEvent;
use App\Scheduler\Kernel;
use Carbon\Carbon;

require_once '../vendor/autoload.php';

$kernel = new Kernel;

$kernel->add(new SomeEvent())->everyMinute();

$kernel->run();
