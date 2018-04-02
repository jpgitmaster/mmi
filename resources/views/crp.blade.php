@extends('index')
@section('title', 'Crew Rotation Program')

@section('content')
<div class="cntnbx">
	<h4>Crew Rotation Program</h4>
	<br>
	<div class="clearfix"></div>
	<div class="row no-gutters">
		<div class="col-lg-4">
			<div class="bx">
				<div id="search_data" class="btn-group">
		      <div class="input-group">
		        <button type="button" class="input-group-addon">Search</button>
		        <input type="text" class="form-control" placeholder="Keyword...">
		        <button type="button" class="input-group-addon dropdown-toggle" data-toggle="dropdown">
		          All &nbsp;
		        </button>
		        <div class="dropdown-menu">
		        	<div class="arrow"></div>
		          <a class="dropdown-item" href="#">Vessel</a>
		          <a class="dropdown-item" href="#">Master</a>
		          <a class="dropdown-item" href="#">On-vacation</a>
		        </div>
		      </div>
		    </div>
			</div>
		</div>
		<div class="col-lg-2"></div>
		<div class="col-lg-3">
			<div class="bx">
				<div class="nptgrp">
					<select required>
	          <option>Master</option>
	        </select>
	        <label class="nptlbl">
	        	Rank <span>*</span>
	        </label>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="bx">
				<div class="nptgrp">
					<select required>
	          <option></option>
	          <option>Ten Jin Maru</option>
	          <option>King Barley</option>
	          <option>Ototachibana</option>
	          <option>Tenshu Maru</option>
	          <option>Emerald Horizon</option>
	          <option>Ultra Lion</option>
	        </select>
	        <label class="nptlbl">
	        	Vessels <span>*</span>
	        </label>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="fllclndr_lft">
		<div class="hdrlfttl">
		</div>
		<div class="clearfix"></div>
		<div class="row no-gutters">
			<div class="col-lg-12 vslhdr">
				Vessels
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="hdrbdy">
			<ul>
				<li>
					<i class="fa fa-ship" style="color: #0e99ac;"></i>
					Ten Jin Maru
				</li>
				<li>
					<i class="fa fa-ship" style="color: #f1a94e;"></i>
					King Barley
				</li>
				<li>
					<i class="fa fa-ship" style="color: #e45641;"></i>
					Ototachibana
				</li>
				<li>
					<i class="fa fa-ship" style="color: #646c70;"></i>
					Tenshu Maru
				</li>
				<li>
					<i class="fa fa-ship" style="color: #e16060;"></i>
					Emerald Horizon
				</li>
				<li>
					<i class="fa fa-ship" style="color: #60e1d1;"></i>
					Ultra Lion
				</li>
			</ul>
		</div>
	</div>
	<div class="fllclndr_rght">
		<table class="tbl">
			<tbody>
				<thead>
					<tr>
						<th class="thd" colspan="12">
							<h5>2018</h5>
						</th>
						<th class="thd" colspan="12">
							<h5>2019</h5>
						</th>
						<th class="thd" colspan="12">
							<h5>2020</h5>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="width: 1%;"><strong>1</strong></td>
						<td style="width: 1%;"><strong>2</strong></td>
						<td style="width: 1%;"><strong>3</strong></td>
						<td style="width: 1%;"><strong>4</strong></td>
						<td style="width: 1%;"><strong>5</strong></td>
						<td style="width: 1%;"><strong>6</strong></td>
						<td style="width: 1%;"><strong>7</strong></td>
						<td style="width: 1%;"><strong>8</strong></td>
						<td style="width: 1%;"><strong>9</strong></td>
						<td style="width: 1%;"><strong>10</strong></td>
						<td style="width: 1%;"><strong>11</strong></td>
						<td style="width: 1%;"><strong>12</strong></td>
						<td style="width: 1%;"><strong>1</strong></td>
						<td style="width: 1%;"><strong>2</strong></td>
						<td style="width: 1%;"><strong>3</strong></td>
						<td style="width: 1%;"><strong>4</strong></td>
						<td style="width: 1%;"><strong>5</strong></td>
						<td style="width: 1%;"><strong>6</strong></td>
						<td style="width: 1%;"><strong>7</strong></td>
						<td style="width: 1%;"><strong>8</strong></td>
						<td style="width: 1%;"><strong>9</strong></td>
						<td style="width: 1%;"><strong>10</strong></td>
						<td style="width: 1%;"><strong>11</strong></td>
						<td style="width: 1%;"><strong>12</strong></td>
						<td style="width: 1%;"><strong>1</strong></td>
						<td style="width: 1%;"><strong>2</strong></td>
						<td style="width: 1%;"><strong>3</strong></td>
						<td style="width: 1%;"><strong>4</strong></td>
						<td style="width: 1%;"><strong>5</strong></td>
						<td style="width: 1%;"><strong>6</strong></td>
						<td style="width: 1%;"><strong>7</strong></td>
						<td style="width: 1%;"><strong>8</strong></td>
						<td style="width: 1%;"><strong>9</strong></td>
						<td style="width: 1%;"><strong>10</strong></td>
						<td style="width: 1%;"><strong>11</strong></td>
						<td style="width: 1%;"><strong>12</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;" colspan="8">
							<div class="am-flip-x popcntnr">
              	<div class="popover bs-popover-top">
							    <div class="arrow"></div>
							    <div class="popover-body">
							    	<i class="fa fa-times-circle"></i>
							      <i class="fa fa-user-circle"></i>
							      <h4>Suyko, Rafael T.</h4>
							      <span><strong>Started:</strong> January 15, 2018</span>
							      <span><strong>Ended:</strong> August 20, 2018</span>
							      <div class="clearfix"></div>
							      <div class="row no-gutters btns">
							      	<div class="col-lg-6">
							      		<div class="bx">
							      			<button class="btn btn-primary" style="" data-toggle="modal" data-target="#addCrewModal">
										      	Add Crew
										      	<i class="fa fa-user-plus"></i>
										      </button>
							      		</div>
							      	</div>
							      	<div class="col-lg-6">
							      		<div class="bx">
								      		<button class="btn btn-success" data-toggle="modal" data-target="#viewCrewModal">
										      	View All Crews
										      	<i class="fa fa-users"></i>
										      </button>
									      </div>
							      	</div>
							      </div>
							      <div class="clearfix"></div>
							      
							    </div>
								</div>
              </div>
							<strong class="tbdy td2018">Suyko, Rafael T. (43)</strong>
						</td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;" colspan="10">
							<strong class="tbdy td2019">Manuza, Mario A. (46)</strong>
						</td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;" colspan="8"><strong class="tbdy td2020">Rosal, Wendel H. (39)</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;" colspan="8"><strong class="tbdy td2021">Causing, Loren P. (41)</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;" colspan="9"><strong class="tbdy td2022">Ramos, Rowell L. (42)</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
					</tr>
					<tr>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;"><strong>&nbsp;</strong></td>
						<td style="width: 1%;" colspan="12"><strong class="tbdy td2023">Dela Cruz, Leo D. (46)</strong></td>
					</tr>
				</tbody>
			</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
	<div class="row no-gutters">
		<div class="col-lg-6">
			<strong>Vessels Legend:</strong>
			<ul class="row no-gutters lgnd">
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					Ten Jin Maru
				</li>
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					King Barley
				</li>
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					Ototachibana
				</li>
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					Tenshu Maru
				</li>
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					Emerald Horizon
				</li>
				<li class="col-lg-4">
					<i class="fa fa-ship"></i>
					Ultra Lion
				</li>
			</ul>
		</div>
		<div class="col-lg-6">
			<nav>
			  <ul class="pgnt pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			        <span class="sr-only">Previous</span>
			      </a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link active" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">4</a></li>
			    <li class="page-item"><a class="page-link" href="#">5</a></li>
			    <li class="page-item"><a class="page-link" href="#">6</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			        <span class="sr-only">Next</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>
	<div class="clearfix"></div><br><br>
