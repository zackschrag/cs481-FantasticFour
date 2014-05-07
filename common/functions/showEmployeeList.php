<?php
$ctr = 0;
foreach($employees as $name => $emp){

	if ($ctr==0){
		echo '<div class="employee-sidebar-item"><div class="formerEmpSHIT"><div class="checkbox">
						    <label>
						      <input type="checkbox"> Show Former Employees
						    </label>
						  </div></div></div>';
		
	}

	
		echo '<a href="viewEmployee.php?employee='.$name.'">';
		if ($ctr==0){echo '<div class="employee-sidebar-formeremp">';}
		else {echo '<div class="employee-sidebar-item">';}
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
		++$ctr;
	}
?>

