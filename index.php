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
							<td class="row-label" rowspan="2">4/14/14</td>
							<td>4:55 am</td>
							<td>Nothing has happened yet.</td>
						</tr>
						<tr>
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
				
			</div>
		</div>
	</div>


<!--end body/html-->
<?php include('./common/bot.php');?>
