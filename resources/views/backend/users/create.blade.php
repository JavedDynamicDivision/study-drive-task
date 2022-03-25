@extends('admin.layouts')

@section('title', 'Add New Student')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		
        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Student</h4>			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{ route('user.store') }}">
						@csrf
					  <div class="row">
						<div class="col-12">

                        <div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<h5>Student Name <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="text" name="name" class="form-control" required=""></div>
									
									</div>
														
							</div>


							<div class="col-md-4">
								<div class="form-group">
									<h5>Student Email <span class="text-danger">*</span></h5>
									<div class="controls">
										<input type="email" name="email" class="form-control" required=""></div>
									
								</div>	
							</div>


							<div class="col-md-4">
								<div class="form-group">
								<h5>Password <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="password" name="password" class="form-control" required=""></div>
								
								</div>	
							</div>
						</div>



					

                       
						
							
						</div>
						
					  </div>
					
						<div class="text-xs-right">
							<input type="submit" class="btn btn-rounded btn-info md-5" value="Submit">
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