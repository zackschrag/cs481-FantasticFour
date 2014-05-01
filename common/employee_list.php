<?php
	$employees = array(
		"Alabastser, John" => 100,
		"Brickman, Bill" => 10,
		"Charles, Linda" => 30,
		"Danforth, Kyle" => 80,
		"Employee 5" => 25,
		"Employee 6" => 50,
		"Employee 7" => 5,
		"Employee 8" => 90,

		
	);

	foreach($employees as $name => $progress){
		echo '<div class="employee-sidebar-item">';
		echo '<div class="employee-sidebar-item-name">'.$name.'</div>';
		echo '<div class="progress">';


		$progessBarColor;
		if ($progress == 100) $progessBarColor = "progress-bar progress-bar-success";
		else if ($progress > 40) $progessBarColor = "progress-bar progress-bar-warning";
		else $progessBarColor="progress-bar progress-bar-danger";


		echo '<div class="'.$progessBarColor.'" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '.$progress.'%">';
		echo '<span class="sr-only">40% Complete (success)</span>';
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}

?>



