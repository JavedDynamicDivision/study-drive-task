@extends('admin.layouts')

@section('title', 'Edit Registration')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		
        <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Update Course</h4>			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			<div class="row">
				<div class="col">
					<form method="POST" action="{{ route('update.reg', $registration->id) }}" enctype="multipart/form-data">
                       @csrf
					  

                    
                       <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <h5>Select Course <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="course_id"  required="" class="form-control">
                                        <option value="" disabled="">Select Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id }}" {{ $course->id == $registration->course_id ? 'selected' : '' }}>{{ $course->course_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            
                         
                        </div>

                        
                        <div class="col-md-4">
                            
                        </div>
                    </div>
              
                         
                         
                          
                         
            
                       
						
							<div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-info md-5" value="Update">
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