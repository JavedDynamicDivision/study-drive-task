@extends('admin.layouts')

@section('title', 'Create New Course')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		
        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Create New Course</h4>			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			<div class="row">
				<div class="col">
					<form method="POST" action="{{ route('store.course') }}" enctype="multipart/form-data">
						@csrf
					  
					

						
							<div class="row">

								<div class="col-md-4">
									<div class="form-group">
										<label for="exampleFormControlInput1">Course Name</label>
										<input type="text" name="course_name" class="form-control" >													
										@error('course_name')
										<span class="text-danger ">{{$message}}</span>
									@enderror
									</div>
	
								</div>

								<div class="col-md-4">
									
	
								</div>
	
								
								<div class="col-md-4">
									
								</div>
							</div>
	
							
								 
							
						
							<div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info md-5" value="Save Course">
							</div>
						
			</div>
					
						
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

  

@endsection