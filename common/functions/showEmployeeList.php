<script>
$(document).ready( function() {
	$(".employee-sidebar-formeremp").hide();

	$("#formerCheck").click( function () {
		if ($("#formerCheck").is(":checked")){
			$(".employee-sidebar-formeremp").show();
		}
		else
		{
			$(".employee-sidebar-formeremp").hide();
		}
	});
});
	
	
</script>
<?php




$ctr = 0;
foreach($employees as $name => $emp){

	if ($ctr==0){
		echo '<div class="employee-sidebar-item"><div class="formerEmpSHIT"><div class="checkbox">
						    <label>
						      <input id = "formerCheck" type="checkbox"> Show Former Employees
						    </label>
						    
						  </div></div></div>';

			
			//echo '<div class="employee-sidebar-item">';
			echo '<div class="employee-sidebar-formeremp">';
			echo '<div class="employee-sidebar-item-name">Alabastser, Albert</div>';
			echo '<div class="progress">';
			echo '<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 2%">';
			echo '<span class="sr-only">40% Complete (success)</span>';
			echo "</div>";
			echo "</div>";
			echo "</div>";
			//echo "</div>";
			echo '</a>';


	}

	
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
		++$ctr;
	}
?>

