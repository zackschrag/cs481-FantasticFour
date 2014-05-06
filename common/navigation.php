<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-lg-1 col-md-1 col-sm-1">
					<a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span></a>
				</div>
				<div class="col-lg-10 col-md-10 col-sm-10">
				<div class="bs-example">
				    <ul class="nav nav-pills">
				      <li class="dropdown nav-search-bar">
				        <button class="btn btn-primary" id="search-by" role="button" data-toggle="dropdown" href="#">Search by <b class="caret"></b></button>
				        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="">
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Employee</a></li>
				          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Form</a></li>
				        </ul>
				      </li>
				      <li class="input-group nav-search-bar" id="nav-search-box">
				        <input type="text" class="form-control" placeholder="Search by employee or form">
				      </li>
				      <li class="dropdown nav-search-button">
				        	<span class="input-group-btn">
					        	<button class="btn btn-default search-icon" data-toggle="modal" data-target="#formSearch" type="button"><span class="glyphicon glyphicon-search"></span></button>
						   	</span>
				      </li>
				    </ul> <!-- /pills -->
				  </div>
					<div class="modal fade" id="formSearch">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title">Search Results</h4>
					      </div>
					      <div class="modal-body">
							<div class="panel-group" id="accordion">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							          W-2
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse in">
							      <div class="panel-body">
									<table class="table table-striped">
										<thead>
										</thead>
										<tbody>
											<tr>
												<td class="row-label">Alabastser, John</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Brickman, Bill</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Fullman, Norton</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Hawking, Stephen</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
										</tbody>
									</table>
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							          I-9
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse">
							      <div class="panel-body">
							        <table class="table table-striped">
										<thead>
										</thead>
										<tbody>
											<tr>
												<td class="row-label">Employee A</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee B</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee C</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee D</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
										</tbody>
									</table>
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							          NDA
							        </a>
							      </h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse">
							      <div class="panel-body">
							        <table class="table table-striped">
										<thead>
										</thead>
										<tbody>
											<tr>
												<td class="row-label">Employee A</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee B</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee C</td>
												<td><span class="glyphicon glyphicon-remove-circle"></span></td>
											</tr>
											<tr>
												<td class="row-label">Employee D</td>
												<td><span class="glyphicon glyphicon-ok-circle"></span></td>
											</tr>
										</tbody>
									</table>
							      </div>
							    </div>
							  </div>
							</div>
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
					      </div>
					    </div><!-- /.modal-content -->
					  </div><!-- /.modal-dialog -->
					</div><!-- /.modal -->
				</div><!-- /.col-lg-10 -->
				<div class="col-lg-1 col-md-1 col-sm-1">
					<a class="navbar-brand" href="./html/login.html"><span class="glyphicon glyphicon-off"></span></a>
				</div>
			</div><!-- /.row -->
	    </div>
	</nav>
