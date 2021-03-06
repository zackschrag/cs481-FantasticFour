<!--VERY IMPORTANT-->
<?php include(dirname(__FILE__).'/common/functions/setupEverything.php');?>
<!--xml header-->
<?php include(dirname(__FILE__).'/common/xmlhead.php');?>
<title>View Employee</title>
<!--end head-->
<?php include(dirname(__FILE__).'/common/top.php');?>


<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="employee-sidebar">
					<?php include(dirname(__FILE__).'/common/functions/showEmployeeList.php');?>
				</div>
			</div>
			<?php
				if ($_GET["employee"]){
					$empKey = $_GET["employee"];

					//echo '<form action ="viewEmployee.php?employee='.$empKey.'">';


					echo '<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
						<div class="content-title">
						<h3 class="text-center">'.$employees[$empKey]->firstName." ".$employees[$empKey]->lastName.'
						</h3>
						</div>';

					echo '';
					//Begin First Row
					echo '<div class="row">';
					
					//Employee Information
					echo '<div class="col-lg-6 col-md-6">
						<h4>Employee Information</h4>
						<table class="table table-striped">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="row-label">Employee Status</td>
									<td><input type="" class="form-control" id="empStatus" placeholder="Current Employee"></td>
								</tr>
								<tr>	
									<td class="row-label">First Name</td>
									<td><input type="" class="form-control" id="firstName" placeholder="'.$employees[$empKey]->firstName.'"></td>
								</tr>
								<tr>
									<td class="row-label">Last Name</td>
									<td><input type="" class="form-control" id="lastName" placeholder="'.$employees[$empKey]->lastName.'"></td>
								</tr>
								<tr>
									<td class="row-label">Job Title</td>
									<td><input type="" class="form-control" id="jobTitle" placeholder="'.$employees[$empKey]->jobTitle.'"></td>
								</tr>
								<tr>
									<td class="row-label">Benefits Package</td>
									<td><input type="" class="form-control" id="benefitsPackage" placeholder="'.$employees[$empKey]->benefitsPackage.'"></td>
								</tr>
								<tr>
									<td class="row-label">Pay Rate</td>
									<td><input type="" class="form-control" id="payRate" placeholder="'.$employees[$empKey]->payRate.'"></td>
								</tr>
							</tbody>
						</table>
					</div>';
					
					
					//Payroll Information
					echo '<div class="col-lg-6 col-md-6">
						<h4>Payroll Information</h4>
						<table class="table table-striped">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="row-label">Hours this week</td>
									<td><input type="" class="form-control" id="hoursThisWeek" placeholder="'.$employees[$empKey]->hoursThisWeek.'"></td>
								</tr>
								<tr>
									<td class="row-label">Hours last week</td>
									<td><input type="" class="form-control" id="hoursLastWeek" placeholder="'.$employees[$empKey]->hoursLastWeek.'"></td>
								</tr>
								<tr>
									<td class="row-label">Average hours per week</td>
									<td><input type="" class="form-control" id="averageHours" placeholder="'.$employees[$empKey]->averageHours.'"></td>
								</tr>
								<tr>
									<td class="row-label">Vacation Accrued</td>
									<td><input type="" class="form-control" id="vacationAccrued" placeholder="'.$employees[$empKey]->vacationAccrued.'"></td>
								</tr>
							</tbody>
						</table>
					</div>';
					
					//End first Row
					echo '</div>'; //end <div class="row">
					
					//Begin Second Row
					echo '<div class="row">';
					
					//Setup icons for the forms
					$good = "form-valid glyphicon glyphicon-ok-circle";
					$bad = "form-valid glyphicon glyphicon-remove-circle";

					$formAstatus;
					$formBstatus;
					$formCstatus;
					$formDstatus;

					if ($employees[$empKey]->formA) $formAstatus=$good;
					else $formAstatus=$bad; 

					if ($employees[$empKey]->formB) $formBstatus=$good;
					else $formBstatus=$bad; 

					if ($employees[$empKey]->formC) $formCstatus=$good;
					else $formCstatus=$bad; 

					if ($employees[$empKey]->formD) $formDstatus=$good;
					else $formDstatus=$bad; 


					echo '<div class="col-lg-6 col-md-6">
						<h4>Forms Status</h4>
						<table class="table table-striped">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="row-label">Form A</td>
									<td><span class="'.$formAstatus.'"></span></td>
								</tr>
								<tr>
									<td class="row-label">Form B</td>
									<td><span class="'.$formBstatus.'"></span></td>
								</tr>
								<tr>
									<td class="row-label">Form C</td>
									<td><span class="'.$formCstatus.'"></span></td>
								</tr>
								<tr>
									<td class="row-label">Form D</td>
									<td><span class="'.$formDstatus.'"></span></td>
								</tr>
							</tbody>
						</table>
					</div>';
						
						
					//save button					
					echo '<div class="col-lg-6 col-md-6"><a class="edit-employee-button pull-right btn btn-primary btn-lg" href="viewEmployee.php?employee='.$empKey.'" role="button">Save</a></div>';
					//echo '<div class="col-lg-6 col-md-6"><input type="submit" value="Save"></form>';

					//end second row
					echo '</div>'; //end row


					echo '</div>'; //end <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
				}
			?>

		</div>
	</div>


<!--end body/html-->
<?php include(dirname(__FILE__).'/common/bot.php');?>