</div>
<div class="modal fade" id="addCrewModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
        <h5 class="modal-title">Add Crew</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    	<div class="modal-body">
      	<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item">
				    <a class="nav-link active" data-toggle="tab" href="#vacation">On-vacation</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" data-toggle="tab" href="#board">On-Board</a>
				  </li>
				</ul>
				<div class="tab-content">
				  <div class="tab-pane fade show active" id="vacation">
				  	<p style="font-size: 13px; margin: 0 0 5px; float: right;">You have total of <strong style="color: #0077c0;">9 crews</strong> on-vacation</p>
				  	<div class="clearfix"></div>
				  	<div class="lstcrews row no-gutters">
				  		<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
			        				<div class="am-flip-x popcntnr">
				              	<div class="popover bs-popover-top">
											    <div class="arrow"></div>
											    <div class="popover-body" style="padding: 10px 10px 5px;">
											    	Are you sure you want to add this in your crew?
											      <div class="clearfix"></div>
											      <div class="row no-gutters" style="width: 160px; margin: 5px auto 0; text-align: center;">
											      	<div class="col-lg-6">
											      		<div class="bx">
											      			<button class="btn btn-success" style="width: 100%;">Yes</button>
											      		</div>
											      	</div>
											      	<div class="col-lg-6">
											      		<div class="bx">
											      			<button class="btn btn-danger" style="width: 100%;">No</button>
											      		</div>
											      	</div>
											      </div>
											    </div>
												</div>
				              </div>
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        </div>
				  </div>
				  <div class="tab-pane fade" id="board">
				  	<div class="lstcrews row no-gutters">
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        	<div class="col-lg-4">
		        		<div class="crws">
			        		<div class="icn">
			        			<i class="fa fa-user"></i>
			        		</div>
			        		<div class="dtls">
			        			<h4>Name</h4>
			        			<p><strong>Position:</strong> Crew Position</p>
			        			<div class="btns">
				        			<button class="btn btn-primary">
				        				Add Crew <i class="fa fa-user-plus"></i>
				        			</button>
				        		</div>
			        		</div>
			        	</div>
		        	</div>
		        </div>
				  </div>
				</div>
        
        <br><br>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="viewCrewModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View All Crews</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<p style="font-size: 13px; margin: 0 0 5px; float: right;">You have total of <strong style="color: #0077c0;">9 crews</strong></p>
		  	<div class="clearfix"></div>
		  	<div class="lstcrews row no-gutters">
		  		<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
        				<div class="am-flip-x popcntnr">
	              	<div class="popover bs-popover-top">
								    <div class="arrow"></div>
								    <div class="popover-body" style="padding: 5px 10px;">
								    	Are you sure you want to remove this in your crew?
								      <div class="clearfix"></div>
								      <div class="row no-gutters" style="width: 160px; margin: 5px auto 0; text-align: center;">
								      	<div class="col-lg-6">
								      		<div class="bx">
								      			<button class="btn btn-success" style="width: 100%;">Yes</button>
								      		</div>
								      	</div>
								      	<div class="col-lg-6">
								      		<div class="bx">
								      			<button class="btn btn-danger" style="width: 100%;">No</button>
								      		</div>
								      	</div>
								      </div>
								    </div>
									</div>
	              </div>
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        	<div class="col-lg-4">
        		<div class="crws">
        			<div class="btns rmv">
	              <i class="fa fa-times-circle"></i>
	        		</div>
	        		<div class="icn">
	        			<i class="fa fa-user"></i>
	        		</div>
	        		<div class="dtls">
	        			<h4>Name</h4>
	        			<p><strong>Position:</strong> Crew Position</p>
	        		</div>
	        	</div>
        	</div>
        </div>
        <br><br>
      </div>
    </div>
  </div>
</div>
@endsection