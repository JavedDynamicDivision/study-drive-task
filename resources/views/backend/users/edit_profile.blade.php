@extends('admin.layouts')

@section('title', 'Edit Profile')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="content-wrapper">
	  <div class="container-full">
		
        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Profile</h4>			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('profile.store') }}" enctype="multipart/form-data" novalidate>
						@csrf
					  <div class="row">
						<div class="col-12">

                        <div class="row">
							<div class="col-md-6">
								<div class="form-group">
								<h5>User Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" value="{{ $user->email }}" name="email" class="form-control" required=""></div>
								
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<h5>User Name <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" value="{{ $user->name }}" name="name" class="form-control" required=""></div>
								
							</div>								
							</div>
						</div>


						
						  <div class="row">
							

							<div class="col-md-6">
								<div class="form-group">
								<h5>Profile Image <span class="text-danger">*</span></h5>
								<div class="controls">
								<input id="image" type="file" name="image" class="form-control" ></div>
								
								</div>
								
								
								
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<img id="showImage" src="{{ (!empty($user->image)) ? url('upload/user_profile/'.$user->image) : url('/upload/no_image.jpg') }}" style="width: 100px; height:100px; border:1px solid black;">
									</div>								
									</div>
							</div>
							
						</div>
                       													
						</div>
						
					  </div>
					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info md-5" value="Update Profile">
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
	  
	  </div>
  </div>

  <!--JavaScript Code for Showing Current Select Image Before Uploding-->
  <script type="text/javascript">
		$(document).ready(function(){
			$('#image').change(function(e){
				var reader = new FileReader();
				reader.onload = function(e){
					$('#showImage').attr('src', e.target.result);					
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
  </script>
@endsection
