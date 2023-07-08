<h2>Names</h2>
<?php if (empty($name)): ?>
<h2>No data available</h2>
<?php else: ?>
<?php foreach ($name as $name): ?>
<h3><?= $name['name'] ?></h3>
<h4><?= $name['age'] ?></h4>
<?php endforeach ?>
<?php endif ?>