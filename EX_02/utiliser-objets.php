<?php
$date1 = new DateTime();
echo '<p>'.$date1->format('Y-m-d H:i:s').'<p>';

$date2 = new Datetime('2020-06-22 9:00:00');
echo '<p>'.$date2->format('Y-m-d h:i:s').'<p>';

$interval=$date2->diff($date1);