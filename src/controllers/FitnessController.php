<?php
namespace App\Controllers;

use App\Models\Fitness;

class FitnessController {
  public function show($name) {
    $tracker = new Fitness($name);
    $tracker->addWorkout("Running", 30);
    $tracker->addWorkout("Stretching", 15);
    include __DIR__ . "/../../views/fitness_view.php";

  }
}

