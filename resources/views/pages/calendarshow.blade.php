<?php
$libere = request('libere');
$month = request('month');
$year= request('year');

$calendar=new App\Classes\Calendar($libere,$month,$year);
  echo $calendar->show();


?>