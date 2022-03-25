@extends('admin.layouts')

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
					  <h3 class="widget-user-username">Employee Name: {{$emp->name}}</h3>					  
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="{{ (!empty($emp->first_image)) ? url(asset($emp->first_image)) : url('/upload/no_image.jpg') }}" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						
						<!-- /.col -->
						<div class="col-sm-12 br-1 bl-1">
						  <div class="description-block">
							<h5 class="description-header">Position</h5>
							<span class="description-text">{{ $emp->position }}</span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						
						<!-- /.col -->
					  </div>


                      <div class="row">
                          <div class="card">
                              <div class="card-body">
                                  {{ $emp->description }}
                              </div>
                          </div>
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