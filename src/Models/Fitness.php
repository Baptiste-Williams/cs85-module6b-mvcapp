<?php
namespace App\Models;

class Fitness {
  public $name;
  public $workouts;

  public function __construct($name, $workouts = []) {
    $this->name = $name;
    $this->workouts = $workouts;
  }

  public function addWorkout($type, $duration) {
    $this->workouts[] = "$type for $duration minutes";
  }
}
