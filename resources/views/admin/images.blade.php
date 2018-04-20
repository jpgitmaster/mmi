@extends('admin.index_admin')
@section('title', 'Images')

@section('admin_content')
<div class="cntnbx">
	<h4 class="ttl">Images</h4>
	<div class="card">
  	<div class="card-header">
  		{{-- <button class="btn btn-primary" type="button">
		  	Add Sliding Banner &nbsp;&nbsp; 
		  	<i class="fa fa-plus"></i>
			</button> --}}
			<div class="fileUpload btn btn-primary">
      	Add Sliding Banner &nbsp;&nbsp; <i class="fa fa-plus"></i> <input type="file" class="upload" file-input="files">
      </div>
			<ul class="nav nav-tabs card-header-tabs">
			  <li class="nav-item">
			    <a class="nav-link active" data-toggle="tab" href="#banners">Sliding Banners</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" data-toggle="tab" href="#logos">Logos</a>
			  </li>
			</ul>
  	</div>
  	<div class="card-body">
  		<div class="tab-content">
			  <div class="tab-pane fade show active" id="banners">
			  	<div class="accordion" id="accordion">
					  <div class="card">
					    <div class="card-header">
					      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne">
				          Banner 1
				        </button>
				        <button type="button" class="btn btn-danger">
				        	<i class="fa fa-remove"></i>
				        </button>
				        <button type="button" class="btn btn-primary">
				        	<i class="fa fa-pencil"></i>
				        </button>
					    </div>

					    <div id="collapseOne" class="collapse show" data-parent="#accordion">
					      <div class="card-body">
					        <div class="row no-gutters">
					      		<div class="col-lg-4">
					      			<div style="padding-right: 15px; font-size: 14px;">
					      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis tempore voluptatibus perferendis, labore praesentium ipsum voluptatem earum at repellendus pariatur nulla molestiae unde debitis dolor aspernatur maxime rerum ad eaque?
					      			</div>
					      		</div>
					      		<div class="col-lg-8">
					      			<img class="w-100" src="{{ URL::asset('img/slider1.jpg') }}">
					      		</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header">
					      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo">
				          Banner 2
				        </button>
				        <button type="button" class="btn btn-danger">
				        	<i class="fa fa-remove"></i>
				        </button>
				        <button type="button" class="btn btn-primary">
				        	<i class="fa fa-pencil"></i>
				        </button>
					    </div>
					    <div id="collapseTwo" class="collapse" data-parent="#accordion">
					      <div class="card-body">
					        <div class="row no-gutters">
					      		<div class="col-lg-4">
					      			<div style="padding-right: 15px; font-size: 14px;">
					      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente in sed voluptatem nostrum, accusantium, dolorum. Facilis, accusamus, nihil qui ea eaque porro veniam beatae et! Et debitis dolorum laborum! Praesentium.
					      			</div>
					      		</div>
					      		<div class="col-lg-8">
					      			<img class="w-100" src="{{ URL::asset('img/slider2.jpg') }}">
					      		</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header">
					      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree">
				          Banner 3
				        </button>
				        <button type="button" class="btn btn-danger">
				        	<i class="fa fa-remove"></i>
				        </button>
				        <button type="button" class="btn btn-primary">
				        	<i class="fa fa-pencil"></i>
				        </button>
					    </div>
					    <div id="collapseThree" class="collapse" data-parent="#accordion">
					      <div class="card-body">
					      	<div class="row no-gutters">
					      		<div class="col-lg-4">
					      			<div style="padding-right: 15px; font-size: 14px;">
					      				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam doloribus esse eius distinctio tempora non porro ex ea adipisci explicabo, dolor laudantium voluptatem suscipit quia possimus, quisquam itaque, eaque, a!
					      			</div>
					      		</div>
					      		<div class="col-lg-8">
					      			<img class="w-100" src="{{ URL::asset('img/slider3.jpg') }}">
					      		</div>
					      	</div>
					      </div>
					    </div>
					  </div>
					</div>
			  </div>
			  <div class="tab-pane fade" id="logos">
			  	<div class="card-deck">
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 1</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 2</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 3</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					</div>
					<div class="clearfix"></div><br>
					<div class="card-deck">
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 1</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 2</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					  <div class="card">
					    <i class="fa fa-image text-center" style="color: #f0f0f0; font-size: 16vw;"></i>
					    <div class="card-body" style="padding: 0 20px;">
					      <h5 class="card-title">Logo 3</h5>
					    </div>
					    <div class="card-footer">
					      <small class="text-muted">Last updated 3 mins ago</small>
					    </div>
					  </div>
					</div>
			  </div>
			</div>
  	</div>
  </div>
	<div class="clearfix"></div>
	<br><br>
</div>
@endsection