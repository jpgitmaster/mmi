@extends('index')
@section('title', 'Crew Change Plan')

@section('content')
<div class="cntnbx">
	<h4>Crew Change Plan</h4>
	<div class="clearfix"></div>
	<div class="row no-gutters" style="margin-top: 10px;">
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

			</div>
		</div>
		<div class="col-lg-3">
			<div class="bx">
				<div class="nptgrp">
					<select required>
	          <option></option>
	          <option>Masters</option>
	          <option>Officers</option>
	          <option>Engineers</option>
	        </select>
	        <label class="nptlbl">
	        	Position <span>*</span>
	        </label>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="fllclndr_lft">
		<div class="row no-gutters">
			<div class="col-lg-12 vslhdr" style="height: 36px; padding-top: 5px;">
				Vessels
			</div>
		</div>
		<div class="clearfix"></div>
		<style>
			.hdrbdy ul li{

			}
		</style>
		<div class="hdrbdy ccp">
			<ul>
				<li>
					<i class="fa fa-ship" style="color: #0e99ac;"></i>
					<span>
						Ten Jin Maru
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #f1a94e;"></i>
					<span>
						King Barley
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #e45641;"></i>
					<span>
						Ototachibana
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #646c70;"></i>
					<span>
						Tenshu Maru
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #e16060;"></i>
					<span>
						Emerald Horizon
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #60e1d1;"></i>
					<span>
						Ultra Lion
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #e16060;"></i>
					<span>
						Emerald Horizon
					</span>
				</li>
				<li>
					<i class="fa fa-ship" style="color: #60e1d1;"></i>
					<span>
						Ultra Lion
					</span>
				</li>
			</ul>
		</div>
	</div>
	<div class="fllclndr_rght">
		<table class="tbl ccp">
			<thead>
				<tr>
					<th class="thd">Off-signer Crew</th>
					<th class="thd">Position</th>
					<th class="thd">Contract Expiry</th>
					<th class="thd">On-signer Crew</th>
					<th class="thd">Joining Port</th>
					<th class="thd">Preview</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="#" data-toggle="modal" data-target="#viewCCPmodal">
							Bongcaron, Glenn V.
						</a>
					</td>
					<td>Master</td>
					<td>19 April 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Arroyo Jack Allan C.
						</a>
					</td>
					<td>Chief Officer</td>
					<td>25 February 2018</td>
					<td><a href="">Costelo, Abner L.</a></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Baconaje, Denmark A.
						</a>
					</td>
					<td>Second Officer</td>
					<td>08 October 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Lacambra, Uzziel M.
						</a>
					</td>
					<td>Third Officer</td>
					<td>25 May 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Inamarga, Isagani O.
						</a>
					</td>
					<td>Chief Engineer</td>
					<td>05 September 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Morales, Levi L.
						</a>
					</td>
					<td>Chief Engineer</td>
					<td>25 February 2018</td>
					<td><a href="">Inamarga Isagani O.</a></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Gutlay, Reynaldo L.
						</a>
					</td>
					<td>2nd Engineer</td>
					<td>08 July 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
				<tr>
					<td>
						<a href="">
							Castro, Iriondo E.
						</a>
					</td>
					<td>3rd Engineer</td>
					<td>25 May 2018</td>
					<td></td>
					<td></td>
					<td>
						<button class="btn btn-success">
							<i class="fa fa-address-card"></i>
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="clearfix"></div>
	<div class="row no-gutters">
		<div class="col-lg-6">

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
</div>
<div class="modal fade" id="viewCCPmodal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Selected Crew</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 10px;">
      	<ul class="ccpdtls">
      		<li style="width: 60%;">
      			<strong>Disembarking Crew</strong>
      			<span>BONGCARON, GLENN V.</span>
      		</li>
      		<li style="width: 20%;">
      			<strong>Position</strong>
      			<span>Master</span>
      		</li>
      		<li style="width: 20%;">
      			<strong>Contract Expiry</strong>
      			<span>19 April 2018</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Embarking Crew</strong>
      			<span>&nbsp;</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Ex-Vessel</strong>
      			<span>&nbsp;</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Estimated Time of Departure</strong>
      			<span>&nbsp;</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Port of Embarkation</strong>
      			<span>&nbsp;</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Remarks</strong>
      			<span>
      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt sed, sapiente provident ea incidunt id error, eos! Reiciendis itaque repudiandae, sit, molestiae officiis aliquam eveniet fugit recusandae a fugiat sequi.
      			</span>
      		</li>
      		<li style="width: 50%;">
      			<strong>Comment</strong>
      			<span>
      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum eaque neque mollitia temporibus ipsam! Minus veniam, dignissimos consequatur magnam unde labore, asperiores soluta aut dolore ipsa corporis beatae quisquam mollitia.
      			</span>
      		</li>
      	</ul>
        <br><br>
      </div>
    </div>
  </div>
</div>
@endsection