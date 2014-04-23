<!--xml header-->
<?php include('./common/xmlhead.php');?>
<title>Test</title>
<!--end head-->
<?php include('./common/top.php');?>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="employee-sidebar">
					<?php include('./common/employee_list.php');?>
				</div>
			</div>

			<div class="col-lg-9 col-md-9">
				
				<table class="table table-bordered">
					<thead>
						<h3>Recent Activity</h3>
					</thead>
					<tbody>
						<tr>
							<td class="row-label">4/14/14</td>
							<td>4:55 am</td>
							<td>Nothing has happened yet.</td>
						</tr>
						<tr>
							<td></td>
							<td>4:54 am</td>
							<td>Something will happen.</td>
						</tr>
						<tr>
							<td class="row-label">4/13/14</td>
							<td>9:00 pm</td>
							<td>One day...</td>
						</tr>
					</tbody>
				</table>
				
				
				<!--
				<div class="content-title">
					<h3 class="text-center">John Alabaster</h3>
				</div>
				<div class="btn-group btn-group-justified add-employee">
				  <div class="btn-group">
				    <button type="button" class="btn btn-primary">Add employee</button>
				  </div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h4>Employee Information</h4>
						<table class="table table-striped">
							<thead>
							</thead>
							<tbody>
								<tr>
									<td class="row-label">First Name</td>
									<td>John</td>
								</tr>
								<tr>
									<td class="row-label">Last Name</td>
									<td>Alabaster</td>
								</tr>
								<tr>
									<td class="row-label">Job Title</td>
									<td>Software Developer</td>
								</tr>
								<tr>
									<td class="row-label">Benefits Package</td>
									<td>Package A</td>
								</tr>
								<tr>
									<td class="row-label">Pay Rate</td>
									<td>$20 per hour</td>
								</tr>
								<tr>
									<td class="row-label">Vacation Accrued</td>
									<td>25 hours</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-lg-6 col-md-6">
						
					</div>
				</div>
				-->
			</div>
		</div>
	</div>


<!--end body/html-->
<?php include('./common/bot.php');?>
