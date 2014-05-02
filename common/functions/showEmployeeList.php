<?php
foreach($employees as $name => $emp){
		echo '<a href="viewEmployee.php?employee='.$name.'">';
		echo '<div class="employee-sidebar-item">';
		echo '<div class="employee-sidebar-item-name">'.$emp->lastName.", ".$emp->firstName.'</div>';
		echo '<div class="progress">';


		$progessBarColor;
		if ($emp->formProgress == 100) $progessBarColor = "progress-bar progress-bar-success";
		else if ($emp->formProgress > 40) $progessBarColor = "progress-bar progress-bar-warning";
		else $progessBarColor="progress-bar progress-bar-danger";


		echo '<div class="'.$progessBarColor.'" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: '.$emp->formProgress.'%">';
		echo '<span class="sr-only">40% Complete (success)</span>';
		echo "</div>";
		echo "</div>";
		echo "</div>";
		echo '</a>';
	}
?>

