@extends('admin.layouts')
@section('title', 'Update Profile')
@section('content')


<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			

			

		

			<div class="col-12">
            <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black">
					  <h3 class="widget-user-username">Student Name: {{$user->name}}</h3>					  
                      <a href="{{ route('profile.edit') }}" class="btn btn-rounded btn-success mb-5 float-right">Edit Profile</a>    
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="{{ (!empty($user->image)) ? url('upload/user_profile/'.$user->image) : url('/upload/no_image.jpg') }}" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header"></h5>
							<span class="description-text"></span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Email</h5>
							<span class="description-text">{{$user->email}}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header"></h5>
							<span class="description-text"></span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>			        
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
</div>

@endsection