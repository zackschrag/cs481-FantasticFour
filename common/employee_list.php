<?php
	$employees = array(
		"Alabastser, John" => 100,
		"Brickman, Bill" => 10,
		"Charles, Linda" => 30,
		"Danforth, Kyle" => 80,
		"Gregory, Karen" => 100,
		
	);

	foreach($employees as $name => $progress){
		echo '<div class="employee-sidebar-item">';
		echo '<div class="employee-sidebar-item-name">'.$name.'</div>';
		echo '<div class="progress">';
		echo '<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress.'%">';
		echo '<span class="sr-only">40% Complete (success)</span>';
		echo "</div>"."\n";
		echo "</div>"."\n";
		echo "</div>"."\n";
	}

?>


