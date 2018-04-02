<?php
include('config.php');

$cat = new Cat('5ft 7in', 75, 'Yes');
?>

<p><?php echo $animal->get('height'); ?></p>

<p><?php echo $cat->get('height'); ?></p>

<p>The cat says: <?php echo $cat->speak(); ?></p>

<p>Is the cat declawed?: <?php echo $cat->get('declawed'); ?></p>