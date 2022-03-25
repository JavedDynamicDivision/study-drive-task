@extends('admin.layouts')


@section('title', 'Course List')
@section('content')
<div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
			

			

		

			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
						
				  <h3 class="box-title">Courses List</h3>
				  @if (Auth::user()->role == 'Admin')
                  <a href="{{ route('create.courses') }}" class="btn btn-rounded btn-success mb-5 float-right">Add New Course</a>
				  @endif
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th>Course Name</th>
								<th>Capacity</th>
								<th>Registered Students</th>
								<th>Status</th>
								@if (Auth::user()->role == 'Admin')
								<th width="30%">Action</th>
								@endif
							</tr>
						</thead>
						<tbody>
							@php($i=1)
                            @foreach ($courses as $course)                                                            
							<tr>
								<td>{{$i++;}}</td>
								<td>{{$course->course_name}}</td>  
								<td>{{ $course->capacity }}</td>    
								<td>{{ $course->reg_student }}</td>      
								<td>
									@if ($course->capacity == $course->reg_student)
										<span class="text-danger">Unavailable</span>
									@else
										<span class="text-success">Available</span>
									@endif
								</td> 
								@if (Auth::user()->role == 'Admin')                   
								<td>
                                    <a href="{{ route('edit.course', $course->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete.course', $course->id) }}" class="btn btn-danger" onclick="return confirm('Are you Sure?')">Delete</a>
                                </td>
								@endif
							</tr>
                            @endforeach
							
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			 
			  <!-- /.box -->          
			</div>
			<!-- /.col -->
		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  
	  </div>
  </div>
@endsection