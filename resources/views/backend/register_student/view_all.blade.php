@extends('admin.layouts')


@section('title', 'Registration List')
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
				<!--Here is Condition for Admin and Student to Their Text Regarding Registered Course-->
				@if (Auth::user()->role == 'Admin')
					<h3 class="box-title">Student Registered for Coruses</h3>
				@else  
					<h3 class="box-title">My Courses</h3>
				@endif
                  <a href="{{ route('create.reg') }}" class="btn btn-rounded btn-success mb-5 float-right">Apply for new course</a>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="5%">#</th>
								<th>Registraton-On</th>
								<th>Student Name</th>
								<th>Course Name</th>
								<th width="30%">Action</th>
							</tr>
						</thead>
						<tbody>
							@php($i=1)
                            @foreach ($register_students as $student)                                                            
							<tr>
								<td>{{$i++;}}</td>
								<td>{{ $student->created_at->diffForHumans() }}</td>
								<td>{{$student->user->name}}</td>  
								<td>{{ $student->course->course_name }}</td>                              
								<td>
                                    <a href="{{ route('edit.reg', $student->id) }}" class="btn btn-info">Edit</a>
                                    <a href="{{ route('delete.reg', $student->id) }}" class="btn btn-danger" onclick="return confirm('Are you Sure?')">Delete</a>
                                </td>
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