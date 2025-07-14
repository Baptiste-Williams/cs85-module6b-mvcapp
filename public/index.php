<?php
require_once "../vendor/autoload.php";

use App\Controllers\FitnessController;

$controller = new FitnessController();
$controller->show("Baptiste");
