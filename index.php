<!--VERY IMPORTANT-->
<?php include(dirname(__FILE__).'/common/functions/setupEverything.php');?>
<!--xml header-->
<?php include(dirname(__FILE__).'/common/xmlhead.php');?>
<title>Employee Manager</title>
<!--end head-->
<?php include(dirname(__FILE__).'/common/top.php');?>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3">
				<div class="employee-sidebar">
					<?php include(dirname(__FILE__).'/common/functions/showEmployeeList.php');?>
				</div>
			</div>

			<div class="col-lg-9 col-md-9">
				<div class="btn-group btn-group-justified add-employee">
					<div class="btn-group">
						<!--<a class="btn btn-primary" href="addEmployee.php" role="button">Add Employee</a-->
						<button type="button" data-toggle="modal" data-target="#addEmployee" class="btn btn-primary">Add employee</button>
				</div>
				<div class="modal fade" id="addEmployee">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title">Add employee</h4>
				      </div>
				      <div class="modal-body">
						<form role="form">
						  <div class="form-group">
						    <label for="">First Name</label>
						    <input type="email" class="form-control" id="firstName" placeholder="Enter first name">
						  </div>
						  <div class="form-group">
						    <label for="">Last Name</label>
						    <input type="password" class="form-control" id="lastName" placeholder="Enter last name">
						  </div>
						  <div class="form-group">
						    <label for="">Job Title</label>
						    <input type="password" class="form-control" id="lastName" placeholder="Enter job title">
						  </div>
						  <div class="form-group">
						    <label for="">Benefits Package</label>
						    <input type="password" class="form-control" id="lastName" placeholder="Enter benefits package">
						  </div>
						  <div class="form-group">
						    <label for="">Pay Rate</label>
						    <input type="password" class="form-control" id="lastName" placeholder="$xx/hr or $xx/yr">
						  </div>
						  <div class="form-group">
						    <label for="">Email</label>
						    <input type="password" class="form-control" id="lastName" placeholder="Enter email">
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Form A
						    </label>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Form B
						    </label>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Form B
						    </label>
						  </div>
						  <div class="checkbox">
						    <label>
						      <input type="checkbox"> Form B
						    </label>
						  </div>  
						</form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
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
<?php include(dirname(__FILE__).'/common/bot.php');?>
