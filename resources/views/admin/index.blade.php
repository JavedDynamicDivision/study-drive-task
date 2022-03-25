@php
	$total_course = DB::table('courses')->count('id');
	$total_student = DB::table('users')->count('id');
	$total_reg = DB::table('registrations')->count('id');
@endphp
@extends('admin.layouts')

@section('title', 'Home')
@section('content')

<div class="content-wrapper">
	<div class="container-full">

	  <!-- Main content -->
	  <section class="content">
		  <div class="row">
			  <div class="col-xl-4 col-6">
				  <div class="box overflow-hidden pull-up">
					  <div class="box-body">							
						  <div class="icon bg-primary-light rounded w-60 h-60">								
						  </div>
						  <div>
							  <p class="text-mute mt-20 mb-0 font-size-16 text-center">Total Courses</p>
							  <h3 class="text-white mb-0 font-weight-500 text-center">{{ $total_course }} </h3>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-xl-4 col-6">
				  <div class="box overflow-hidden pull-up">
					  <div class="box-body">							
						  <div class="icon bg-warning-light rounded w-60 h-60">
						  </div>
						  <div>
							  <p class="text-mute mt-20 mb-0 font-size-16 text-center">Total Students</p>
							  <h3 class="text-white mb-0 font-weight-500 text-center">{{ $total_student }}</h3>
						  </div>
					  </div>
				  </div>
			  </div>

			  <div class="col-xl-4 col-6">
				<div class="box overflow-hidden pull-up">
					<div class="box-body">							
						<div class="icon bg-danger-light rounded w-60 h-60">
						</div>
						<div>
							<p class="text-mute mt-20 mb-0 font-size-16 text-center">Register Students</p>
							<h3 class="text-white mb-0 font-weight-500 text-center">{{ $total_reg }} </h3>
						</div>
					</div>
				</div>
			</div>


			
			  

			  

			  
		  
		  
		  </div>
	  </section>
	  <!-- /.content -->
	</div>
</div>
@endsection