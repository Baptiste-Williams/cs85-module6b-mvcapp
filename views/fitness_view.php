<h2>Workout Log for <?= $tracker->name ?></h2>
<ul>
  <?php foreach ($tracker->workouts as $session): ?>
    <li><?= $session ?></li>
  <?php endforeach; ?>
</ul>
